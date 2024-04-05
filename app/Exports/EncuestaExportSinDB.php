<?php

namespace App\Exports;

use App\Invoice;
use App\Models\Archivo;
use App\Models\Dimension;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EncuestaExportSinDB implements FromView, WithStyles, ShouldAutoSize
{
    public $encuesta;
    public $dimensiones;
    public function __construct($encuesta, $dimensiones)
    {
        $this->encuesta = $encuesta;
        $this->dimensiones = $dimensiones;
    }
    public function styles(Worksheet $sheet)
    {
        // Aplicar estilos a las celdas
        // $sheet->getStyle('A1:B1:C1:D1:E1')->applyFromArray([
        //     'font' => [
        //         'bold' => true,
        //     ],
        //     'alignment' => [
        //         'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        //     ],
        //     // 'borders' => [
        //     //     'allBorders' => [
        //     //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        //     //     ],
        //     // ],
        // ]);

        // Agregar más estilos según sea necesario...
    }
    public function view(): View
    {
        return view('procesamiento.plantillaexcelexportSinDB', [
            'encuesta' => $this->encuesta,
            'dimensiones' => $this->dimensiones,
        ]);
    }
}
