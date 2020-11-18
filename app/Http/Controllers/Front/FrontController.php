<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $templates = DB::table('images')->skip(4)->take(3)->get();

        return view('main.index' , compact('templates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function templates()
    {
        $templates1 = DB::table('images')->take(4)->get();
        $templates2 = DB::table('images')->skip(4)->take(4)->get();
        $templates3 = DB::table('images')->skip(8)->take(2)->get();

        return view('main.templates' , compact('templates1' , 'templates2' , 'templates3'));
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
    public function profile()
    {
        $array = [];
            $user  = User::findorFail(Auth::user()->id);
            // $orders    = $user->orders()->with('image')->get();

            $orders = DB::table('users')
                         ->join('orders', 'users.id', '=', 'orders.user_id')->where('users.id' , Auth::user()->id)
                         ->join('images', 'orders.image_id', '=', 'images.id')
                         ->select('orders.*' , 'images.*')
                         ->paginate(1);

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
