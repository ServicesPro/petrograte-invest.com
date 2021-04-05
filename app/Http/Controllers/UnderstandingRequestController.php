<?php

namespace App\Http\Controllers;

use App\Models\UnderstandingRequest;
use Illuminate\Http\Request;

class UnderstandingRequestController extends Controller
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string'
        ]);

        $contact = UnderstandingRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('welcome')->with('success', 'Chèr(e) ' . $contact->name . " votre requête a bien été envoyé. Nous vous reviendrons très bientôt.\n Merci");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnderstandingRequest  $understandingRequest
     * @return \Illuminate\Http\Response
     */
    public function show(UnderstandingRequest $understandingRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnderstandingRequest  $understandingRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UnderstandingRequest $understandingRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnderstandingRequest  $understandingRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnderstandingRequest $understandingRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnderstandingRequest  $understandingRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnderstandingRequest $understandingRequest)
    {
        //
    }
}
