<?php
namespace Database\Seeders;
use Faker\Factory as Faker ;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // truncate the table first
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence(5);
            $body = $faker->paragraph(4);

            DB::table('lessons')->insert([
                'title' => $title,
                'body' => $body,
                'is_published' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}