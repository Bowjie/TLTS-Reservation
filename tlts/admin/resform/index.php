<? php
	require_once ("dompdf/dompdf_config.inc.php");
	spl_autoload_register('DOMPDF_autoload');
	
	function pdf _create($html, $filename, $paper, $orientation, $stream = True){
		$dompdf = new DOMPDF();
		$dompdf -> set_paper($paper, $orientation);
		$dompdf -> load_html($html);
		$dompdf -> render ();
		$dompdf -> stream($filename.".pdf");
		
	}
	
	$filename = 'tw';
	$dompdf = new DOMPDF();
	$html = file_get_contents('tw.php');
	pdf_create($html, $filename, 'A4', 'portrait');
	?>