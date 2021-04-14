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
        $users = User::all();
        return view('admin.contents.profile.index', compact('users'));
    }

    public function create()
    {
        return view('admin.contents.profile.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('sushant.profile.show');
    }

    public function edit(User $profile)
    {
        return view('admin.contents.profile.edit', compact('profile'));
    }

    public function update(Request $request, User $profile)
    {
        $profile->update($request->all());

        return redirect()->route('sushant.profile.index');
    }

    public function show(User $profile)
    {
        return view('admin.contents.profile.show', compact('profile'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
