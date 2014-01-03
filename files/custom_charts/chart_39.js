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
                        max: 5,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 5,
                        max: 9,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 9,
                        max: 14,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 14,
                        max: 18,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 18,
                        max: 23,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 23,
                        max: 28,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 28,
                        max: 32,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 32,
                        max: 37,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 37,
                        max: 41,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 41,
                        max: 46,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                        "alto_do_parque":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: -não informado-"},
                        },                        "americano":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: -não informado-"},
                        },                        "bom_pastor":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: -não informado-"},
                        },                        "campestre":{
                            value: "5",
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 5"},
                        },                        "carneiros":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: -não informado-"},
                        },                        "centenario":{
                            value: "5",
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 5"},
                        },                        "centro":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: -não informado-"},
                        },                        "conservas":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: -não informado-"},
                        },                        "conventos":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: -não informado-"},
                        },                        "floresta":{
                            value: "45",
                            text: { content:  45 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 45"},
                        },                        "florestal":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: -não informado-"},
                        },                        "hidraulica":{
                            value: "7",
                            text: { content:  7 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 7"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: -não informado-"},
                        },                        "imigrante":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: -não informado-"},
                        },                        "jardim_do_cedro":{
                            value: "8",
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 8"},
                        },                        "moinhos":{
                            value: "5",
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 5"},
                        },                        "moinhos_dagua":{
                            value: "6",
                            text: { content:  6 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 6"},
                        },                        "montanha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: -não informado-"},
                        },                        "morro_vinte_cinco":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: -não informado-"},
                        },                        "nacoes":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: -não informado-"},
                        },                        "olarias":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: -não informado-"},
                        },                        "planalto":{
                            value: "5",
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 5"},
                        },                        "santo_andre":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: -não informado-"},
                        },                        "santo_antonio":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: -não informado-"},
                        },                        "sao_bento":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: -não informado-"},
                        },                        "sao_cristovao":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: -não informado-"},
                        },                        "universitario":{
                            value: "5",
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 5"},
                        },}
            });
        });