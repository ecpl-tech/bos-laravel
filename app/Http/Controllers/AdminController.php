<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function loginauth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'login.password' => 'required|min:5',
        ]);
        $email = $request['email'];
        $password = $request->login['password'];

        // return $request;

        $user = Admin::where(['email' => $email, 'status' => '1', 'role' => 'admin'])->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid Credentials..!!');
        } else {
            if ($user && Hash::check($password, $user->password)) {
                Auth::guard('admin')->login($user);
                return redirect()->route('admin.dashboard')->with('success', 'Login Successful..!!');
            } else {
                return redirect()->back()->with('error', 'Invalid Credentials..!!');
            }
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout Successful..!!');
    }
}
