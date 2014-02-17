<?php

if (!function_exists('send_notification')) {
    function send_notification ($id)
    {
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('requerente_model');

        $requerimento = $ci->requerimento_model->get($id);

        if ($requerimento->notificar && $requerimento->situacao != REQUERIMENTO_SITUACAO_RESOLVIDO)
        {
            $requerente = $ci->requerente_model->get($requerimento->id_solicitante);

            $ci->load->library('email');
            
            $ci->email->from('vereadorranzi@gmail.com', 'Gabinete Vereador Ranzi');
            $ci->email->to($requerente->email);

            $message = "Olá $requerente->nome,\n\n";

            if ($requerimento->situacao == REQUERIMENTO_SITUACAO_ANALISADO)
            {
                $subject = "Requerimento Analisado";
                $message .= "Seu requerimento será analisado pelo nosso gabinete e em breve protocolado na Prefeitura Municipal de Lajeado.\n\n";
            }
            else if ($requerimento->situacao == REQUERIMENTO_SITUACAO_PROTOCOLADO)
            {
                $subject = "Requerimento Protocolado";
                $message .= "Seu requerimento foi protocolado e será executado pelas secretarias responsáveis da Prefeitura Municipal de Lajeado.\n";
                $message .= "O número do seu protocolo junto à prefeitura é o $requerimento->expediente/$requerimento->ano_expediente.\n\n";
                
                $message .= "Para consultar no site da prefeitura, acesse o link abaixo e informe os seguintes dados: \n";
                $message .= "- Exercício: $requerimento->ano_expediente\n";
                $message .= "- Número: $requerimento->expediente\n";
                $message .= "- Nome/CPF/CNPJ: 97623733087 \n\n";
                $message .= "Link: http://www.lajeado.rs.gov.br/home/pagina.asp?titulo=Situa%E7%E3o%20do%20Processo&categoria=Administra%E7%E3o&codigoCategoria=961&imagemCategoria=&INC=includes/show_servicos.asp&conteudo=3451&servico=70043 \n\n";
            }

            $message .= "Atenciosamente,\n";
            $message .= "Gabinete do Vereador Ranzi";

            $ci->email->subject($subject);
            $ci->email->message($message);

            $ci->email->send();
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
//        $mail = new PHPMailer();
//        $mail->IsSMTP(); //Definimos que usaremos o protocolo SMTP para envio.
//        $mail->SMTPAuth = true; //Habilitamos a autenticação do SMTP. (true ou false)
//        $mail->SMTPSecure = "ssl"; //Estabelecemos qual protocolo de segurança será usado.
//        $mail->Host = "smtp.gmail.com"; //Podemos usar o servidor do gMail para enviar.
//        $mail->Port = 465; //Estabelecemos a porta utilizada pelo servidor do gMail.
//        $mail->Username = "vereadorranzi@gmail.com"; //Usuário do gMail
//        $mail->Password = "jcilajeado15"; //Senha do gMail
//        $mail->SetFrom('vereadorranzi@gmail.com', 'Vereador Carlos Ranzi'); //Quem está enviando o e-mail.
//        $mail->AddReplyTo("vereadorranzi@gmail.com","Vereador Carlos Ranzi"); //Para que a resposta será enviada.
        
        
        
        $mail->Subject = "Novo Requerimento Cadastrado!"; //Assunto do e-mail.  
        
        $mail->Body = '<p>O cidadão '. $requerente->nome . ' acabou de cadastrar um novo requerimento.</p>';
        $mail->Body .= "<strong>Descrição</strong><br/>";
        $mail->Body .= "$requerimento->descricao".'<br/><br/>';
        
        $mail->AddAddress('vereadorranzi@gmail.com', "Vereador Ranzi");
        
        if (!$mail->Send())
        {
            $data["message"] = "ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        }
        else
        {
            $data["message"] = "Requerimento cadastrado com sucesso!";
        }
        
        return $data;
        
//        $ci =& get_instance();
//
//        $ci->load->model('requerimento_model');
//        $ci->load->model('requerente_model');
//
//        $requerimento = $ci->requerimento_model->get($id);
//
//        $requerente = $ci->requerente_model->get($requerimento->id_solicitante);
//
//        $ci->load->library('email');
//
//        $ci->email->from('vereadorranzi@gmail.com', 'Gabinete Vereador Ranzi');
//        $ci->email->to('vereadorranzi@gmail.com');
//
//        $subject = "Novo Requerimento Cadastrado!";
//        $message = "O cidadão $requerente->nome acabou de cadastrar um novo requerimento.\n\n";
//
//        $message .= "Descrição:\n";
//        $message .= "$requerimento->descricao\n\n";
//
//        $ci->email->subject($subject);
//        $ci->email->message($message);
//
//        $ci->email->send();
    }
}

if (!function_exists('reset_password')) {
    function reset_password ($email, $senha)
    {
        $ci =& get_instance();

        $ci->load->library('email');

        $ci->email->from('vereadorranzi@gmail.com', 'Gabinete Vereador Ranzi');
        $ci->email->to($requerente->email);

        $subject = "Recuperar senha";

        $message = "Olá,\n\n";

        $message .= "Sua nova senha de acesso é: $senha\n";
        $message .= "Você pode mudar sua senha ao editar seu perfil no site. Basta acessar o sistema, clicar no seu nome no canto superior direito e então em \"Editar Perfil\". \n\n";

        $message .= "http://www.ranzi.com.br/requerimento \n\n";

        $message .= "Atenciosamente,\n";
        $message .= "Gabinete do Vereador Ranzi";

        $ci->email->subject($subject);
        $ci->email->message($message);

        $ci->email->send();
    }
}

if (!function_exists('send_message')) {
    function send_message ($email_to, $message)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP(); //Definimos que usaremos o protocolo SMTP para envio.
        $mail->SMTPAuth = true; //Habilitamos a autenticação do SMTP. (true ou false)
        $mail->SMTPSecure = "ssl"; //Estabelecemos qual protocolo de segurança será usado.
        $mail->Host = "smtp.gmail.com"; //Podemos usar o servidor do gMail para enviar.
        $mail->Port = 465; //Estabelecemos a porta utilizada pelo servidor do gMail.
        $mail->Username = "vereadorranzi@gmail.com"; //Usuário do gMail
        $mail->Password = "jcilajeado15"; //Senha do gMail
        $mail->SetFrom('vereadorranzi@gmail.com', 'Vereador Carlos Ranzi'); //Quem está enviando o e-mail.
        $mail->AddReplyTo("vereadorranzi@gmail.com","Vereador Carlos Ranzi"); //Para que a resposta será enviada.
        
        $mail->Subject = "[Mensagem Protocolo eletrônico]"; //Assunto do e-mail.
        
//        $mail->AltBody = "Corpo em texto puro.";        
        
        $mail->Body = $message;
        $mail->Body .= "<br/><br/>";
        $mail->Body .= "Atenciosamente,<br/> Gabinete do Vereador Ranzi<br/><br/>";
        $mail->Body .= '<a href="http://www.ranzi.com.br/requerimento" target="_blank">http://www.ranzi.com.br/requerimento</a>';
        
        $mail->AddAddress($email_to, "");
        
        if (!$mail->Send())
        {
            $data["message"] = "ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        }
        else
        {
            $data["message"] = "Mensagem enviada com sucesso!";
        }
        
    
//        $ci =& get_instance();
//
//        $ci->load->library('email');
//
//        $ci->email->from('vereadorranzi@gmail.com', 'Gabinete Vereador Ranzi');
//        $ci->email->to($email_to);
//
//        $subject = "[Mensagem Protocolo eletrônico]";
//
//        $message .= " \n\n";
//
//        $message .= "Atenciosamente,\n";
//        $message .= "Gabinete do Vereador Ranzi  \n\n";
//
//        $message .= "http://www.ranzi.com.br/requerimento \n\n";
//
//        $ci->email->subject($subject);
//        $ci->email->message($message);
//
//        $ci->email->send();
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
//        $mail->Username = "vereadorranzi@gmail.com"; //Usuário do gMail
//        $mail->Password = "jcilajeado15"; //Senha do gMail
//        $mail->SetFrom('vereadorranzi@gmail.com', 'Vereador Carlos Ranzi'); //Quem está enviando o e-mail.
//        $mail->AddReplyTo("vereadorranzi@gmail.com","Vereador Carlos Ranzi"); //Para que a resposta será enviada.
        $mail->Username = "michaelycus@gmail.com"; //Usuário do gMail
        $mail->Password = "gmailkaio231485ken"; //Senha do gMail
        $mail->SetFrom('michaelycus@gmail.com', 'Michael A'); //Quem está enviando o e-mail.
        $mail->AddReplyTo("michaelycus@gmail.com","Michael B"); //Para que a resposta será enviada.
        
        return $mail;
    }
}
?>