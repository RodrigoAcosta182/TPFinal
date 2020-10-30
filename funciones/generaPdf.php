<?php
require('../recursos/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../recursos/img/naruto.jpg',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Movernos a la derecha
        $this->Cell(65);
        // Título
        $this->Cell(60,10,'Garlopa Factura',0,0,'C');
        // Salto de línea
        $this->Ln(50);
        //cabeza
        $this->Cell(45, 10, 'Nombre', 1, 0, 'C', 0);
        $this->Cell(45, 10, 'Apellido', 1, 0, 'C', 0);
        $this->Cell(100, 10, 'Correo', 1, 1, 'C', 0);
    }

// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
    }
}


include 'conexion.php';
$conexion = conectarBaseDeDatos();
$consulta = 'SELECT * FROM usuario';

$resultado = $conexion->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(45, 10, $row['Nombre'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['Apellido'], 1, 0, 'C', 0);
    $pdf->Cell(100, 10, $row['Email'], 1, 1, 'C', 0);
}
$pdf->Output();
?>