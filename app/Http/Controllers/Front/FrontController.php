<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Order;

class FrontController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function templates()
    {
        $templates = DB::table('images')->get();

        return view('main.templates' , compact('templates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function loginRegister()
    {

        return view('auth.loginRegister' );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function pricing()
    {
        return view('main.price');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $images = DB::table('images')->get();

        return view('main.contact' , compact('images'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function AboutUs()
    {
        return view('main.aboutUs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function order($id)
    {
        $template = DB::table('images')->find($id);

        return view('main.order' , compact('template'));
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $arr = [];

        $user      = User::find($id);
        $orders    =  $user->orders;
        $templates = DB::table('orders')->where('user_id' , $id)->get();


        foreach ($orders as $key => $order)
        {
            $images = DB::table('images')->where('id' , $order->templateNumber)->first();

            $arr[$key]           = $order->toArray();
            $arr[$key]['images'] = $images;
        }
        return view('main.profile' , compact('user' , 'arr'));
    }
}
