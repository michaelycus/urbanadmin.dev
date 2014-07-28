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

            $mail->Body = MESSAGE_HEADER;

            if ($requerimento->situacao == REQUERIMENTO_SITUACAO_ANALISADO)
            {
                $mail->Subject = "Requerimento sendo analisado";
                $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            Seu requerimento está sendo analisado!
            </div><br>';
                $mail->Body .= "Olá $requerente->nome,<br><br>";
                $mail->Body .= "Seu requerimento será analisado pelo nosso gabinete e em breve protocolado na Prefeitura Municipal de Lajeado.<br><br>";
            }
            else if ($requerimento->situacao == REQUERIMENTO_SITUACAO_PROTOCOLADO)
            {
                $mail->Subject = "Requerimento Protocolado";
                $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            Seu requerimento foi protocolado!
            </div><br>';
                $mail->Body .= "Olá $requerente->nome,<br><br>";
                $mail->Body .= "Seu requerimento foi protocolado e será executado pelas secretarias responsáveis da Prefeitura Municipal de Lajeado.<br><br>";
                $mail->Body .= "O número do seu protocolo junto à prefeitura é o <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>$requerimento->expediente/$requerimento->ano_expediente</span>.<br>";

                $mail->Body .= "Para consultar no site da prefeitura, acesse o link abaixo e informe os seguintes dados: <br>";
                $mail->Body .= "<ul>";
                $mail->Body .= "<li> Exercício: <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>$requerimento->ano_expediente</span></li>";
                $mail->Body .= "<li> Número: <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>$requerimento->expediente</span></li>";
                $mail->Body .= "<li> Nome/CPF/CNPJ: <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>97623733087</span></li>";
                $mail->Body .= "</ul><br>";
                $mail->Body .= "Para acessar o sistema da prefeitura, clique <a href='http://www.lajeado.rs.gov.br/home/pagina.asp?titulo=Situa%E7%E3o%20do%20Processo&categoria=Administra%E7%E3o&codigoCategoria=961&imagemCategoria=&INC=includes/show_servicos.asp&conteudo=3451&servico=70043' target='_blank' style='color:#2469A0;'>aqui</a><br><br>";
            }

            $mail->Body .= "Telefone do gabinete: <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>(51) 3982 1155</span><br>";
            $mail->Body .= "Site: <a href='http://ranzi.com.br' style='color:#2469A0;'>ranzi.com.br</a><br>";
            $mail->Body .= "Facebook: <a href='facebook.com/ranziranzi' style='color:#2469A0;'>facebook.com/ranziranzi</a><br>";

            $mail->Body .= "<br>Atenciosamente,<br>";
            $mail->Body .= "Gabinete do Vereador Ranzi<br><br>";
            $mail->Body .= MESSAGE_ENDING;

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

        $mail->Body = MESSAGE_HEADER;

        $mail->Body .= '<br>O cidadão <span style="font-family: Andale Mono, Courier, monospace; color: #666;">'. $requerente->nome . ';</span> acabou de cadastrar um novo requerimento.<br><br>';
        $mail->Body .= "<strong>Descrição</strong><br>";
        $mail->Body .= "$requerimento->descricao".'<br><br>';

        $mail->Body .= MESSAGE_ENDING;

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

        $mail->Body = MESSAGE_HEADER;

        $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            Nova senha de acesso - UrbanAdmin
            </div><br>';

        $mail->Body .= 'Olá '. $requerente->nome . ',<br>';
        $mail->Body .= "Sua nova senha de acesso é: <span style='font-family: Andale Mono, Courier, monospace; color: #666;'>$senha</span><br>";
        $mail->Body .= "<br>Você pode mudar sua senha ao editar seu perfil no site. Basta acessar o sistema, clicar no seu nome no canto superior direito e então em <strong>Editar Perfil</strong>. <br><br>";

        $mail->Body .= "<a href='http://www.ranzi.com.br/requerimento' target='_blank' style='color:#2469A0;'>http://www.ranzi.com.br/requerimento</a><br><br>";

        $mail->Body .= "Atenciosamente,<br>";
        $mail->Body .= "Gabinete do Vereador Ranzi<br>";

        $mail->Body .= MESSAGE_ENDING;

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

        $mail->Body = MESSAGE_HEADER;

        $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            Novo requerimento gerado!
            </div><br>';

        $mail->Body .= $message;

        $mail->Body .= "<br><br>";
        $mail->Body .= "Atenciosamente,<br> Gabinete do Vereador Ranzi<br><br>";
        $mail->Body .= 'Para mais informações e impressão do requerimento, <a href="http://www.ranzi.com.br/requerimento/requerimentos/visualizar_requerimento/'.$code.'" target="_blank" style="color:#2469A0;">clique aqui</a>.';

        $mail->Body .= "<br><br>";
        $mail->Body .= "<em style='font-style:italic; font-size: 12px; color: #aaa;'>[Essa é uma mensagem automática gerada pelo Gabinete do Vereador Ranzi]</em>";

        $mail->Body .= MESSAGE_ENDING;

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

if (!function_exists('send_newsletter')) {
    function send_newsletter ($newsletter)
    {
        $ci =& get_instance();
        
        $ci->load->library('MY_PHPMailer');        

        $emails = explode(',', $newsletter->enviar_para );
        
        foreach ($emails as $email)
        {
            $mail = get_mail();

            $mail->AddAddress($email, '');
            
            $mail->Subject = $newsletter->assunto;
            
            $mail->Body = MESSAGE_HEADER;
            $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            '. $newsletter->assunto .'
            </div><br>';

            $mail->Body .= $newsletter->mensagem;
            
            $mail->Body .= '<br><br><div style="border-top: 1px solid #ddd;">
        <br>
        <em style="font-style:italic; font-size: 12px; color: #999;">Essa é uma mensagem gerada pelo Gabinete do Vereador Ranzi. 
        Para deixar de receber mensagens como essa, ' . anchor('newsletters/descadastrar', 'clique aqui' , 'target="_blank" style="color: #999"') .'.</em>
     </div>';
            
            $mail->Body .= MESSAGE_ENDING;

            if (!$mail->Send())
            {
               return "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
            }
            
            sleep(1);
        }
    }
}

if (!function_exists('enviar_notificacao_por_email')) {
    function enviar_notificacao_por_email ($requerimento, $requerente)
    {
        $ci =& get_instance();
        
        $ci->load->library('MY_PHPMailer');     
        
        $ci->load->model('requerimento_model');

        $mail = get_mail();

        $mail->AddAddress($requerente->email, $requerente->nome);

        $mail->Subject = "Informe o andamento do seu requerimento";

        $mail->Body = MESSAGE_HEADER;
        $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
        Informe o andamento do seu requerimento!
        </div><br>';
        
        $date1 = new DateTime(date('Y-m-d'));
        $date2 = new DateTime($requerimento->data_requerimento);
        $interval = $date1->diff($date2);
        
        $mail->Body .= "Olá $requerente->nome,<br><br>";        

        $mail->Body .= "Já fazem ". $interval->days ." dias desde que você cadastrou o seguinte requerimento:<br>";
        $mail->Body .= "<span style='font-family: Andale Mono, Courier, monospace; color: #666;'>$requerimento->descricao</span><br><br>";

        $mail->Body .= "Para melhorarmos nosso atendimento, gostaríamos de saber sua avaliação sobre o serviço prestado pela prefeitura.<br>";
        $mail->Body .= "Por favor, clique " . anchor('requerimentos/informar_resultado/'.$requerimento->code, 'aqui', 'style="color:#2469A0; font-weight:bold"') . " para informar se o seu pedido foi atendido. Não leva nem um minuto!<br><br>";

        $mail->Body .= "Atenciosamente,<br>";
        $mail->Body .= "Gabinete do Vereador Ranzi<br><br>";

        $mail->Body .= MESSAGE_ENDING;

        $mail->Send();

        $data['status_retorno'] = REQUERIMENTO_RETORNO_NOTIFICADO;
        $ci->requerimento_model->update($requerimento->id,$data);
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