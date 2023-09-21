<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('products')->insert([
            [
                'name'=>'LG Mobile',
                'price'=>'200',
                'catecory'=>'mobile',
                'description'=>'smart phone 4G ram',
                'gallery'=>'https://images.unsplash.com/photo-1521939094609-93aba1af40d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80.jpeg'
            ],
            [
                'name'=>'iphone Mobile',
                'price'=>'800',
                'catecory'=>'mobile',
                'description'=>'smart phone imac ram',
                'gallery'=>'https://images.unsplash.com/photo-1510557880182-3d4d3cba35a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80.jpeg'
            ],
            [
                'name'=>'nokia',
                'price'=>'150',
                'catecory'=>'mobile',
                'description'=>'smart phone 2g ram',
                'gallery'=>'https://images.unsplash.com/photo-1559312379-6eff3ba65888?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80.jpeg'
            ]
        ]);
    }
}
