$(function() {
    var data = {
        "0": {
            "areas": {
                "conventos": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "sao_bento": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "floresta": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "santo_antonio": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "nacoes": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "conservas": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "jardim_do_cedro": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "moinhos": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "moinhos_dagua": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "centro": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "hidraulica": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "montanha": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "americano": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "bom_pastor": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "alto_do_parque": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "carneiros": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "universitario": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "sao_cristovao": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "santo_andre": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "campestre": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "igrejinha": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "centenario": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "imigrante": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}},
                "florestal": {"value": 1,"text": {"content": "",attrs: {fill: "#222"}}}
                
            }
        },
        "5": {
            "areas": {
                "moinhos_dagua": {
                    "value": 1,
                    "text": {
                        "content": "1b",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "moinhos_dagua": {
                    "value": 1
                }
            }
        },
        "7": {
            "areas": {
                "conventos": {
                    "value": 2,
                    "text": {
                        "content": "2",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 2"
                    }
                },
                "imigrante": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Imigrante</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "conventos": {
                    "value": 2
                },
                "imigrante": {
                    "value": 1
                }
            }
        },
        "8": {
            "areas": {
                "moinhos": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "moinhos": {
                    "value": 1
                }
            }
        },
        "9": {
            "areas": {
                "imigrante": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Imigrante</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "imigrante": {
                    "value": 1
                }
            }
        },
        "10": {
            "areas": {
                "conservas": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                    }
                },
                "hidraulica": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "conservas": {
                    "value": 1
                },
                "hidraulica": {
                    "value": 1
                }
            }
        },
        "11": {
            "areas": {
                "conventos": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "conventos": {
                    "value": 1
                }
            }
        },
        "13": {
            "areas": {
                "igrejinha": {
                    "value": 1,
                    "text": {
                        "content": "1",
                        attrs: {
                            fill: "#222"
                        }
                    },
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Igrejinha</span><br />Requerimentos : 1"
                    }
                }
            },
            "plots": {
                "igrejinha": {
                    "value": 1
                }
            }
        },
    };
    $("#cat_requerimento").change(function() {
        value = $("#cat_requerimento").val();

//        var deletedAreas = ["conventos", "sao_bento", "floresta", "santo_antonio", "nacoes", "conservas", "jardim_do_cedro", "moinhos", "moinhos_dagua",
//            "centro", "hidraulica", "americano", "montanha", "bom_pastor", "alto_do_parque", "carneiros", "universitario", "sao_cristovao", "santo_andre", "campestre", "igrejinha",
//            "centenario", "imigrante", "florestal"];
//
//        var updatedOptions = {
//            'areas': {},
//            'plots': {}
//        };
//
//        for (var i = 0; i < deletedAreas.length; i++)
//        {
//            updatedOptions.areas[deletedAreas[i]] = {
//                "text": {
//                    "content": " g"
//                }
//            };
//        }
        
//        console.log(updatedOptions);
//        console.log(data[value]);
//
//        $(".maparea1").trigger('update', [updatedOptions, {
//            }, {
//            }, {
////                animDuration: 10
//            }]);

//xxx
//ESTRATEGIA DESSA FORMA FUNCIONOU... FAAZER ISSO NO GERAR.PHP

        console.log(data[value]);

        $(".maparea1").trigger('update', [data[0], {}, {}, {animDuration: 500}]);
        $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000}]);
    });
    
    var deletedAreas = ["conventos", "sao_bento", "floresta", "santo_antonio", "nacoes", "conservas", "jardim_do_cedro", "moinhos", "moinhos_dagua",
            "centro", "hidraulica", "americano", "montanha", "bom_pastor", "alto_do_parque", "carneiros", "universitario", "sao_cristovao", "santo_andre", "campestre", "igrejinha",
            "centenario", "imigrante", "florestal"];

    var updatedOptions = {
        'areas': {}
    };

    for (var i = 0; i < deletedAreas.length; i++)
    {
        updatedOptions.areas[deletedAreas[i]] = {
            "text": {
                "content": " g"
            },
            attrs: {
                fill: "#cdf"
            }
        };
    }
    
    console.log(updatedOptions);

    // Mapael initialisation
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#99e",
                    stroke: "#82bfec",
                    "stroke-width": 0.3
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
//        areas: updatedOptions['areas']
        areas: data[0]['areas']
    });
});