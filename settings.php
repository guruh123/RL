<?php
$hal = "dashboard";
include('component/head.inc.php');
include('component/navbardash.inc.php');
include('component/connectdb.inc.php');
?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengaturan Akun</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Akun</li>
              <li class="breadcrumb-item active" aria-current="page">Pengaturan Akun</li>
            </ol>
          </div>
          <div class="card">
            <div class="card-header py-3 flex-row align-items-center justify-content-between">
              <form method="POST">
                <div class="form-group">
                  <label for="formGroupExampleInput2">Profile Photo</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Email</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Password</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password">
                </div>
                <button class="btn btn-primary" name="submit">Confirm</button>
              </form>
            </div>
          </div>
<?php
include('component/footer.inc.php');
if(isset($_POST["submit"])){
  $newEmail = $_POST["email"];
  $newPassword = $_POST["password"];
  $sql = "UPDATE user SET email='".$newEmail."',password='".$newPassword."' WHERE nama ='".$_SESSION["name"]."'";
  if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript"> alert("Data Berhasil Diganti!"); </script>';
  } else {
    echo "Terjadi Error: " . mysqli_error($conn);
  }
}
?>