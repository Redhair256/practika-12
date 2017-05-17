<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
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
        

        return redirect('links.listing');
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
