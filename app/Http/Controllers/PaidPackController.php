<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\User;
use App\Models\PaidPack;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaidPackController extends Controller
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
    public function create(Pack $pack)
    {
        return view('paid_packs.create', compact('pack'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $newDateTime = Carbon::now()->addDays(30)->toDateTimeString();
        $newDateTime = Carbon::now()->addDays(10);
        $paid_pack = PaidPack::create([
            'pack_id' => $request->pack_id,
            'duration' => strtotime($newDateTime),
        ]);

        $user = User::find(Auth::user()->id);
        $user->paid_pack_id = $paid_pack->id;
        $user->save();

        DB::table('pack_paid_pack')->insert([
            'pack_id' => $request->pack_id,
            'paid_pack_id' => $paid_pack->id,
        ]);

        $sponsored_users_count = User::where('sponsor', '=', Auth::user()->name)->count();

        $withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', true)->get();
        $withdrawn_amount = 0;
        if (count($withdrawns) > 0) {
            foreach($withdrawns as $withdrawn) {
                $withdrawn_amount += $withdrawn->amount;
            }
        }
        $not_withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', false)->get();
        $not_withdrawn_amount = 0;
        if (count($not_withdrawns) > 0) {
            foreach($withdrawns as $withdrawn) {
                $not_withdrawn_amount += $withdrawn->amount;
            }
        }

        return view('dashboard', compact('paid_pack', 'sponsored_users_count', 'withdrawn_amount', 'not_withdrawn_amount'))->with('success', 'Le payement a été effectué avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaidPack  $paidPack
     * @return \Illuminate\Http\Response
     */
    public function show(PaidPack $paidPack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaidPack  $paidPack
     * @return \Illuminate\Http\Response
     */
    public function edit(PaidPack $paidPack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaidPack  $paidPack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaidPack $paidPack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaidPack  $paidPack
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaidPack $paidPack)
    {
        //
    }
}
