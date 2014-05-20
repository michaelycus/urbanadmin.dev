<?php
class Cronjobs extends CI_Controller {

    public function message($to = 'World')
    {
        echo "Hello {$to}!".PHP_EOL;
    }
        
    public function request_feedback()
    {
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('requerente_model');

        $ci->load->library('MY_PHPMailer');

        $requerimentos = $ci->requerimento_model->get_requerimentos_notificar();

        foreach ($requerimentos as $requerimento)
        {
            $mail = get_mail();

            $mail->AddAddress($requerimento->email, $requerimento->nome);

            $mail->Body = "<p>Olá $requerimento->nome,</p>";

            $mail->Body .= "<p>Já fazem 30 dias desde que você cadastrou o seguinte requerimento:</p>";
            $mail->Body .= "<p><i>$requerimento->descricao</i></p>";

            $mail->Body .= "<p>Para melhorarmos nosso atendimento, gostaríamos de saber sua avaliação sobre o serviço da prefeitura.</p>";
            $mail->Body .= "<p>Por favor, clique " . anchor('requerimentos/informar_resultado/'.$requerimento->code, 'aqui') . " para informar se seu pedido foi atendido. Não leva nem um minuto!</p>";

            $mail->Body .= "<p>Atenciosamente,<br/>";
            $mail->Body .= "Gabinete do Vereador Ranzi</p>";

            var_dump($mail);

        //    if (!$mail->Send())
        //    {
        //        $data["message"] = "Ocorreu um erro durante o envio: " . $mail->ErrorInfo;
        //    }
        //    else
        //    {
        //        $data["message"] = "Requerimento cadastrado com sucesso!";
        //    }

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