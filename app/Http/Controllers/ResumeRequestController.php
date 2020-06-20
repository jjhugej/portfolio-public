<?php

namespace App\Http\Controllers;

use App\ResumeRequest;
use Illuminate\Http\Request;

class ResumeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /* dd($request); */
        /* return ['its working',$request]; */

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'company' => 'required',
            'position' => 'required',
            'notes' => 'nullable|max:2000',
        ]);

        //TODO: FINISH PERSISTING TO DB and VALIDATE DATA ON FRONTEND AS WELL
        //ResumeRequest::create();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResumeRequest  $resumeRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeRequest $resumeRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResumeRequest  $resumeRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ResumeRequest $resumeRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResumeRequest  $resumeRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResumeRequest $resumeRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResumeRequest  $resumeRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResumeRequest $resumeRequest)
    {
        //
    }
}
