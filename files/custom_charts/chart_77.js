        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(210, 49, 84)", stroke: "#204a87"
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
                            value: "2",
                            attrs: {
                                fill: "hsl(210, 49, 55)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 2"},
                        },                        "carneiros":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 1"},
                        },                        "centenario":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 0"},
                        },                        "centro":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 1"},
                        },                        "conservas":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 0"},
                        },                        "conventos":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 0"},
                        },                        "floresta":{
                            value: "2",
                            attrs: {
                                fill: "hsl(210, 49, 55)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 2"},
                        },                        "florestal":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 1"},
                        },                        "hidraulica":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 1"},
                        },                        "igrejinha":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 0"},
                        },                        "imigrante":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 0"},
                        },                        "jardim_do_cedro":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 0"},
                        },                        "moinhos":{
                            value: "2",
                            attrs: {
                                fill: "hsl(210, 49, 55)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 2"},
                        },                        "moinhos_dagua":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 0"},
                        },                        "montanha":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 0"},
                        },                        "morro_vinte_cinco":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br /> - Valor não informado -"},
                        },                        "nacoes":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 0"},
                        },                        "olarias":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 1"},
                        },                        "planalto":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 0"},
                        },                        "santo_andre":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 0"},
                        },                        "santo_antonio":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br /> - Valor não informado -"},
                        },                        "sao_bento":{
                            value: "0",
                            attrs: {
                                fill: "hsl(210, 49, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 0"},
                        },                        "sao_cristovao":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 1"},
                        },                        "universitario":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 65)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 1"},
                        },}
            });
        });