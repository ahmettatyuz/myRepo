<?php require('_header.php') ?>
<?php require("connection.php")?>

<?php
    $maleCount=0;
    $femaleCount=0;
    $young=0;
    $adult=0;
    $old=0;
    $query="SELECT * FROM `kullanicilar_tablo`";
    $kullanicilar=mysqli_query($connection,$query);

    while($row=mysqli_fetch_row($kullanicilar)){
        if($row[4]=='1'){
            $femaleCount++;
        }
        else if($row[4]=='2'){
            $maleCount++;
        }
        if($row[3]>0 and $row[3]<=25){
            $young++;
        }
        else if($row[3]>25 and $row[3]<=50){
            $adult++;
        }
        else if($row[3]>50){
            $old++;
        }
    }

?>

<div class="container mt-5">
    <div style="display: inline-block;border:1px outset lightgray;">
        <div id="piechart" style="width: 500px; height: 500px;"></div>
    </div>

    <div style="display: inline-block;border:1px outset lightgray">
        <div id="piechart2" style="width: 500px; height: 500px;"></div>
    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data1 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Kadın', <?=$maleCount?>],
            ['Erkek', <?=$femaleCount?>],
        ]);

        var options1 = {
            title: 'Erkek Kadın Oranı'
        };

        var data2 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Genç 0-25', <?=$young?>],
            ['Yetişkin 25-50', <?=$adult?>],
            ['Yaşlı 50-100', <?=$old?>]
        ]);

        var options2 = {
            title: 'Yaş Grafiği '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data1, options1);
        chart2.draw(data2, options2);

    }
</script>

<?php require('_footer.php') ?>