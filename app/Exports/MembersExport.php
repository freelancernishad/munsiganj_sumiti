<?php

namespace App\Exports;

use App\Models\member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class MembersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('admin/members.excel', [
            'members' => member::where('status','Active')->get()
        ]);
    }
}
