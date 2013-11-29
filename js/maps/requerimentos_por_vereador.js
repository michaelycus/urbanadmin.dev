        $(function() {
            var data = {"0": { "areas": {"": {"text": {"content": ""}},"alto_do_parque": {"text": {"content": ""}},"americano": {"text": {"content": ""}},"bom_pastor": {"text": {"content": ""}},"campestre": {"text": {"content": ""}},"carneiros": {"text": {"content": ""}},"centenario": {"text": {"content": ""}},"centro": {"text": {"content": ""}},"conservas": {"text": {"content": ""}},"conventos": {"text": {"content": ""}},"floresta": {"text": {"content": ""}},"florestal": {"text": {"content": ""}},"hidraulica": {"text": {"content": ""}},"igrejinha": {"text": {"content": ""}},"imigrante": {"text": {"content": ""}},"jardim_do_cedro": {"text": {"content": ""}},"moinhos": {"text": {"content": ""}},"moinhos_dagua": {"text": {"content": ""}},"montanha": {"text": {"content": ""}},"morro_vinte_cinco": {"text": {"content": ""}},"nacoes": {"text": {"content": ""}},"olarias": {"text": {"content": ""}},"planalto": {"text": {"content": ""}},"santo_andre": {"text": {"content": ""}},"santo_antonio": {"text": {"content": ""}},"sao_bento": {"text": {"content": ""}},"sao_cristovao": {"text": {"content": ""}},"universitario": {"text": {"content": ""}},}},"7": { "areas": {"campestre": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 1"
                            }},"carneiros": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#3b669f"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Carneiros</span><br />Requerimentos : 2"
                            }},"conservas": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                            }},"conventos": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#3b669f"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 2"
                            }},"hidraulica": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 1"
                            }},"igrejinha": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Igrejinha</span><br />Requerimentos : 1"
                            }},"imigrante": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#3b669f"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Imigrante</span><br />Requerimentos : 2"
                            }},"moinhos_dagua": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 1"
                            }}},"plots": {"campestre": {
                            "value": 1},"carneiros": {
                            "value": 2},"conservas": {
                            "value": 1},"conventos": {
                            "value": 2},"hidraulica": {
                            "value": 1},"igrejinha": {
                            "value": 1},"imigrante": {
                            "value": 2},"moinhos_dagua": {
                            "value": 1}}},"13": { "areas": {"campestre": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 1"
                            }}},"plots": {"campestre": {
                            "value": 1}}},"16": { "areas": {"moinhos_dagua": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 1"
                            }}},"plots": {"moinhos_dagua": {
                            "value": 1}}},};
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