<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.contents.about.index', compact('about'));
    }

    public function create(About $about)
    {
        return view('admin.contents.about.create', compact('about'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        About::create($request->all());
        return redirect()->route('sushant.about.index')->with('success', 'About Information Added Successfully');
    }

    public function edit(About $about)
    {
        return view('admin.contents.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $about->update($request->all());

        return redirect()->route('sushant.about.index')->with('success', 'Information Updated Successfully');;
    }

    public function show(About $about)
    {
        return view('admin.contents.about.show', compact('about'));
    }

    public function destroy(About $about)
    {
        $about->delete();

        return back()->with('success', 'Information Deleted Successfully!');
    }
}
