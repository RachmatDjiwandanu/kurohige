<?php include "header.php "; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Username</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Password</label>
                  <input type="password" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Repeat password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Nama user</label>
                  <input type="text" id="form3Example4cdg" class="form-control form-control-lg" placeholder="input nama kamu"/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Email</label>
                  <input type="email" id="form3Example4cdg" class="form-control form-control-lg"/>
                </div>

              <div class="mb-4">
                <select class="form-select form-control user" aria-label="Default select example">
		              <option value=""selected disabled>Hak Akses</option>
					        <option value="operator">operator</option>
					        <option value="admin">admin</option>
              </select>
              </div>

            <div class="row mb-3"> 
              <div class="col-6">
                <button type="button" class="btn btn-success btn-block w-100">Register</button>
              </div>
              <div class="col-6">
               <button type="reset" class="btn btn-danger btn-block w-100">Reset</button>
              </div>
             

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

<?php include "footer.php "; ?>
