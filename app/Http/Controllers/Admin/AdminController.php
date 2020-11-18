<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        $orders = DB::table('images')
                     ->join('orders', 'images.id', '=', 'orders.image_id')
                     ->select('orders.*', 'images.path', 'orders.image_id')
                     ->get();

        return  view('admin.messages', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateImageView ()
    {
        $images = DB::table('images')->get();

        return view('admin.templateImages' , compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateImage (Request $id)
    {
        $id    = $id['id'];
        $image = DB::table('images')->find($id);

        return view('admin.update' , compact('image'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateImageDB (Request $request)
    {
        $image         = $request->except('_token');
        $id            = $request['id'];
        $image         = $request['posters'];
        $path          = public_path('front'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'them-img'.DIRECTORY_SEPARATOR);
        $extension     = $image->getClientOriginalExtension();
        $img_name      = $image->getClientOriginalName();
        $img_name      = md5($img_name.microtime());
        $img_full_name = $img_name.'.'.$extension;
        $res           = $image->move($path, $img_full_name);
        $image         = "front/assets/them-img/".$img_full_name;
        DB::table('images')->where('id' , $id)->update(['path' => $image]);
        $images        = DB::table('images')->get();

        return view('admin.templateImages' , compact('images'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteImage(Request $id)
    {
        $ids     = $id->except('token');

        foreach ($ids as $id)
        {
             Order::destroy($id);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function changeStatus($id)
    {
        $message = Order::findorFail($id);

        if ($message->status == Order::STATUS[0])
        {
            $message['status'] = Order::STATUS[1];
        }

        else
        $message['status'] = Order::STATUS[0];

        $message->save();

        return response()->json(1,200);
    }

}
