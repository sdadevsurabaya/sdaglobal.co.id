@extends('back/layouts/main_admin')

@section('area')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-home"></i>
                    </span> Dashboard
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                {{-- <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img loading="lazy" src="{{ url('/') }}/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Jumlah lowongan status Open <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ count($res_job) }} Lowongan</h2>
                        <h6 class="card-text">Indraco karir</h6>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img loading="lazy" src="{{ url('/') }}/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Jumlah kandidat yang submit <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ count($get_all_candidate) }} Orang</h2>
                        <h6 class="card-text">Indraco karir</h6>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img loading="lazy" src="{{ url('/') }}/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Jumlah kandidat yang diterima <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ count($get_candidate_accepted) }} Orang</h2>
                        <h6 class="card-text">Indraco karir</h6>
                    </div>
                    </div>
                </div> --}}
            </div>

            <div class="row">
                {{-- <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <div class="clearfix d-flex justify-content-between">
                            <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                            <div class="col-5">
                                <select class="form-control form-control-md tahun" id="tahun" name="tahun">
                                    <option value="0">--Select Tahun--</option>
                                    @foreach ($get_year as $data)
                                        <option value="{{ $data->year }}">{{ $data->year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="chartBatangLegend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                        </div>
                        <canvas id="chartBatang" class="mt-4"></canvas>
                    </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <canvas id="chartLingkaran"></canvas>
                        <div id="chartLingkaranLegend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                    </div>
                    </div>
                </div> --}}
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="#">sdaglobal.co.id</a>. All rights reserved.</span>
            {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> --}}
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{-- <script type="text/javascript">
    $(document).ready(function(){
        // Start Chart bar
        var ctx = document.getElementById('chartBatang').getContext("2d");
        var myChart;
        var gradientStrokeViolet = ctx.createLinearGradient(0, 0, 0, 181);
        gradientStrokeViolet.addColorStop(0, 'rgba(218, 140, 255, 1)');
        gradientStrokeViolet.addColorStop(1, 'rgba(154, 85, 255, 1)');
        var gradientLegendViolet = 'linear-gradient(to right, rgba(218, 140, 255, 1), rgba(154, 85, 255, 1))';

        var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 360);
        gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
        gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');
        var gradientLegendBlue = 'linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))';

        var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStrokeRed.addColorStop(0, 'rgba(255, 191, 150, 1)');
        gradientStrokeRed.addColorStop(1, 'rgba(254, 112, 150, 1)');
        var gradientLegendRed = 'linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))';

        myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DES'],
            datasets: [
                {
                label: "Semua Kandidat",
                borderColor: gradientStrokeViolet,
                backgroundColor: gradientStrokeViolet,
                hoverBackgroundColor: gradientStrokeViolet,
                legendColor: gradientLegendViolet,
                pointRadius: 0,
                fill: false,
                borderWidth: 1,
                fill: 'origin',
                data: [<?php echo count($get_count_all_candidate_jan); ?>, <?php echo count($get_count_all_candidate_feb); ?>, <?php echo count($get_count_all_candidate_mar); ?>, <?php echo count($get_count_all_candidate_apr); ?>, <?php echo count($get_count_all_candidate_mei); ?>, <?php echo count($get_count_all_candidate_jun); ?>, <?php echo count($get_count_all_candidate_jul); ?>, <?php echo count($get_count_all_candidate_aug); ?>, <?php echo count($get_count_all_candidate_sep); ?>, <?php echo count($get_count_all_candidate_okt); ?>, <?php echo count($get_count_all_candidate_nov); ?>, <?php echo count($get_count_all_candidate_des); ?>]
                },
                {
                label: "Diterima",
                borderColor: gradientStrokeRed,
                backgroundColor: gradientStrokeRed,
                hoverBackgroundColor: gradientStrokeRed,
                legendColor: gradientLegendRed,
                pointRadius: 0,
                fill: false,
                borderWidth: 1,
                fill: 'origin',
                data: [<?php echo count($get_count_accepted_candidate_jan); ?>, <?php echo count($get_count_accepted_candidate_feb); ?>, <?php echo count($get_count_accepted_candidate_mar); ?>, <?php echo count($get_count_accepted_candidate_apr); ?>, <?php echo count($get_count_accepted_candidate_mei); ?>, <?php echo count($get_count_accepted_candidate_jun); ?>, <?php echo count($get_count_accepted_candidate_jul); ?>, <?php echo count($get_count_accepted_candidate_aug); ?>, <?php echo count($get_count_accepted_candidate_sep); ?>, <?php echo count($get_count_accepted_candidate_okt); ?>, <?php echo count($get_count_accepted_candidate_nov); ?>, <?php echo count($get_count_accepted_candidate_des); ?>]
                },
                {
                label: "Ditolak",
                borderColor: gradientStrokeBlue,
                backgroundColor: gradientStrokeBlue,
                hoverBackgroundColor: gradientStrokeBlue,
                legendColor: gradientLegendBlue,
                pointRadius: 0,
                fill: false,
                borderWidth: 1,
                fill: 'origin',
                data: [<?php echo count($get_count_not_suitable_candidate_jan); ?>, <?php echo count($get_count_not_suitable_candidate_feb); ?>, <?php echo count($get_count_not_suitable_candidate_mar); ?>, <?php echo count($get_count_not_suitable_candidate_apr); ?>, <?php echo count($get_count_not_suitable_candidate_mei); ?>, <?php echo count($get_count_not_suitable_candidate_jun); ?>, <?php echo count($get_count_not_suitable_candidate_jul); ?>, <?php echo count($get_count_not_suitable_candidate_aug); ?>, <?php echo count($get_count_not_suitable_candidate_sep); ?>, <?php echo count($get_count_not_suitable_candidate_okt); ?>, <?php echo count($get_count_not_suitable_candidate_nov); ?>, <?php echo count($get_count_not_suitable_candidate_des); ?>]
                }
            ]
        },
        options: {
            responsive: true,
            legend: false,
            legendCallback: function(chart) {
            var text = [];
            text.push('<ul>');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                text.push('<li><span class="legend-dots" style="background:' +
                            chart.data.datasets[i].legendColor +
                            '"></span>');
                if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                }
                text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false,
                        min: 0,
                        stepSize: 20,
                        max: 80
                    },
                    gridLines: {
                    drawBorder: false,
                    color: 'rgba(235,237,242,1)',
                    zeroLineColor: 'rgba(235,237,242,1)'
                    }
                }],
                xAxes: [{
                    gridLines: {
                    display:false,
                    drawBorder: false,
                    color: 'rgba(0,0,0,1)',
                    zeroLineColor: 'rgba(235,237,242,1)'
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "#9c9fa6",
                        autoSkip: true,
                    },
                    categoryPercentage: 0.5,
                    barPercentage: 0.5
                }]
            }
            },
            elements: {
            point: {
                radius: 0
            }
            }
        });
        $("#chartBatangLegend").html(myChart.generateLegend());
        // End chart bar

        // Start Chart
        var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 181);
        gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
        gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');
        var gradientLegendBlue = 'linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))';

        var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 50);
        gradientStrokeRed.addColorStop(0, 'rgba(255, 191, 150, 1)');
        gradientStrokeRed.addColorStop(1, 'rgba(254, 112, 150, 1)');
        var gradientLegendRed = 'linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))';

        var gradientStrokeGreen = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStrokeGreen.addColorStop(0, 'rgba(6, 185, 157, 1)');
        gradientStrokeGreen.addColorStop(1, 'rgba(132, 217, 210, 1)');
        var gradientLegendGreen = 'linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))';

        var trafficChartData = {
            datasets: [{
            data: [<?php echo count($get_count_all_candidate); ?>, <?php echo count($get_count_all_accepted_candidate); ?>, <?php echo count($get_count_all_not_suitable_candidate); ?>],
            backgroundColor: [
                gradientStrokeBlue,
                gradientStrokeGreen,
                gradientStrokeRed
            ],
            hoverBackgroundColor: [
                gradientStrokeBlue,
                gradientStrokeGreen,
                gradientStrokeRed
            ],
            borderColor: [
                gradientStrokeBlue,
                gradientStrokeGreen,
                gradientStrokeRed
            ],
            legendColor: [
                gradientLegendBlue,
                gradientLegendGreen,
                gradientLegendRed
            ]
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
            'Semua Kandidat',
            'Diterima',
            'Ditolak',
            ]
        };
        var trafficChartOptions = {
            responsive: true,
            animation: {
            animateScale: true,
            animateRotate: true
            },
            legend: false,
            legendCallback: function(chart) {
            var text = [];
            text.push('<ul>');
            for (var i = 0; i < trafficChartData.datasets[0].data.length; i++) {
                text.push('<li><span class="legend-dots" style="background:' +
                trafficChartData.datasets[0].legendColor[i] +
                            '"></span>');
                if (trafficChartData.labels[i]) {
                    text.push(trafficChartData.labels[i]);
                }
                text.push('<span class="float-right">'+trafficChartData.datasets[0].data[i]+" Orang"+'</span>')
                text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
            }
        };
        var trafficChartCanvas = $("#chartLingkaran").get(0).getContext("2d");
        var trafficChart = new Chart(trafficChartCanvas, {
            type: 'doughnut',
            data: trafficChartData,
            options: trafficChartOptions
        });
        $("#chartLingkaranLegend").html(trafficChart.generateLegend());
        // End Chart

        // change data by tahun
        $('#tahun').change(function(){
            let tahun_val = $('#tahun').val();
            // console.log(tahun_val);

            $.ajax({
                type: 'GET',
                url: "{{ url('dashboard/chart_batang') }}/" + tahun_val,
                // data : formData,
                data: {
                    "tahun_val": tahun_val,
                },
                cache: false,
                success:function(data){
                    // console.log(data.get_count_all_candidate_jan.length)
                    // console.log(data.get_count_accepted_candidate_jan.length)
                    // console.log(data.get_count_not_suitable_candidate_jan.length)

                    var ctx = document.getElementById('chartBatang').getContext("2d");

                    var gradientStrokeViolet = ctx.createLinearGradient(0, 0, 0, 181);
                    gradientStrokeViolet.addColorStop(0, 'rgba(218, 140, 255, 1)');
                    gradientStrokeViolet.addColorStop(1, 'rgba(154, 85, 255, 1)');
                    var gradientLegendViolet = 'linear-gradient(to right, rgba(218, 140, 255, 1), rgba(154, 85, 255, 1))';

                    var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 360);
                    gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
                    gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');
                    var gradientLegendBlue = 'linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))';

                    var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 300);
                    gradientStrokeRed.addColorStop(0, 'rgba(255, 191, 150, 1)');
                    gradientStrokeRed.addColorStop(1, 'rgba(254, 112, 150, 1)');
                    var gradientLegendRed = 'linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))';
                    myChart.destroy();
                    myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DES'],
                        datasets: [
                            {
                            label: "Semua Kandidat",
                            borderColor: gradientStrokeViolet,
                            backgroundColor: gradientStrokeViolet,
                            hoverBackgroundColor: gradientStrokeViolet,
                            legendColor: gradientLegendViolet,
                            pointRadius: 0,
                            fill: false,
                            borderWidth: 1,
                            fill: 'origin',
                            data: [data.get_count_all_candidate_jan.length, data.get_count_all_candidate_feb.length, data.get_count_all_candidate_mar.length, data.get_count_all_candidate_apr.length, data.get_count_all_candidate_mei.length, data.get_count_all_candidate_jun.length, data.get_count_all_candidate_jul.length, data.get_count_all_candidate_aug.length, data.get_count_all_candidate_sep.length, data.get_count_all_candidate_okt.length, data.get_count_all_candidate_nov.length, data.get_count_all_candidate_des.length]
                            },
                            {
                            label: "Diterima",
                            borderColor: gradientStrokeRed,
                            backgroundColor: gradientStrokeRed,
                            hoverBackgroundColor: gradientStrokeRed,
                            legendColor: gradientLegendRed,
                            pointRadius: 0,
                            fill: false,
                            borderWidth: 1,
                            fill: 'origin',
                            data: [data.get_count_accepted_candidate_jan.length, data.get_count_accepted_candidate_feb.length, data.get_count_accepted_candidate_mar.length, data.get_count_accepted_candidate_apr.length, data.get_count_accepted_candidate_mei.length, data.get_count_accepted_candidate_jun.length, data.get_count_accepted_candidate_jul.length, data.get_count_accepted_candidate_aug.length, data.get_count_accepted_candidate_sep.length, data.get_count_accepted_candidate_okt.length, data.get_count_accepted_candidate_nov.length, data.get_count_accepted_candidate_des.length]
                            },
                            {
                            label: "Ditolak",
                            borderColor: gradientStrokeBlue,
                            backgroundColor: gradientStrokeBlue,
                            hoverBackgroundColor: gradientStrokeBlue,
                            legendColor: gradientLegendBlue,
                            pointRadius: 0,
                            fill: false,
                            borderWidth: 1,
                            fill: 'origin',
                            data: [data.get_count_not_suitable_candidate_jan.length, data.get_count_not_suitable_candidate_feb.length, data.get_count_not_suitable_candidate_mar.length, data.get_count_not_suitable_candidate_apr.length, data.get_count_not_suitable_candidate_mei.length, data.get_count_not_suitable_candidate_jun.length, data.get_count_not_suitable_candidate_jul.length, data.get_count_not_suitable_candidate_aug.length, data.get_count_not_suitable_candidate_sep.length, data.get_count_not_suitable_candidate_okt.length, data.get_count_not_suitable_candidate_nov.length, data.get_count_not_suitable_candidate_des.length]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: false,
                        legendCallback: function(chart) {
                        var text = [];
                        text.push('<ul>');
                        for (var i = 0; i < chart.data.datasets.length; i++) {
                            text.push('<li><span class="legend-dots" style="background:' +
                                        chart.data.datasets[i].legendColor +
                                        '"></span>');
                            if (chart.data.datasets[i].label) {
                                text.push(chart.data.datasets[i].label);
                            }
                            text.push('</li>');
                        }
                        text.push('</ul>');
                        return text.join('');
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    display: false,
                                    min: 0,
                                    stepSize: 20,
                                    max: 80
                                },
                                gridLines: {
                                drawBorder: false,
                                color: 'rgba(235,237,242,1)',
                                zeroLineColor: 'rgba(235,237,242,1)'
                                }
                            }],
                            xAxes: [{
                                gridLines: {
                                display:false,
                                drawBorder: false,
                                color: 'rgba(0,0,0,1)',
                                zeroLineColor: 'rgba(235,237,242,1)'
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#9c9fa6",
                                    autoSkip: true,
                                },
                                categoryPercentage: 0.5,
                                barPercentage: 0.5
                            }]
                        }
                        },
                        elements: {
                        point: {
                            radius: 0
                        }
                        }
                    });
                    $("#chartBatangLegend").html(myChart.generateLegend());
                    // myChart.destroy();
                }
            });
        });

    });
</script> --}}
