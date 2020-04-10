<?php

use App\Imports\AbUserImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class AbUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new AbUserImport, 'resources\files\user.csv');
    }
}
