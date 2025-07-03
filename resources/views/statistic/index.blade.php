@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('admin.Statistic') }}
            </li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card card-border-shadow-success">
                <div class="card-body ">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="bx bx-shield-quarter"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ __('admin.System Admins') }} ({{ $userCount }})</h4>
                    </div>
                    <a href="{{ route('admin.users.index') }}">
                        <p class="mb-1">
                            {{ __('admin.Get reference') }}
                            <i class='bx bx-right-arrow-alt'></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card card-border-shadow-info ">
                <div class="card-body ">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-info">
                                <i class="bx bxs-user-detail"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ __('admin.System Clients') }} ({{ $studentCount }})</h4>
                    </div>
                    <a href="#" class="r-0">
                        <p class="mb-1">
                            {{ __('admin.Get reference') }}
                            <i class='bx bx-right-arrow-alt'></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card card-border-shadow-info ">
                <div class="card-body ">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-info">
                                <i class="bx bxs-user-detail"></i>
                            </span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ __('admin.System Clients') }} ({{ $studentCount }})</h4>
                    </div>
                    <a href="#" class="r-0">
                        <p class="mb-1">
                            {{ __('admin.Get reference') }}
                            <i class='bx bx-right-arrow-alt'></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <!-- Expense Overview -->
        <div class="col-md-12 col-lg-12 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income"
                                aria-selected="true">
                                So'ngi hafta
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">So'ngi oy</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('assets/img/icons/unicons/wallet.png') }}" alt="Visits" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Visits</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">2.3K</h6>
                                        <small class="text-success fw-medium">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div id="incomeChart"></div>

                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0">
                                    <div id="expensesOfWeek"></div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Vebsaytga tashriflar</p>
                                    <small class="text-muted">2.3K - o'tgan haftada</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->
    </div>
@endsection


@section('customJs')
    <script>
        async function getDailyVisits() {
            try {
                const response = await fetch('/api/daily-visits/weekly');
                const result = await response.json();
                const series = result.series;
                const dates = result.dates;

                if (series && dates) {
                    console.log("Ishga tushirildi...");
                    updateIncomeChart(series, dates);
                }
            } catch (error) {
                console.error("Xato yuz berdi:", error);
            }
        }

        function updateIncomeChart(series, categories) {
            // Income Chart - Area chart
            const incomeChartEl = document.querySelector("#incomeChart"),
                incomeChartConfig = {
                    series: series,
                    chart: {
                        height: 215,
                        parentHeightOffset: 0,
                        parentWidthOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        type: "area",
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        curve: "smooth",
                    },
                    legend: {
                        show: false,
                    },
                    markers: {
                        size: 6,
                        colors: "transparent",
                        strokeColors: "transparent",
                        strokeWidth: 4,
                        discrete: [{
                            fillColor: config.colors.white,
                            seriesIndex: 0,
                            dataPointIndex: 7,
                            strokeColor: config.colors.primary,
                            strokeWidth: 2,
                            size: 6,
                            radius: 8,
                        }, ],
                        hover: {
                            size: 7,
                        },
                    },
                    colors: [config.colors.primary],
                    fill: {
                        type: "gradient",
                        gradient: {
                            shade: shadeColor,
                            shadeIntensity: 0.6,
                            opacityFrom: 0.5,
                            opacityTo: 0.25,
                            stops: [0, 95, 100],
                        },
                    },
                    grid: {
                        borderColor: borderColor,
                        strokeDashArray: 3,
                        padding: {
                            top: -20,
                            bottom: -8,
                            left: -10,
                            right: 8,
                        },
                    },
                    xaxis: {
                        categories: categories,
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        labels: {
                            show: true,
                            style: {
                                fontSize: "13px",
                                colors: labelColor,
                            },
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        tickAmount: 4,
                    },
                };
            if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
                const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
                incomeChart.render();
            }
        }

        // Sahifa yuklanganda ma'lumotlarni yuklash
        document.addEventListener('DOMContentLoaded', getDailyVisits);
    </script>

    @include('statistic.js')
@endsection
