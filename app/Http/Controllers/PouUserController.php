<?php

namespace App\Http\Controllers;

use App\Models\PouUser;
use Illuminate\Http\Request;

class PouUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = PouUser::all();
        return view('admin.pou_user_index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pou_user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'region'   => 'required',
            'email'    => 'required|email|unique:pou_user,email',
            'password' => 'required'
        ]);

        PouUser::create([
            'name'     => $request->name,
            'region'   => $request->region,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'show_password' => $request->password,
        ]);

        return redirect()->route('admin.pou_user.index')->with('success', 'Pou user added successfully.');
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
        $user = PouUser::findOrFail($id);
        return view('admin.pou_user_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'     => 'required',
            'region'   => 'required',
            'email'    => 'required|email|unique:pou_user,email,' . $id,
            'password' => 'required'
        ]);

        $user = PouUser::findOrFail($id);
        $user->name = $request->name;
        $user->region = $request->region;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
            $user->show_password = $request->password;
        }
        $user->save();
        return redirect()->route('admin.pou_user.index')->with('success', 'Pou User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = PouUser::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.pou_user.index')->with('success', 'Pou User deleted successfully.');
    }

    public function togglePublic(Request $request, $id)
    {
        $user = PouUser::findOrFail($id);
        $user->is_public = $request->has('is_public') ? '1' : '0';
        $user->save();

        return redirect()->back()->with('success', 'Public status updated successfully!');
    }
}
