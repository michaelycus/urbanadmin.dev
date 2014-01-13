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
                            value: "11",
                            attrs: {
                                fill: "#edd400", stroke: "#204a87"
                            },
                            text: { content:  '' , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 11"},
                        },                        "americano":{
                            value: "11",
                            attrs: {
                                fill: "#edd400", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 11"},
                        },                        "bom_pastor":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 44"},
                        },                        "campestre":{
                            value: "22",
                            attrs: {
                                fill: "#73d216", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 22"},
                        },                        "carneiros":{
                            value: "22",
                            attrs: {
                                fill: "#73d216", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 22"},
                        },                        "centenario":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 44"},
                        },                        "centro":{
                            value: "55",
                            attrs: {
                                fill: "#ef2929", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 55"},
                        },                        "conservas":{
                            value: "55",
                            attrs: {
                                fill: "#ef2929", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 55"},
                        },                        "conventos":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 44"},
                        },                        "floresta":{
                            value: "33",
                            attrs: {
                                fill: "#e9b96e", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 33"},
                        },                        "florestal":{
                            value: "11",
                            attrs: {
                                fill: "#edd400", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 11"},
                        },                        "hidraulica":{
                            value: "11",
                            attrs: {
                                fill: "#edd400", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 11"},
                        },                        "igrejinha":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 44"},
                        },                        "imigrante":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 44"},
                        },                        "jardim_do_cedro":{
                            value: "55",
                            attrs: {
                                fill: "#ef2929", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 55"},
                        },                        "moinhos":{
                            value: "11",
                            attrs: {
                                fill: "#edd400", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 11"},
                        },                        "moinhos_dagua":{
                            value: "33",
                            attrs: {
                                fill: "#e9b96e", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 33"},
                        },                        "montanha":{
                            value: "33",
                            attrs: {
                                fill: "#e9b96e", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 33"},
                        },                        "morro_vinte_cinco":{
                            value: "55",
                            attrs: {
                                fill: "#ef2929", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 55"},
                        },                        "nacoes":{
                            value: "55",
                            attrs: {
                                fill: "#ef2929", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 55"},
                        },                        "olarias":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 44"},
                        },                        "planalto":{
                            value: "44",
                            attrs: {
                                fill: "#729fcf", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 44"},
                        },                        "santo_andre":{
                            value: "22",
                            attrs: {
                                fill: "#73d216", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 22"},
                        },                        "santo_antonio":{
                            value: "55",
                            attrs: {
                                fill: "#ef2929", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 55"},
                        },                        "sao_bento":{
                            value: "33",
                            attrs: {
                                fill: "#e9b96e", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 33"},
                        },                        "sao_cristovao":{
                            value: "22",
                            attrs: {
                                fill: "#73d216", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 22"},
                        },                        "universitario":{
                            value: "22",
                            attrs: {
                                fill: "#73d216", stroke: "#204a87"
                            },
                            text: { content: '', attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 22"},
                        },}
            });
        });