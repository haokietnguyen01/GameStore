<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Payment::all();
        return view('Admin.user.Payment', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function recharge(string $id)
    {
        $data = User::all();
        $dataPay = Payment::all();
        // echo "<pre>";
        foreach($dataPay as $value) {
            // var_dump($value);
            if($value->id == $id) {
                $money = $value->payment;
                $email = $value->email;
            }
        }
        // dd($dataPay);
        // $money = $dataPay->payment;
        return view('Admin.user.Pay', compact('email', 'money'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function acceptRecharge(Request $request, string $id)
    {
        $data = $request->all();
        $user = User::all();
        foreach($user as $value) {
            if($value->email == $data['email']) {
                $moneyPre = $value->money;
                $moneyPre += $data['money'];
                User::where('id', $value->id)->update(['money'=>$moneyPre]);
            }
        }
        // dd($data['money']);
        // $user = User::all();
        return redirect('admin/payment');
        // if($user->update($data)) {
        //     return redirect()->back()->withErrors('Recharge Success');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
