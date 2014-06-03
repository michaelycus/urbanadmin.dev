<?php
class Cronjobs extends CI_Controller {
    
    public function start_cronjobs()
    {
        echo 'Enviando...'; 
        
        $this->notificacao_mensal();
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
        $mail->Body .= "<p><i> teste </i></p>";

        $mail->Body .= "<p>Para melhorarmos nosso atendimento, gostaríamos de saber sua avaliação sobre o serviço da prefeitura.</p>";
        $mail->Body .= "<p>Por favor, clique " . anchor('requerimentos/informar_resultado/', 'aqui') . " para informar se seu pedido foi atendido. Não leva nem um minuto!</p>";

        $mail->Body .= "<p>Atenciosamente,<br/>";
        $mail->Body .= "Gabinete do Vereador Ranzi</p>";

        var_dump($mail);

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

    public function message($to = 'World')
    {
        echo "Hello {$to}!".PHP_EOL;
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