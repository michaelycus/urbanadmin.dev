        $(function() {
            var data = {"0": { "areas": {"": {"text": {"content": ""}},"alto_do_parque": {"text": {"content": ""}},"americano": {"text": {"content": ""}},"bom_pastor": {"text": {"content": ""}},"campestre": {"text": {"content": ""}},"carneiros": {"text": {"content": ""}},"centenario": {"text": {"content": ""}},"centro": {"text": {"content": ""}},"conservas": {"text": {"content": ""}},"conventos": {"text": {"content": ""}},"floresta": {"text": {"content": ""}},"florestal": {"text": {"content": ""}},"hidraulica": {"text": {"content": ""}},"igrejinha": {"text": {"content": ""}},"imigrante": {"text": {"content": ""}},"jardim_do_cedro": {"text": {"content": ""}},"moinhos": {"text": {"content": ""}},"moinhos_dagua": {"text": {"content": ""}},"montanha": {"text": {"content": ""}},"morro_vinte_cinco": {"text": {"content": ""}},"nacoes": {"text": {"content": ""}},"olarias": {"text": {"content": ""}},"planalto": {"text": {"content": ""}},"santo_andre": {"text": {"content": ""}},"santo_antonio": {"text": {"content": ""}},"sao_bento": {"text": {"content": ""}},"sao_cristovao": {"text": {"content": ""}},"universitario": {"text": {"content": ""}},}},"1": { "areas": {"alto_do_parque": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Alto do Parque</span><br />Requerimentos : 1"
                            }},"americano": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 1"
                            }},"bom_pastor": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Bom Pastor</span><br />Requerimentos : 1"
                            }},"centro": {
                            "value": 6,
                            "text": { "content":  "6" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#2b5691"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 6"
                            }},"conventos": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 2"
                            }},"floresta": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Floresta</span><br />Requerimentos : 1"
                            }},"florestal": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 1"
                            }},"jardim_do_cedro": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Jardim do Cedro</span><br />Requerimentos : 2"
                            }},"moinhos": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 2"
                            }},"moinhos_dagua": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 2"
                            }},"sao_cristovao": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">São Cristóvão</span><br />Requerimentos : 2"
                            }}},"plots": {"alto_do_parque": {
                            "value": 1},"americano": {
                            "value": 1},"bom_pastor": {
                            "value": 1},"centro": {
                            "value": 6},"conventos": {
                            "value": 2},"floresta": {
                            "value": 1},"florestal": {
                            "value": 1},"jardim_do_cedro": {
                            "value": 2},"moinhos": {
                            "value": 2},"moinhos_dagua": {
                            "value": 2},"sao_cristovao": {
                            "value": 2}}},};
                        $("#vereador").change(function() {
            value = $("#vereador").val();

              $(".maparea1").trigger('update', [data[0], {}, {}, {animDuration: 500}]);

              $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000,resetPlots:true, resetAreas:true  }]);
          });

            // Mapael initialisation
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
                                fill: "#eee",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#204a87",
                                "font-weight": "normal"
                            }
                        }
                    },
                    defaultPlot: {
                        text: {
                            attrs: {
                                fill: "#613b1e",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#f99200",
                                "font-weight": "bold"
                            }
                        }
                    }
                },
                areas: data[0]['areas']
            });
        });