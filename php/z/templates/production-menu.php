<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">TXAI</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    <a href="#" class="navbar-link"><?php echo $_SESSION['nome'];?></a> <?php echo anchor('logout', '(Sair)');?>
                </p>
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><?php echo anchor('usuarios', 'Usuários');?></li>
                    <li><a href="#contact">Sobre</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
$view = $this->uri->segment(2);
$class = ' class="active" ';
?>

<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Plano de Ação</li>
              <?php echo '<li'; if($view=='adicionar_plano_acao') echo $class; echo '>'; echo anchor('plano_acoes/adicionar_plano_acao','Adicionar').'</li>'?>
              <?php echo '<li'; if($view=='lista_plano_acoes') echo $class; echo '>'; echo anchor('plano_acoes/lista_plano_acoes','Listar planos').'</li>'?>
              <?php echo '<li'; if($view=='adicionar_categoria') echo $class; echo '>'; echo anchor('plano_acoes/adicionar_categoria','Adicionar categoria').'</li>'?>
              <?php echo '<li'; if($view=='lista_categorias') echo $class; echo '>'; echo anchor('plano_acoes/lista_categorias','Listar categorias').'</li>'?>
              <li class="nav-header">Ações</li>
              <?php echo '<li'; if($view=='adicionar_acao_corretiva') echo $class; echo '>'; echo anchor('acoes/adicionar_acao_corretiva','Adicionar ação corretiva').'</li>'?>
              <?php echo '<li'; if($view=='lista_acoes_corretivas') echo $class; echo '>'; echo anchor('acoes/lista_acoes_corretivas','Listar ações corretivas').'</li>'?>
              <?php echo '<li'; if($view=='adicionar_acao_preventiva') echo $class; echo '>'; echo anchor('acoes/adicionar_acao_preventiva','Adicionar ação preventiva').'</li>'?>
              <?php echo '<li'; if($view=='lista_acoes_preventivas') echo $class; echo '>'; echo anchor('acoes/lista_acoes_preventivas','Listar ações preventivas').'</li>'?>
              <li class="nav-header">Memória de Reunião</li>
              <?php echo '<li'; if($view=='adicionar_memoria') echo $class; echo '>'; echo anchor('memorias/adicionar_memoria','Adicionar').'</li>'?>
              <?php echo '<li'; if($view=='lista_memorias') echo $class; echo '>'; echo anchor('memorias/lista_memorias','Listar memórias').'</li>'?>
              <li class="nav-header">Indicadores de Desempenho</li>
              <li><a href="#">Link</a></li>              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->