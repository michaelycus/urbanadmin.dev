<?php

echo MESSAGE_HEADER;

echo '<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            '. $assunto .'
            </div><br>';

echo $mensagem;

echo '<br><br><div style="border-top: 1px solid #ddd;">
        <br>
        <em style="font-style:italic; font-size: 12px; color: #999;">Essa é uma mensagem gerada pelo Gabinete do Vereador Ranzi. 
        Para deixar de receber mensagens como essa, ' . anchor('newsletters/descadastrar', 'clique aqui' , 'target="_blank" style="color: #999"') .'.</em>
     </div>';

echo MESSAGE_ENDING;
?>
