<?php
$hal = "dashboard";
include('../component/connectdb.inc.php');
include('../component/head.inc.php');
include('../component/navbardash.inc.php');
if ($_SESSION["hak"] != "1") {
  echo "Anda bukan ADMINT"; ?>
  <a href="logout.php">Kembali</a>
<?php
} else {
  $result = mysqli_query($conn, "SELECT * FROM user");
?>
    <div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">User yang terdaftar</h6>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush" id="mauexport">
        <thead class="thead-light">
          <tr>
            <th>Nama</th>
            <th>NRP</th>
            <th>Status</th>
            <th>Opsi</th>
            <!-- <th>Praktikum</th> -->
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <td><?= $row["nama"]; ?></td>
              <td><?= $row["nrp"]; ?></td>
              <td><?= $row["hak"]; ?></td>
              <td><button class="btn btn-danger">Delete User</button></td>
              <!-- <td><span class="badge badge-success">Starting</span></td> -->
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer"></div>
  </div>
</div>
<?php
}
include('../component/footer.inc.php');
?>