<?php

namespace App\Http\Controllers\Themplates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemForthController extends Controller
{
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.them4.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('templates.them4.categories');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function specialists()
    {
        return view('templates.them4.specialists');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('templates.them4.contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('templates.them4.about');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
        return view('templates.them4.booking');
    }
}
