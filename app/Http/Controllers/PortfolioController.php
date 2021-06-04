<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.contents.portfolio.index', compact('portfolio'));
    }

    public function create(Portfolio $portfolio)
    {
        return view('admin.contents.portfolio.create', compact('portfolio'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $portfolio = Portfolio::create($request->all());

        if ($request->hasFile('photo')) {
            $image = $request->file('photo')->getClientOriginalName();
            $request->file('photo')
                ->storeAs('public/portfolio/' . $portfolio->id, $image);
            $portfolio->update(['photo' => $image]);

            $file = Image::make(storage_path('app/public/portfolio/' . $portfolio->id . '/' . $image));
            $file->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $file->save(storage_path('app/public/portfolio/' . $portfolio->id . '/thumbnail_' . $image));
        }

        return redirect()->route('sushant.portfolio.index')->with('success', 'Portfolio Added Successfully');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.contents.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->update($request->all());

        if ($request->hasFile('photo')) {
            $image = $request->file('photo')->getClientOriginalName();
            $request->file('photo')
                ->storeAs('public/portfolio/' . $portfolio->id, $image);

            $portfolio->update(['photo' => $image]);

            $file = Image::make(storage_path('app/public/portfolio/' . $portfolio->id . '/' . $image));
            $file->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $file->save(storage_path('app/public/portfolio/' . $portfolio->id . '/thumbnail_' . $image));
        }

        return redirect()->route('sushant.portfolio.index')->with('success', 'Portfolio Updated Successfully');;
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.contents.portfolio.show', compact('portfolio'));
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return back()->with('success', 'Information Deleted Successfully!');
    }
}
