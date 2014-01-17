        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
                    defaultArea: {
                        attrs: {
                            fill: "#fce94f", stroke: "#c4a000"
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
                        title: "Requerentes por bairro",
                        slices: [{
                        min: 0,
                        max: 1,
                        attrs: {
                            fill: "#e4c900"}
                      },{
                        min: 1,
                        max: 1,
                        attrs: {
                            fill: "#dcbf00"}
                      },{
                        min: 1,
                        max: 2,
                        attrs: {
                            fill: "#d4b400"}
                      },{
                        min: 2,
                        max: 2,
                        attrs: {
                            fill: "#ccaa00"}
                      },{
                        min: 2,
                        max: 3,
                        attrs: {
                            fill: "#c4a000"}
                      },]
            }
        },
        areas: {                            "americano":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerentes: 1"},
                            },                            "bom_pastor":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerentes: 1"},
                            },                            "florestal":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerentes: 2"},
                            },                            "hidraulica":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerentes: 2"},
                            },                            "igrejinha":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerentes: 2"},
                            },                            "imigrante":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerentes: 1"},
                            },                            "jardim_do_cedro":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerentes: 1"},
                            },                            "moinhos":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerentes: 1"},
                            },                            "montanha":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerentes: 1"},
                            },                            "santo_andre":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Requerentes: 1"},
                            },}
            });
        });