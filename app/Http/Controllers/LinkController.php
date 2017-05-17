<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use App\Link;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $links = Link::all();
        return view('links.listing', [ 'links' => $links ]);

    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'target_url' => 'url'
            ]);
        if ($validator->fails()) {
            return redirect('./links')
                  ->withErrors($validator)
                  ->withInput();
        }

        return redirect('./links');
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        //
        return view('links.statistics');
        
    }
}
