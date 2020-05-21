<?php include '../includes/connection.php';?>
<?php include '../includes/adminheader.php';?>

<body>
  <?php include '../includes/adminnav.php';?>
      <div class="container-fluid">
            <?php
                $id = $_GET['id'];
                $querys = "SELECT * FROM `uploads` WHERE `file_id` = '$id'";
                $result = mysqli_query($conn , $querys) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($result);
                $filename = $row['file_name'];
               ?>
        <h1 class="mt-4"><?php echo $filename ?></h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <form action="" method="post">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>File name</th>
                                    <th>Query</th>
                                    <th>Asked by</th>
                                    <th>Time</th>
                                    <th>Answer query</th>
                                    <th>Delete query</th>
                                    <th>View answers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $id = $_GET['id'];
                                    $querys = "SELECT * FROM queries WHERE File_id = $id";
                                    $run_query = mysqli_query($conn, $querys) or die(mysqli_error($conn));
                                    if (mysqli_num_rows($run_query) > 0) {
                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $query_id = $row['Query_id'];
                                        $query = $row['Query_Answer'];
                                        $username = $row['username'];
                                        $time = $row['time'];
                                        echo "<tr>";
                                        echo "<td>$query_id</td>";
                                        echo "<td>$query</td>";
                                        echo "<td>$username</td>";
                                        echo "<td>$time</td>";
                                        echo "<td><a href='answerquery.php?id=$query_id&name=$username'>Answer query </a></td>";
                                        echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this query?')\" href='?id=$query_id&name=$username&del=$query_id'><i class='fa fa-times' style='color: red;'></i>delete</a></td>";
                                        echo "<td><a href='viewanswer.php?id=$query_id' style='color:green'>View answers </a></td>";
                                        echo "</tr>";
                                    }
                                  }
                                    if (isset($_GET['del'])) {
                                    $note_del = mysqli_real_escape_string($conn, $_GET['del']);
                                    // $file_uploader = $_SESSION['username'];
                                    $del_query = "DELETE FROM queries WHERE Query_id = $id";
                                    $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
                                    if (mysqli_affected_rows($conn) > 0) {
                                        echo "<script>alert('Query deleted successfully');
                                        window.location.href='index.php';</script>";
                                    }
                                    else {
                                     echo "<script>alert('error occured.try again!');</script>";   
                                    }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->

</body>

</html>
