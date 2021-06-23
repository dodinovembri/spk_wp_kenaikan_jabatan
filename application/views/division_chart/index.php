<div class="wrapper">

    <?php $this->load->view('components/header'); ?>
    <?php $this->load->view('components/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Grafik Per Divisi
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Grafik Per Divisi</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">

                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                <style>
                    .highcharts-figure,
                    .highcharts-data-table table {
                        min-width: 310px;
                        max-width: 800px;
                        margin: 1em auto;
                    }

                    #container {
                        height: 400px;
                    }

                    .highcharts-data-table table {
                        font-family: Verdana, sans-serif;
                        border-collapse: collapse;
                        border: 1px solid #EBEBEB;
                        margin: 10px auto;
                        text-align: center;
                        width: 100%;
                        max-width: 500px;
                    }

                    .highcharts-data-table caption {
                        padding: 1em 0;
                        font-size: 1.2em;
                        color: #555;
                    }

                    .highcharts-data-table th {
                        font-weight: 600;
                        padding: 0.5em;
                    }

                    .highcharts-data-table td,
                    .highcharts-data-table th,
                    .highcharts-data-table caption {
                        padding: 0.5em;
                    }

                    .highcharts-data-table thead tr,
                    .highcharts-data-table tr:nth-child(even) {
                        background: #f8f8f8;
                    }

                    .highcharts-data-table tr:hover {
                        background: #f1f7ff;
                    }
                </style>

                <figure class="highcharts-figure">
                    <div id="container"></div>
                    <p class="highcharts-description">
                        Grafik jumlah pegawai yang di promosikan berdasarkan divisi.
                    </p>
                </figure>

                <?php
                foreach ($employees as $key => $value) {
                    $division[] = $value->division_name;
                    $total[] = (int)$value->total;
                }
                ?>
                <script>
                    Highcharts.chart('container', {
                        chart: {
                            type: 'line'
                        },
                        title: {
                            text: 'Grafik Per Divisi'
                        },
                        xAxis: {
                            categories: <?php echo json_encode($division) ?>,
                            title: {
                                text: null
                            }
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Total',
                                align: 'high'
                            },
                            labels: {
                                overflow: 'justify'
                            }
                        },
                        tooltip: {
                            valueSuffix: ' '
                        },
                        plotOptions: {
                            bar: {
                                dataLabels: {
                                    enabled: true
                                }
                            }
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -40,
                            y: 80,
                            floating: true,
                            borderWidth: 1,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                            shadow: true
                        },
                        credits: {
                            enabled: false
                        },
                        series: [{
                            name: 'Divisi ',
                            data: <?php echo json_encode($total); ?>
                        }]
                    });
                </script>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('components/footer'); ?>

</div>