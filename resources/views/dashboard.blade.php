@extends('layouts.app')
@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">Dashboard</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-4">
          <?php //select author count
          $sql = "SELECT COUNT(*) AS total_author FROM author";
          $result = mysqli_query($conn, $sql) or die("SQL query failed.");
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="card" style="width: 14rem; margin: 0 auto;">
              <div class="card-body text-center">
                <p class="card-text"><?php echo $row['total_author']; ?></p>
                <h5 class="card-title mb-0">Authors Listed</h5>
              </div>
            </div>
          <?php }
          } ?>
          </div>
          <div class="col-md-3">
            <?php // select publishers count
            $sql = "SELECT COUNT(*) AS total_publisher FROM publisher";
            $result = mysqli_query($conn, $sql) or die("SQL query failed.");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
              <div class="card" style="width: 14rem; margin: 0 auto;">
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $row['total_publisher']; ?></p>
                  <h5 class="card-title mb-0">Publishers Listed</h5>
                </div>
              </div>
            <?php }
            } ?>
            </div>
            <div class="col-md-3">
            <?php //select categories count
            $sql = "SELECT COUNT(*) AS total_category FROM category";
            $result = mysqli_query($conn, $sql) or die("SQL query failed.");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
              <div class="card" style="width: 14rem; margin: 0 auto;">
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $row['total_category']; ?></p>
                  <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
              </div>
            <?php }
            } ?>
            </div>
            <div class="col-md-3">
            <?php // select books count
            $sql = "SELECT COUNT(*) AS total_book FROM book";
            $result = mysqli_query($conn, $sql) or die("SQL query failed.");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
              <div class="card" style="width: 14rem; margin: 0 auto;">
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $row['total_book']; ?></p>
                  <h5 class="card-title mb-0">Books Listed</h5>
                </div>
              </div>
            <?php }
            } ?>
            </div>
            <div class="col-md-3">
            <?php //select stuent count
            $sql = "SELECT COUNT(*) AS total_student FROM student";
            $result = mysqli_query($conn, $sql) or die("SQL query failed.");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
              <div class="card" style="width: 14rem; margin: 0 auto;">
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $row['total_student']; ?></p>
                  <h5 class="card-title mb-0">Register Students</h5>
                </div>
              </div>
            <?php }
            } ?>
            </div>
            <div class="col-md-3">
            <?php // select issue books count
            $sql = "SELECT COUNT(*) AS total_book_issue FROM book_issue";
            $result = mysqli_query($conn, $sql) or die("SQL query failed.");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
              <div class="card" style="width: 14rem; margin: 0 auto;">
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $row['total_book_issue']; ?></p>
                  <h5 class="card-title mb-0">Book Issued</h5>
                </div>
              </div>
            <?php }
            } ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?> <!-- footer -->

@endsection
