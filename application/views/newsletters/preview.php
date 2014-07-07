<?php

echo MESSAGE_HEADER;

echo $mensagem;

echo '<br><br><div style="border-top: 1px solid #ddd;">
        <br>
        <em style="font-style:italic; font-size: 12px; color: #999;">Essa é uma mensagem gerada pelo Gabinete do Vereador Ranzi. 
        Para deixar de receber mensagens como essa, ' . anchor('newsletters/descadastrar', 'descadastre' , 'target="_blank" style="color: #999"') .' seu e-mail.</em>
     </div>';
echo MESSAGE_ENDING;
?>
