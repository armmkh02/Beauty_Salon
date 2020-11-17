<?php

namespace App\Http\Controllers\Themplates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemTenController extends Controller
{
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.them10.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('templates.them10.categories');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function specialists()
    {
        return view('templates.them10.specialists');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('templates.them10.contact');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('templates.them10.about');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
        return view('templates.them10.booking');
    }
}
