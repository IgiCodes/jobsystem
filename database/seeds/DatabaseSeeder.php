<?php

use App\Organisation;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() : void
    {
        $this->call(UsersTableSeeder::class);

        User::all()->chunk(10)->each(function ($user_chunk) {
            /** @var \Illuminate\Support\Collection $user_chunk */

            /** @var Organisation $organisation */
            $organisation = factory(Organisation::class, 1)->create()->first();
            $organisation->createdByUser()->associate($user_chunk->first());
            $organisation->save();
            $organisation->users()->saveMany($user_chunk);
        });
    }
}
