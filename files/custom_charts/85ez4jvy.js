        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(0, 100, 84)", stroke: "#204a87"
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
                        title: "Requerimentos por bairro"
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "57678",
                            attrs: {
                                fill: "hsl(0, 100, 74.706103406475)", stroke: "#204a87"
                            },
                            text: { content:  "57.678,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 57678"},
                        },                        "americano":{
                            value: "785.879",
                            attrs: {
                                fill: "hsl(0, 100, 74.995995576112)", stroke: "#204a87"
                            },
                            text: { content:  "785,9" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 785.879"},
                        },                        "bom_pastor":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br /> - Valor não informado -"},
                        },                        "campestre":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br /> - Valor não informado -"},
                        },                        "carneiros":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br /> - Valor não informado -"},
                        },                        "centenario":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br /> - Valor não informado -"},
                        },                        "centro":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br /> - Valor não informado -"},
                        },                        "conservas":{
                            value: "578575",
                            attrs: {
                                fill: "hsl(0, 100, 72.051887693774)", stroke: "#204a87"
                            },
                            text: { content:  "578.575,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 578575"},
                        },                        "conventos":{
                            value: "75.87",
                            attrs: {
                                fill: "hsl(0, 100, 74.999613406593)", stroke: "#204a87"
                            },
                            text: { content:  "75,9" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 75.87"},
                        },                        "floresta":{
                            value: "7856.7",
                            attrs: {
                                fill: "hsl(0, 100, 74.959966410653)", stroke: "#204a87"
                            },
                            text: { content:  "7.856,7" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 7856.7"},
                        },                        "florestal":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                        },                        "hidraulica":{
                            value: "8",
                            attrs: {
                                fill: "hsl(0, 100, 74.99995923623)", stroke: "#204a87"
                            },
                            text: { content:  "8,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 8"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br /> - Valor não informado -"},
                        },                        "imigrante":{
                            value: "785758",
                            attrs: {
                                fill: "hsl(0, 100, 70.996192663846)", stroke: "#204a87"
                            },
                            text: { content:  "785.758,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 785758"},
                        },                        "jardim_do_cedro":{
                            value: "7858",
                            attrs: {
                                fill: "hsl(0, 100, 74.959959786541)", stroke: "#204a87"
                            },
                            text: { content:  "7.858,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 7858"},
                        },                        "moinhos":{
                            value: "75875",
                            attrs: {
                                fill: "hsl(0, 100, 74.613381115266)", stroke: "#204a87"
                            },
                            text: { content:  "75.875,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 75875"},
                        },                        "moinhos_dagua":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br /> - Valor não informado -"},
                        },                        "montanha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br /> - Valor não informado -"},
                        },                        "morro_vinte_cinco":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br /> - Valor não informado -"},
                        },                        "nacoes":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br /> - Valor não informado -"},
                        },                        "olarias":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br /> - Valor não informado -"},
                        },                        "planalto":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br /> - Valor não informado -"},
                        },                        "santo_andre":{
                            value: "78587",
                            attrs: {
                                fill: "hsl(0, 100, 74.599562197106)", stroke: "#204a87"
                            },
                            text: { content:  "78.587,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 78587"},
                        },                        "santo_antonio":{
                            value: "5887580",
                            attrs: {
                                fill: "hsl(0, 100, 45.000005095471)", stroke: "#204a87"
                            },
                            text: { content:  "5.887.580,0" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 5887580"},
                        },                        "sao_bento":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br /> - Valor não informado -"},
                        },                        "sao_cristovao":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br /> - Valor não informado -"},
                        },                        "universitario":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br /> - Valor não informado -"},
                        },}
            });
        });