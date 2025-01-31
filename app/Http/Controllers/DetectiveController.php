<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detective;
use App\Crime;
use Auth; 

class DetectiveController extends Controller
{
    //
    public function api($detective_slug)
    {
        $detective = Detective::where('slug', $detective_slug)->with('images')->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }
        return $detective;
    }

    public function index()
    {
//         n the index method of the DetectiveController, use Eloquent to select all detectives in the database, ordered by their names in ascending order.

// Then give the result to the view.

        $detectives = Detective::orderBy('name', 'ASC')->get();
        return view('detective/index', compact('detectives'));
    }

    public function show($detective_slug)
    {
        $detective = Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }

    public function hire(Request $request, $detective_id)
    {
        $crime = Crime::create([
            'detective_id' => $detective_id,
            // 'user_id' => Auth::user()->id,
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
        ]);
        
        return redirect('/detective')->with('success', 'Detective hired!');
    }
}
