<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'Administrador',
            ]);
        Profile::create([
            'name' => 'Archivador',
            ]);
        Profile::create([
            'name' => 'Prueba',
            ]);
    }
}
