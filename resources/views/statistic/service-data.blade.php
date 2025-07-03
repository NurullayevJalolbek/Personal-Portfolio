@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

<div class="card card-action mb-4 h-100">
    <div class="card-header">
        <div class="card-action-title">{{ __('admin.By services and data') }}</div>
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
        let sSeries = {{ Js::from($services->pluck('count')->toArray()) }},
            dataSeries = {{ Js::from($datas->pluck('count')->toArray()) }},
            sCategories = {{ Js::from($services->pluck('category')->toArray()) }},
            sFilename = `{{ __('admin.By services and data') }}`;

        const serviceDatatEl = document.querySelector('#{{ $id }}'),
            serviceDatatConfig = {
                chart: {
                    type: 'line',
                    height: 300,
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
                                filename: sFilename,
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
                                filename: sFilename,
                            },
                            png: {
                                filename: sFilename,
                            }
                        },
                    }
                },
                series: [{
                    type: 'line',
                    data: sSeries,
                    name: `{{ __('admin.Services') }}`,
                }, {
                    type: 'line',
                    data: dataSeries,
                    name: `{{ __('admin.General data') }}`,
                }],
                markers: {
                    strokeWidth: 7,
                    strokeOpacity: 1,
                    strokeColors: [cardColor, cardColor],
                    colors: [config.colors.warning, config.colors.info]
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                colors: [config.colors.success, config.colors.info],
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
                // tooltip: {
                //     custom: function({
                //         series,
                //         seriesIndex,
                //         dataPointIndex,
                //         w
                //     }) {
                //         return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] + '</span>' +
                //             '</div>';
                //     }
                // },
                xaxis: {
                    categories: sCategories,
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

        if (typeof serviceDatatEl !== undefined && serviceDatatEl !== null) {
            const serviceDatat = new ApexCharts(serviceDatatEl, serviceDatatConfig);
            serviceDatat.render();
        }
    </script>
@endpush
