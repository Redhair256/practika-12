<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use DB;
use App\Link;
use App\Click;
use App\User_id;

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
        if ($curent_link == null) {
            $id = '';
            return view('links.statistics',[ 'links' => $links, 'curent_link' => $curent_link]);
        }else {
            $clicks = Click::where('link_id', $curent_link->id )->get();
            $num_click = $clicks->count();
            return view('links.statistics',[ 'links' => $links, 'clicks' => $clicks, 'curent_link' => $curent_link, 'num_click' => $num_click ]);
        }
        
        
    }

    public function redirect(Request $request, $link_token)
    {
        $curent_link = Link::where('token', $link_token )->first();
        $user_token = Cookie::get('uid');
        if($user_token == null)
        {
            $user_token = str_random(20);
            $user_id = new user_id;
            $user_id ->token = $user_token;
            $user_id ->browser = 'browser';
            $user_id ->os = 'Windows7';
            $user_id ->link_id = $curent_link ->id;
            $user_id ->save();
        }
        $user_id = User_id::where('token', $user_token )->first();
        $curent_click = new Click;
        $curent_click ->user_id = $user_id ->id;
        $curent_click ->link_id = $curent_link ->id;
        $curent_click ->ip = $request ->ip();
        $curent_click ->save();

        return redirect($curent_link->target_url)->withCookie(cookie('uid', $user_token));
    }
}
