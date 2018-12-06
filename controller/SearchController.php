<?php 
include('../controller/DatabaseController.php');
include('../function/sanitize.php');

if(isset($_POST['search'])){
      $search = sanitize($_POST['search']);
      if(strlen($search)>=3){
      $search_sql = "SELECT * FROM user WHERE email like '%$search%' or username like '%$search%'";
      $search_qry = mysqli_query($Connect,$search_sql);
      $search_final = mysqli_fetch_all($search_qry,MYSQLI_ASSOC);
      exit(json_encode($search_final));
  }
  }
