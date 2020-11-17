<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('images') ->insert([
            [
                'path'   => 'front/assets/them-img/them1.png' ,
                'name'  => 'Them1'
            ],

            [
                'path'  => 'front/assets/them-img/them2.png'  ,
                'name'  => 'Them2'

            ],

            [
                'path'  => 'front/assets/them-img/them3.png'  ,
                'name'  => 'Them3'

            ],

            [
                'path'  => 'front/assets/them-img/them4.png'  ,
                'name'  => 'Them4'

            ],
            [
                'path'  => 'front/assets/them-img/them5.png'  ,
                'name'  => 'Them5'

            ],

            [
                'path'  => 'front/assets/them-img/them6.png'  ,
                'name'  => 'Them6'

            ],

            [
                'path'  => 'front/assets/them-img/them7.png'  ,
                'name'  => 'Them7'

            ],

            [
                'path'  => 'front/assets/them-img/them8.png'  ,
                'name'  => 'Them8'

            ],

            [
                'path'  => 'front/assets/them-img/them9.png'  ,
                'name'  => 'Them9'

            ],

            [
                'path'  => 'front/assets/them-img/them10.png' ,
                'name'  => 'Them10'

            ],

        ]);
    }
}
