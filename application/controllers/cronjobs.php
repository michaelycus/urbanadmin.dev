<?php
class Cronjobs extends CI_Controller {
    
    public function start_cronjobs()
    {
        echo 'Enviando...'; 
        
//        $this->notificacao_mensal();
        $this->teste();
        
        echo 'Concluído!';
    }
    
    public function teste()
    {
        $ci =& get_instance();

        $ci->load->library('MY_PHPMailer');
        
        $mail = $this->get_mail();
        
        $mail->AddAddress('michaelycus@gmail.com', "Michale Marques");
        
        $mail->Subject = "Requerimento Analisado";

        $mail->Body = "<p>Olá fulano,</p>";

        $mail->Body .= "<p>Já fazem 30 dias desde que você cadastrou o seguinte requerimento:</p>";
        $mail->Body .= "<p><i> ".date("d/m/Y h:i:s")." </i></p>";

        $mail->Body .= "<p>Para melhorarmos nosso atendimento, gostaríamos de saber sua avaliação sobre o serviço da prefeitura.</p>";
        $mail->Body .= "<p>Por favor, clique " . anchor('requerimentos/informar_resultado/', 'aqui') . " para informar se seu pedido foi atendido. Não leva nem um minuto!</p>";

        $mail->Body .= "<p>Atenciosamente,<br/>";
        $mail->Body .= "Gabinete do Vereador Ranzi</p>";

        $mail->Send();
    }
    
    public function notificacao_mensal()
    {        
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('requerente_model');

        $ci->load->library('MY_PHPMailer');

        $requerimentos = $ci->requerimento_model->get_requerimentos_notificar();
        
        foreach ($requerimentos as $requerimento)
        {
            $mail = $this->get_mail();

            $mail->AddAddress($requerimento->email, $requerimento->nome_solicitante);
            
            $mail->Subject = "Informe o andamento do seu requerimento";

            $mail->Body = "<p>Olá $requerimento->nome_solicitante,</p>";

            $mail->Body .= "<p>Já fazem 30 dias desde que você cadastrou o seguinte requerimento:</p>";
            $mail->Body .= "<p><i>$requerimento->descricao</i></p>";

            $mail->Body .= "<p>Para melhorarmos nosso atendimento, gostaríamos de saber sua avaliação sobre o serviço prestado pela prefeitura.</p>";
            $mail->Body .= "<p>Por favor, clique " . anchor('requerimentos/informar_resultado/'.$requerimento->code, 'aqui') . " para informar se o seu pedido foi atendido. Não leva nem um minuto!</p>";

            $mail->Body .= "<p>Atenciosamente,<br/>";
            $mail->Body .= "Gabinete do Vereador Ranzi</p>";

            var_dump($mail);

            $mail->Send();
            
            $data['status_retorno'] = REQUERIMENTO_RETORNO_NOTIFICADO;
            $this->requerimento_model->update($requerimento->id,$data);
            
            sleep(15);
        }
    }

    public function message()
    {
        $ci =& get_instance();

        $ci->load->library('MY_PHPMailer');
        
        $mail = $this->get_mail();
        
        $mail->AddAddress('michaelycus@gmail.com', "Michale Marques");
        
        $mail->Subject = "Teste de Newsletter";

        $mail->Body = 
"<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
   'http://www.w3.org/TR/html4/loose.dtd'>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta name='viewport' content='initial-scale=1.0'>    <!-- So that mobile webkit will display zoomed in -->
    <meta name='format-detection' content='telephone=no'> <!-- disable auto telephone linking in iOS -->

    <title>Antwort - responsive Email Layout</title>
    <style type='text/css'>

        /* Resets: see reset.css for details */
        .ReadMsgBody { width: 100%; background-color: #ebebeb;}
        .ExternalClass {width: 100%; background-color: #ebebeb;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
        body {margin:0; padding:0;}
        table {border-spacing:0;}
        table td {border-collapse:collapse;}
        .yshortcuts a {border-bottom: none !important;}


        /* Constrain email width for small screens */
        @media screen and (max-width: 600px) {
            table[class='container'] {
                width: 95% !important;
            }
        }

        /* Give content more room on mobile */
        @media screen and (max-width: 480px) {
            td[class='container-padding'] {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
         }

    </style>
</head>
<body style='margin:0; padding:10px 0;' bgcolor='#ebebeb' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>

<br>

<!-- 100% wrapper (grey background) -->
<table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' bgcolor='#ebebeb'>
  <tr>
    <td align='center' valign='top' bgcolor='#ebebeb' style='background-color: #ebebeb;'>

      <!-- 600px container (white background) -->
      <table border='0' width='600' cellpadding='0' cellspacing='0' class='container' bgcolor='#ffffff'>
        <tr>
          <td class='container-padding' bgcolor='#ffffff' style='background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 14px; line-height: 20px; font-family: Helvetica, sans-serif; color: #333;'>
            <br>

            <!-- ### BEGIN CONTENT ### -->
            <div style='font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F'>
            Basic Email Container
            </div><br>

            The 100% wrapper <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>&lt;table&gt;</span> is included for clients that strip out the <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>&lt;body&gt;</span> tag. Change background color as required.
            <br><br>


            The inner <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>&lt;table&gt;</span> with <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>container</span> class has the following functions:
            <br><br>

            <strong>On desktop:</strong>
            <ul>
                <li>Wraps the email to a max recommended width of <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>600px</span></li>
                <li>Adds <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>30px</span> left and right padding. (Hint: that means you have <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>540px</span> for content.</li>
            </ul>

            <strong>On mobile:</strong>
            <ul>
                <li>Wraps email to fluid <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>95%</span></li>
                <li>Reduces left and right padding to <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>12px</span> for more content real estate</li>
                <li>See breakpoints in CSS</li>
            </ul>
            <br>

            <em style='font-style:italic; font-size: 12px; color: #aaa;'>N.B. The above is provided as explanation only and has not been live tested in clients.</em>
            <br><br>

            <div style='font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F'>
            The world scouts at us whale hunters
            </div>
            <br>

            At the same foam-fountain, Queequeg seemed to drink and reel with me. His dusky nostrils swelled apart;
            he showed his filed and pointed teeth. On, on we flew; and our offing gained, the Moss did homage to the
            blast; ducked and dived her bows as a slave before the Sultan. Sideways leaning, we sideways darted; every
            ropeyarn tingling like a wire; the two tall masts buckling like Indian canes in land tornadoes.
            <br><br>

            So full of this reeling scene were we, as we stood by the plunging bowsprit, that for some time we did not
            notice the jeering glances of the passengers, a lubber-like assembly, who marvelled that two fellow beings
            should be so companionable; as though a white man were anything more dignified than a whitewashed negro.
            <br><br>

            <em style='font-style:italic; font-size: 12px; color: #aaa;'>Excerpt from Moby Dick, by Herman Melville</em>
            <br><br>

            <!-- ### END CONTENT ### -->

          </td>
        </tr>
      </table>
      <!--/600px container -->

    </td>
  </tr>
</table>
<!--/100% wrapper-->
<br>
<br>
</body>
</html>";
        
        $mail->Send();
    }
    
    function get_mail()
    {
        $mail = new PHPMailer();
        $mail->IsSMTP(); //Definimos que usaremos o protocolo SMTP para envio.
        $mail->SMTPAuth = true; //Habilitamos a autenticação do SMTP. (true ou false)
        $mail->SMTPSecure = "ssl"; //Estabelecemos qual protocolo de segurança será usado.
        $mail->SMTPKeepAlive = true; 
        $mail->Host = "smtp.gmail.com"; //Podemos usar o servidor do gMail para enviar.
        $mail->Port = 465; //Estabelecemos a porta utilizada pelo servidor do gMail.
        $mail->IsHTML(true);       

        $mail->Username = "vereadorranzi@gmail.com"; 
        $mail->Password = "jcilajeado15";
        $mail->SetFrom('vereadorranzi@gmail.com', 'Vereador Carlos Ranzi'); //Quem está enviando o e-mail.
        $mail->AddReplyTo("vereadorranzi@gmail.com","Vereador Carlos Ranzi"); //Para que a resposta será enviada.

        return $mail;
    }
    
}
?>