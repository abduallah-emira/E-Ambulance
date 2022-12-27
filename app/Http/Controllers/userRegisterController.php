<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\request as AppRequest;
use App\userModel;

class userTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('user_table');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone'=>'required|digits:11|Numeric', 
            'age'=>'required|integer',
            'nId'=>'required|Numeric|digits:14',
            'password' => 'required| min:4| max:16 |confirmed',
            'password_confirmation' => 'required| min:4',
            'gender'=>'required',
            't&c' => 'required'
            
        ]);
 
        $input['password'] = bcrypt($input['password']);
        userModel::create($input);
        return redirect('userData/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUserByPhone()
    {
         return view('showUserByPhone');
    }

    public function show(request $phone)
    {
        $phone = userModel::find($phone);
        return redirect('userData/show');

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
