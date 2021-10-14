<?php
if ($name == "login") :
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card rounded border-primary my-5">
                    <div class="card-body shadow p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Masuk</h5>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username123" name="name">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <select class="form-control" id="floatingInput" name="whatUser">
                                    <option>Dosen</option>
                                    <option>Mahasiswa</option>
                                    <option>Admin</option>
                                </select>
                                <label for="floatingInput">Login Sebagai</label>
                            </div>
                            <div>
                                <p> Belum Punya Akun? <a href="register.php">Daftar</a></p>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="login" value="login">Sign
                                    in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif ($name == "register") : ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card rounded border-primary my-5">
                    <div class="card-body shadow p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Daftar</h5>
                        <form method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username123" name="name">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="nrp">
                                <label for="floatingInput">NRP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="repassword">
                                <label for="floatingPassword">Re-type Password</label>
                            </div>
                        </form>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else :
    echo "Halaman tidak tersedia";
?>
<?php endif; ?>