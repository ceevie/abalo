<?php

namespace App\Imports;

use App\AbArticleCategory;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class AbArticleCategoryImport implements ToCollection, WithCustomCsvSettings
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            if($row['0'] == 'id'){

            }else {
                AbArticleCategory::create([
                    'id' => intval($row['0']),
                    'ab_name' => $row['1'],
                    'ab_parent' => intval($row['2']),
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