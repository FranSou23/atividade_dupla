<?php

// Incluindo a biblioteca FPDF
require 'fpdf/fpdf.php';

// Criando uma nova instância do FPDF
$pdf = new FPDF();

// Adicionando uma página
$pdf->AddPage();

// Definindo a fonte
$pdf->SetFont('Arial', 'B', 16);

// Criando o cabeçalho
$pdf->Cell(40, 10, 'Nome', 1, 0, 'L');
$pdf->Cell(80, 10, 'Email', 1, 0, 'C');

// Definindo a fonte para o corpo do relatório
$pdf->SetFont('Arial', '', 12);

// Conectando ao banco de dados (já feito em etapas anteriores)
$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
  $pdf->Cell(40, 10, $row['nome'], 1, 0, 'L');
  $pdf->Cell(80, 10, $row['email'], 1, 0, 'C');
  $pdf->Ln(); // Quebra de linha
}

// Fechando a conexão (opcional, feito automaticamente pelo PDO)
mysqli_close($conn);

// Gerando o output do PDF
$pdf->Output('relatorio.pdf', 'F'); // F: cria o