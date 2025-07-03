@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

<div class="card card-action mb-4 h-100">
    <div class="card-header">
        <div class="card-action-title">{{ __('admin.Integrational request') }}</div>
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
        let hSeries = {{ Js::from($datas->pluck('count')->toArray()) }},
            hCategories = {{ Js::from($datas->pluck('category')->toArray()) }},
            hFilename = `{{ __('admin.Integrational request') }}`;

        const httpEl = document.querySelector('#{{ $id }}'),
            httpConfig = {
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
                                filename: hFilename,
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
                                filename: hFilename,
                            },
                            png: {
                                filename: hFilename,
                            }
                        },
                    }
                },
                series: [{
                    data: hSeries
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
                colors: [config.colors.info],
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
                    categories: hCategories,
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
                }
            };

        if (typeof httpEl !== undefined && httpEl !== null) {
            const http = new ApexCharts(httpEl, httpConfig);
            http.render();
        }
    </script>
@endpush
