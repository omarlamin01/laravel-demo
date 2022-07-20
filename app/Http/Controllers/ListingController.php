<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use MongoDB\Driver\Session;

class ListingController extends Controller
{
    //
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //Show all listings
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show create form
    public function create() {
        return view('listings.create');
    }

    //store form data
    public function store(Request $request) {
          $formFields = $request->validate([
              'title' => 'required',
              'company' => ['required', Rule::unique('listings', 'company')],
              'location' => 'required',
              'website' => 'required',
              'email' => ['required', 'email'],
              'tags' => 'required',
              'description' => 'required',
          ]);

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created');
    }
}
