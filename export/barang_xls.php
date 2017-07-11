<?php
session_start();

@$user = $_SESSION['username'];
@$pass = $_SESSION['password'];
error_reporting(E_ALL);

require_once 'plugins/excel/PHPExcel.php';
require_once '../../koneksi.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


$query="select * from barang";
$hasil = mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Defik Ardiyanto")
      ->setLastModifiedBy("Defik Ardiyanto")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan Inventaris Barang .")
       ->setKeywords("office 2007 openxml php")
       ->setCategory("Barang Inventaris");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B1', 'DATA INVENTARIS BARANG SD N Sompok')
		->setCellValue('A2', 'No')
       ->setCellValue('B2', 'Nama/ Jenis Barang')
       ->setCellValue('C2', 'Register')
       ->setCellValue('D2', 'Merk/ Tipe')
       ->setCellValue('E2', 'No. Seri Pabrik');
       ->setCellValue('F2', 'Ukuran');
       ->setCellValue('G2', 'Bahan');
       ->setCellValue('H2', 'Tahun Buat/ Beli');
       ->setCellValue('I2', 'Asal');
       ->setCellValue('J2', 'Unit');
       ->setCellValue('K2', 'Harga(Rp)');
       ->setCellValue('L2', 'Harga Total');
       ->setCellValue('M2', 'Keadaan Barang (B/RR/RB)');
       ->setCellValue('N2', 'Ket');
 
$baris=3;
$no = 0;			
while($row=mysql_fetch_array($hasil)){
$no = $no +1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $no)
     ->setCellValue("B$baris", $row['no_surat'])
     ->setCellValue("C$baris", $row['no_surat'])
	  ->setCellValue("D$baris", $row['hal'])
     ->setCellValue("E$baris", $row['tujuan']);
$baris = $baris + 1;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Surat Masuk');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client's web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="barang.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 