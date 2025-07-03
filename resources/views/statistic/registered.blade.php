@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

<div class="card card-action mb-4 h-100">
    <div class="card-header">
        <div class="card-action-title">{{ __('admin.By registered') }}</div>
        <div class="card-action-element">
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="javascript:void(0);" class="card-expand">
                        <i class="tf-icons bx bx-fullscreen"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="card-body">
        <div id="{{ $id }}"></div>
    </div>
</div>

@push('js')
    <script>
        let rSeries = {{ Js::from($datas->pluck('count')->toArray()) }},
            rCategories = {{ Js::from($datas->pluck('category')->toArray()) }},
            rFilename = `{{ __('admin.By registered') }}`;

        const lineChartEl = document.querySelector('#{{ $id }}'),
            lineChartConfig = {
                chart: {
                    height: 300,
                    type: 'line',
                    parentHeightOffset: 0,
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: true,
                        offsetX: 7.5,
                        offsetY: -15,
                        tools: {
                            download: true,
                        },
                        export: {
                            csv: {
                                filename: rFilename,
                                columnDelimiter: ';',
                                headerCategory: 'category',
                                headerValue: 'value',
                                categoryFormatter(x) {
                                    return new Date(x).toDateString()
                                },
                                valueFormatter(y) {
                                    return y
                                }
                            },
                            svg: {
                                filename: rFilename,
                            },
                            png: {
                                filename: rFilename,
                            }
                        },
                    }
                },
                series: [{
                    data: rSeries
                }],
                markers: {
                    strokeWidth: 7,
                    strokeOpacity: 1,
                    strokeColors: [cardColor],
                    colors: [config.colors.warning]
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                colors: [config.colors.warning],
                grid: {
                    borderColor: borderColor,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                    padding: {
                        top: -20
                    }
                },
                tooltip: {
                    custom: function({
                        series,
                        seriesIndex,
                        dataPointIndex,
                        w
                    }) {
                        return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] + '</span>' +
                            '</div>';
                    }
                },
                xaxis: {
                    categories: rCategories,
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '13px'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '13px'
                        }
                    }
                },
            };

        if (typeof lineChartEl !== undefined && lineChartEl !== null) {
            const lineChart = new ApexCharts(lineChartEl, lineChartConfig);
            lineChart.render();
        }

        // const registeredEl = document.querySelector(`#{{ $id }}`),
        //     registeredConfig = {
        //         chart: {
        //             height: 500,
        //             type: 'donut',
        //             toolbar: {
        //                 show: true,
        //                 offsetX: 0,
        //                 offsetY: 0,
        //                 tools: {
        //                     download: true,
        //                 },
        //                 export: {
        //                     csv: {
        //                         filename: rFilename,
        //                         columnDelimiter: ',',
        //                         headerCategory: 'category',
        //                         headerValue: 'value',
        //                         categoryFormatter(x) {
        //                             return new Date(x).toDateString()
        //                         },
        //                         valueFormatter(y) {
        //                             return y
        //                         }
        //                     },
        //                     svg: {
        //                         filename: rFilename,
        //                     },
        //                     png: {
        //                         filename: rFilename,
        //                     }
        //                 },
        //             }
        //         },
        //         labels: rLabels,
        //         series: rSeries,
        //         colors: [
        //             '#fee802',
        //             '#3fd0bd',
        //             '#826bf8',
        //             '#2b9bf4'
        //         ],
        //         stroke: {
        //             show: false,
        //             curve: 'straight'
        //         },
        //         dataLabels: {
        //             enabled: true,
        //             formatter: function(val, opt) {
        //                 return opt.w.config.series[opt.seriesIndex];
        //             }
        //         },
        //         legend: {
        //             show: true,
        //             position: 'bottom',
        //             markers: {
        //                 offsetX: -3
        //             },
        //             itemMargin: {
        //                 vertical: 3,
        //                 horizontal: 10
        //             },
        //             labels: {
        //                 colors: legendColor,
        //                 useSeriesColors: false
        //             }
        //         },
        //         plotOptions: {
        //             pie: {
        //                 donut: {
        //                     labels: {
        //                         show: true,
        //                         name: {
        //                             fontSize: '2rem',
        //                             fontFamily: 'Public Sans'
        //                         },
        //                         value: {
        //                             fontSize: '1.2rem',
        //                             color: legendColor,
        //                             fontFamily: 'Public Sans',
        //                             formatter: function(val) {
        //                                 return parseInt(val, 10);
        //                             }
        //                         },
        //                         total: {
        //                             show: true,
        //                             fontSize: '1.5rem',
        //                             color: headingColor,
        //                             label: `{{ __('admin.Total') }}`
        //                         }
        //                     }
        //                 }
        //             }
        //         },
        //         responsive: [{
        //                 breakpoint: 992,
        //                 options: {
        //                     chart: {
        //                         height: 380
        //                     },
        //                     legend: {
        //                         position: 'bottom',
        //                         labels: {
        //                             colors: legendColor,
        //                             useSeriesColors: false
        //                         }
        //                     }
        //                 }
        //             },
        //             {
        //                 breakpoint: 576,
        //                 options: {
        //                     chart: {
        //                         height: 320
        //                     },
        //                     plotOptions: {
        //                         pie: {
        //                             donut: {
        //                                 labels: {
        //                                     show: true,
        //                                     name: {
        //                                         fontSize: '1.5rem'
        //                                     },
        //                                     value: {
        //                                         fontSize: '1rem'
        //                                     },
        //                                     total: {
        //                                         fontSize: '1.5rem'
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     },
        //                     legend: {
        //                         position: 'bottom',
        //                         labels: {
        //                             colors: legendColor,
        //                             useSeriesColors: false
        //                         }
        //                     }
        //                 }
        //             },
        //             {
        //                 breakpoint: 420,
        //                 options: {
        //                     chart: {
        //                         height: 280
        //                     },
        //                     legend: {
        //                         show: false
        //                     }
        //                 }
        //             },
        //             {
        //                 breakpoint: 360,
        //                 options: {
        //                     chart: {
        //                         height: 250
        //                     },
        //                     legend: {
        //                         show: false
        //                     }
        //                 }
        //             }
        //         ]
        //     };
        // if (typeof registeredEl !== undefined && registeredEl !== null) {
        //     const registered = new ApexCharts(registeredEl, registeredConfig);
        //     registered.render();
        // }
    </script>
@endpush
