<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Link;
use App\Click;

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
        $links->token = str_random(20);
        $links->target_url = $request->target_url;  
        $links->save();

        return redirect('./links');
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        //
        $curent_link = Link::where('token', $id )->first();
        $links = Link::all();
        $clicks = Click::where('link_id', $curent_link->id )->get();
        $num_click = $clicks->count();
        return view('links.statistics',[ 'links' => $links, 'clicks' => $clicks, 'curent_link' => $curent_link, 'num_click' => $num_click ]);
        
    }
}
