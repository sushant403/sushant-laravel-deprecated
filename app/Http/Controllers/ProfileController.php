<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contents.profile.show');
    }

    public function create()
    {
        return view('admin.contents.profile.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('admin.profile.show');
    }

    public function edit(User $user)
    {
        return view('admin.contents.profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('admin.profile.show');
    }

    public function show(User $user)
    {
        $user->load('roles');

        return view('admin.contents.profile.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
