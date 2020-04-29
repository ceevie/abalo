<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AbUserSeeder::class,
            AbArticleSeeder::class,
            AbArticleCategorySeeder::class,
        ]);
    }
}
