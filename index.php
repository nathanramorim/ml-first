<?php
ini_set('memory_limit', '-1');
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

include('arrays.php');
?>

<html>
<head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="loading" id="loading">
        <div class="box">
            <img src="assets/img/fluid-loader.gif" alt="Loader">
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div id="sexo"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div id="idade"></div>
                </div>
                <div class="col-xs-12">
                    <div id="genre"></div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">


            function loading(){
                $('#loading').css({
                    visibility:'hidden',
                    opacity: 0
                });
            }

            // Load Charts and the corechart package.
            google.charts.load('current', {'packages':['corechart']});

            google.charts.setOnLoadCallback(sexoChart);
            google.charts.setOnLoadCallback(idadeChart);
            google.charts.setOnLoadCallback(genreChart);

            function sexoChart() {

                // Create the data table for Sarah's pizza.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Mulheres', <?php echo $data_users['gen_F'] ?>],
                    ['Homens', <?php echo $data_users['gen_M'] ?>]
                ]);

                // Set options for Sarah's pie chart.
                var options = {
                    title:'Gênero',
                    width: 500,
                    height: 400,
                    is3D: true
                };

                // Instantiate and draw the chart for Sarah's pizza.
                var chart = new google.visualization.PieChart(document.getElementById('sexo'));
                chart.draw(data, options);
            }

            function idadeChart() {

                // Create the data table for Anthony's pizza.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['até 18 anos', <?php echo $data_users['age_1'] ?>],
                    ['18 a 24 anos', <?php echo $data_users['age_18'] ?>],
                    ['25 a 34 anos', <?php echo $data_users['age_25'] ?>],
                    ['35 a 44 anos', <?php echo $data_users['age_35'] ?>],
                    ['45 a 49 anos', <?php echo $data_users['age_45'] ?>],
                    ['50 a 55 anos', <?php echo $data_users['age_50'] ?>],
                    ['mais de 56 anos', <?php echo $data_users['age_56'] ?>]
                ]);

                // Set options for Anthony's pie chart.
                var options = {
                    title:'Idade',
                    width: 500,
                    height: 400,
                    pieHole: 0.4
                };

                // Instantiate and draw the chart for Anthony's pizza.
                var chart = new google.visualization.PieChart(document.getElementById('idade'));
                chart.draw(data, options);
            }


            function genreChart() {
                $color = '#0288d1'
                var data = google.visualization.arrayToDataTable([
                    ['Element', 'Density', { role: 'style' } ],
                    ['Action', <?php echo $genres['action'] ?>, $color],
                    ['Adventure', <?php echo $genres['adventure'] ?>, $color],
                    ['Animation', <?php echo $genres['animation'] ?>, $color],
                    ['Children', <?php echo $genres['children'] ?>, $color],
                    ['Comedy', <?php echo $genres['comedy'] ?>, $color],
                    ['Crime', <?php echo $genres['crime'] ?>, $color],
                    ['Documentary', <?php echo $genres['documentary'] ?>, $color],
                    ['Drama', <?php echo $genres['drama'] ?>, $color],
                    ['Fantasy', <?php echo $genres['fantasy'] ?>, $color],
                    ['Film-Noir', <?php echo $genres['filmnoir'] ?>, $color],
                    ['Horror', <?php echo $genres['horror'] ?>, $color],
                    ['Musical', <?php echo $genres['musical'] ?>, $color],
                    ['Mystery', <?php echo $genres['mystery'] ?>, $color],
                    ['Romance', <?php echo $genres['romance'] ?>, $color],
                    ['Sci-Fi', <?php echo $genres['sciri'] ?>, $color],
                    ['Thriller', <?php echo $genres['thriller'] ?>, $color],
                    ['War', <?php echo $genres['war'] ?>, $color],
                    ['Western', <?php echo $genres['western'] ?>, $color]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns(
                    [0, 1,{
                        calc: 'stringify',
                        sourceColumn: 1,
                        type: 'string',
                        role: 'annotation'
                    }, 2]
                );

                var options = {
                    title: 'Generos de filmes',
                    width: 900,
                    height: 400,
                    bar: {groupWidth: '95%'},
                    legend: { position: 'none' },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("genre"));
                chart.draw(view, options);
            }

            /* Call some functions when document ready */
            $(document).ready(function($){
                setTimeout(
                    function() {
                        loading();
                    },
                2000);
            });
        </script>
    </footer>
</body>

</html>


