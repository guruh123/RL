<?php
$hal = "dashboard";
include('../component/connectdb.inc.php');
include('../component/head.inc.php');
include('../component/navbardash.inc.php');
if ($_SESSION["hak"] != "2" & $_SESSION["hak"] != "1") {
  echo "Anda bukan dosen"; ?>
  <a href="logout.php">Kembali</a>
<?php
} else {
$result = mysqli_query($conn, "SELECT * FROM hasilpraktikum");
$users = mysqli_query($conn,"SELECT * FROM user WHERE hak='mahasiswa'");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Pratikum Kontrol Gerak</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Praktikum Kontrol Gerak</li>
  </ol>
</div>
<!-- <title>Grafik Hasil Praktikum</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <?php
        $conn = mysqli_connect("localhost","root","","remotlab");
        if (!$conn) {
            die("Koneksi Tidak Berhasil: ". mysqli_connect_error());
        }
        $var1 = $_GET ['timestamp'] ?? "";
        $var2 = $_GET ['vin'] ?? "";
        $var3 = $_GET ['vout'] ?? "";
        mysqli_query ($conn,"INSERT INTO hasilpraktikum (timestamp,vin) VALUES ('$var1','$var2','$var3')"); 

        if($conn){
            echo ''; 
        }
        else{
            echo'error connection';
        }
        $timestamp= "";
        $Vin= "";
        $Vout= "";
        $sql="select waktu, vin from hasilpraktikum";
        $hasil=mysqli_query($conn,"SELECT * FROM hasilpraktikum ORDER BY no ASC LIMIT 100");

        while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil data timestamp dari database
        $jur=$data['waktu'];
        $timestamp .= "'$jur'". ", ";

        //Mengambil Vin dari database
        $jum=$data['vin'];
        $Vin .= "$jum". ", ";

        //Mengambil Vout dari database
        $jul=$data['vout'];
        $Vout .= "$jul". ", ";
    }      
    ?>
        <div class="container">
            <canvas id="myChart" width="2000" height="1000"></canvas>
        </div>
        <script id="myChart" width="2000" height="1000">
            var canvas = document.getElementById("myChart");
            var ctx = canvas.getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo $timestamp ?>],
                    datasets: [{
                            label: "Tegangan masuk",
                            data: [<?php echo $Vin ?>],

                            borderColor: [
                            '#4747A1',
                            ],
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: "Tegangan keluar",
                            data: [<?php echo $Vout ?>],

                            borderColor: [
                            '#E02401',
                            ],
                            borderWidth: 1,
                            fill: false
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script> -->
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Mahasiswa</h6>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush" id="mauexport">
        <thead class="thead-light">
          <tr>
            <th>Nama</th>
            <th>NRP</th>
            <th>Lihat Praktikum</th>
            <!-- <th>Praktikum</th> -->
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($users)) : ?>
            <tr>
              <td><?= $row["nama"]; ?></td>
              <td><?= $row["nrp"]; ?></td>
              <td><a href="lihatmahasiswa.php?=<?= $row["user_id"]?>"><button class="btn btn-primary" href="lihatmahasiswa.php">Lihat</button></a></td>
              <!-- <td><span class="badge badge-success">Starting</span></td> -->
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer"></div>
  </div>
</div>
</div>
<!--Row-->
<?php }
include('../component/footer.inc.php');
?>