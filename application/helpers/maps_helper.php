<?php

if (!function_exists('generate_charts'))
{
    function generate_charts()
    {
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('bairros_model');
        $ci->load->model('categorias_requerimento_model');
        $ci->load->model('requerente_model');
        $ci->load->model('secretarias_model');

        $bairros = $ci->bairros_model->get_all();
        
        $requerimentos_bairro = $ci->requerimento_model->count_requerimentos_with_bairros();
        $cats_requerimento = $ci->categorias_requerimento_model->get_all();
        $requerimentos_categoria = $ci->requerimento_model->count_requerimentos_with_categorias();
        $vereadores = $ci->requerente_model->get_vereadores();
        $requerimentos_vereadores = $ci->requerimento_model->count_requerimentos_with_vereadores();
        $requerentes_bairro = $ci->requerente_model->count_requerentes_por_bairro();
        
        $requerimentos_situacao = $ci->requerimento_model->count_requerimentos_with_situacao();

        $_SESSION['requerimentos'] = $ci->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);

        $ci->load->helper('file');

        include('maps/populacao_por_bairro.php');
        include('maps/requerentes_por_bairro.php');
        include('maps/requerimentos_por_bairro.php');
        include('maps/requerimentos_por_situacao.php');
        include('maps/requerimentos_por_tipo.php');
        include('maps/requerimentos_por_secretaria.php');
        include('maps/requerimentos_por_vereador.php');        
    }
}

if (!function_exists('generate_custom_chart'))
{
    function generate_custom_chart($id)
    {
        $ci =& get_instance();

        $ci->load->model('bairros_model');
        $ci->load->model('graficos_customizados_model');

        $bairros = $ci->bairros_model->get_all();
        $chart = $ci->graficos_customizados_model->get($id);

        $chart_values = $ci->graficos_customizados_model->get_chart_values($id);

        $max=0;

        $ci->load->helper('file');

        include('maps/generate_custom_chart.php');   
    }
}

if (!function_exists('delete_chart'))
{
    function delete_chart($code)
    {
        unlink('files/custom_charts/'.$code.'.js');
    }
}

 function rgb2hex($rgb) {
    $hex = "#";
    $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

    return $hex; // returns the hex value including the number sign (#)
 }

 function get_static_color($color, $part, $max=NULL, $value)
 {
     if ($color == GRAFICO_COR_AMARELO)
     {
         $p1 = '53, 98';
     }
     elseif ($color == GRAFICO_COR_VERDE)
     {
         $p1 = '90, 75';
     }
     elseif ($color == GRAFICO_COR_LARANJA)
     {
         $p1 = '36, 97';
     }
     elseif ($color == GRAFICO_COR_AZUL)
     {
         $p1 = '210, 49';
     }
     elseif ($color == GRAFICO_COR_ROXO)
     {
         $p1 = '306, 22';
     }
     elseif ($color == GRAFICO_COR_BEGE)
     {
         $p1 = '37, 75';
     }
     elseif ($color == GRAFICO_COR_VERMELHO)
     {
         $p1 = '0, 100';
     }
     elseif ($color == GRAFICO_COR_BRANCO)
     {
         $p1 = '60, 6';
     }

     if ($part == 1) // elemento sem valor
         $p2 = '84';
     elseif ($part == 2) // inicio do gradiente
         $p2 = '75';
     elseif ($part == 3) // fim do gradiente
         $p2 = '45';

     if ($max)
     {
         $p2 = 75 - (30 * $value / $max);
     }

     return 'hsl('.$p1.', '. $p2.')';
 }
 
 if (!function_exists('nome_mes'))
{
    function nome_mes($mes)
    {
        switch ($mes)
        {
            case 1:
            case 01:
                $nome = "Janeiro";
                break;
            case 2:
            case 02:
                $nome = "Fevereiro";
                break;
            case 3:
            case 03:
                $nome = "Março";
                break;
            case 4:
            case 04:
                $nome = "Abril";
                break;
            case 5:
            case 05:
                $nome = "Maio";
                break;
            case 6:
            case 06:
                $nome = "Junho";
                break;
            case 7:
            case 07:
                $nome = "Julho";
                break;
            case 8:
            case 08:
                $nome = "Agosto";
                break;
            case 9:
            case 09:
                $nome = "Setembro";
                break;
            case 10:
                $nome = "Outubro";
                break;
            case 11:
                $nome = "Novembro";
                break;
            case 12:
                $nome = "Dezembro";
                break;

            default:
                break;
        }
        
        return $nome;
    }
}


 /*

- AMARELO -
RGB: 254 243 159
HSL: 53° 98% 81%
Hex: #FEF39F

Hex: #FDEB5C
HSL: 53° 98% 68%
RGB: 253 235 92

Hex: #D4BC03
HSL: 53° 97% 42%
RGB: 212 188 3

- VERDE -
Hex: #D0F3AE
HSL: 90° 74% 82%
RGB: 208 243 174

Hex: #9BE652
HSL: 90° 75% 61%
RGB: 155 230 82

Hex: #5BA117
HSL: 90° 75% 36%
RGB: 91 161 23

- LARANJA -
Hex: #FEDBA7
HSL: 36° 98% 83%
RGB: 254 219 167

Hex: #FDC167
HSL: 36° 97% 70%
RGB: 253 193 103

Hex: #EC8F03
HSL: 36° 97% 47%
RGB: 236 143 3

- AZUL -
Hex: #E1EBF5
HSL: 210° 50% 92%
RGB: 225 235 245

Hex: #BED4E9
HSL: 209° 49% 83%
RGB: 190 212 233

Hex: #4F8AC3
HSL: 209° 49% 54%
RGB: 79 138 195

- ROXO -
Hex: #E4D6E3
HSL: 304° 21% 87%
RGB: 228 214 227

Hex: #CCB0C9
HSL: 306° 22% 75%
RGB: 204 176 201

Hex: #895884
HSL: 306° 22% 44%
RGB: 137 88 132

- BEGE -
Hex: #F5DEBA
HSL: 37° 75% 85%
RGB: 245 222 186

Hex: #EFCB92
HSL: 37° 74% 75%
RGB: 239 203 146

Hex: #E2A038
HSL: 37° 75% 55%
RGB: 226 160 56

- VERMELHO -

Hex: #FFB3B3
HSL: 0° 100% 85%
RGB: 255 179 179

Hex: #FF8282
HSL: 0° 100% 75%
RGB: 255 130 130

Hex: #FF1313
HSL: 0° 100% 54%
RGB: 255 19 19

  */