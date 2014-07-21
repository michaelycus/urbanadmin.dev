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