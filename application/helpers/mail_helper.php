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
?>