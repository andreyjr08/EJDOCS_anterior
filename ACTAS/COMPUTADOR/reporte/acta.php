<?php 
	require '../fpdf/fpdf.php';


	/**
	 * 
	 */
	class PDF extends FPDF
	{
		
		function Header()
		{
			$hoy = getdate();

			$this-> Image('../imagenes/logo2.jpg',40,20,40);

			$this->SetFont('Arial','',12);
			//$this->Cell(10,5,':',0);
			

			$this->Ln(20);
		}
		function Footer()
		{


		}
	}

 ?>