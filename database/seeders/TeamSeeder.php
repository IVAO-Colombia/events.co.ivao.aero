<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);

        $staff = $user->ownedTeams()->create([
            "name" => "Staff",
            "personal_team" => false,
        ]);

        // $staff->users()->attach($user, ["role" => null]);

        $miembros = $user->ownedTeams()->create([
            "name" => "Departamento de Miembros",
            "personal_team" => false,
        ]);

        $eventos = $user->ownedTeams()->create([
            "name" => "Departamento de Eventos",
            "personal_team" => false,
        ]);

        $entrenamientos = $user->ownedTeams()->create([
            "name" => "Departamento de Entrenamiento",
            "personal_team" => false,
        ]);

        $operacionesatc = $user->ownedTeams()->create([
            "name" => "Departamento de Operaciones ATC",
            "personal_team" => false,
        ]);

        $especiales = $user->ownedTeams()->create([
            "name" => "Departamento de Operaciones Especiales",
            "personal_team" => false,
        ]);
        $operacionesvuelo = $user->ownedTeams()->create([
            "name" => "Departamento de Operaciones de Vuelo",
            "personal_team" => false,
        ]);

        $relacionespublicas = $user->ownedTeams()->create([
            "name" => "Departamento de Relaciones publicas",
            "personal_team" => false,
        ]);

        $hq = $user->ownedTeams()->create([
            "name" => "HQ",
            "personal_team" => false,
        ]);
        $hq = $user->ownedTeams()->create([
            "name" => "Webmaster",
            "personal_team" => false,
        ]);

        $usuarios = $user->ownedTeams()->create([
            "name" => "Usuarios",
            "personal_team" => false,
        ]);

        $user->switchTeam($usuarios);
    }
}
