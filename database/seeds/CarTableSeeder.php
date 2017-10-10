<?php
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder{
    public function run(){
        DB::table('car')->delete();
        DB::table('car')->insert([
            [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1234 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1235 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1236 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1237 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1238 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1239HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1230 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1231 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1232 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1233 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2016',
            'color'=>'Black',
            'plate'=>'D 1204 HND',
        ],
        [
            'brand'=>'Honda',
            'type'=>'civic',
            'year'=>'2017',
            'color'=>'White',
            'plate'=>'D 2345 HND',
        ]
        ]);
    }
}