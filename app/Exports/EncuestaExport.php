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

class EncuestaExport implements FromView, WithStyles, ShouldAutoSize
{
    public $archivo;
    public $dimensiones;
    public $fechaActual;
    public $horaActual;

    public function __construct($archivo,$dimensiones,$fechaActual,$horaActual)
    {
        $this->archivo = $archivo;
        $this->dimensiones = $dimensiones;
        $this->fechaActual = $fechaActual;
        $this->horaActual = $horaActual;

    }
    public function styles(Worksheet $sheet)
    {
        // Aplicar estilos a las celdas
        $sheet->getStyle('A1:B1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ]);

        // Agregar más estilos según sea necesario...
    }
    public function view(): View
    {
        return view('procesamiento.plantillaexcelexport', [
            'archivo' => $this->archivo,
            'dimensiones' => $this->dimensiones,
            'fechaActual' => $this->fechaActual,
            'horaActual' => $this->horaActual
        ]);
    }
}
