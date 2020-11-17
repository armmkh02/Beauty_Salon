<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++)
        {

            DB::table('orders')->insert([
                [
                    'firstName'      => 'Valodik'        ,
                    'lastName'       => 'Flanik'         ,
                    'email'          => 'gfgg@gmail.com' ,
                    'phone'          => '+374444450'     ,
                    'image_id'       => '3'              ,
                    'message'        => 'dfdsfsdf'       ,
                    'status'         => Order::STATUS[0] ,

                ]
            ]);
        }
    }
}
