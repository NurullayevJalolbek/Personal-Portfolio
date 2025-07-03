@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

<div class="card card-action mb-4">
    <div class="card-header">
        <div class="card-action-title">Expand Card</div>
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
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/cards-actions.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/block-ui/block-ui.js') }}"></script>

    <script>
        let series = {{ Js::from($datas->pluck('user_count')->toArray()) }},
            labels = {{ Js::from($datas->pluck('name')->toArray()) }},
            filename = `{{ __('admin.Statistic users') }}`;

        let cardColor, headingColor, labelColor, borderColor, legendColor;

        if (isDarkStyle) {
            cardColor = config.colors_dark.cardColor;
            headingColor = config.colors_dark.headingColor;
            labelColor = config.colors_dark.textMuted;
            legendColor = config.colors_dark.bodyColor;
            borderColor = config.colors_dark.borderColor;
        } else {
            cardColor = config.colors.cardColor;
            headingColor = config.colors.headingColor;
            labelColor = config.colors.textMuted;
            legendColor = config.colors.bodyColor;
            borderColor = config.colors.borderColor;
        }

        const donutChartEl = document.querySelector(`#{{ $id }}`),
            donutChartConfig = {
                chart: {
                    height: 500,
                    type: 'donut',
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: true,
                        },
                        export: {
                            csv: {
                                filename: filename,
                                columnDelimiter: ',',
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
                                filename: filename,
                            },
                            png: {
                                filename: filename,
                            }
                        },
                    }
                },
                labels: labels,
                series: series,
                colors: [
                    '#fee802',
                    '#3fd0bd',
                    '#826bf8',
                    '#2b9bf4'
                ],
                stroke: {
                    show: false,
                    curve: 'straight'
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val, opt) {
                        return opt.w.config.series[opt.seriesIndex];
                    }
                },
                legend: {
                    show: true,
                    position: 'bottom',
                    markers: {
                        offsetX: -3
                    },
                    itemMargin: {
                        vertical: 3,
                        horizontal: 10
                    },
                    labels: {
                        colors: legendColor,
                        useSeriesColors: false
                    }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    fontSize: '2rem',
                                    fontFamily: 'Public Sans'
                                },
                                value: {
                                    fontSize: '1.2rem',
                                    color: legendColor,
                                    fontFamily: 'Public Sans',
                                    formatter: function(val) {
                                        return parseInt(val, 10);
                                    }
                                },
                                total: {
                                    show: true,
                                    fontSize: '1.5rem',
                                    color: headingColor,
                                    label: `{{ __('admin.Total') }}`
                                }
                            }
                        }
                    }
                },
                responsive: [{
                        breakpoint: 992,
                        options: {
                            chart: {
                                height: 380
                            },
                            legend: {
                                position: 'bottom',
                                labels: {
                                    colors: legendColor,
                                    useSeriesColors: false
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 576,
                        options: {
                            chart: {
                                height: 320
                            },
                            plotOptions: {
                                pie: {
                                    donut: {
                                        labels: {
                                            show: true,
                                            name: {
                                                fontSize: '1.5rem'
                                            },
                                            value: {
                                                fontSize: '1rem'
                                            },
                                            total: {
                                                fontSize: '1.5rem'
                                            }
                                        }
                                    }
                                }
                            },
                            legend: {
                                position: 'bottom',
                                labels: {
                                    colors: legendColor,
                                    useSeriesColors: false
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 420,
                        options: {
                            chart: {
                                height: 280
                            },
                            legend: {
                                show: false
                            }
                        }
                    },
                    {
                        breakpoint: 360,
                        options: {
                            chart: {
                                height: 250
                            },
                            legend: {
                                show: false
                            }
                        }
                    }
                ]
            };
        if (typeof donutChartEl !== undefined && donutChartEl !== null) {
            const donutChart = new ApexCharts(donutChartEl, donutChartConfig);
            donutChart.render();
        }
    </script>
@endpush
