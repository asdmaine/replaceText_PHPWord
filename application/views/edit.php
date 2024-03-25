<?php
require_once 'vendor/autoload.php';

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('src/docx/QSF HRD 041 - Gate Pass Permit.docx');
$templateProcessor->setValue('date', 'ini tanggal');
$templateProcessor->setValue('penjelasan', 'PENJELASAN NYA DISINI');

// style checkbox
$CheckedBox='<w:sym w:font="Wingdings" w:char="F0FE"/>';
$unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

$templateProcessor->setValue('urusan_perusahaan', $CheckedBox);
$templateProcessor->setValue('urusan_keluarga', $unCheckedBox);
$templateProcessor->setValue('sakit', $unCheckedBox);
$templateProcessor->setValue('lain-lain', $unCheckedBox);

$templateProcessor->setImageValue('sign1', array('path' => 'http://localhost/replaceText_PHPWord/src/img/signature.png', 'width' => 100, 'height' => 50, 'ratio' => false));
$templateProcessor->setImageValue('sign2', array('path' => 'http://localhost/replaceText_PHPWord/src/img/signature2.png', 'width' => 100, 'height' => 50, 'ratio' => false));
$templateProcessor->setImageValue('sign3', array('path' => 'http://localhost/replaceText_PHPWord/src/img/signature.png', 'width' => 100, 'height' => 50, 'ratio' => false));
$templateProcessor->setImageValue('sign4', array('path' => 'http://localhost/replaceText_PHPWord/src/img/signature.png', 'width' => 100, 'height' => 50, 'ratio' => false));
$templateProcessor->setImageValue('sign5', array('path' => 'http://localhost/replaceText_PHPWord/src/img/signature2.png', 'width' => 100, 'height' => 50, 'ratio' => false));




$templateProcessor->saveAs('./src/docx/output.docx');
?>