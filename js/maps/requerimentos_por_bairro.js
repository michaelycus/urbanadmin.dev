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
                            fill: "#6692c4"}
                      },{
                        min: 1,
                        max: 2,
                        attrs: {
                            fill: "#5a86ba"}
                      },{
                        min: 2,
                        max: 3,
                        attrs: {
                            fill: "#4e7ab0"}
                      },{
                        min: 3,
                        max: 5,
                        attrs: {
                            fill: "#436ea5"}
                      },{
                        min: 5,
                        max: 6,
                        attrs: {
                            fill: "#37629b"}
                      },{
                        min: 6,
                        max: 7,
                        attrs: {
                            fill: "#2b5691"}
                      },{
                        min: 7,
                        max: 8,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "americano":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 2 ).change();                                        
                                    }
                                }                    
                            },                            "bom_pastor":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 3 ).change();                                        
                                    }
                                }                    
                            },                            "campestre":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 4 ).change();                                        
                                    }
                                }                    
                            },                            "carneiros":{
                                value: "7",
                                text: { content:  7 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 7"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 5 ).change();                                        
                                    }
                                }                    
                            },                            "centenario":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 6 ).change();                                        
                                    }
                                }                    
                            },                            "centro":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 7 ).change();                                        
                                    }
                                }                    
                            },                            "conservas":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 8 ).change();                                        
                                    }
                                }                    
                            },                            "conventos":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 9 ).change();                                        
                                    }
                                }                    
                            },                            "florestal":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 11 ).change();                                        
                                    }
                                }                    
                            },                            "hidraulica":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 12 ).change();                                        
                                    }
                                }                    
                            },                            "jardim_do_cedro":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 3"},
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
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 17 ).change();                                        
                                    }
                                }                    
                            },                            "morro_vinte_cinco":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 19 ).change();                                        
                                    }
                                }                    
                            },                            "universitario":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {  
                                        $('#id_bairro').val( 27 ).change();                                        
                                    }
                                }                    
                            },}
            });
        });