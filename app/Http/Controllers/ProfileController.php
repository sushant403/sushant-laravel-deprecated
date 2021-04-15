<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::all();
        return view('admin.contents.profile.index', compact('profile'));
    }

    public function create(User $profile)
    {
        return view('admin.contents.profile.create', compact('profile'));
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('sushant.profile.index')->with('success', 'New User Added Successfully');;
    }

    public function edit(User $profile)
    {
        return view('admin.contents.profile.edit', compact('profile'));
    }

    public function update(Request $request, User $profile)
    {
        $profile->update($request->all());

        return redirect()->back()->with('success', 'Profile Information Updated Successfully');
    }

    public function myProfile()
    {
        $profile = User::where('id', auth()->user()->id)->get();
        return view('admin.contents.profile.mysettings', compact('profile'));
    }
    public function myProfileUpdate(Request $request)
    {
        $profile = User::where('id', auth()->user()->id)->get();
        $profile->update($request->all());

        return redirect()->back()->with('success', 'Profile Updated Successfully');;
    }

    public function show(User $profile, About $about)
    {
        return view('admin.contents.profile.show', compact('profile', 'about'));
    }

    public function destroy(User $profile)
    {
        $profile->delete();

        return back()->with('success', 'Profile Deleted Successfully');;
    }
}
