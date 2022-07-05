<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Location;
use App\Models\Image;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create();
        $users = User::all();

        $users->each(function ($user)
        {
            $user->profile()->save(Profile::factory()->make());
        });

        $profiles = Profile::all();

        $profiles->each(function ($profile)
        {

            $profile->location()->save(Location::factory()->make());
        });

        $users->each(function ($user)
        {
            $user->image()->save(Image::factory()->make(['url' => "https://picsum.photos/id/$user->id/100/100"]));
        });

        $users->each(function ($user)
        {
            $group = rand(1, 3);
            for ($i = 1; $i <= $group; $i++) {

                $user->groups()->attach($i);
            }
        });


    }
}
