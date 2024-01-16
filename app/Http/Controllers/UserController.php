<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->user()->id)->orderBy('id', 'asc')->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required'],
            'username'  => ['required'],
            'email'     => ['required', 'email:dns', 'unique:'.User::class],
            'password'  => ['required', 'min:8'],
            'role'      => ['required'],
        ]);

        User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'role'      => $request->role,
        ]);

        return to_route('user.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'      => ['required'],
            'username'  => ['required'],
            'email'     => ['required', 'email:dns', 'unique:'.User::class],
            'password'  => ['required', 'min:8'],
            'role'      => ['required'],
        ]);

        $user->update([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'role'      => $request->role,
        ]);

        return to_route('user.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();


        return to_route('user.index')->with('success');
    }
}
