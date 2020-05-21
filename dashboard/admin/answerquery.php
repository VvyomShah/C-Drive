<?php include '../includes/connection.php';?>
<?php include '../includes/adminheader.php';?>

  <body>
    <?php include '../includes/adminnav.php';?>
        <div class="container-fluid">
          <form role="form" action="" method="POST" enctype="multipart/form-data">
          <hr>
            <div class="form-group">
              <?php
                $name = $_GET['name'];
                $id = $_GET['id'];
                $querys = "SELECT * FROM `queries` WHERE `Query_id` = '$id'";
                $result = mysqli_query($conn , $querys) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                $queryname = $row['Query_Answer'];
               ?>
              <h2 class="mt-4"><?php echo $queryname ?></h2>
              <input type="hidden" name="id" class="form-control" value=" <?php echo $id; ?>">
            </div>
            <div class="form-group">
              <textarea type="textarea" rows = 20 cols = 30 name="answer" class="form-control"  value="Enter answer here" required></textarea>
            </div>
          <hr>
          <button type="submit" name="update" class="btn btn-primary" value="Update User">Submit</button>
          <br><br>
        </form>
          <?php  
           if(isset($_POST['id']))
           {
              $id = $_GET['id'];
              $answer = $_POST['answer'];
              $query = "INSERT INTO answers(Query_id, Answer, username) VALUES ('$id' , '$answer', '$name')";
              $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
              if (mysqli_affected_rows($conn) > 0) { 
              echo "<script>alert('ANSWER SUBMITTED');
                    window.location.href='index.php';</script>";
              }
            }
           ?>
        </div>
      </div>
    </div>
  </body>
</html>