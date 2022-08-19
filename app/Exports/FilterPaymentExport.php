<?php

namespace App\Exports;

use App\Models\Payment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FilterPaymentExport implements FromCollection, WithMapping, WithHeadings
{


    /**
     * @var
     */

    protected $year;

    /**
     * FilterPaymentExport constructor.
     * @param $year
     */

    function __construct($year)
    {
        $this->year = $year;
    }

    /**
     * @return Collection
     */
    public function collection(): Collection
    {
        return Payment::whereYear('created_at', '=', $this->year)->whereStatus('success')->with('ads', 'user')->get();
    }

    public function map($row): array
    {
        return [
            $row->user->full_name,
            $row->ads['title'],
            ucfirst($row->payment_method),
            $row->amount . ' ' . get_option('currency_sign'),
            $row->payment_completed_at()
        ];
    }

    public function headings(): array
    {
        return ["User Name", "Ads Title", "Payment Method", "Payment Amount", "Paid At"];
    }
}
