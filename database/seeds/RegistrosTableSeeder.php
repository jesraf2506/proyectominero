<?php

use Illuminate\Database\Seeder;

class RegistrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Registro::class,500)->create();
    }
}
