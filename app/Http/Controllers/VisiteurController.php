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
    public function index()
    {
        //Recuperation IP
        $RequestIp = Request::ip();
        //Recuperation Date visite
        $dateTime = Carbon::now('+01:00')->format('d/m/Y H:i:s');
        
        $visite = new Admin();
        $visite->ip = $RequestIp;
        $visite->dateTime = $dateTime;
        
        $visite->save();

        return view('welcome',['RequestIp' => $RequestIp]);
        

    }

    
}
