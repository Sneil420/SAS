
<?php
use setasign\Fpdi\Fpdi;

require_once('fpdf/fpdf.php');
//require_once('fpdi/src/Fpdi.php');
require_once('fpdi/src/autoload.php');


// initiate FPDI


$pdf = new Fpdi();

// set the source file

$pageCount = $pdf->setSourceFile(public_path('/admin/silabos/'.$curso->silabo));

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    $templateId = $pdf->importPage($pageNo);
    // get the size of the imported page
    $size = $pdf->getTemplateSize($templateId);
    // create a page (landscape or portrait depending on the imported page size)
    if ($size['width'] > $size['height']) {
        $pdf->AddPage('L', array($size['width'], $size['height']));
    } else {
        $pdf->AddPage('P', array($size['width'], $size['height']));
    }

    // use the imported page
    $pdf->useTemplate($templateId);
    $pdf->Image(public_path('/silaboVisado/'.$listaCotejo->codigo.'.png'),10,10,-150);
    $pdf->SetFont('Arial','B',12);
    $pdf->Text(13, 34, 'Visado');
}

$pdf->Output( $curso->nombre.'.pdf', "D");


