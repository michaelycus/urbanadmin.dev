        $(function() {
            var data = {"0": { "areas": {"": {"text": {"content": ""}},"alto_do_parque": {"text": {"content": ""}},"americano": {"text": {"content": ""}},"bom_pastor": {"text": {"content": ""}},"campestre": {"text": {"content": ""}},"carneiros": {"text": {"content": ""}},"centenario": {"text": {"content": ""}},"centro": {"text": {"content": ""}},"conservas": {"text": {"content": ""}},"conventos": {"text": {"content": ""}},"floresta": {"text": {"content": ""}},"florestal": {"text": {"content": ""}},"hidraulica": {"text": {"content": ""}},"igrejinha": {"text": {"content": ""}},"imigrante": {"text": {"content": ""}},"jardim_do_cedro": {"text": {"content": ""}},"moinhos": {"text": {"content": ""}},"moinhos_dagua": {"text": {"content": ""}},"montanha": {"text": {"content": ""}},"morro_vinte_cinco": {"text": {"content": ""}},"nacoes": {"text": {"content": ""}},"olarias": {"text": {"content": ""}},"planalto": {"text": {"content": ""}},"santo_andre": {"text": {"content": ""}},"santo_antonio": {"text": {"content": ""}},"sao_bento": {"text": {"content": ""}},"sao_cristovao": {"text": {"content": ""}},"universitario": {"text": {"content": ""}},}},"1": { "areas": {"": {
                            "value": 5,
                            "text": { "content":  "5" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#37629b"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Todos os bairros</span><br />Requerimentos : 5"
                            }},"americano": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 1"
                            }},"bom_pastor": {
                            "value": 4,
                            "text": { "content":  "4" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#436ea5"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Bom Pastor</span><br />Requerimentos : 4"
                            }},"campestre": {
                            "value": 4,
                            "text": { "content":  "4" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#436ea5"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 4"
                            }},"carneiros": {
                            "value": 6,
                            "text": { "content":  "6" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#2b5691"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Carneiros</span><br />Requerimentos : 6"
                            }},"centenario": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Centenário</span><br />Requerimentos : 2"
                            }},"conservas": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                            }},"florestal": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5a86ba"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 2"
                            }}},"plots": {"": {
                            "value": 5},"americano": {
                            "value": 1},"bom_pastor": {
                            "value": 4},"campestre": {
                            "value": 4},"carneiros": {
                            "value": 6},"centenario": {
                            "value": 2},"conservas": {
                            "value": 1},"florestal": {
                            "value": 2}}},"13": { "areas": {"conservas": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                            }}},"plots": {"conservas": {
                            "value": 1}}},"16": { "areas": {"americano": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6692c4"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 1"
                            }}},"plots": {"americano": {
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