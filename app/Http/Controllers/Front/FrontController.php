<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Order;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $array = [];

        $user      = User::find($id);
        // $orders    = $user->orders()->with('image');
        $orders = DB::table('users')
                     ->join('orders', 'users.id', '=', 'orders.user_id')
                     ->join('images', 'orders.image_id', '=', 'images.id')
                     ->select('orders.*', 'users.*', 'images.*', 'orders.user_id')
                     ->paginate(2);

        return view('main.profile' , compact('user' , 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(Request $request)
    {
        $request       = $request->except('_token');
        $user['name']  = $request['name'];
        $user['email'] = $request['email'];
        $user['phone'] = $request['phone'];

        User::find($request['id'])->update($user);

        return redirect()->back();
    }


}
