<?php
$hal = "dashboard";
include('../component/head.inc.php');
include('../component/navbardash.inc.php');
if ($_SESSION["hak"] != "3") {
    echo "Anda bukan mahasiswa"; ?>
    <a href="../logout.php">Kembali</a>
<?php
} else {
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Selamat Datang</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    <div class="card text-center">
        <div class="card-header">
            Praktikum
        </div>
        <div class="card-body">
            <h5 class="card-title">Motor Induksi 3 Fasa</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rem maiores odio doloribus suscipit porro impedit eveniet, ipsam et animi error ab explicabo aperiam. Dolores iusto dicta vitae minus laudantium?</p>
            <a href="../MulaiPraktikum.php" class="btn btn-primary">Mulai</a>
        </div>
        <div class="card-footer text-muted">
        </div>
    </div>
    <br></br>
    <div class="card">
        <div class="card-header">
            <div class="m-0 font-weight-bold text-primary">
                Video Tutorial
            </div>
        </div>
        <div class="card-body">
            <tr>
                <th>
                    <iframe width="320" height="240" src="https://www.youtube.com/embed/5TyDk2PAaJ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </video>
                </th>
                <th>
                    <iframe width="320" height="240" src="https://www.youtube.com/embed/5TyDk2PAaJ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </video>
                </th>
            </tr>
        </div>
        <div class="card-footer text-muted">
        </div>
    </div>
    <?php
    include('../component/footer.inc.php');
    ?>
<?php
}
?>