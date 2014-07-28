<?php
/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}

if (!function_exists('startsWith'))
{
    function startsWith($haystack, $needle)
    {
        return $needle === "" || strpos($haystack, $needle) === 0;
    }
}

if (!function_exists('endsWith'))
{
    function endsWith($haystack, $needle)
    {
        return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
    }
}

if (!function_exists('dump_exit'))
{
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}

if (!function_exists('generate_key'))
{
    function generate_key($ncaracteres) {
       $caracterespermitidos = "1234567890abcdefghijklmnopqrstuvwxyz";

       for ($i=0; $i < $ncaracteres; $i++) {
           $chave .= $caracterespermitidos{rand(0,35)};
       }
       return $chave;
    }
}

if (!function_exists('get_notification_icon'))
{
    function get_notification_icon($status) {
       switch ($status)
        {
            case REQUERIMENTO_RETORNO_NAO_NOTIFICADO:
                $status_retorno = '<span class="icon yellow tipR" title="Solicitante ainda não recebeu notificação de retorno"><i class="icon16 i-bubble-10"></i></span>';
                break;

            case REQUERIMENTO_RETORNO_NOTIFICADO:
                $status_retorno = '<span class="icon orange tipR" title="Solicitante recebeu notificação de retorno"><i class="icon16 i-bubble-reply"></i></span>';
                break;

            case REQUERIMENTO_RETORNO_DEMORADO:
                $status_retorno = '<span class="icon blue tipR" title="Solicitante está demorando pra responder notificação de retorno"><i class="icon16 i-history-2"></i></span>';
                break;

            case REQUERIMENTO_RETORNO_SERVICO_EFETIVADO:
                $status_retorno = '<span class="icon green tipR" title="Conclusão do requerimento confirmada pelo solicitante"><i class="icon16 i-checkmark-3"></i></span>';
                break;

            case REQUERIMENTO_RETORNO_SERVICO_NAO_EFETIVADO:
                $status_retorno = '<span class="icon red tipR" title="Solicitação não foi realizada"><i class="icon16 i-close-3"></i></span>';
                break;

            case REQUERIMENTO_RETORNO_REITERADO:
                $status_retorno = '<span class="icon orange tipR" title="Requerimento foi reiterado"><i class="icon16 i-rotate"></i></span>';
                break;
            
            default:
                $status_retorno = '<span class="icon yellow tipR" title=""><i class="icon16 i-bubble-10"></i></span>';
                break;
        }
        
       return $status_retorno;
    }
}

if (!function_exists('getFacebookImageFromURL'))
{
    function getFacebookImageFromURL($url)
    {
        $headers = get_headers($url, 1);
        if (isset($headers['Location']))
        {
            return $headers['Location'];
        }
    }
}
?>