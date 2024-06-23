<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ChangeUserEmailSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'faiz@gmail.com')->first();
        if ($user) {
            $user->email = 'faiz@gmail.com';
            $user->save();
            $this->command->info('Email for user faiz@gmail.com changed to faiz@gmail.com');
        } else {
            $this->command->error('User faiz@gmail.com not found');
        }
    }
}
