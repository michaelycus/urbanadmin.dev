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
            }
            
            $message .= "Atenciosamente,\n";
            $message .= "Gabinete do Vereador Ranzi";

            $ci->email->subject($subject);
            $ci->email->message($message);

            $ci->email->send();
        }
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
?>