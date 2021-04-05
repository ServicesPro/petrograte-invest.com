<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithdrawalRequest;
use Illuminate\Support\Facades\Auth;
use Mckenziearts\Notify\LaravelNotifyServiceProvider;

class WithdrawalRequestController extends Controller
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
        $withdraw = WithdrawalRequest::create([
            'user_id' => Auth::user()->id,
            'paypal' => $request->paypal,
            'perfect_money' => $request->perfect_money,
        ]);

        return redirect()->route('dashboard')->with('success', "La demande de retarit a été pris en compte.");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WithdrawalRequest  $withdrawalRequest
     * @return \Illuminate\Http\Response
     */
    public function show(WithdrawalRequest $withdrawalRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WithdrawalRequest  $withdrawalRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(WithdrawalRequest $withdrawalRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WithdrawalRequest  $withdrawalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WithdrawalRequest $withdrawalRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WithdrawalRequest  $withdrawalRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(WithdrawalRequest $withdrawalRequest)
    {
        //
    }
}
