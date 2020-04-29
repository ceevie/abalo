<?php

namespace App\Imports;

use App\AbArticle;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class AbArticleImport implements ToCollection, WithCustomCsvSettings
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            if($row['0'] == 'id'){

            }else {
                AbArticle::create([
                    'id' => intval($row['0']),
                    'ab_name' => $row['1'],
                    'ab_price' => intval($row['2']),
                    'ab_description' => $row['3'],
                    'ab_creator_id' => intval($row['4']),
                    'ab_createdate' => $row['5'],
                ]);
            }
        }
    }

    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'UTF-8',
            'delimiter' => ';'
        ];
    }

}
