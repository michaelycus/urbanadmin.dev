<?php
class Cronjobs extends CI_Controller {
    
    public function start_cronjobs()
    {
        $this->notificacao_mensal();
        //$this->teste();
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
            
            $mail->Body = MESSAGE_HEADER;
            $mail->Body .= '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            Informe o andamento do seu requerimento!
            </div><br>';
            
            $mail->Body .= "Olá $requerimento->nome_solicitante,<br><br>";

            $mail->Body .= "Já fazem 30 dias desde que você cadastrou o seguinte requerimento:<br>";
            $mail->Body .= "<span style='font-family: Andale Mono, Courier, monospace; color: #666;'>$requerimento->descricao</span><br><br>";

            $mail->Body .= "Para melhorarmos nosso atendimento, gostaríamos de saber sua avaliação sobre o serviço prestado pela prefeitura.<br>";
            $mail->Body .= "Por favor, clique " . anchor('requerimentos/informar_resultado/'.$requerimento->code, 'aqui', 'style="color:#2469A0; font-weight:bold"') . " para informar se o seu pedido foi atendido. Não leva nem um minuto!<br><br>";

            $mail->Body .= "Atenciosamente,<br>";
            $mail->Body .= "Gabinete do Vereador Ranzi<br><br>";
            
            $mail->Body .= MESSAGE_ENDING;

            $mail->Send();
            
            $data['status_retorno'] = REQUERIMENTO_RETORNO_NOTIFICADO;
            $this->requerimento_model->update($requerimento->id,$data);
            
            sleep(1);
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
    
}
?>