<?php

use App\Imports\AbArticleCategoryImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class AbArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new AbArticleCategoryImport, 'resources\files\articlecategory.csv');
    }
}
