
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Urbis</title>
    </head>
    <body>
        
        <div class="popular-question row-fluid">
            
        <h2> Já possui cadastro? </h2>

        <div class="col-lg-3"></div>
        <div class="col-lg-3">


        <h3>Sim, já tenho cadastro.</h3>
        <?php        
        echo form_open('form1', 'class="bs-docs-example form-horizontal"');
        
        echo '<div class="form-group">';
        echo form_label('CPF', 'cpf', array('class' => 'col-lg-2 control-label'));
        echo    '<div class="col-lg-10">';
        echo form_input(array('name' => 'cpf', 'id' => 'cpf', 'class' => 'form-control', 'autofocus' => 'autofocus'), set_value('cpf'));
        echo    '</div>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo form_label('Senha', 'senha', array('class' => 'col-lg-2 control-label'));
        echo    '<div class="col-lg-10">';
        echo form_password(array('name' => 'password', 'id' => 'password', 'class' => ''), set_value('password'));
        echo    '</div>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo    '<div class="col-lg-offset-2">';
        echo        '<div class="pad-left15">';
        echo            form_submit('submit', 'Acessar', 'class="btn btn-primary"');        
        echo        '</div>';
        echo    '</div>';
        echo '</div>';
        echo form_close();
        ?>
        
        </div>        
        <div class="col-lg-3">

        <h3>Não, ainda não possuo cadastro.</h3>

        <?php
        echo '<div class="form-group">';
        echo    '<div class="col-lg-10">';
        echo anchor('front_cadastro/criar_cadastro', 'Cadastrar', array('type' => "button",'class' => 'btn btn-success btn-sm'));        
        echo    '</div>';
        echo '</div>';
        ?>        
        </div>
        <div class="col-lg-3"></div>
        
    </body>
</html>


<!-- Carousel
        ================================================== -->
<!--<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo base_url(); ?>img/slide-01.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Cadastrar Requerimento</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>img/slide-02.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Consultar</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Learn more</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>img/slide-03.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Lista de bairros</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
<!--</div> /.carousel -->