<?php
// koneksi database
$koneksi = mysqli_connect("localhost","root","","grafik");

// menampilkan data tabel sensor
// menampilkan calender
$tanggal = mysqli_query($koneksi, "SELECT tanggal FROM sensor ORDER BY ID ASC");
// menamilkan ph
$ph = mysqli_query($koneksi, "SELECT ph FROM sensor ORDER BY ID ASC");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        Gerafik sensor
    </div>
    <div class="panel-body">
        <!-- canvas -->
        <canvas id="chart"></canvas>
        <!-- menampilkan grafik di canvas -->
        <script class="text/javascript">
            // membaca id canvas
            var canvas = document.getElementById('chart');
            // penempatan data
            var data ={
                 //sumbu x grafik
                type : "line",
                labels :[
                    <?php
                    while($data_tanggal = mysqli_fetch_array($tanggal))
                    {
                        echo '"'.$data_tanggal['tanggal'].'",' ;
                    }
                    ?>
                ],
                // sumbu y grafik
                datasets : [{
                    label : "ph",
                    fill : true,
                    backgroundColor: "rgba(52, 231, 133, 26)",
                    data  : [
                        <?php
                        while($data_ph = mysqli_fetch_array($ph))
                        {
                            echo $data_ph['ph'].',';
                        }
                        ?>
                    ]
                }],
               
            };
            // option grafik
            var option = {
                type : line,
                showLines : true,
                animation : {duration : 0}
            };
            // cetak grafik ke canvas
            var myLineChart : Chart.Line(canvas,{
                data : data,
                options : option
            });
        
        </script>
    </div>
</div>
