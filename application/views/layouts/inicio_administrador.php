<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-stats"></i> Estatísticas</h1>
    </div>
    
    <div class="row">

        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading plain">
                    <div class="icon"><i class="icon20 i-pie-2"></i></div>
                    <h4>Situação dos requerimentos</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body center">

                    <div class="vital-stats">
                        <ul>
                            <li>
                                <?php echo anchor('requerimentos/em_analise', '<div class="item">
                                        <div class="icon red"><i class="i-stack-empty"></i></div>
                                        <span class="percent">'. $req_em_analise . '</span>
                                        <span class="txt">Em análise</span>
                                    </div>')?>                                
                            </li>
                            <li>
                                <?php echo anchor('requerimentos/analisados', '<div class="item">
                                        <div class="icon yellow"><i class="i-stack-down"></i></div>
                                        <span class="percent">' . $req_analisado .'</span>
                                        <span class="txt">Analisados</span>
                                    </div>' ) ?>
                            </li>
                            <li>
                                <?php echo anchor('requerimentos/protocolados', '<div class="item">
                                        <div class="icon green"><i class="i-stack-up"></i></div>
                                        <span class="percent">'. $req_protocolado .'</span>
                                        <span class="txt">Protocolados</span>
                                    </div>')?>
                            </li>
                            <li>
                                <?php echo anchor('requerimentos/verificar', '<div class="item">
                                        <div class="icon purple"><i class="i-stack-4"></i></div>
                                        <span class="percent">'.$req_verificar.'</span>
                                        <span class="txt">Verificar</span>
                                    </div>')?>                                
                            </li>
                            <li>
                                <?php echo anchor('requerimentos/concluidos', '<div class="item">
                                        <div class="icon blue"><i class="i-stack-checkmark"></i></div>
                                        <span class="percent">'.$req_concluido.'</span>
                                        <span class="txt">Concluídos</span>
                                    </div>')?>                                
                            </li>
                            <li>
                                <?php echo anchor('requerimentos/da_sessao', '<div class="item">
                                        <div class="icon orange"><i class="i-stack-star"></i></div>
                                        <span class="percent">'. $req_da_sessao . '</span>
                                        <span class="txt">Da sessão</span>
                                    </div>' )?>
                            </li>
                        </ul>
                    </div><!-- End .vital-stats -->

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->

        </div><!-- End .col-lg-8 -->
        
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-info"></i></div>
                    <h4>Versão do sistema: <?php echo $versao_atual;?></h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body">
                    <dl>

                        <?php
                        
                        $first = TRUE;
                        foreach ($versoes as $v)
                        {   
                            if ($first)
                            {
                                echo '<dt>Versão ' . $v->versao . ' - ' . $v->data.'</dt>';
                                echo '<dd>';
                                echo    '<ul>';
                                foreach ($v->changes as $c)
                                {
                                    echo '<li>'.$c .'</li> ';
                                }
                                echo '<small><a href="#" class="toggle">(Veja mais)</a></small>';
                                echo    '</ul>';
                                echo '</dd>';
                                
                                $first = FALSE;
                            }
                            else
                            {
                                echo '<div id="vermais">';
                                echo '<dt>Versão ' . $v->versao . ' - ' . $v->data.'</dt>';
                                echo '<dd>';
                                echo    '<ul>';
                                foreach ($v->changes as $c)
                                {
                                    echo '<li>'.$c.'</li>';
                                }
                                echo    '</ul>';
                                echo '</dd>';
                                echo '</div>';
                            }
                        }

                        ?>

                    </dl>
                </div><!-- End .panel-body -->

            </div><!-- End .widget -->
        </div><!-- End .col-lg-4  -->

    </div><!-- End .row-fluid  -->

    <div class="row">

        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-drawer-3"></i></div>
                    <h4>Últimos requerimentos</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body noPadding">
                    <ul class="recent-activity">

                        <?php
                        foreach ($requerimentos as $r)
                        {
                            echo '<li class="item">';
                            switch ($r->cat_requerimento)
                            {
                                case TIPO_REQ_ENTULHO:
                                    echo '<span class="icon red"><i class="icon16 i-stackoverflow"></i></span>';
                                    break;

                                case TIPO_REQ_ILUMINACAO:
                                    echo '<span class="icon yellow"><i class="icon16 i-lamp-4"></i></span>';
                                    break;

                                case TIPO_REQ_LIXEIRA:
                                    echo '<span class="icon red"><i class="icon16 i-remove-6"></i></span>';
                                    break;

                                case TIPO_REQ_PARADA_ONIBUS:
                                    echo '<span class="icon blue"><i class="icon16 i-bus"></i></span>';
                                    break;

                                case TIPO_REQ_PLANTIO:
                                    echo '<span class="icon green"><i class="icon16 i-tree-2"></i></span>';
                                    break;

                                case TIPO_REQ_PODAS:
                                    echo '<span class="icon green"><i class="icon16 i-leaf-2"></i></span>';
                                    break;

                                case TIPO_REQ_PRACAS:
                                    echo '<span class="icon yellow"><i class="icon16 i-bike"></i></span>';
                                    break;

                                case TIPO_REQ_RUAS_LIMPEZA_ROCADA:
                                case TIPO_REQ_RUAS_NIVELAMENTO:
                                case TIPO_REQ_RUAS_LOMBADA:
                                case TIPO_REQ_RUAS_CANOS:
                                case TIPO_REQ_RUAS_CALCAMENTO:
                                case TIPO_REQ_RUAS_SEMAFORO:
                                case TIPO_REQ_RUAS_PATROLAMENTO:
                                case TIPO_REQ_RUAS_SINALIZACAO:
                                case TIPO_REQ_RUAS_BUEIROS:
                                case TIPO_REQ_RUAS_MANUTENCAO_ASFALTO:
                                case TIPO_REQ_RUAS_COLOCACAO_BRITA:
                                    echo '<span class="icon gray"><i class="icon16 i-road"></i></span>';
                                    break;

                                case TIPO_REQ_COPIA_DOCUMENTOS:
                                    echo '<span class="icon gray"><i class="icon16 i-copy"></i></span>';
                                    break;

                                case TIPO_REQ_CONSERTOS_GERAL:
                                    echo '<span class="icon gray"><i class="icon16 i-wrench"></i></span>';
                                    break;

                                case TIPO_REQ_SOLICITACAO_SERVICOS:
                                    echo '<span class="icon gray"><i class="icon16 i-tags-2"></i></span>';
                                    break;

                                case TIPO_REQ_OUTROS:
                                    echo '<span class="icon gray"><i class="icon16 i-tags-2"></i></span>';
                                    break;

                                default:
                                    echo '<span class="icon gray"><i class="icon16 i-tags-2"></i></span>';
                                    break;
                            }

                            echo '<span class="text">'. anchor('requerimentos/visualizar/'.$r->id ,substr($r->descricao, 0, 64)) . '</span>';
                            echo '<span class="ago">'.$this->form_validation->convert_sql_to_human($r->data_requerimento).'</span>';
                            echo '</li>';
                        }

                        ?>

                    </ul>
                </div><!-- End .panel-body -->

            </div><!-- End .widget -->
        </div><!-- End .col-lg-8  -->

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-users"></i></div>
                    <h4>Últimos acessos</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body noPadding">
                    <ul class="recent-activity">

                        <?php
                        foreach ($requerentes as $r)
                        {
                            echo '<li class="item">';
                            if ($r->data_cadastro == $r->ultima_visita)
                            {
                                echo '<span class="icon green"><i class="icon16 i-user-plus-2"></i></span>';
                            }
                            else
                            {
                                echo '<span class="icon blue"><i class="icon16 i-user"></i></span>';
                            }

                            echo '<span class="text">'. anchor('requerentes/visualizar/'.$r->id, substr($r->nome, 0, 32)) .'</span>';
                            echo '<span class="ago">'.$this->form_validation->convert_sql_to_human($r->ultima_visita).'</span>';
                            echo '</li>';
                        }
                        ?>

                    </ul>
                </div><!-- End .panel-body -->

            </div><!-- End .widget -->
        </div><!-- End .col-lg-4  -->

    </div><!-- End .row-fluid  -->    
    
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading plain">
                    <div class="icon"><i class="icon20 i-pie-2"></i></div>
                    <h4>Requerimentos por meses</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body center">
                    
                    <div class="vital-stats">
                        <ul>                            
                        <?php

                        foreach ($meses as $mes)
                        {
                            foreach ($mes as $key => $value)
                            {
                                if ($value != 0)
                                {
                                    echo '<li>';
                                    echo anchor('requerimentos/por_data/'.$key, '<div class="item">
                                        <div class="icon"><i class="i-calendar"></i></div>
                                        <span class="percent">'. $value . '</span>
                                        <span class="txt">'. $key .'</span>
                                    </div>');
                                    echo '</li>';
                                }
                            }
                        }

                        ?>
                        </ul>                        
                    </div>                    

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->

        </div><!-- End .col-lg-8 -->
    </div>
    

</div> <!-- End .container-fluid  -->

<script>
    $(document).ready(function()
    {        
        $('div#vermais').hide();
        $('a.toggle').click(function()
        {
            $('div#vermais').toggle();
        });
    });    
</script>