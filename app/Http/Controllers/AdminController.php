<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {

        $email = $request->post('email');
        $password = $request->post('password');
        $result = admin::where(['email'=>$email,'password'=>$password])->get();

        if(count($result)>0)
        {
            //echo "login sucess";
            $request->session()->put('ADMIN_LOGIN',TRUE);
            $request->session()->put('admin_id',$result[0]->id);
            return redirect('admin/dashboard');

        }
        else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
