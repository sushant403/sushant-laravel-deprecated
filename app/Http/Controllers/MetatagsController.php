<?php

namespace App\Http\Controllers;

use App\Models\Metatags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MetatagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seometa = Metatags::all();
        return view('admin.contents.seometa.index', compact('seometa'));
    }

    public function create(Metatags $seometa)
    {
        return view('admin.contents.seometa.create', compact('seometa'));
    }

    public function store(Request $request)
    {
        Metatags::create($request->all());
        return redirect()->route('sushant.seometa.index')->with('success', 'Metatags Information Added Successfully');
    }

    public function edit(Metatags $seometa)
    {
        return view('admin.contents.seometa.edit', compact('seometa'));
    }

    public function update(Request $request, Metatags $seometa)
    {
        $seometa->update($request->all());

        return redirect()->route('sushant.seometa.index')->with('success', 'Information Updated Successfully');;
    }

    public function show(Metatags $seometa)
    {
        return view('admin.contents.seometa.show', compact('seometa'));
    }

    public function destroy(Metatags $seometa)
    {
        $seometa->delete();

        return back()->with('success', 'Information Deleted Successfully!');
    }
}
