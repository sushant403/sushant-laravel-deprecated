<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.contents.service.index', compact('service'));
    }

    public function create(Service $service)
    {
        return view('admin.contents.service.create', compact('service'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $service = Service::create($request->all());

        if ($request->hasFile('photo')) {
            $image = $request->file('photo')->getClientOriginalName();
            $request->file('photo')
                ->storeAs('public/service/' . $service->id, $image);
            $service->update(['photo' => $image]);

            $file = Image::make(storage_path('app/public/service/' . $service->id . '/' . $image));
            $file->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $file->save(storage_path('app/public/service/' . $service->id . '/thumbnail_' . $image));
        }

        return redirect()->route('sushant.service.index')->with('success', 'Service Added Successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.contents.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        if ($request->hasFile('photo')) {
            $image = $request->file('photo')->getClientOriginalName();
            $request->file('photo')
                ->storeAs('public/service/' . $service->id, $image);

            $service->update(['photo' => $image]);

            $file = Image::make(storage_path('app/public/service/' . $service->id . '/' . $image));
            $file->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $file->save(storage_path('app/public/service/' . $service->id . '/thumbnail_' . $image));
        }

        return redirect()->route('sushant.service.index')->with('success', 'Service Updated Successfully');;
    }

    public function show(Service $service)
    {
        return view('admin.contents.service.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return back()->with('success', 'Information Deleted Successfully!');
    }
}
