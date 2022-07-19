<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ward;
use App\Models\Jail;
use App\Models\User;

class JailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Los pabellones pueden tener muchas carceles
        $wards = Ward::all();

        $wards->each(function($ward)
        {
            Jail::factory()->count(3)->for($ward)->create();
        });

        // las carceles pueden tener muchos usuarios
        $jails=Jail::all();
        $users_prisoers = User::where('role_id',4)->get();
        $jails->each(function($jail) use ($users_prisoers)
        {
            $jail->users()->attach($users_prisoers->shift(5));
        });


    }
}
