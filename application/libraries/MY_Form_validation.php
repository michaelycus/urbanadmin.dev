<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe MY_Form_validation.
 *
 * Esta classe estende a biblioteca de validação nativa do CodeIgniter.
 *
 * @author Carlos Eduardo da Silva, Michael Marques
 * @package libraries
 */
class MY_Form_validation extends CI_Form_validation
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Verifica se a data informada está na estrutura correta do calendário
     * gregoriano.
     *
     * @param String $date Uma string contendo a data no formato dd/mm/yyyy
     * @return boolean
     */
    public function valid_date($date)
    {
        if (preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $date))
        {
            $arr = explode("/", $date);

            $dd = $arr[0];
            $mm = $arr[1];
            $yyyy = $arr[2];

            return ( checkdate($mm, $dd, $yyyy) );
        }
        else
        {
            return FALSE;
        }
    }

    public function convert_human_to_sql($date)
    {
        if (!empty($date))
        {
            $date=explode("/",$date);
            // where the $_POST['date'] is a value posted by form in mm/dd/yy format
            $dated=$date[2]."-".$date[1]."-".$date[0];
            // The string dated is now in yyyy-mm-dd format

            return $dated;
        }
    }

    public function convert_sql_to_human($date)
    {
        $date=explode("-",$date);
        // where the date is a sql value like yyyy-mm-dd
        $dated=$date[2]."/".$date[1]."/".$date[0];
        // The string dated is now in mm/dd/yyyy format

        return $dated;
    }

    /**
     *
     * valid_cpf
     *
     * Verifica CPF é válido
     */
    function valid_cpf($cpf)
    {
        $CI = &get_instance();

        $CI->form_validation->set_message('valid_cpf', 'O %s informado não é válido.');

        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11 || preg_match('/^([0-9])\1+$/', $cpf))
        {
            return false;
        }

        // 9 primeiros digitos do cpf
        $digit = substr($cpf, 0, 9);

        // calculo dos 2 digitos verificadores
        for ($j = 10; $j <= 11; $j++)
        {
            $sum = 0;
            for ($i = 0; $i < $j - 1; $i++)
            {
                $sum += ($j - $i) * ((int) $digit[$i]);
            }

            $summod11 = $sum % 11;
            $digit[$j - 1] = $summod11 < 2 ? 0 : 11 - $summod11;
        }

        return $digit[9] == ((int) $cpf[9]) && $digit[10] == ((int) $cpf[10]);
    }

    function valid_cnpj($cnpj)
    {
        $cnpj = str_pad(str_replace(array('.', '-', '/'), '', $cnpj), 14, '0', STR_PAD_LEFT);
        if (strlen($cnpj) != 14)
        {
            return false;
        }
        else
        {
            for ($t = 12; $t < 14; $t++)
            {
                for ($d = 0, $p = $t - 7, $c = 0; $c < $t; $c++)
                {
                    $d += $cnpj{$c} * $p;
                    $p = ($p < 3) ? 9 : --$p;
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cnpj{$c} != $d)
                {
                    return false;
                }
            }
            return true;
        }
    }

    function valid_cpf_cnpj($cpf_cnpj)
    {
        return ($this->valid_cpf($cpf_cnpj) || $this->valid_cnpj($cpf_cnpj));
    }
}