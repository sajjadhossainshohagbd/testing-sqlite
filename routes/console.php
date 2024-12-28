<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

use Illuminate\Support\Facades\Http;

Artisan::command('simulate:logins', function () {
    $users = App\Models\User::limit(2000)->get();
    $loginUrl = route('login'); // Replace with your actual login route

    foreach ($users as $user) {
        $response = Http::post($loginUrl, [
            'email' => $user->email,
            'password' => 'password', // Replace with your seeded password
        ]);

        if ($response->ok()) {
            $this->info("Logged in user {$user->email}");
        } else {
            $this->error("Failed to log in user {$user->email}: {$response->body()}");
        }
    }
});
