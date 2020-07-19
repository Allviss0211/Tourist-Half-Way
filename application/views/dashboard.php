<div class="row">

    <div class="col-md-12">

        <div class="box">

            <div class="box-header">

                <h3 class="box-title">

                    Xin chào <?php echo $_SESSION['lgFullname'] ?? "<strong style='color:red'> NotLogin </strong>" ?> <br><br>

                    Chúc một ngày tốt lành

                </h3>

            </div>

        </div>

        <div class="box">

            <div class="box-body">

                <div>

                    <canvas id="tour_chart" width="600px" height="300px"></canvas>

                </div>

            </div>

        </div>

        <div class="box">

            <div class="box-body">

                <div>

                    <canvas id="bill_chart" width="600px" height="300px"></canvas>

                </div>

            </div>

        </div>

    </div>

</div>



<script src="<?php echo site_url('/resources/js/Chart.js') ?>"></script>
<script src="<?php echo site_url('/resources/js/jquery-2.2.3.min.js') ?>"></script>

<script>
    function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
</script>

<script>
    function PieChart(controller, idCanvas, nameChart) {
        $.ajax({
            url: "<?php echo base_url() ?>" + controller,
            type: "GET", 
            success: function(data) {
                console.log(data);
                let res = JSON.parse(data);
                console.log(res[0]);
                let keys = Object.keys(res[0]);

                console.log(keys);

                let labels = [];
                let points = [];
                let colors = [];

                for (i in keys) {
                    labels.push(keys[i]);
                    points.push(parseInt(res[0][keys[i]]));
                    colors.push(getRandomColor());
                }

                console.log(labels);
                console.log(points);
                console.log(colors);

                let context = document.getElementById(idCanvas).getContext('2d');

                let chartData = {
                    labels: labels,
                    datasets: [{
                        label: labels,
                        backgroundColor: colors,
                        borderColor: colors,
                        fill: false,
                        data: points,
                    }],
                };

                let barGraph = new Chart(context, {
                    type: 'pie',
                    data: chartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        title: {
                            display: true,
                            text: nameChart
                        },
                    }
                });

            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function LineChart(controller, idCanvas, NameChart) {
        $.ajax({
            url: "<?php echo base_url() ?>" + controller,
            type: "GET", 
            success: function(data) {
                console.log(data);
                let res = JSON.parse(data);
                // console.log(res[0]);
                let keys = Object.keys(res[0]);

                // console.log(keys);

                let points = [];
                let colors = [getRandomColor(), getRandomColor()];

                for (i in keys) {
                    points.push(parseInt(res[0][keys[i]]));
                }

                console.log(points);
                console.log(colors);

                let context = document.getElementById(idCanvas).getContext('2d');

                let chartData = {
                    labels: ['Quý 1', 'Quý 2', 'Quý 3', 'Quý 4'],
                    datasets: [{
                            label: ["Trong nước"],
                            backgroundColor: colors[0],
                            borderColor: colors[0],
                            fill: false,
                            data: [points[0], points[1], points[2], points[3]],
                            yAxisID: 'y-axis-0'
                        },
                        {
                            label: ["Ngoài nước"],
                            backgroundColor: colors[1],
                            borderColor: colors[1],
                            fill: false,
                            data: [points[4], points[5], points[6], points[7]],
                            yAxisID: 'y-axis-1'
                        },
                    ],
                };

                let barGraph = new Chart(context, {
                    type: 'line',
                    data: chartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{
                                type: 'linear',
                                display: true,
                                position: 'left',
                                id: 'y-axis-0',
                            }, {
                                type: 'linear',
                                display: true,
                                position: 'right',
                                id: 'y-axis-1',
                                gridLines: {
                                    drawOnChartArea: false,
                                },
                            }],
                        },
                        title: {
                            display: true,
                            text: NameChart
                        },
                    },
                });

            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

<script>
    $(document).ready(function() {
        PieChart('tour/count_tour', 'tour_chart', 'Biểu đồ thống kê số lượng Tour trong nước và ngoài nước trong năm');
        LineChart('bill/statistic_bill_by_year', 'bill_chart', 'Biểu đồ thống kê số lượng hóa đơn trong nước và ngoài nước theo năm');
    });
</script>