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
                        display: true,
                        title: "Requerentes por bairro",
                        slices: [{
                        min: 0,
                        max: 3,
                        attrs: {
                            fill: "#e4c900"}
                      },{
                        min: 3,
                        max: 6,
                        attrs: {
                            fill: "#dcbf00"}
                      },{
                        min: 6,
                        max: 10,
                        attrs: {
                            fill: "#d4b400"}
                      },{
                        min: 10,
                        max: 13,
                        attrs: {
                            fill: "#ccaa00"}
                      },{
                        min: 13,
                        max: 16,
                        attrs: {
                            fill: "#c4a000"}
                      },]
            }
        },
        areas: {                            "americano":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 1"},
                            },                            "bom_pastor":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 1"},
                            },                            "centro":{
                                value: "15",
                                text: { content:  15 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 15"},
                            },                            "florestal":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 2"},
                            },                            "hidraulica":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 2"},
                            },                            "igrejinha":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 2"},
                            },                            "imigrante":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerimentos: 1"},
                            },                            "jardim_do_cedro":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 1"},
                            },                            "moinhos":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 1"},
                            },                            "santo_andre":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Requerimentos: 1"},
                            },}
            });
        });