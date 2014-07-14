<?php

if (startsWith(uri_string(), 'newsletters/criar_newsletter') || startsWith(uri_string(), 'newsletters/editar_newsletter'))
{
    ?>
        <link href="<?php echo base_url(); ?>css/google-code-prettify/prettify.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">        
        <script src="<?php echo base_url(); ?>js/jquery.hotkeys.js"></script>        
        <script src="<?php echo base_url(); ?>js/google-code-prettify/prettify.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap-wysiwyg.js"></script>
        
        <style type="text/css">
        #editor {
            max-height: 350px;
            height: 350px;
            background-color: white;
            border-collapse: separate; 
            border: 1px solid rgb(204, 204, 204); 
            padding: 4px; 
            box-sizing: content-box; 
            -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; 
            box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
            border-top-right-radius: 3px; border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px; border-top-left-radius: 3px;
            overflow: scroll;
            outline: none;
        }
        #voiceBtn {
          width: 20px;
          color: transparent;
          background-color: transparent;
          transform: scale(2.0, 2.0);
          -webkit-transform: scale(2.0, 2.0);
          -moz-transform: scale(2.0, 2.0);
          border: transparent;
          cursor: pointer;
          box-shadow: none;
          -webkit-box-shadow: none;
        }

        div[data-role="editor-toolbar"] {
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .dropdown-menu a {
          cursor: pointer;
        }
        </style>        
    
    <?php
}
else if (startsWith(uri_string(), 'requerimentos/cadastrar_requerimento_teste') ) // colocar no EDITAR mais tarde
{
    ?>
    <link href="<?php echo base_url(); ?>js/plugins/ui/jgrowl/jquery.jgrowl.css" rel="stylesheet" /> 
    
    <style type="text/css">
    div.jGrowl div.jGrowl-notification.info {
	background: #1a8eed; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */	
	background: -moz-linear-gradient(top,  #1a8eed 1%, #62aeef 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#1a8eed), color-stop(100%,#62aeef)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #1a8eed 1%,#62aeef 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #1a8eed 1%,#62aeef 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #1a8eed 1%,#62aeef 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #1a8eed 1%,#62aeef 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1a8eed', endColorstr='#62aeef',GradientType=0 ); /* IE6-8 */
	border-color: #0483EA #1a8eed #1a8eed #1a8eed;
    }
    </style> 
    <script src="<?php echo base_url(); ?>js/plugins/ui/jgrowl/jquery.jgrowl.js"></script>
    <?php
}

?>
