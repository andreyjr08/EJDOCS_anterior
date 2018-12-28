<?php 
	include 'acta.php';
	require '../clases/funciones.php';
	use clases_pdo\funciones;
	$usuarios = new funciones();
	
   $id = $_GET['id'];
   $Result = $usuarios ->select_All($id);
//   $Result2 = $usuarios ->select_person($id);

	$pdf = new PDF('P', 'mm', 'A4');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(30,10,10);
	$pdf->Ln(20);
	$pdf->Cell(9,5,'Cali',0);
	$pdf->Cell(70,5,date('d/m/Y'),0);
	$pdf->Ln(10);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,6,'',0);
    $pdf->Cell(20,6,'ElectroJaponesa S.A',0);
	$pdf->Ln(15);
	$pdf->SetFont('Arial','',11);

	$pdf->Cell(40,5,'PARA',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(38,5,utf8_decode(''.utf8_decode($Result['NOMBRES'])),0);
	$pdf->Cell(70,5,utf8_decode(' '.utf8_decode($Result['APELLIDOS'])),0);
	$pdf->Ln(5);
	$pdf->Cell(40,5,'#CEDULA',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['USUARIO_ID'])),0);
	$pdf->Ln(10);
	$pdf->Cell(40,5,'DE',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['DE'])),0);
	$pdf->Ln(5);
	$pdf->Cell(40,5,'ASUNTO',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(40,5,utf8_decode(''.utf8_decode($Result['ASUNTO'])),0);
	$pdf->Ln(10);
	
	$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(160,6, utf8_decode('Yo '.utf8_decode($Result['NOMBRES'])." ".utf8_decode($Result['APELLIDOS']).' mediante el presente documento confirmo que recibo a sastisfaccion el siguiente dispositivo con sus accesorios, los cuales se encuentran en buen estado fisico y de funcionamiento. Dicho equipo se encuentra como activo fijo de la compañia bajo los siguientes numeros y caracteristicas:'),0,'J');

	 $pdf->Ln(5);
	 $pdf->SetFont('Arial','',11);
    $pdf->Cell(40,5,'COMPUTADOR',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['marca'])),0);
	$pdf->Ln(5);
    $pdf->Cell(40,5,'ACTIVO FIJO',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['ACTIVO_FIJO'])),0);
	$pdf->Ln(5);
    $pdf->Cell(40,5,'SERIAL',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['SERIAL'])),0);
	$pdf->Ln(5);
    $pdf->Cell(40,5,'PROCESADOR',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['PROCESADOR'])),0);
	$pdf->Ln(5);
    $pdf->Cell(40,5,'MEMORIA RAM',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['MEMORIA_RAM'])),0);
	$pdf->Ln(5);
    $pdf->Cell(40,5,'SERIAL CARGADOR',0);
	$pdf->Cell(10,5,':',0);
	$pdf->Cell(30,5,utf8_decode(''.utf8_decode($Result['SERIAL_CARGADOR'])),0);
	$pdf->Ln(10);
$pdf->SetFont('Arial','',11);
	$pdf->MultiCell(160,6, utf8_decode('NOTA: Cualquier averia o daño a los equipos, causados por mal uso y cuyas reparaciones no se encuentren contempladas en la garantia, Deberan ser asumidas por el trabajador 50% y la compañia 50%, asi mismo en caso de no devolver el equipo en iguales condiciones a las aqui especificadas con los dispositivos adicionales entregados; en caso de robo el responsable debe presentar su debida denuncia policial y se exonerara de cualquier pago, en caso de ser por negligencia, descuido o no presentar dicha denuncia. El trabajador debe asumir el 100% del valor comercial del equipo aqui especificado. Por lo tanto, autorizo descontar del salario o prestaciones sociales el valor del equipo segun depreciacion en activos fijos.'),0,'J');
	$pdf->Ln(5);
	$pdf->Cell(100,5,utf8_decode('Recibe:'),0);
	$pdf->Cell(30,5,utf8_decode('Entrega:'),0);
  	$pdf->Ln(25);
  	$pdf->Cell(100,5,utf8_decode(''.utf8_decode($Result['NOMBRES']).' '.utf8_decode($Result['APELLIDOS'])),0);
	$pdf->Cell(40,5,'HARRY QUINTERO',0);
	$pdf->Ln(5);
	$pdf->Cell(100,5,'FIRMA',0);
	$pdf->Cell(40,5,'JEFE DE TECNOLOGIA',0);
	$pdf->Ln(5);
	$pdf->Cell(80,5,'CEDULA',0);
	$pdf->Output();

 ?>