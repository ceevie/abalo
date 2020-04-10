<?php

namespace App\Imports;

use App\AbUser;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class AbUserImport implements ToCollection, WithCustomCsvSettings
{
    public function collection(Collection $rows)
    {


        foreach ($rows as $row)
        {

            if($row['0'] == 'id'){

            }else{

                AbUser::create([
                    'id' => intval($row['0']),
                    'ab_name' => $row['1'],
                    'ab_password' => $row['2'],
                    'ab_mail' => $row['3'],
                ]);

            }


        }


    }

    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'ISO-8859-1',
            'delimiter' => ';'
        ];
    }
}