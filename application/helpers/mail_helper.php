<?php

if (!function_exists('send_notification')) {
    function send_notification ($id)
    {
        $ci =& get_instance();
        
        $ci->load->model('requerimento_model');
        $ci->load->model('requerente_model');
        
        $requerimento = $ci->requerimento_model->get($id);
        
        if ($requerimento->notificar)
        {
            $requerente = $ci->requerente_model->get($requerimento->id_solicitante);
            
            $ci->load->library('email');

            $ci->email->from('vereadorranzi@gmail.com', 'Gabinete Vereador Ranzi');
            $ci->email->to($requerente->email); 
            
            $message = "Olá $requerente->nome,\n\n";
            
            if ($requerimento->situacao == REQUERIMENTO_SITUACAO_ANALISADO)
            {
                $subject = "Requerimento Analisado";
                $message .= "Seu requerimento foi analisado pelo nosso gabinete e será em breve protocolado na Prefeitura Municipal de Lajeado.\n\n";                
            }
            else if ($requerimento->situacao == REQUERIMENTO_SITUACAO_PROTOCOLADO)
            {
                $subject = "Requerimento Protocolado";
                $message .= "Seu requerimento foi protocolado e será executado pelos orgãos responsáveis da Prefeitura Municipal de Lajeado.\n";
                $message .= "O número do seu protocolo junto à prefeitura é o $requerimento->expediente/$requerimento->ano_expediente.\n\n";                
            }
            else if ($requerimento->situacao == REQUERIMENTO_SITUACAO_RESOLVIDO)
            {
                $subject = "Requerimento Resolvido";
                $message .= "xxxx.\n\n";
            }
            
            $message .= "Atenciosamente,\n";
            $message .= "Gabinete do Vereador Ranzi";

            $ci->email->subject($subject);
            $ci->email->message($message);	

            $ci->email->send();
        }        
    }
}
?>
