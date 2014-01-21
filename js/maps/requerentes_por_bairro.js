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
                        max: 2,
                        attrs: {
                            fill: "#dcbf00"}
                      },{
                        min: 2,
                        max: 4,
                        attrs: {
                            fill: "#d4b400"}
                      },{
                        min: 4,
                        max: 5,
                        attrs: {
                            fill: "#ccaa00"}
                      },{
                        min: 5,
                        max: 6,
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
                            },                            "centro":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerentes: 5"},
                            },                            "conventos":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerentes: 2"},
                            },                            "florestal":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerentes: 4"},
                            },                            "hidraulica":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerentes: 1"},
                            },                            "imigrante":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerentes: 1"},
                            },                            "moinhos":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerentes: 3"},
                            },                            "moinhos_dagua":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerentes: 2"},
                            },                            "montanha":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerentes: 2"},
                            },                            "universitario":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerentes: 1"},
                            },}
            });
        });