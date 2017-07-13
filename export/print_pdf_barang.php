<?php 
//error_reporting(0);
session_start();


// =========================== export ==============================================
if ($_GET['act']=='export')
{   
    include"plugins/mpdf/mpdf.php";
    $mpdf = new mPDF();//A4 page in portrait for landscape add -L.
    // $mpdf = new mPDF('win-1252','F4','','',15,10,16,10,10,10);//A4 page in portrait for landscape add -L.
    $mpdf->SetHeader('');
    $mpdf->setFooter('');// Giving page number to your footer.
    $mpdf->useOnlyCoreFonts = true;// false is default
    $mpdf->SetDisplayMode('fullpage');
    ob_start();
    
    include "../report_per_ruangan.php";?>
<?php
    $filename = 'export-'.date('d-m-Y');
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    exit;
}
?>
    