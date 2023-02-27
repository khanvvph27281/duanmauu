
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],

                <?php
                $tongdm = count($loadbieudo);
                $i = 1;

                foreach ($loadbieudo as $loadbd) {
                    extract($loadbd);
                    if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ",";


                    echo "['" . $loadbd['tendm'] . "'," . $loadbd['countsp'] . "].$dauphay";
                    $i++;
                }
                ?>
]);

var options = {
  title:'World Wide Wine Production'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>




