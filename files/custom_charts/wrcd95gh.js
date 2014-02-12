        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(36, 97, 84)", stroke: "#204a87"
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
                            value: "8",
                            attrs: {
                                fill: "hsl(36, 97, 74.1519434629)", stroke: "#204a87"
                            },
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 8"},
                        },                        "bom_pastor":{
                            value: "11",
                            attrs: {
                                fill: "hsl(36, 97, 73.8339222615)", stroke: "#204a87"
                            },
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 11"},
                        },                        "campestre":{
                            value: "16",
                            attrs: {
                                fill: "hsl(36, 97, 73.3038869258)", stroke: "#204a87"
                            },
                            text: { content:  16 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 16"},
                        },                        "carneiros":{
                            value: "8",
                            attrs: {
                                fill: "hsl(36, 97, 74.1519434629)", stroke: "#204a87"
                            },
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 8"},
                        },                        "centenario":{
                            value: "17",
                            attrs: {
                                fill: "hsl(36, 97, 73.1978798587)", stroke: "#204a87"
                            },
                            text: { content:  17 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 17"},
                        },                        "centro":{
                            value: "127",
                            attrs: {
                                fill: "hsl(36, 97, 61.5371024735)", stroke: "#204a87"
                            },
                            text: { content:  127 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 127"},
                        },                        "conservas":{
                            value: "137",
                            attrs: {
                                fill: "hsl(36, 97, 60.4770318021)", stroke: "#204a87"
                            },
                            text: { content:  137 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 137"},
                        },                        "conventos":{
                            value: "50",
                            attrs: {
                                fill: "hsl(36, 97, 69.6996466431)", stroke: "#204a87"
                            },
                            text: { content:  50 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 50"},
                        },                        "floresta":{
                            value: "2",
                            attrs: {
                                fill: "hsl(36, 97, 74.7879858657)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 2"},
                        },                        "florestal":{
                            value: "33",
                            attrs: {
                                fill: "hsl(36, 97, 71.5017667845)", stroke: "#204a87"
                            },
                            text: { content:  33 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 33"},
                        },                        "hidraulica":{
                            value: "23",
                            attrs: {
                                fill: "hsl(36, 97, 72.5618374558)", stroke: "#204a87"
                            },
                            text: { content:  23 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 23"},
                        },                        "igrejinha":{
                            value: "22",
                            attrs: {
                                fill: "hsl(36, 97, 72.667844523)", stroke: "#204a87"
                            },
                            text: { content:  22 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 22"},
                        },                        "imigrante":{
                            value: "13",
                            attrs: {
                                fill: "hsl(36, 97, 73.6219081272)", stroke: "#204a87"
                            },
                            text: { content:  13 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 13"},
                        },                        "jardim_do_cedro":{
                            value: "56",
                            attrs: {
                                fill: "hsl(36, 97, 69.0636042403)", stroke: "#204a87"
                            },
                            text: { content:  56 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 56"},
                        },                        "moinhos":{
                            value: "41",
                            attrs: {
                                fill: "hsl(36, 97, 70.6537102473)", stroke: "#204a87"
                            },
                            text: { content:  41 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 41"},
                        },                        "moinhos_dagua":{
                            value: "16",
                            attrs: {
                                fill: "hsl(36, 97, 73.3038869258)", stroke: "#204a87"
                            },
                            text: { content:  16 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 16"},
                        },                        "montanha":{
                            value: "37",
                            attrs: {
                                fill: "hsl(36, 97, 71.0777385159)", stroke: "#204a87"
                            },
                            text: { content:  37 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 37"},
                        },                        "morro_vinte_cinco":{
                            value: "72",
                            attrs: {
                                fill: "hsl(36, 97, 67.3674911661)", stroke: "#204a87"
                            },
                            text: { content:  72 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 72"},
                        },                        "nacoes":{
                            value: "20",
                            attrs: {
                                fill: "hsl(36, 97, 72.8798586572)", stroke: "#204a87"
                            },
                            text: { content:  20 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 20"},
                        },                        "olarias":{
                            value: "29",
                            attrs: {
                                fill: "hsl(36, 97, 71.925795053)", stroke: "#204a87"
                            },
                            text: { content:  29 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 29"},
                        },                        "planalto":{
                            value: "27",
                            attrs: {
                                fill: "hsl(36, 97, 72.1378091873)", stroke: "#204a87"
                            },
                            text: { content:  27 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 27"},
                        },                        "santo_andre":{
                            value: "37",
                            attrs: {
                                fill: "hsl(36, 97, 71.0777385159)", stroke: "#204a87"
                            },
                            text: { content:  37 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 37"},
                        },                        "santo_antonio":{
                            value: "282",
                            attrs: {
                                fill: "hsl(36, 97, 45.1060070671)", stroke: "#204a87"
                            },
                            text: { content:  282 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 282"},
                        },                        "sao_bento":{
                            value: "16",
                            attrs: {
                                fill: "hsl(36, 97, 73.3038869258)", stroke: "#204a87"
                            },
                            text: { content:  16 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 16"},
                        },                        "sao_cristovao":{
                            value: "40",
                            attrs: {
                                fill: "hsl(36, 97, 70.7597173145)", stroke: "#204a87"
                            },
                            text: { content:  40 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 40"},
                        },                        "universitario":{
                            value: "22",
                            attrs: {
                                fill: "hsl(36, 97, 72.667844523)", stroke: "#204a87"
                            },
                            text: { content:  22 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 22"},
                        },}
            });
        });