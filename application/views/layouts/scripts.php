<?php

if (startsWith(uri_string(), 'newsletter/compor_mensagem'))
{
    ?>
        <link href="<?php echo base_url(); ?>css/google-code-prettify/prettify.css" rel="stylesheet">        
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">        
        <script src="<?php echo base_url(); ?>js/jquery.hotkeys.js"></script>        
        <script src="<?php echo base_url(); ?>js/google-code-prettify/prettify.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap-wysiwyg.js"></script>
        
        <style type="text/css">
        #editor {
            max-height: 250px;
            height: 250px;
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

?>
