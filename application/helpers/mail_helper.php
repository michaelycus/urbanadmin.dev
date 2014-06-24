<?php

if (!function_exists('send_notification')) {
    function send_notification ($id)
    {
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('requerente_model');
        
        $ci->load->library('MY_PHPMailer');
        
        $requerimento = $ci->requerimento_model->get($id);

        if ($requerimento->notificar && $requerimento->situacao != REQUERIMENTO_SITUACAO_RESOLVIDO)
        {
            $requerente = $ci->requerente_model->get($requerimento->id_solicitante);            
            
            $mail = get_mail();            

            $mail->AddAddress($requerente->email, $requerente->nome);            
            
            $mail->Body = "<p>Olá $requerente->nome,</p>";
            
            if ($requerimento->situacao == REQUERIMENTO_SITUACAO_ANALISADO)
            {
                $mail->Subject = "Requerimento Analisado";
                $mail->Body .= "<p>Seu requerimento será analisado pelo nosso gabinete e em breve protocolado na Prefeitura Municipal de Lajeado.</p>";
                $mail->Body .= "<p>Telefone do gabinete: (51) 3982 1155<br />";
                $mail->Body .= "Site: <a href='http://ranzi.com.br'>ranzi.com.br</a><br />";
                $mail->Body .= "Facebook: <a href='facebook.com/ranziranzi'>facebook.com/ranziranzi</a></p>";
            }
            else if ($requerimento->situacao == REQUERIMENTO_SITUACAO_PROTOCOLADO)
            {
                $mail->Subject = "Requerimento Protocolado";
                $mail->Body .= "<p>Seu requerimento foi protocolado e será executado pelas secretarias responsáveis da Prefeitura Municipal de Lajeado.</p>";
                $mail->Body .= "<p>O número do seu protocolo junto à prefeitura é o $requerimento->expediente/$requerimento->ano_expediente.</p>";
                
                $mail->Body .= "<p>Para consultar no site da prefeitura, acesse o link abaixo e informe os seguintes dados: </p>";
                $mail->Body .= "<ul>";
                $mail->Body .= "<li> Exercício: $requerimento->ano_expediente</li>";
                $mail->Body .= "<li> Número: $requerimento->expediente</li>";
                $mail->Body .= "<li> Nome/CPF/CNPJ: 97623733087 </li>";
                $mail->Body .= "</ul>";
                $mail->Body .= "<p>Para acessar o sistema da prefeitura, clique <a href='http://www.lajeado.rs.gov.br/home/pagina.asp?titulo=Situa%E7%E3o%20do%20Processo&categoria=Administra%E7%E3o&codigoCategoria=961&imagemCategoria=&INC=includes/show_servicos.asp&conteudo=3451&servico=70043' target='_blank'>aqui</a></p>";
                $mail->Body .= "<p>Telefone do gabinete: (51) 3982 1155<br />";
                $mail->Body .= "Site: <a href='http://ranzi.com.br'>ranzi.com.br</a><br />";
                $mail->Body .= "Facebook: <a href='facebook.com/ranziranzi'>facebook.com/ranziranzi</a></p>";
            }
            
            $mail->Body .= "<p>Atenciosamente,<br/>";
            $mail->Body .= "Gabinete do Vereador Ranzi</p>";            

            if (!$mail->Send())
            {
                $data["message"] = "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
            }
            else
            {
                $data["message"] = "Requerimento cadastrado com sucesso!";
            }

            return $data;
        }
    }
}

if (!function_exists('alert_requirement')) {
    function alert_requirement ($id)
    {
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('requerente_model');
        $ci->load->library('MY_PHPMailer');

        $requerimento = $ci->requerimento_model->get($id);

        $requerente = $ci->requerente_model->get($requerimento->id_solicitante);
        
        $mail = get_mail();
        
        $mail->Subject = "Novo Requerimento Cadastrado!"; //Assunto do e-mail.  
        
        $mail->Body = '<p>O cidadão '. $requerente->nome . ' acabou de cadastrar um novo requerimento.</p>';
        $mail->Body .= "<strong>Descrição</strong><br/>";
        $mail->Body .= "$requerimento->descricao".'<br/><br/>';
        
        $mail->AddAddress('vereadorranzi@gmail.com', "Vereador Carlos Ranzi");
        
        if (!$mail->Send())
        {
            $data["message"] = "ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        }
        else
        {
            $data["message"] = "Requerimento cadastrado com sucesso!";
        }
        
        return $data;
    }
}

if (!function_exists('reset_password')) {
    function reset_password ($requerente, $senha)
    {
        $ci =& get_instance();

        $ci->load->library('MY_PHPMailer');
        
        $mail = get_mail();
        
        $mail->Subject = "Recuperar senha!"; //Assunto do e-mail.  
        
        $mail->Body = '<p>Olá '. $requerente->nome . ',</p>';
        $mail->Body .= "<p>Sua nova senha de acesso é: $senha</p>";
        $mail->Body .= "<p>Você pode mudar sua senha ao editar seu perfil no site. Basta acessar o sistema, clicar no seu nome no canto superior direito e então em \"Editar Perfil\". </p>";
        
        $mail->Body .= "<p><a href='http://www.ranzi.com.br/requerimento' target='_blank'>http://www.ranzi.com.br/requerimento</a></p>";
        
        $mail->Body .= "<p>Atenciosamente,<br/>";
        $mail->Body .= "Gabinete do Vereador Ranzi</p>";
        
        $mail->AddAddress($requerente->email, $requerente->nome);
        
        if (!$mail->Send())
        {
            $data["message"] = "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        }
        else
        {
            $data["message"] = "Requerimento cadastrado com sucesso!";
        }
        
        return $data;
    }
}

if (!function_exists('send_message_secretaria')) {
    function send_message_secretaria ($email_to, $title, $message, $code)
    {
        $ci =& get_instance();

        $ci->load->library('MY_PHPMailer');
        
        $mail = get_mail();
        
        $mail->Subject = $title; //Assunto do e-mail.        
        
        $mail->Body = $message;
        $mail->Body .= "<br/><br/>";
        $mail->Body .= "<p>Atenciosamente,<br/> Gabinete do Vereador Ranzi</p>";
        $mail->Body .= '<p>Mais informações e impressão do requerimento:<br/>';
        $mail->Body .= '<a href="http://www.ranzi.com.br/requerimento/requerimentos/visualizar_requerimento/'.$code.'" target="_blank">http://www.ranzi.com.br/requerimento/requerimentos/visualizar_requerimento/'.$code.'</a></p>';
        
        foreach ($email_to as $e)
        {
            $mail->AddCC($e, "");
        }
        
        if (!$mail->Send())
        {
            $data["message"] = "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        }
        else
        {
            $data["message"] = "Mensagem enviada com sucesso!";
        }
        
        return $data;
    }
}

if (!function_exists('send_message')) {
    function send_message ($email_to, $message)
    {
        $ci =& get_instance();

        $ci->load->library('MY_PHPMailer');
        
        $mail = get_mail();
        
        $mail->Subject = "[Mensagem Protocolo eletrônico]"; //Assunto do e-mail.
        
//        $mail->AltBody = "Corpo em texto puro.";        
        
        $mail->Body = $message;
        $mail->Body .= "<br/><br/>";
        $mail->Body .= "<p>Atenciosamente,<br/> Gabinete do Vereador Ranzi</p>";
        $mail->Body .= '<p><a href="http://www.ranzi.com.br/requerimento" target="_blank">http://www.ranzi.com.br/requerimento</a></p>';
        
        $mail->AddAddress($email_to, "");
        
        if (!$mail->Send())
        {
            $data["message"] = "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        }
        else
        {
            $data["message"] = "Mensagem enviada com sucesso!";
        }
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


//if (!function_exists('send_newsletter')) {
//    function send_message_secretaria ($email_to, $title, $message, $code)
//    {
//        $ci =& get_instance();
//
//        $ci->load->library('MY_PHPMailer');
//        
//        $mail = get_mail();
//        
//        $mail->Subject = $title; //Assunto do e-mail.        
//        
//        $mail->Body = 
//
//"<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
//   'http://www.w3.org/TR/html4/loose.dtd'>
//<html lang='en'>
//<head>
//    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
//    <meta name='viewport' content='initial-scale=1.0'>    <!-- So that mobile webkit will display zoomed in -->
//    <meta name='format-detection' content='telephone=no'> <!-- disable auto telephone linking in iOS -->
//
//    <title>Antwort - responsive Email Layout</title>
//    <style type='text/css'>
//
//        /* Resets: see reset.css for details */
//        .ReadMsgBody { width: 100%; background-color: #ebebeb;}
//        .ExternalClass {width: 100%; background-color: #ebebeb;}
//        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
//        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
//        body {margin:0; padding:0;}
//        table {border-spacing:0;}
//        table td {border-collapse:collapse;}
//        .yshortcuts a {border-bottom: none !important;}
//
//
//        /* Constrain email width for small screens */
//        @media screen and (max-width: 600px) {
//            table[class='container'] {
//                width: 95% !important;
//            }
//        }
//
//        /* Give content more room on mobile */
//        @media screen and (max-width: 480px) {
//            td[class='container-padding'] {
//                padding-left: 12px !important;
//                padding-right: 12px !important;
//            }
//         }
//
//    </style>
//</head>
//<body style='margin:0; padding:10px 0;' bgcolor='#ebebeb' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
//
//<br>
//
//<!-- 100% wrapper (grey background) -->
//<table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' bgcolor='#ebebeb'>
//  <tr>
//    <td align='center' valign='top' bgcolor='#ebebeb' style='background-color: #ebebeb;'>
//
//      <!-- 600px container (white background) -->
//      <table border='0' width='600' cellpadding='0' cellspacing='0' class='container' bgcolor='#ffffff'>
//        <tr>
//          <td class='container-padding' bgcolor='#ffffff' style='background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 14px; line-height: 20px; font-family: Helvetica, sans-serif; color: #333;'>
//            <br>
//
//            <!-- ### BEGIN CONTENT ### -->
//            <div style='font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F'>
//            Basic Email Container
//            </div><br>
//
//            The 100% wrapper <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>&lt;table&gt;</span> is included for clients that strip out the <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>&lt;body&gt;</span> tag. Change background color as required.
//            <br><br>
//
//
//            The inner <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>&lt;table&gt;</span> with <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>container</span> class has the following functions:
//            <br><br>
//
//            <strong>On desktop:</strong>
//            <ul>
//                <li>Wraps the email to a max recommended width of <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>600px</span></li>
//                <li>Adds <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>30px</span> left and right padding. (Hint: that means you have <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>540px</span> for content.</li>
//            </ul>
//
//            <strong>On mobile:</strong>
//            <ul>
//                <li>Wraps email to fluid <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>95%</span></li>
//                <li>Reduces left and right padding to <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>12px</span> for more content real estate</li>
//                <li>See breakpoints in CSS</li>
//            </ul>
//            <br>
//
//            <em style='font-style:italic; font-size: 12px; color: #aaa;'>N.B. The above is provided as explanation only and has not been live tested in clients.</em>
//            <br><br>
//
//            <div style='font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F'>
//            The world scouts at us whale hunters
//            </div>
//            <br>
//
//            At the same foam-fountain, Queequeg seemed to drink and reel with me. His dusky nostrils swelled apart;
//            he showed his filed and pointed teeth. On, on we flew; and our offing gained, the Moss did homage to the
//            blast; ducked and dived her bows as a slave before the Sultan. Sideways leaning, we sideways darted; every
//            ropeyarn tingling like a wire; the two tall masts buckling like Indian canes in land tornadoes.
//            <br><br>
//
//            So full of this reeling scene were we, as we stood by the plunging bowsprit, that for some time we did not
//            notice the jeering glances of the passengers, a lubber-like assembly, who marvelled that two fellow beings
//            should be so companionable; as though a white man were anything more dignified than a whitewashed negro.
//            <br><br>
//
//            <em style='font-style:italic; font-size: 12px; color: #aaa;'>Excerpt from Moby Dick, by Herman Melville</em>
//            <br><br>
//
//            <!-- ### END CONTENT ### -->
//
//          </td>
//        </tr>
//      </table>
//      <!--/600px container -->
//
//    </td>
//  </tr>
//</table>
//<!--/100% wrapper-->
//<br>
//<br>
//</body>
//</html>";        
//        
//        foreach ($email_to as $e)
//        {
//            $mail->AddCC($e, "");
//        }
//        
//        if (!$mail->Send())
//        {
//            $data["message"] = "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
//        }
//        else
//        {
//            $data["message"] = "Mensagem enviada com sucesso!";
//        }
//        
//        return $data;
//    }
//}

?>