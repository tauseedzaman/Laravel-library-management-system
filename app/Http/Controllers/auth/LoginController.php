<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        dd($request->all());
    }
    /*
      <?php
                if(isset($_POST['login'])){
                  include "config.php"; // db configuration
                  $username = mysqli_real_escape_string($conn, $_POST['username']);
                  $password  = mysqli_real_escape_string($conn, md5($_POST['password']));

                  $sql = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";
                  $result = mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result) > 0){
                    session_start(); //session start
                    while($row = mysqli_fetch_assoc($result)){
                      $_SESSION["username"] = $row['username'];
                      $_SESSION["user_id"] = $row['id'];
                    }
                    header("$base_url/dashboard.php"); // redirect
                  }else{
                      echo "<div class='alert alert-danger'>Username and Password are not matched.</div>";
                  }
                } ?>
                */
}
