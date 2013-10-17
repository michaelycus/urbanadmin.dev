$(function() {

    // Fake data for countries and cities from 2003 to 2013
    var data = {
        "2003": {
            "areas": {
                "AF": {
                    "value": 23811026,
                    "href": "http://en.wikipedia.org/w/index.php?search=Afghanistan",
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Afghanistan</span><br />Population : 23811026"
                    }
                },
                "ZA": {
                    "value": 43635718,
                    "href": "http://en.wikipedia.org/w/index.php?search=South Africa",
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">South Africa</span><br />Population : 43635718"
                    }
                }
            }
        },
        "2012": {
            "areas": {
                "AF": {
                    "value": 9658627,
                    "href": "http://en.wikipedia.org/w/index.php?search=Afghanistan",
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Afghanistan</span><br />Population : 9658627"
                    }
                },
                "ZA": {
                    "value": 28205545,
                    "href": "http://en.wikipedia.org/w/index.php?search=Zimbabwe",
                    "tooltip": {
                        "content": "<span style=\"font-weight:bold;\">Zimbabwe</span><br />Population : 28205545"
                    }
                }
            }
        }
    };

    // Knob initialisation (for selecting a year)
    $(".knob").knob({
        release: function(value) {
            $(".world").trigger('update', [data[value], {}, {}, {animDuration: 300}]);
        }
    });

    // Mapael initialisation
    $(".world").mapael({
        map: {
            name: "world_countries",
            defaultArea: {
                attrs: {
                    fill: "#fff",
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
            , zoom: {
                enabled: true
                        , step: 0.75
            }
        },
        legend: {
            area: {
                display: true,
                title: "Country population",
                marginBottom: 7,
                slices: [
                    {
                        max: 5000000,
                        attrs: {
                            fill: "#6aafe1"
                        },
                        label: "Less than 5M"
                    },
                    {
                        min: 5000000,
                        max: 10000000,
                        attrs: {
                            fill: "#459bd9"
                        },
                        label: "Between 5M and 10M"
                    },
                    {
                        min: 10000000,
                        max: 50000000,
                        attrs: {
                            fill: "#2579b5"
                        },
                        label: "Between 10M and 50M"
                    },
                    {
                        min: 50000000,
                        attrs: {
                            fill: "#1a527b"
                        },
                        label: "More than 50M"
                    }
                ]
            },
            plot: {
                display: true,
                title: "City population",
                marginBottom: 6,
                slices: [
                    {
                        type: "circle",
                        max: 500000,
                        attrs: {
                            fill: "#f99200",
                            "stroke-width": 1,
                            opacity: 0.6
                        },
                        attrsHover: {
                            transform: "s1.5",
                            "stroke-width": 1,
                            opacity: 1
                        },
                        label: "Less than 500 000",
                        size: 10
                    },
                    {
                        type: "circle",
                        min: 500000,
                        max: 1000000,
                        attrs: {
                            fill: "#f99200",
                            "stroke-width": 1,
                            opacity: 0.6
                        },
                        attrsHover: {
                            transform: "s1.5",
                            "stroke-width": 1,
                            opacity: 1
                        },
                        label: "Between 500 000 and 1M",
                        size: 20
                    },
                    {
                        type: "circle",
                        min: 1000000,
                        attrs: {
                            fill: "#f99200",
                            "stroke-width": 1,
                            opacity: 0.6
                        },
                        attrsHover: {
                            transform: "s1.5",
                            "stroke-width": 1,
                            opacity: 1
                        },
                        label: "More than 1M",
                        size: 30
                    }
                ]
            }
        },
        plots: $.extend(true, {}, data[2004]['plots'], plots),
        areas: data[2004]['areas']
    });
});