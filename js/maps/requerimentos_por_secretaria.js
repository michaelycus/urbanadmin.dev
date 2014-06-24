$(function() {
    var data = {
        "0": { 
            "areas": {
                "": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( -1 ).change(); ;} } },
                "alto_do_parque": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 1 ).change(); ;} } },
                "americano": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 2 ).change(); ;} } },
                "bom_pastor": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 3 ).change(); ;} } },
                "campestre": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 4 ).change(); ;} } },
                "carneiros": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 5 ).change(); ;} } },
                "centenario": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 6 ).change(); ;} } },
                "centro": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 7 ).change(); ;} } },
                "conservas": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 8 ).change(); ;} } },
                "conventos": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 9 ).change(); ;} } },
                "floresta": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 10 ).change(); ;} } },
                "florestal": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 11 ).change(); ;} } },
                "hidraulica": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 12 ).change(); ;} } },
                "igrejinha": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 13 ).change(); ;} } },
                "imigrante": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 14 ).change(); ;} } },
                "jardim_do_cedro": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 15 ).change(); ;} } },
                "moinhos": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 16 ).change(); ;} } },
                "moinhos_dagua": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 17 ).change(); ;} } },
                "montanha": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 18 ).change(); ;} } },
                "morro_vinte_cinco": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 19 ).change(); ;} } },
                "nacoes": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 20 ).change(); ;} } },
                "olarias": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 21 ).change(); ;} } },
                "planalto": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 22 ).change(); ;} } },
                "santo_andre": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 23 ).change(); ;} } },
                "santo_antonio": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 24 ).change(); ;} } },
                "sao_bento": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 25 ).change(); ;} } },
                "sao_cristovao": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 26 ).change(); ;} } },
                "universitario": {"text": {"content": ""} , eventHandlers : { click : function() { $("#id_bairro").val( 27 ).change(); ;} } },
                
            }
        },
        "3": { 
            "areas": {
                "": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "alto_do_parque": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "americano": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 2"
                    }
                },
                "bom_pastor": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "campestre": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "carneiros": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "centenario": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "centro": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 1"
                    }
                },
                "conservas": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "conventos": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "floresta": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "florestal": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "hidraulica": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "igrejinha": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "imigrante": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "jardim_do_cedro": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "moinhos": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "moinhos_dagua": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "montanha": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "morro_vinte_cinco": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "nacoes": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "olarias": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "planalto": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "santo_andre": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "santo_antonio": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "sao_bento": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "sao_cristovao": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "universitario": {                    
                    "tooltip": {
                            "content": ""
                    }
                }
            }
        },
        "4": { 
            "areas": {
                "": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "alto_do_parque": {
                    "value": 16,
                    "attrs": { fill: "#6a97c8"},
                    "text": { "content":  "16" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Alto do Parque</span><br />Requerimentos : 16"
                    }
                },
                "americano": {
                    "value": 7,
                    "attrs": { fill: "#6e9bcc"},
                    "text": { "content":  "7" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 7"
                    }
                },
                "bom_pastor": {
                    "value": 9,
                    "attrs": { fill: "#6d9acb"},
                    "text": { "content":  "9" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bom Pastor</span><br />Requerimentos : 9"
                    }
                },
                "campestre": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 2"
                    }
                },
                "carneiros": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Carneiros</span><br />Requerimentos : 1"
                    }
                },
                "centenario": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centenário</span><br />Requerimentos : 3"
                    }
                },
                "centro": {
                    "value": 16,
                    "attrs": { fill: "#6a97c8"},
                    "text": { "content":  "16" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 16"
                    }
                },
                "conservas": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                    }
                },
                "conventos": {
                    "value": 9,
                    "attrs": { fill: "#6d9acb"},
                    "text": { "content":  "9" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 9"
                    }
                },
                "floresta": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "florestal": {
                    "value": 12,
                    "attrs": { fill: "#6c99ca"},
                    "text": { "content":  "12" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 12"
                    }
                },
                "hidraulica": {
                    "value": 7,
                    "attrs": { fill: "#6e9bcc"},
                    "text": { "content":  "7" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 7"
                    }
                },
                "igrejinha": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "imigrante": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "jardim_do_cedro": {
                    "value": 8,
                    "attrs": { fill: "#6e9bcb"},
                    "text": { "content":  "8" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Jardim do Cedro</span><br />Requerimentos : 8"
                    }
                },
                "moinhos": {
                    "value": 9,
                    "attrs": { fill: "#6d9acb"},
                    "text": { "content":  "9" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 9"
                    }
                },
                "moinhos_dagua": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 4"
                    }
                },
                "montanha": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Montanha</span><br />Requerimentos : 4"
                    }
                },
                "morro_vinte_cinco": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "nacoes": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nações</span><br />Requerimentos : 1"
                    }
                },
                "olarias": {
                    "value": 10,
                    "attrs": { fill: "#6d9aca"},
                    "text": { "content":  "10" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Olarias</span><br />Requerimentos : 10"
                    }
                },
                "planalto": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Planalto</span><br />Requerimentos : 2"
                    }
                },
                "santo_andre": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "santo_antonio": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Santo Antônio</span><br />Requerimentos : 1"
                    }
                },
                "sao_bento": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "sao_cristovao": {
                    "value": 35,
                    "attrs": { fill: "#618ec0"},
                    "text": { "content":  "35" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">São Cristóvão</span><br />Requerimentos : 35"
                    }
                },
                "universitario": {
                    "value": 22,
                    "attrs": { fill: "#6794c6"},
                    "text": { "content":  "22" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Universitário</span><br />Requerimentos : 22"
                    }
                }
            }
        },
        "11": { 
            "areas": {
                "": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "alto_do_parque": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "americano": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "bom_pastor": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "campestre": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 1"
                    }
                },
                "carneiros": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "centenario": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "centro": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "conservas": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "conventos": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 3"
                    }
                },
                "floresta": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "florestal": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "hidraulica": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 1"
                    }
                },
                "igrejinha": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "imigrante": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "jardim_do_cedro": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Jardim do Cedro</span><br />Requerimentos : 1"
                    }
                },
                "moinhos": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 2"
                    }
                },
                "moinhos_dagua": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 2"
                    }
                },
                "montanha": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "morro_vinte_cinco": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "nacoes": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "olarias": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "planalto": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Planalto</span><br />Requerimentos : 4"
                    }
                },
                "santo_andre": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "santo_antonio": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "sao_bento": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "sao_cristovao": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">São Cristóvão</span><br />Requerimentos : 1"
                    }
                },
                "universitario": {                    
                    "tooltip": {
                            "content": ""
                    }
                }
            }
        },
        "12": { 
            "areas": {
                "": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "alto_do_parque": {
                    "value": 7,
                    "attrs": { fill: "#6e9bcc"},
                    "text": { "content":  "7" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Alto do Parque</span><br />Requerimentos : 7"
                    }
                },
                "americano": {
                    "value": 5,
                    "attrs": { fill: "#6f9ccc"},
                    "text": { "content":  "5" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 5"
                    }
                },
                "bom_pastor": {
                    "value": 5,
                    "attrs": { fill: "#6f9ccc"},
                    "text": { "content":  "5" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bom Pastor</span><br />Requerimentos : 5"
                    }
                },
                "campestre": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 3"
                    }
                },
                "carneiros": {
                    "value": 7,
                    "attrs": { fill: "#6e9bcc"},
                    "text": { "content":  "7" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Carneiros</span><br />Requerimentos : 7"
                    }
                },
                "centenario": {
                    "value": 10,
                    "attrs": { fill: "#6d9aca"},
                    "text": { "content":  "10" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centenário</span><br />Requerimentos : 10"
                    }
                },
                "centro": {
                    "value": 31,
                    "attrs": { fill: "#6390c2"},
                    "text": { "content":  "31" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 31"
                    }
                },
                "conservas": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 4"
                    }
                },
                "conventos": {
                    "value": 23,
                    "attrs": { fill: "#6794c5"},
                    "text": { "content":  "23" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 23"
                    }
                },
                "floresta": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Floresta</span><br />Requerimentos : 3"
                    }
                },
                "florestal": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 4"
                    }
                },
                "hidraulica": {
                    "value": 11,
                    "attrs": { fill: "#6c99ca"},
                    "text": { "content":  "11" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 11"
                    }
                },
                "igrejinha": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Igrejinha</span><br />Requerimentos : 1"
                    }
                },
                "imigrante": {
                    "value": 6,
                    "attrs": { fill: "#6f9ccc"},
                    "text": { "content":  "6" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Imigrante</span><br />Requerimentos : 6"
                    }
                },
                "jardim_do_cedro": {
                    "value": 18,
                    "attrs": { fill: "#6996c7"},
                    "text": { "content":  "18" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Jardim do Cedro</span><br />Requerimentos : 18"
                    }
                },
                "moinhos": {
                    "value": 14,
                    "attrs": { fill: "#6b98c9"},
                    "text": { "content":  "14" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 14"
                    }
                },
                "moinhos_dagua": {
                    "value": 15,
                    "attrs": { fill: "#6b97c8"},
                    "text": { "content":  "15" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 15"
                    }
                },
                "montanha": {
                    "value": 6,
                    "attrs": { fill: "#6f9ccc"},
                    "text": { "content":  "6" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Montanha</span><br />Requerimentos : 6"
                    }
                },
                "morro_vinte_cinco": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Morro 25</span><br />Requerimentos : 1"
                    }
                },
                "nacoes": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nações</span><br />Requerimentos : 3"
                    }
                },
                "olarias": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Olarias</span><br />Requerimentos : 4"
                    }
                },
                "planalto": {
                    "value": 14,
                    "attrs": { fill: "#6b98c9"},
                    "text": { "content":  "14" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Planalto</span><br />Requerimentos : 14"
                    }
                },
                "santo_andre": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "santo_antonio": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "sao_bento": {
                    "value": 5,
                    "attrs": { fill: "#6f9ccc"},
                    "text": { "content":  "5" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">São Bento</span><br />Requerimentos : 5"
                    }
                },
                "sao_cristovao": {
                    "value": 26,
                    "attrs": { fill: "#6692c4"},
                    "text": { "content":  "26" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">São Cristóvão</span><br />Requerimentos : 26"
                    }
                },
                "universitario": {
                    "value": 24,
                    "attrs": { fill: "#6793c5"},
                    "text": { "content":  "24" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Universitário</span><br />Requerimentos : 24"
                    }
                }
            }
        },
        "16": { 
            "areas": {
                "": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "alto_do_parque": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Alto do Parque</span><br />Requerimentos : 3"
                    }
                },
                "americano": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 1"
                    }
                },
                "bom_pastor": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bom Pastor</span><br />Requerimentos : 2"
                    }
                },
                "campestre": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 1"
                    }
                },
                "carneiros": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Carneiros</span><br />Requerimentos : 1"
                    }
                },
                "centenario": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "centro": {
                    "value": 11,
                    "attrs": { fill: "#6c99ca"},
                    "text": { "content":  "11" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 11"
                    }
                },
                "conservas": {
                    "value": 9,
                    "attrs": { fill: "#6d9acb"},
                    "text": { "content":  "9" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 9"
                    }
                },
                "conventos": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 1"
                    }
                },
                "floresta": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Floresta</span><br />Requerimentos : 1"
                    }
                },
                "florestal": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 2"
                    }
                },
                "hidraulica": {
                    "value": 4,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "4" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 4"
                    }
                },
                "igrejinha": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Igrejinha</span><br />Requerimentos : 2"
                    }
                },
                "imigrante": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "jardim_do_cedro": {
                    "value": 5,
                    "attrs": { fill: "#6f9ccc"},
                    "text": { "content":  "5" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Jardim do Cedro</span><br />Requerimentos : 5"
                    }
                },
                "moinhos": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 3"
                    }
                },
                "moinhos_dagua": {
                    "value": 8,
                    "attrs": { fill: "#6e9bcb"},
                    "text": { "content":  "8" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 8"
                    }
                },
                "montanha": {
                    "value": 9,
                    "attrs": { fill: "#6d9acb"},
                    "text": { "content":  "9" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Montanha</span><br />Requerimentos : 9"
                    }
                },
                "morro_vinte_cinco": {                    
                    "tooltip": {
                            "content": ""
                    }
                },
                "nacoes": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nações</span><br />Requerimentos : 1"
                    }
                },
                "olarias": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Olarias</span><br />Requerimentos : 2"
                    }
                },
                "planalto": {
                    "value": 3,
                    "attrs": { fill: "#709dcd"},
                    "text": { "content":  "3" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Planalto</span><br />Requerimentos : 3"
                    }
                },
                "santo_andre": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Santo André</span><br />Requerimentos : 2"
                    }
                },
                "santo_antonio": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Santo Antônio</span><br />Requerimentos : 1"
                    }
                },
                "sao_bento": {
                    "value": 1,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">São Bento</span><br />Requerimentos : 1"
                    }
                },
                "sao_cristovao": {
                    "value": 9,
                    "attrs": { fill: "#6d9acb"},
                    "text": { "content":  "9" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">São Cristóvão</span><br />Requerimentos : 9"
                    }
                },
                "universitario": {
                    "value": 2,
                    "attrs": { fill: "#719ece"},
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Universitário</span><br />Requerimentos : 2"
                    }
                }
            }
        },
        };
        $("#secretaria").change(function() {
    value = $("#secretaria").val();

      $(".maparea1").trigger('update', [data[0], {}, {}, {animDuration: 500}]);

      $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000,resetPlots:true, resetAreas:true  }]);
  });

    // Mapael initialisation
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#cadbed",
                    stroke: "#82bfec",
                    "stroke-width": 0.3
                }
            },
            defaultPlot: {
                text: {
                    attrs: {
                        fill: "#613b1e",
                        "font-weight": "bold"
                    },
                    attrsHover: {
                        fill: "#f99200",
                        "font-weight": "bold"
                    }
                }
            }
        },
        areas: data[0]['areas']

    });
});