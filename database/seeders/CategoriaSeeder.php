<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['image' => 'assets/images/categories/Icon_data_base.png',],
            ['image' => 'assets/images/categories/icon_html.png',],
            ['image' => 'assets/images/categories/icon_java.png',],
            ['image' => 'assets/images/categories/icon_php.png',],
            ['image' => 'assets/images/categories/icon_ux.png',],
        ],);
    }
}
