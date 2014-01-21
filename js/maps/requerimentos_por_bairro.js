        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "#cadbed", stroke: "#204a87"
                        },
                        text : {
                            attrs: {
                                fill: "#ce5c00",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#ce5c00",
                                "font-weight": "normal"
                            }
                        }
                    }
                },
                legend: {
                    area: {
                        title: "Requerimentos por bairro",
                        slices: [{
                        min: 0,
                        max: 1,
                        attrs: {
                            fill: "#6490c3"}
                      },{
                        min: 1,
                        max: 2,
                        attrs: {
                            fill: "#5682b7"}
                      },{
                        min: 2,
                        max: 4,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 4,
                        max: 5,
                        attrs: {
                            fill: "#3b669f"}
                      },{
                        min: 5,
                        max: 6,
                        attrs: {
                            fill: "#2d5893"}
                      },{
                        min: 6,
                        max: 7,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "alto_do_parque":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 1 ).change();                                        
                                    }
                                }                    
                            },                            "americano":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 2 ).change();                                        
                                    }
                                }                    
                            },                            "bom_pastor":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 3 ).change();                                        
                                    }
                                }                    
                            },                            "centro":{
                                value: "6",
                                text: { content:  6 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 6"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 7 ).change();                                        
                                    }
                                }                    
                            },                            "conventos":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 9 ).change();                                        
                                    }
                                }                    
                            },                            "floresta":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 10 ).change();                                        
                                    }
                                }                    
                            },                            "florestal":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 11 ).change();                                        
                                    }
                                }                    
                            },                            "jardim_do_cedro":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 15 ).change();                                        
                                    }
                                }                    
                            },                            "moinhos":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 16 ).change();                                        
                                    }
                                }                    
                            },                            "moinhos_dagua":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 17 ).change();                                        
                                    }
                                }                    
                            },                            "sao_cristovao":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 26 ).change();                                        
                                    }
                                }                    
                            },}
            });
        });