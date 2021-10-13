<?php
include('component/head.inc.php');
include('component/navbar.inc.php');
$conn = mysqli_connect("localhost","root","","remote_lab");
$result = mysqli_query($conn, "SELECT * FROM hasilpraktikum");
?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Hasil Praktikum</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Hasil Praktikum</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Hasil Praktikum</h6>
                  <a target="_blank" href="export.php">Export Data</a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush" id="mauexport">
                    <thead class="thead-light">
                      <tr>
                        <th>Timestamp</th>
                        <th>Vin</th>
                        <th>Vout</th>
                        <!-- <th>Praktikum</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php while($row=mysqli_fetch_assoc($result)): ?>
                      <tr>
                        <td><?= $row["timestamp"]; ?></td>
                        <td><?= $row["Vin"]; ?></td>
                        <td><?= $row["Vout"]; ?></td>
                        <!-- <td><span class="badge badge-success">Starting</span></td> -->
                      </tr>
                      <?php endwhile;?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
<?php
include('component/footer.inc.php');
?>