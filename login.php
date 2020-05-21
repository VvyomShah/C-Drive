<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
    session_start();
    if (isset($_POST['login'])) {
      $username  = $_POST['username'];
      $password = $_POST['password'];
      mysqli_real_escape_string($conn, $username);
      mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $user = $row['username'];
        $pass = $row['password'];
        $name = $row['name'];
        $email = $row['email'];
        $role= $row['role'];
        $course = $row['course'];
        if (password_verify($password, $pass )) {
          $_SESSION['id'] = $id;
          $_SESSION['username'] = $username;
          $_SESSION['name'] = $name;
          $_SESSION['email']  = $email;
          $_SESSION['role'] = $role;
          $_SESSION['course'] = $course;
          if ($_SESSION['role'] == 'admin'){
            header('location: dashboard/admin/index.php');
          }
          else if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'teacher'){
            header('location: dashboard/user/index.php');
          }
        }
        else {
          echo "<script>alert('invalid username/password');
          window.location.href= 'login.php';</script>";

        }
      }
    }
    else {
          echo "<script>alert('invalid username/password');
          window.location.href= 'login.php';</script>";

        }
    }
?>

<style type="text/css">img {width:100%;}</style>
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Login</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                        <a href="#Refister" style="color: #00008B;">Not yet registered?</a>
                        <a href="#Refister" style="color: #00008B;">Forgot password??</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border" style="text-align: center;">
                <h4 class="pb-4">Please fill with your details</h4>
                <form  style="display: inline-block;" method="POST">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input id="username" name="username" placeholder="username" class="form-control" type="text">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input id="password" name="password" placeholder="password" class="form-control" required="required" type="text">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <input type="submit" name="login" class="login login-submit" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
