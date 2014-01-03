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
                        max: 657,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 657,
                        max: 1313,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 1313,
                        max: 1970,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 1970,
                        max: 2626,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 2626,
                        max: 3283,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 3283,
                        max: 3940,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 3940,
                        max: 4596,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 4596,
                        max: 5253,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 5253,
                        max: 5909,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 5909,
                        max: 6566,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: "},
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
                        },                        "centro":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: "},
                        },                        "floresta":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: "},
                        },                        "hidraulica":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: "},
                        },                        "igrejinha":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: "},
                        },                        "imigrante":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: "},
                        },                        "moinhos":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: "},
                        },}
            });
        });