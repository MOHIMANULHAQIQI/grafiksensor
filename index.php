<DOCTYPE html>
<html>
<head>
    <title>grafik</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $('#respond').load('data.php');
        },100);
    </script>
</head>
<body>
    <div class="container" style="text-align: center;">
        <h2>menapilkan grafik</h2>
        <p>menampilkan 10 data terakhir</p>
    </div>

    <div class="container">
    <div class="container" id="respond" style="width: 100%; hight: 100%; text-align: center;"></div>
    </div>
</body>

</html>