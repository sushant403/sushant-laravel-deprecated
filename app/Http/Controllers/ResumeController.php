<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resume = Resume::all();
        return view('admin.contents.resume.index', compact('resume'));
    }

    public function create(Resume $resume)
    {
        return view('admin.contents.resume.create', compact('resume'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        Resume::create($request->all());
        return redirect()->route('sushant.resume.index')->with('success', 'Resume Information Added Successfully');
    }

    public function edit(Resume $resume)
    {
        return view('admin.contents.resume.edit', compact('resume'));
    }

    public function update(Request $request, Resume $resume)
    {
        $resume->update($request->all());

        return redirect()->route('sushant.resume.index')->with('success', 'Information Updated Successfully');;
    }

    public function show(Resume $resume)
    {
        return view('admin.contents.resume.show', compact('resume'));
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();

        return back()->with('success', 'Information Deleted Successfully!');
    }
}
