<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Payment;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.Payment.payment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pay(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        // dd($user);
        $data = $request->all();
        $data['email'] = $user->email;
        if(Payment::create($data)) {
            return redirect()->back()->with('success', 'Vui lòng đợi vài phút để xử lý');
        }
        // dd($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
