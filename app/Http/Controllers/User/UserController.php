<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Game;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('frontend.member.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('frontend.member.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $data['level'] = 0;
        if($data['password']) {
            $data['password'] = bcrypt($data['password']);
        }
        if(User::create($data)) {
            return redirect('/user/login');
        }
        else {
            return redirect('/user/register');
        }
    }

    /**
     * Display the specified resource.
     */
    public function signin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 0,
        ];

        $remember = false;
        if($request->remember_me) {
            $remember = true;
        }
        
        if(Auth::attempt($login, $remember)) {
            return redirect('/');
        }
        else {
            return redirect()->back()->withErrors('Email or password is not correct.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function home()
    {
        $data = Game::all();
        return view('frontend.home', compact('data'));
    }

    public function library()
    {
        $array = [];
        // $data = Game::all();
        $getSession = session()->get('game');
        // dd($getSession);
        foreach ($getSession as $value) {
            $array[] = Game::findOrFail($value)->toArray();
        }
        // dd($array);
        return view('frontend.member.library', compact('getSession', 'array'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function detail(Request $request, string $id)
    {
        $data = Game::findOrFail($id)->toArray();
        return view('frontend.member.detailGame', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function buyItem(Request $request,string $id)
    {   
        // Session()->flush();
        if(auth::check() == true) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);
            $money = $user->money;
            // dd($price);
            if($request->price > $money) {
                // session()->flash('message', 'Số dư của bạn không đủ vui lòng nạp thêm.');
                return redirect()->back()->with('message', 'Số dư của bạn không đủ vui lòng nạp thêm.');
                
            }
            else {
                if(session()->has('game')) {
                // dd('0');
                    $flag = 1;
                    $getSession = session()->get('game');
                // dd($getSession);                
                    foreach($getSession as $key => $value) {
                    // dd($value);
                        if($value == $id) {
                            $flag = 0;
                            return redirect()->back()->with('message', 'Bạn đã có trò chơi này.');
                        // $getSession[$key]['qty']+=$qty;
                        // session()->put('game',  $getSession);
                        }
                    // dd($getSession);

                    }

                    if($flag == 1) {
                    // dd('1');
                        $money-=$request->price;
                        User::where('id', $userId)->update(['money'=>$money]);
                        session()->push('game', $id);
                        return redirect()->back()->with('message', 'Mua thành công.');
                    }

                }
                else {
                // dd('2');
                    session()->push('game', $id);
                    return redirect()->back()->with('message', 'Mua thành công.');
                }
            }
            // dd($user);
            
//         }
        // $get = session()->get('game');
        // var_dump($get);
        }
    }

    public function search(Request $request)
    {
        $search=$request->title;
        $gametitle=Game::where('title','like','%'.$search.'%')->get();
        // dd($blogtitle);
        return view('Frontend.member.search',compact('gametitle'));
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
