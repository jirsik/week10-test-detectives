<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detective;

class DetectiveController extends Controller
{
    //
    public function index()
    {
//         n the index method of the DetectiveController, use Eloquent to select all detectives in the database, ordered by their names in ascending order.

// Then give the result to the view.

        $detectives = Detective::orderBy('name', 'ASC')->get();
        return view('detective/index', compact('detectives'));
    }

    public function show($detective_slug)
    {
        $detective = \App\Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }
}
