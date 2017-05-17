<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $this->validate($request, [
            'target_url' => 'active_url'
            ]);


        $links = new Link;
        $links->token = 0120;
        $links->target_url = $request->target_url;  
        $links->save();

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
