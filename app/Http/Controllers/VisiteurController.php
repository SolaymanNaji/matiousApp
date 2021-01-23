<?php

namespace App\Http\Controllers;

use App\Admin;
use Carbon\Carbon;
use Request;



class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(\Illuminate\Http\Request $request)
    {

        //Recuperation IP visiteur
        $RequestIp = $request->header();
        //Recuperation Date visite
        $dateTime = Carbon::now('+01:00')->format('d/m/Y H:i:s');
        
        $visite = new Admin();
        $visite->ip = $RequestIp["x-forwarded-for"][0];
        $visite->dateTime = $dateTime;
        
        $visite->save();

        return view('welcome',['RequestIp' => $RequestIp["x-forwarded-for"][0]]);
        

    }

    
}
