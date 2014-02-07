<script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/requerimentos_por_bairro.js" charset="utf-8" ></script>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-stats"></i> Estatísticas</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel-group accordion" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Requerimentos por Bairro
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        
                        <div class="maparea1">
                            <div class="map">
                                <span>Alternative content for the map</span>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Últimos requerimentos
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
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
                                                break;
                                        }

                                        echo '<span class="text">'. anchor('requerimentos/visualizar/'.$r->id ,substr($r->descricao, 0, 64)) . '</span>';
                                        echo '<span class="ago">'.$this->form_validation->convert_sql_to_human($r->data_requerimento).'</span>';
                                        echo '</li>';
                                    }

                                    ?>

                                </ul>
                            </div><!-- End .panel-body -->
                        </div>
                    </div>
                </div>
<!--                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>-->
                
            </div>
        </div><!-- End .col-lg-6  --> 
        
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-cube"></i></div> 
                    <h4>Dados do sistema</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body center">
                    <div class="stats-buttons">
                        <ul class="list-unstyled">
                            <li class="center">
                                <a href="#" class="clearfix">
                                    <span class="icon blue"><i class="icon24 i-drawer-3"></i></span>
                                    <span class="number"><?php echo $meus_requerimentos;?></span>
                                    <span class="txt">Meus requerimentos</span>
                                </a>
                            </li>
                            <li class="center">
                                <a href="#" class="clearfix">
                                    <span class="icon green"><i class="icon24 i-stack-list"></i></span>
                                    <span class="number"><?php echo $total_requerimentos;?></span>
                                    <span class="txt">Total Requerimentos</span>
                                </a>
                            </li>                            
                            <li class="center">
                                <a href="#" class="clearfix">
                                    <span class="icon yellow"><i class="icon24 i-users"></i></span>
                                    <span class="number"><?php echo $total_requerentes;?></span>
                                    <span class="txt">Total requerentes</span>
                                </a>
                            </li>
                        </ul>
                    </div><!-- End .stats-buttons  -->                

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->        
        </div>
    </div><!-- End .row-fluid  -->

</div> <!-- End .container-fluid  -->
