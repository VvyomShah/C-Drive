<?php include '../includes/connection.php';?>
<?php include '../includes/adminheader.php';?>

  <body>
    <?php include '../includes/adminnav.php';?>
        <div class="container-fluid">
          <form role="form" action="" method="POST" enctype="multipart/form-data">
          <hr>
            <div class="form-group">
              <?php
                $name = $_SESSION['name'];
                $id = $_GET['id'];
                $querys = "SELECT * FROM `uploads` WHERE `file_id` = '$id'";
                $result = mysqli_query($conn , $querys) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                $filename = $row['file_name'];
               ?>
              <h2 class="mt-4"><?php echo $filename ?></h2>
              <input type="hidden" name="id" class="form-control" value=" <?php echo $id; ?>">
            </div>
            <div class="form-group">
              <h3>Ask a question!</h3>
              <textarea rows = 20 cols = 10 name="query" class="form-control"  value="Enter query here" required></textarea>
            </div>
          <hr>
          <button type="submit" name="update" class="btn btn-primary" value="Update User">Ask!</button>
          <br><br>
        </form>
          <?php  
           if(isset($_POST['id']))
           {
              $id = $_GET['id'];
              $query = $_POST['query'];
              $querys = "INSERT INTO queries(File_id, Query_Answer, username) VALUES ('$id' , '$query', '$name')";
              $result = mysqli_query($conn , $querys) or die(mysqli_error($conn));
              if (mysqli_affected_rows($conn) > 0) { 
              echo "<script>alert('QUERY ASKED');
                    window.location.href='index.php';</script>";
              }
            }
           ?>
        </div>
      </div>
    </div>
  </body>
</html>