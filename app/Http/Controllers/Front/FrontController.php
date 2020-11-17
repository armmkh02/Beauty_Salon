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
        $orders    =  $user->orders()->with('image');
        dd($orders);
        // $templates = DB::table('orders')->where('user_id' , $id)->get();

        // foreach ($orders as $key => $order)
        // {
        //     $images = DB::table('images')->where('id' , $order->templateNumber)->first();

        //     $array[$key]           = $order->toArray();
        //     $array[$key]['images'] = $images;
        // }

        // $myCollectionObj = collect($array);

        // $array = $this->paginate($myCollectionObj);
        // dd($data);
        return view('main.profile' , compact('user' , 'array'));
    }

    // public function paginate($items, $perPage = 1, $page = null, $options = [])
    // {
    //     $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    //     $items = $items instanceof Collection ? $items : Collection::make($items);
    //     return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    // }
}
