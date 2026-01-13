<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('Tours')->insert(
            [
                'image'=>"resources/images/tour3.jpg",
                'title'=>"Холзан - питомник хищных птиц (г.Сысерть)",
                'data'=>"2025-08-09",
                'cost'=>'2100'
            ]
        );
        DB::table('Tours')->insert(
            [
                'image'=>"resources/images/tour4.jpg",
                'title'=>"Обзорная экскурсия по Челябинску",
                'data'=>"2025-01-07",
                'cost'=>'650'
            ]
        );
    }
}
