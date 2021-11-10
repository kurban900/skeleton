<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUser extends Command
{

    protected $signature = 'create:user {login} {password} {role?}';

    protected $description = 'Create new admin ex: login 123456 (admin|developer)';

    public function handle()
    {
        $login = $this->argument('login');
        $password = $this->argument('password');
        $role = $this->argument('role') ?? 'user';

        $user = User::create([
            'name' => Str::ucfirst($role),
            'email' => $login,
            'role' => $role,
            'password' => Hash::make($password),
        ]);

        if ($user) {
            $this->info('Пользователь создан');
        } else {
            $this->error('Ошибка при создании пользователя');
        }
    }
}
