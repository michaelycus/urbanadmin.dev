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
                        max: 122,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 122,
                        max: 244,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 244,
                        max: 367,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 367,
                        max: 489,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 489,
                        max: 611,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 611,
                        max: 733,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 733,
                        max: 855,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 855,
                        max: 978,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 978,
                        max: 1100,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 1100,
                        max: 1222,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "0",
                            text: { content:  0 , attrs: {fill:"#222"} },
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
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 0"},
                        },                        "florestal":{
                            value: "122",
                            text: { content:  122 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 122"},
                        },                        "hidraulica":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 0"},
                        },                        "igrejinha":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 0"},
                        },                        "imigrante":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 0"},
                        },                        "jardim_do_cedro":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 0"},
                        },                        "moinhos":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 0"},
                        },                        "moinhos_dagua":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 0"},
                        },                        "montanha":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 0"},
                        },                        "morro_vinte_cinco":{
                            value: "1221",
                            text: { content:  1221 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 1221"},
                        },                        "nacoes":{
                            value: "0",
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 0"},
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