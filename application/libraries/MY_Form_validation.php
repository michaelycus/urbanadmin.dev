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
        if (ereg("([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $date))
        {
            $arr = split("/", $date);

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
            $date=split("/",$date);
            // where the $_POST['date'] is a value posted by form in mm/dd/yy format
            $dated=$date[2]."-".$date[1]."-".$date[0];
            // The string dated is now in yyyy-mm-dd format

            return $dated;
        }        
    }
    
    public function convert_sql_to_human($date)
    {
        $date=split("-",$date);
        // where the date is a sql value like yyyy-mm-dd
        $dated=$date[2]."/".$date[1]."/".$date[0];
        // The string dated is now in mm/dd/yyyy format
        
        return $dated;
    }

}