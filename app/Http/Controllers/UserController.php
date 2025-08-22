<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
            'role' => 'required|in:superadmin,admin,faculty,esahayta,techsupport',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->show_password = $request->password; // Store the plain password if needed
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->is_public = 1; // Assuming you want to set this to 1 by default
        $user->save();

    return redirect()->route(currentUser()->role . '.user.list')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::all();
        return view('admin.user_list', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user_add', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:4',
            'role' => 'required|in:superadmin,admin,faculty,esahayta,techsupport',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->show_password = $request->password; // Store the plain password if needed
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->save();

        return redirect()->route(currentUser()->role . '.user.list')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route(currentUser()->role . '.user.list')->with('success', 'User deleted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->is_public = $user->is_public === '1' ? '0' : '1';
        $user->save();

        return redirect()->route(currentUser()->role . '.user.list')->with('success', 'User status updated successfully!');
    }

    public function loginauth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'login.password' => 'required|min:5',
        ]);
        $email = $request['email'];
        $password = $request->login['password'];

        // Using User Model for multiple roles
        // $roles = ['superadmin', 'admin', 'esahayta', 'faculty', 'techsupport'];
        $user = User::where(['email' => $email, 'is_public' => '1'])->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid Credentials or Inactive User!');
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('error', 'Invalid Password!');
        }

        // Use guard based on role
        $guard = $user->role;
        Auth::guard($guard)->login($user);

        // Update last_login timestamp
        $user->last_login = now();
        $user->save();

        // Redirect based on role
        switch ($user->role) {
            case 'superadmin':
                return redirect()->route('superadmin.dashboard')->with('success', 'Login Successful!');
            case 'admin':
                return redirect()->route('admin.dashboard')->with('success', 'Login Successful!');
            case 'faculty':
                return redirect()->route('faculty.dashboard')->with('success', 'Login Successful!');
            case 'esahayta':
                return redirect()->route('esahayta.dashboard')->with('success', 'Login Successful!');
            case 'techsupport':
                return redirect()->route('techsupport.dashboard')->with('success', 'Login Successful!');
            default:
                Auth::guard($guard)->logout();
                return redirect()->back()->with('error', 'Role not allowed!');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        $guards = ['superadmin', 'admin', 'faculty', 'esahayta', 'techsupport'];
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
            }
        }
        return redirect()->route('admin.login')->with('success', 'Logout Successful..!!');
    }
}
