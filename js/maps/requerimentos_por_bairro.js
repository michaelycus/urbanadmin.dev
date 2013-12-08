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
                        max: 1,
                        attrs: {
                            fill: "#6490c3"}
                      },{
                        min: 1,
                        max: 2,
                        attrs: {
                            fill: "#5682b7"}
                      },{
                        min: 2,
                        max: 4,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 4,
                        max: 5,
                        attrs: {
                            fill: "#3b669f"}
                      },{
                        min: 5,
                        max: 6,
                        attrs: {
                            fill: "#2d5893"}
                      },{
                        min: 6,
                        max: 7,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "americano":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 3"},
                            },                            "bom_pastor":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 3"},
                            },                            "campestre":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 5"},
                            },                            "carneiros":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 5"},
                            },                            "centenario":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 2"},
                            },                            "conservas":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 2"},
                            },                            "conventos":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 2"},
                            },                            "florestal":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 1"},
                            },                            "moinhos_dagua":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 2"},
                            },}
            });
        });