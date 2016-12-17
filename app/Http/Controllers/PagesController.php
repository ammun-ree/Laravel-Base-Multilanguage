<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Organization;
use App\Event;

class PagesController extends Controller
{
    /**
     * Get The Home Page
     *
     * @return \Illuminate\Http\Response
     */
    public function GetHomePage()
    {
        $publications =  Publication::all();
        return view('pages.home' , compact('publications'));
    }


    /**
     * Get The About Page
     *
     * @return \Illuminate\Http\Response
     */
    public function GetAboutPage()
    {
        $organization =  Organization::firstOrFail();
        return view('pages.about' , compact('organization'));
    }

    /**
     * Get The Contact Page
     *
     * @return \Illuminate\Http\Response
     */
    public function GetContactPage()
    {
        $organization =  Organization::firstOrFail();
        return view('pages.contact' , compact('organization'));
    }

    /**
     * Get The Publications Page
     *
     * @return \Illuminate\Http\Response
     */
    public function GetPubliationsPage()
    {
      $publications =  Publication::all();
      return view('pages.publications' , compact('publications'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
