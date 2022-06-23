<?php

namespace App\Imports;

use App\Models\member;
use Maatwebsite\Excel\Concerns\ToModel;

class membersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new member([


            'memberId' =>$row[0],
            'Reference' => $row[1],
            'name' => $row[2],
            'age' => $row[3],
            'dob' => $row[4],
            'father_name' => $row[5],
            'Spouse_name' => $row[6],
            'education' => $row[7],
            'occupation' => $row[8],
            'bio' => $row[9],
            'pr_vill' => $row[10],
            'pr_post' => $row[11],
            'pr_thana' => $row[12],
            'pr_dist' => $row[13],
            'pr_division' => $row[14],

            // 'p_vill' => $row[15],
            // 'p_post' => $row[16],
            // 'p_thana' => $row[17],
            // 'p_dist' => $row[18],
            // 'p_division' => $row[19],


            'Present_address' => $row[15],
            'phoneNumber' => $row[16],
            'phoneNumber2' => $row[17],
            'email' => $row[18],
            'website' => $row[19],
            'pesahgot_address' => $row[20],
            'blood_group' => $row[21],
            'nid' => $row[22],
            'samagik_unoyon' => $row[23],
            'hobby' => $row[24],
            'fee' => $row[25],
            'image' => $row[26],
            'status' => $row[27],
            'created_at' => $row[28],
            'updated_at' => $row[29],

        ]);
    }
}
