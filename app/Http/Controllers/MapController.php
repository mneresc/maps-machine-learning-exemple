<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        return  view('map.index');
    }
     /**
     * most return a geo json to show in map
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listAccessPoint(Request $request){

    }

    /**
     * most return a geo json to show in map
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listSuspiciousAccessPoint(Request $request){

    }

}
