<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe MY_Utilities.
 *
 * Classe de utilitários
 *
 * @author Michael Marques
 * @package libraries 
 */
class MY_Utilities
{
    public function convert_date($date)            
    {
        if ($date == '0000-00-00')
            return '';
        
        return date("d/m/Y", strtotime($date));        
    }
}