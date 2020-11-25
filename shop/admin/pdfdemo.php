<?php
    require '../vendor/autoload.php';
    use Dompdf\Dompdf;    
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('<h1>The EasyLearn Academy </h1> <hr/> Sample PDF generated using DOMPDF Library');
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $dompdf->render();  
    // Output the generated PDF to Browser
    $dompdf->stream();
?>