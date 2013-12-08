<?php

require('fpdf.php');

class PDF extends FPDF
{

    var $B;
    var $I;
    var $U;
    var $HREF;

    function PDF($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        // Call parent constructor
        $this->FPDF($orientation, $unit, $size);
        // Initialization
        $this->B = 0;
        $this->I = 0;
        $this->U = 0;
        $this->HREF = '';
    }

    function WriteHTML($html)
    {
        // HTML parser
        $html = str_replace("\n", ' ', $html);
        $a = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($a as $i => $e)
        {
            if ($i % 2 == 0)
            {
                // Text
                if ($this->HREF)
                    $this->PutLink($this->HREF, $e);
                else
                    $this->Write(5, $e);
            }
            else
            {
                // Tag
                if ($e[0] == '/')
                    $this->CloseTag(strtoupper(substr($e, 1)));
                else
                {
                    // Extract attributes
                    $a2 = explode(' ', $e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach ($a2 as $v)
                    {
                        if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTag($tag, $attr);
                }
            }
        }
    }

    function OpenTag($tag, $attr)
    {
        // Opening tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, true);
        if ($tag == 'A')
            $this->HREF = $attr['HREF'];
        if ($tag == 'BR')
            $this->Ln(5);
    }

    function CloseTag($tag)
    {
        // Closing tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, false);
        if ($tag == 'A')
            $this->HREF = '';
    }

    function SetStyle($tag, $enable)
    {
        // Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach (array('B', 'I', 'U') as $s)
        {
            if ($this->$s > 0)
                $style .= $s;
        }
        $this->SetFont('', $style);
    }

    function PutLink($URL, $txt)
    {
        // Put a hyperlink
        $this->SetTextColor(0, 0, 255);
        $this->SetStyle('U', true);
        $this->Write(5, $txt, $URL);
        $this->SetStyle('U', false);
        $this->SetTextColor(0);
    }

// Page header
    function Header()
    {
        // Logo
        $this->Image('brasao.jpg', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 12);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->MultiCell(100, 6, "Estado do Rio Grande do Sul - Brasil\nPrefeitura Municipal de Lajeado\nSecretaria de Planejamento", 0, 'C', false);
        // Line break
        $this->Ln(20);

        $this->SetFont('Arial', 'B', 20);
        $this->Cell(10);
        $this->Cell(0, 0, 'REQUERIMENTO GERAL', 0, 0, 'C', false);

        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);


$html = '<b>PROPRIETARIO:</b> Vereador Carlos Eduardo Ranzi            <b>EMAIL:</b>   vereadorranzi@gmail.com<br>';
$html .= '<b>PROFISSAO:</b> Vereador        <b>CPF/CNPJ:</b> 97623733087    <b>FONE:</b>    39821155 <br>';
$html .= '<b>ENDEREÇO:</b>  Av. Benjamin Constant, 670 - 3º andar       <b>BAIRRO:</b> Centro<br>';
$html .= '<b>MUNICÍPIO:</b>   Lajeado           <b>ESTADO:</b>   RS                     <b>CEP:</b>       95900-000<br>';

$pdf->WriteHTML(iconv('utf-8','iso-8859-1',$html));

$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0, 'Requer:', 0, 0, 'L', false);

$html = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, ';

$pdf->Ln(10);
$pdf->Cell(20);
//$pdf->MultiCell(0, 60, iconv('utf-8','iso-8859-1',$html), 0, 'L', false);
//$pdf->MultiCell(10, 10, "teste", 0, 'L', false);

//$pdf->Cell(0, 0, $html, 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 12);
$pdf->WriteHTML(iconv('utf-8','iso-8859-1',$html));

$pdf->Ln(10);
$pdf->Cell(20);

$pdf->Cell(0, 0, 'Nesses termos, pede referimento.', 0, 0, 'L', false);
$pdf->Ln(10);

$pdf->Cell(0, 0, 'Lajeado, 4 de dezembro de 2013', 0, 0, 'R', false);


$pdf->Ln(40);

$pdf->Cell(0, 0, '__________________________', 0, 0, 'C', false);
$pdf->Ln(5);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(0, 0, 'Nome do requerente', 0, 0, 'C', false);


conitnuar aki

$pdf->Output();
?>