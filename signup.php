<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
if (isset($_POST['signup'])) {
  echo "test";
require "gump.class.php";
$gump = new GUMP();
$_POST = $gump->sanitize($_POST); 

$gump->validation_rules(array(
  'username'    => 'required|alpha_numeric|max_len,20|min_len,4',
  'name'        => 'required|alpha_space|max_len,30|min_len,5',
  'email'       => 'required|valid_email',
  'password'    => 'required|max_len,50|min_len,6',
));
$gump->filter_rules(array(
  'username' => 'trim|sanitize_string',
  'name'     => 'trim|sanitize_string',
  'password' => 'trim',
  'email'    => 'trim|sanitize_email',
  ));
$validated_data = $gump->run($_POST);

if($validated_data === false) {
  ?>
  <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
  <?php
}
else if ($_POST['password'] !== $_POST['repassword']) 
{
  echo  "<center><font color='red'>Passwords do not match </font></center>";
}
else {
      $username = $validated_data['username'];
      $checkusername = "SELECT * FROM users WHERE username = '$username'";
      $run_check = mysqli_query($conn , $checkusername) or die(mysqli_error($conn));
      $countusername = mysqli_num_rows($run_check); 
      if ($countusername > 0 ) {
    echo  "<center><font color='red'>Username is already taken! try a different one</font></center>";
}
$email = $validated_data['email'];
$checkemail = "SELECT * FROM users WHERE email = '$email'";
      $run_check = mysqli_query($conn , $checkemail) or die(mysqli_error($conn));
      $countemail = mysqli_num_rows($run_check); 
      if ($countemail > 0 ) {
    echo  "<center><font color='red'>Email is already taken! try a different one</font></center>";
}

  else {
      $name = $validated_data['name'];
      $email = $validated_data['email'];
      $pass = $validated_data['password'];
      $password = password_hash("$pass" , PASSWORD_DEFAULT);
      $role = $_POST['role'];
      $course = $_POST['course'];
      $gender = $_POST['gender'];
      $joindate = date("F j, Y");
      $query = "INSERT INTO users(username,name,email,password,role,course,gender,joindate,token) VALUES ('$username' , '$name' , '$email', '$password' , '$role', '$course', '$gender' , '$joindate' , '' )";
      $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
      if (mysqli_affected_rows($conn) > 0) { 
        echo "<script>alert('SUCCESSFULLY REGISTERED');
        window.location.href='login.php';</script>";
}
else {
  echo "<script>alert('Error Occured');</script>";
}
}
}
}
?>

<br><br><br>
    <section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 text-white text-center " style="background-color: #343c44">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.  
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form id="contactform" method="POST"> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input class="form-control" id="name" name="name" placeholder="Name" required="" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['name']; } ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <input class="form-control" id="email" name="email" placeholder="Email Id" required="" type="email" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>">
                        </div>
                      </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control" id="username" name="username" placeholder="Username" required="" tabindex="2" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['username']; } ?>">
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select class="form-control" name="gender">
                                    <option selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input class="form-control" type="password" id="password" name="password" required="" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                          <input class="form-control" type="password" id="repassword" name="repassword" required="" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                  
                                  <select class="form-control" name="role">
                                    <option selected>I am a</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                  </select>
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select class="form-control" name="course">
                                    <option selected>I teach/study</option>
                                    <option value="Computer Science">Computer Sc Engineering</option>
                                    <option value="Electrical">Electrical Engineering</option>
                                    <option value="Mechanical">Mechanical Engineering</option>
                                  </select>
                        </div> 
                    </div>

                    
                    <div class="form-row" align="text-center" id="butnctr">
                        <!--<button type="button" class="btn btn-danger">Submit</button>-->
                        
                        <input class="button btn" style="background-color: #343c44; color: white " name="signup" id="submit" tabindex="5" value="Submit" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php include 'includes/footer.php';?>
