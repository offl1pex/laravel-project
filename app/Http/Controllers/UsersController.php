<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Models\Application;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_signin()
    {
        return view('signin');
    }
    public function show_signup()
    {
        return view('signup');
    }
    public function signin(Request $request)
    {
        $request -> validate([
            'login' => 'required',
            'password' => 'required'
        ]);
        if(Auth:: attempt(['login' => $request -> login, 'password' => $request -> password])) {
            $user = Auth::user();
            if($user -> role === 'user'){
                return redirect() -> route('personal_account');
            } else if ($user -> role === 'admin'){
                return redirect() -> route('admin');
            }
        } else {
            return response('Неверные данные');
        }
    }
    public function signup(Request $request)
    {
        $request -> validate([
            'full_name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $user = Users::create([
            'full_name' => $request -> full_name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'login' => $request -> login,
            'password' => Hash::make($request->password),
        ]);
        return redirect() ->route('show_signin');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function personal_account()
    {
        $user = Auth::user();
        $user_id = $user -> id;
        $application = Application::where('user_id', $user_id) -> get();
        return view('personal_account', compact('application'));
    }
    public function application(){
        return view('application');
    }
    public function application_add(Request $request){
        $user = Auth::user();
        $user_id = $user -> id;
        Application::create([
            'user_id' => $user_id,
            'service_type' => $request -> service_type,
            'date_time' => $request -> date_time,
            'address' => $request -> address,
        ]);
        return redirect() -> route('personal_account');
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
