<?php
require_once 'vendor/autoload.php';

// Load the DOCX file
$docxFile = 'http://localhost/replaceText_PHPWord/src/docx/output.docx';

// Initialize PHPWord Object
$phpWord = \PhpOffice\PhpWord\IOFactory::load($docxFile);

// Save as PDF
$pdfWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
$pdfFile = 'output.pdf';
$pdfWriter->save($pdfFile);

// Display PDF for printing
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="output.pdf"');
header('Content-Length: ' . filesize($pdfFile));
readfile($pdfFile);
?>