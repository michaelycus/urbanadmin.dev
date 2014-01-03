        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
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
                        display: true,
                        title: "Requerimentos por bairro",
                        slices: [{
                        min: 0,
                        max: 59,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 59,
                        max: 118,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 118,
                        max: 177,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 177,
                        max: 236,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 236,
                        max: 295,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 295,
                        max: 353,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 353,
                        max: 412,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 412,
                        max: 471,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 471,
                        max: 530,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 530,
                        max: 589,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "54",
                            text: { content:  54 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 54"},
                        },                        "americano":{
                            value: "54",
                            text: { content:  54 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 54"},
                        },                        "bom_pastor":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: "},
                        },                        "campestre":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: "},
                        },                        "carneiros":{
                            value: "45",
                            text: { content:  45 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 45"},
                        },                        "centenario":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: "},
                        },                        "centro":{
                            value: "11",
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 11"},
                        },                        "conservas":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: "},
                        },                        "conventos":{
                            value: "55",
                            text: { content:  55 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 55"},
                        },                        "floresta":{
                            value: "11",
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 11"},
                        },                        "florestal":{
                            value: "511",
                            text: { content:  511 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 511"},
                        },                        "hidraulica":{
                            value: "23",
                            text: { content:  23 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 23"},
                        },                        "igrejinha":{
                            value: "1",
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 1"},
                        },                        "imigrante":{
                            value: "1",
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 1"},
                        },                        "jardim_do_cedro":{
                            value: "221",
                            text: { content:  221 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 221"},
                        },                        "moinhos":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: "},
                        },                        "moinhos_dagua":{
                            value: "588",
                            text: { content:  588 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 588"},
                        },                        "montanha":{
                            value: "1",
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 1"},
                        },                        "morro_vinte_cinco":{
                            value: "11",
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 11"},
                        },                        "nacoes":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: "},
                        },                        "olarias":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: "},
                        },                        "planalto":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: "},
                        },                        "santo_andre":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: "},
                        },                        "santo_antonio":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: "},
                        },                        "sao_bento":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: "},
                        },                        "sao_cristovao":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: "},
                        },                        "universitario":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: "},
                        },}
            });
        });