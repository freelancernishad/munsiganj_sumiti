<?php

namespace App\Exports;

use App\Models\committee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class ExCommitteesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('admin/committee.activeexcel', [
            'activecommittee' => committee::where('status','ex')->get()
        ]);
    }
}
