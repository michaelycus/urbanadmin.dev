        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
                    defaultArea: {
                        attrs: {
                            fill: "hsl(90, 75, 84)", stroke: "#204a87"
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
                        display: true,
                        title: "Requerimentos por bairro"                     
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "11",
                            attrs: {
                                fill: "hsl(90, 75, 73.892617449664)", stroke: "#204a87"
                            },
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 11"},
                        },                        "americano":{
                            value: "22",
                            attrs: {
                                fill: "hsl(90, 75, 72.785234899329)", stroke: "#204a87"
                            },
                            text: { content:  22 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 22"},
                        },                        "bom_pastor":{
                            value: "33",
                            attrs: {
                                fill: "hsl(90, 75, 71.677852348993)", stroke: "#204a87"
                            },
                            text: { content:  33 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 33"},
                        },                        "campestre":{
                            value: "44",
                            attrs: {
                                fill: "hsl(90, 75, 70.570469798658)", stroke: "#204a87"
                            },
                            text: { content:  44 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 44"},
                        },                        "carneiros":{
                            value: "55",
                            attrs: {
                                fill: "hsl(90, 75, 69.463087248322)", stroke: "#204a87"
                            },
                            text: { content:  55 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 55"},
                        },                        "centenario":{
                            value: "66",
                            attrs: {
                                fill: "hsl(90, 75, 68.355704697987)", stroke: "#204a87"
                            },
                            text: { content:  66 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 66"},
                        },                        "centro":{
                            value: "77",
                            attrs: {
                                fill: "hsl(90, 75, 67.248322147651)", stroke: "#204a87"
                            },
                            text: { content:  77 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 77"},
                        },                        "conservas":{
                            value: "88",
                            attrs: {
                                fill: "hsl(90, 75, 66.140939597315)", stroke: "#204a87"
                            },
                            text: { content:  88 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 88"},
                        },                        "conventos":{
                            value: "99",
                            attrs: {
                                fill: "hsl(90, 75, 65.03355704698)", stroke: "#204a87"
                            },
                            text: { content:  99 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 99"},
                        },                        "floresta":{
                            value: "110",
                            attrs: {
                                fill: "hsl(90, 75, 63.926174496644)", stroke: "#204a87"
                            },
                            text: { content:  110 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 110"},
                        },                        "florestal":{
                            value: "121",
                            attrs: {
                                fill: "hsl(90, 75, 62.818791946309)", stroke: "#204a87"
                            },
                            text: { content:  121 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 121"},
                        },                        "hidraulica":{
                            value: "132",
                            attrs: {
                                fill: "hsl(90, 75, 61.711409395973)", stroke: "#204a87"
                            },
                            text: { content:  132 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 132"},
                        },                        "igrejinha":{
                            value: "143",
                            attrs: {
                                fill: "hsl(90, 75, 60.604026845638)", stroke: "#204a87"
                            },
                            text: { content:  143 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 143"},
                        },                        "imigrante":{
                            value: "154",
                            attrs: {
                                fill: "hsl(90, 75, 59.496644295302)", stroke: "#204a87"
                            },
                            text: { content:  154 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 154"},
                        },                        "jardim_do_cedro":{
                            value: "165",
                            attrs: {
                                fill: "hsl(90, 75, 58.389261744966)", stroke: "#204a87"
                            },
                            text: { content:  165 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 165"},
                        },                        "moinhos":{
                            value: "176",
                            attrs: {
                                fill: "hsl(90, 75, 57.281879194631)", stroke: "#204a87"
                            },
                            text: { content:  176 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 176"},
                        },                        "moinhos_dagua":{
                            value: "187",
                            attrs: {
                                fill: "hsl(90, 75, 56.174496644295)", stroke: "#204a87"
                            },
                            text: { content:  187 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 187"},
                        },                        "montanha":{
                            value: "198",
                            attrs: {
                                fill: "hsl(90, 75, 55.06711409396)", stroke: "#204a87"
                            },
                            text: { content:  198 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 198"},
                        },                        "morro_vinte_cinco":{
                            value: "209",
                            attrs: {
                                fill: "hsl(90, 75, 53.959731543624)", stroke: "#204a87"
                            },
                            text: { content:  209 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 209"},
                        },                        "nacoes":{
                            value: "220",
                            attrs: {
                                fill: "hsl(90, 75, 52.852348993289)", stroke: "#204a87"
                            },
                            text: { content:  220 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 220"},
                        },                        "olarias":{
                            value: "231",
                            attrs: {
                                fill: "hsl(90, 75, 51.744966442953)", stroke: "#204a87"
                            },
                            text: { content:  231 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 231"},
                        },                        "planalto":{
                            value: "242",
                            attrs: {
                                fill: "hsl(90, 75, 50.637583892617)", stroke: "#204a87"
                            },
                            text: { content:  242 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 242"},
                        },                        "santo_andre":{
                            value: "253",
                            attrs: {
                                fill: "hsl(90, 75, 49.530201342282)", stroke: "#204a87"
                            },
                            text: { content:  253 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 253"},
                        },                        "santo_antonio":{
                            value: "264",
                            attrs: {
                                fill: "hsl(90, 75, 48.422818791946)", stroke: "#204a87"
                            },
                            text: { content:  264 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 264"},
                        },                        "sao_bento":{
                            value: "275",
                            attrs: {
                                fill: "hsl(90, 75, 47.315436241611)", stroke: "#204a87"
                            },
                            text: { content:  275 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 275"},
                        },                        "sao_cristovao":{
                            value: "286",
                            attrs: {
                                fill: "hsl(90, 75, 46.208053691275)", stroke: "#204a87"
                            },
                            text: { content:  286 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 286"},
                        },                        "universitario":{
                            value: "297",
                            attrs: {
                                fill: "hsl(90, 75, 45.10067114094)", stroke: "#204a87"
                            },
                            text: { content:  297 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 297"},
                        },}
            });
        });