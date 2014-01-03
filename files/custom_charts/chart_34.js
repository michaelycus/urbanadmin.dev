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
                        max: 552,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 552,
                        max: 1103,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 1103,
                        max: 1655,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 1655,
                        max: 2206,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 2206,
                        max: 2758,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 2758,
                        max: 3310,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 3310,
                        max: 3861,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 3861,
                        max: 4413,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 4413,
                        max: 4964,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 4964,
                        max: 5516,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 0"},
                        },                        "americano":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 0"},
                        },                        "bom_pastor":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 0"},
                        },                        "campestre":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 0"},
                        },                        "carneiros":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 0"},
                        },                        "centenario":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 0"},
                        },                        "centro":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 0"},
                        },                        "conservas":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 0"},
                        },                        "conventos":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 0"},
                        },                        "floresta":{
                            value: "45",
                            text: { content:  45 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 45"},
                        },                        "florestal":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 0"},
                        },                        "hidraulica":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 0"},
                        },                        "igrejinha":{
                            value: "45",
                            text: { content:  45 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 45"},
                        },                        "imigrante":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 0"},
                        },                        "jardim_do_cedro":{
                            value: "45",
                            text: { content:  45 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 45"},
                        },                        "moinhos":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 0"},
                        },                        "moinhos_dagua":{
                            value: "4",
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 4"},
                        },                        "montanha":{
                            value: "54",
                            text: { content:  54 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 54"},
                        },                        "morro_vinte_cinco":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 0"},
                        },                        "nacoes":{
                            value: "5515",
                            text: { content:  5515 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 5515"},
                        },                        "olarias":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 0"},
                        },                        "planalto":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 0"},
                        },                        "santo_andre":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 0"},
                        },                        "santo_antonio":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 0"},
                        },                        "sao_bento":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 0"},
                        },                        "sao_cristovao":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 0"},
                        },                        "universitario":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 0"},
                        },}
            });
        });