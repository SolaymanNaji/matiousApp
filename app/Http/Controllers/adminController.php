<?php

namespace App\Http\Controllers;

use App\Admin;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recuperation liste visiteurs et dates visite
        $listVisite = Admin::all();
        return view('admin',['data' => $listVisite]);
        
    }

 
}
