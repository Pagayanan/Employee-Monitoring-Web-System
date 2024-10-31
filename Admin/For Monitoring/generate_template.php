<?php
require __DIR__ . '/vendor/autoload.php';
// Include PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

if (isset($_POST['download_template'])) {
    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    // Add the first logo image on the left
    $drawing1 = new Drawing();
    $drawing1->setName('psa logo.png');
    $drawing1->setDescription('psa logo.png');
    $drawing1->setPath(__DIR__ . '/images for template/psa logo.png'); // Path to your first image
    $drawing1->setCoordinates('A1');
    $drawing1->setHeight(90);
    $drawing1->setWorksheet($sheet);
    // Add text in the middle
    $text = "Republic of the Philippines\nPHILIPPINE STATISTIC AUTHORITY\nRegional Statistical Service Office\nNational Capital Region-Provincial Statistical Office V\nMonthly Monitoring Template";
    $sheet->setCellValue('C1', $text);
    $sheet->getStyle('C1')->getFont()->setBold(true)->setSize(12);
    $sheet->getStyle('C1')->getAlignment()->setWrapText(true);
    $sheet->getStyle('C1')->getAlignment()->setHorizontal('center');
    $sheet->getStyle('C1')->getAlignment()->setVertical('center');
    $sheet->getRowDimension(1)->setRowHeight(90);
    // Add the second logo image on the right
    $drawing2 = new Drawing();
    $drawing2->setName('logph.png');
    $drawing2->setDescription('logph.png');
    $drawing2->setPath(__DIR__ . '/images for template/logph.png'); // Path to your second image
    $drawing2->setCoordinates('D1'); // Adjust coordinates based on the image width and sheet layout
    $drawing2->setHeight(120);
    $drawing2->setWorksheet($sheet);
    // Set header titles
    $headers = [
        'YEAR',
        'MONTH',
        'DATE',
        'AREA',
        'MASTERLST Total [col3+col4]',
        'Masterlist',
        'MASTERLST Newly listed',
        'Total Uploaded [col 6 + col 8]',
        'UPLOADED Masterlist number',
        'UPLOADED Masterlist Percent [col6/col3]',
        'UPLOADED Newly listed Number',
        'MACHINE PROCESSED Masterlist + Newly listed Number',
        'MACHINE PROCESSED Masterlist + Newly listed Percent [col 9/col 2]',
        'PSO REVIEWED New listed Number',
        'PSO REVIEWED Percent [col 11/col 1]'
    ];

    // Insert headers into the specified row
    $sheet->fromArray($headers, null, 'A2');

    // Style the headers
    $headerStyle = [
        'font' => [
            'bold' => true,
            'color' => ['rgb' => '0412a5'],
        ],
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'startColor' => ['rgb' => 'cbc345'], // Green background
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => ['rgb' => '000000'],
            ],
        ],
    ];

    // Apply header style to the header row
    $sheet->getStyle('A2:O2')->applyFromArray($headerStyle);

    // Auto-size columns
    foreach (range('A', 'O') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }
    // Output the file to the browser as an Excel file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="monthly monitoring dashboard_2024.xlsx"');
    header('Cache-Control: max-age=0');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}
