<?php

namespace App\Http\Controllers\Themplates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemEightController extends Controller
{
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.them8.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('templates.them8.categories');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function specialists()
    {
        return view('templates.them8.specialists');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('templates.them8.contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('templates.them8.about');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
        return view('templates.them8.booking');
    }
}
