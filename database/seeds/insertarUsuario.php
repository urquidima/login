<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'user'=>'alex.urquidi',
            'password'=>'12345',
            'key'=>'es una llave'
        ]);
    }
}
