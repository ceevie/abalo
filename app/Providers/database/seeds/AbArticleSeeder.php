<?php

use App\Imports\AbArticleImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class AbArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new AbArticleImport, 'resources/files/articles.csv');
    }
}
