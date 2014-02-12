        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(60, 6, 84)", stroke: "#204a87"
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
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br /> - Valor não informado -"},
                        },                        "americano":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br /> - Valor não informado -"},
                        },                        "bom_pastor":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br /> - Valor não informado -"},
                        },                        "campestre":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br /> - Valor não informado -"},
                        },                        "carneiros":{
                            value: "86.15",
                            attrs: {
                                fill: "hsl(60, 6, 45.344234079174)", stroke: "#204a87"
                            },
                            text: { content:  "$ 86.15" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 86.15"},
                        },                        "centenario":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br /> - Valor não informado -"},
                        },                        "centro":{
                            value: "45",
                            attrs: {
                                fill: "hsl(60, 6, 59.509466437177)", stroke: "#204a87"
                            },
                            text: { content:  "$ 45" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 45"},
                        },                        "conservas":{
                            value: "7.1",
                            attrs: {
                                fill: "hsl(60, 6, 72.555938037866)", stroke: "#204a87"
                            },
                            text: { content:  "$ 7.1" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 7.1"},
                        },                        "conventos":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br /> - Valor não informado -"},
                        },                        "floresta":{
                            value: "5.01",
                            attrs: {
                                fill: "hsl(60, 6, 73.275387263339)", stroke: "#204a87"
                            },
                            text: { content:  "$ 5.01" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 5.01"},
                        },                        "florestal":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                        },                        "hidraulica":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br /> - Valor não informado -"},
                        },                        "imigrante":{
                            value: "86",
                            attrs: {
                                fill: "hsl(60, 6, 45.39586919105)", stroke: "#204a87"
                            },
                            text: { content:  "$ 86" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 86"},
                        },                        "jardim_do_cedro":{
                            value: "45.4",
                            attrs: {
                                fill: "hsl(60, 6, 59.371772805508)", stroke: "#204a87"
                            },
                            text: { content:  "$ 45.4" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 45.4"},
                        },                        "moinhos":{
                            value: "6.54",
                            attrs: {
                                fill: "hsl(60, 6, 72.748709122203)", stroke: "#204a87"
                            },
                            text: { content:  "$ 6.54" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 6.54"},
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
                            value: "58.85",
                            attrs: {
                                fill: "hsl(60, 6, 54.74182444062)", stroke: "#204a87"
                            },
                            text: { content:  "$ 58.85" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 58.85"},
                        },                        "santo_andre":{
                            value: "54.14",
                            attrs: {
                                fill: "hsl(60, 6, 56.363166953528)", stroke: "#204a87"
                            },
                            text: { content:  "$ 54.14" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 54.14"},
                        },                        "santo_antonio":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br /> - Valor não informado -"},
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