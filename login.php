<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:index2.php?a=Beranda");
}

if(isset($_POST['submit'])){
    
    require "koneksi.php";
    $user = $_POST ['username'];
    $pass = MD5($_POST ['password']);

    $sql= mysqli_query($koneksi, "select * from admin where USERNAME ='$user' AND PASSWORD ='$pass'");
    if($sql->num_rows >0){
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $data['USERNAME'];
        header("location:index2.php?a=Beranda");
    }else{
        echo "Login gagal. Username atau Password salah!!";
    }
}
?>
<html lang="en">
<head>
  <title>Perpustakaan</title>
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="Bootstrap/jquery.js"></script>
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://img.freepik.com/free-vector/follow-me-social-business-theme-design_24877-50426.jpg?w=740&t=st=1674816422~exp=1674817022~hmac=4c047f710a81f4742176ac00130bfb16e99a61a0bf64b944d7e8462078fb5bdd" alt="logo" width="200">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4" style=>Login </h1>
							<form  action="" method="POST" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

                    <!--membuat pasword-->
                                    <div class="mb-3">
                                        <div class="mb-2 w-100">
                                            <label class="text-muted" for="password">Password</label>
                                            <a href="forgot.html" class="float-end">
                                                Forgot Password?
                                            </a>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                            <label for="remember" class="form-check-label">Remember Me</label>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary ms-auto">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer py-3 border-0">
                                <div class="text-center">
                                    Don't have an account? <a href="register.html" class="text-dark">Create One</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5 text-muted">
                            Copyright &copy; 2022 - Ananta Puti Maharani. All Right Reserved
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/login.js"></script>
    </body>
    </html>