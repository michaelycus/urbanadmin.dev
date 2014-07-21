<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('facebook'); // Automatically picks appId and secret from config

        $user = $this->facebook->getUser();

        if ($user)
        {
            try
            {
                $teste = $this->facebook->api('/me');
                
                dump($teste);
                dump($user);
                
                $url = 'https://graph.facebook.com/'.$user.'/picture?type=square';
                $imageURL = $this->getFacebookImageFromURL($url);
                
                echo 'image =' . $imageURL;
                
                echo '<img src="'.$imageURL.'">';
                
//                echo http://graph.facebook.com/517267866/?fields=picture&type=large
                
            } catch (FacebookApiException $e)
            {
                $user = null;
            }
        }
        else
        {
            $this->facebook->destroySession();
        }        
        
         echo 'fim... ';
        
    }
    
    function getFacebookImageFromURL($url)
    {
        $headers = get_headers($url, 1);
        if (isset($headers['Location']))
        {
          return $headers['Location'];
        }
    }

}