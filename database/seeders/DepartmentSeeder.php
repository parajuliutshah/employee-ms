<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $faker = Faker::create();
            $users =  User::all()->pluck('id')->toArray();
            $names = ['Frontend','Backend','HR','Finance','Marketing','Networking'];
        foreach(range(1,50) as $index) {
            $a = array_rand($names);
            DB::table('departments')->insert([
                'name' => $names[$a],
                'user_id' => $faker->randomElement($users),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
