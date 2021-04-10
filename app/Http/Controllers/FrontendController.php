<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Resume;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Frontend;
use App\Models\Portfolio;
use App\Http\Requests\StoreContactRequest;

class FrontendController extends Controller
{
    public function index()
    {
        $frontend = Frontend::whereId(1)->first();
        $about = About::whereId(1)->first();
        $resume = Resume::where('user_id', 1)->get();
        $portfolio = Portfolio::where('user_id', 1)->get();
        $services = Service::where('user_id', 1)->get();
        return view('frontend.welcome', compact(['frontend', 'about', 'resume', 'portfolio', 'services']));
    }

    public function showPortfolio(Portfolio $portfolio)
    {
        $frontend = Frontend::whereId(1)->first();
        return view('frontend.portfolio-details', compact('frontend'));
    }

    public function contact()
    {
        $frontend = Frontend::whereId(1)->first();
        return view('frontend.contact', compact('frontend'));
    }
    public function contactStore(StoreContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', 'Your query has been recorded successfully. You may receive email from our team. Thank You');
    }
}
