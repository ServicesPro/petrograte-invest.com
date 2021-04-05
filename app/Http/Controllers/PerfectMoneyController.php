<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pack;
use App\Models\User;
use App\Models\PaidPack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PerfectMoneyController extends Controller
{
    public function success(Pack $pack)
    {
        $newDateTime = Carbon::now()->addDays(30);
        $paid_pack = PaidPack::create([
            'pack_id' => $pack->id,
            'duration' => strtotime($newDateTime),
        ]);

        $user = User::find(Auth::user()->id);
        $user->paid_pack_id = $paid_pack->id;
        $user->save();

        DB::table('pack_paid_pack')->insert([
            'pack_id' => $pack->id,
            'paid_pack_id' => $paid_pack->id,
        ]);

        $sponsored_users_count = User::where('sponsor', '=', Auth::user()->name)->count();

        $withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', true)->get();
        $withdrawn_amount = 0;
        if (count($withdrawns) > 0) {
            foreach ($withdrawns as $withdrawn) {
                $withdrawn_amount += $withdrawn->amount;
            }
        }
        $not_withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', false)->get();
        $not_withdrawn_amount = 0;
        if (count($not_withdrawns) > 0) {
            foreach ($withdrawns as $withdrawn) {
                $not_withdrawn_amount += $withdrawn->amount;
            }
        }

        return view('dashboard', compact('paid_pack', 'sponsored_users_count', 'withdrawn_amount', 'not_withdrawn_amount'))->with('success', 'Le payement a été effectué avec succès.');
    }

    public function fail(Pack $pack)
    {
        return redirect()->route('paid.create', ['pack' => $pack])->with('error', 'Le payement n\'a pu être effectuer, veuillez recommencer plus tard. Merci');
    }
}
