<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MakeFilamentUser extends Command
{
    protected $signature = 'make:filament-user';
    protected $description = 'Crea un usuario para Filament Admin';

    public function handle()
    {
        $name = $this->ask('Nombre');
        $email = $this->ask('Email');
        $password = $this->secret('Contraseña');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info("✅ Usuario {$user->email} creado con éxito.");
    }
}
