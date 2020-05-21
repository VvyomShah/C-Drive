<?php include '../includes/connection.php';?>
<?php include '../includes/adminheader.php';?>

<body>
  <?php include '../includes/usernav.php';?>
      <div class="container-fluid">
      <?php
        $id = $_GET['id'];
        $querys = "SELECT * FROM `queries` WHERE `Query_id` = '$id'";
        $result = mysqli_query($conn , $querys) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        $queryname = $row['Query_Answer'];
       ?>
        <h2 class="mt-4"><?php echo $queryname ?></h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <form action="" method="post">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Query ID</th>
                                    <th>Answer ID</th>
                                    <th>Username</th>
                                    <th>Time</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $id = $_GET['id'];
                                    $querys = "SELECT * FROM answers WHERE Query_id = $id";
                                    $run_query = mysqli_query($conn, $querys) or die(mysqli_error($conn));
                                    if (mysqli_num_rows($run_query) > 0) {
                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $answer_id = $row['Answer_id'];
                                        $answer = $row['Answer'];
                                        $query_id = $row['Query_id'];
                                        $username = $row['username'];
                                        $time = $row['time'];
                                        echo "<tr>";
                                        echo "<td>$query_id</td>";
                                        echo "<td>$answer_id</td>";
                                        echo "<td>$username</td>";
                                        echo "<td>$time</td>";
                                        echo "<td>$answer</td>";
                                        echo "</tr>";
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
