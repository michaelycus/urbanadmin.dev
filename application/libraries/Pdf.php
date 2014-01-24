<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/fpdf/fpdf.php';

class Pdf extends FPDF
{
    var $B;
    var $I;
    var $U;
    var $HREF;

    function __construct()
    {
        parent::__construct();
    }

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
        $this->Image(base_url() . 'images/brasao.jpg', 15, 15, 30);

        $this->SetFont('Arial', 'B', 12);

        $this->Ln(5);

        $this->Cell(50);
        $this->MultiCell(100, 6, "Prefeitura Municipal de Lajeado", 0, 'C', false);

        $this->Ln(20);

        $this->SetFont('Arial', 'B', 20);
        $this->Cell(10);
        $this->Cell(0, 0, 'REQUERIMENTO', 0, 0, 'C', false);

        $this->Ln(20);

        $this->Cell(0);
    }

// Page footer
    function Footer()
    {
        $this->SetTextColor(100, 100, 110);

        $this->SetY(-30);

        $this->SetFont('Arial', 'B', 11);

        $this->Cell(20);

        $this->MultiCell(130, 5, iconv('utf-8', 'iso-8859-1', "Observação: Todos os itens são de preenchimento obrigatório, exceto o campo e-mail do proprietário, de preenchimento opcional."), 0, 'C', false);

        $this->SetFont('Arial', '', 8);
        $this->MultiCell(0, 6, iconv('utf-8', 'iso-8859-1', "Centro Administrativo: Rua Cel. Júlio May, 242 - Centro - 95900-000 Lajeado/RS - Fone: (51) 3982-1000"), 0, 'C', false);
    }
}