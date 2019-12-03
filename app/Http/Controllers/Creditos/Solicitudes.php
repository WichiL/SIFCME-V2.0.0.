<?php

namespace App\Http\Controllers\Creditos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Solicitudes extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'username' => 'required|string|max:12',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required|confirmed|min:8',
            'rol' => 'required|string|max:15'
        ]);

        $user->update([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'rol' => $request['rol'],
            'password' => bcrypt($request['password']),
        ]);        
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
