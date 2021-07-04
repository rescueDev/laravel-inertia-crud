<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory()->count(18)->make()
            ->each(function ($contact) {
                $user = User::inRandomOrder()->first();
                $contact->user()->associate($user);
                $contact->save();
            });
    }
}
