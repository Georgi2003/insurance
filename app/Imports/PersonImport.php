<?php

namespace App\Imports;

use App\Models\Person;
use Maatwebsite\Excel\Concerns\ToModel;

class PersonImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(is_numeric($row[1]) && is_numeric($row[2])){
            return new Person([
                'name' => $row[0],
                'age' => intval($row[1]),
                'phone' => intval($row[2]),
                'monthly_fee' => intval($row[3]),
            ]);    
        }
    }
}
