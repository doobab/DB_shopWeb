<?php
      session_start();
      $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
      if(!$conn) {
         echo "Connect Fail"; 
         exit();
      }

     $id = $_SESSION['uid'];
     $pid = $_POST['pid'];
     
     $sql = oci_parse($conn, "delete from Orders where Mid='$id' and Pid='$pid'");
     $chk = oci_execute($sql);

      if(!chk){
          echo "<script>alert('삭제 오류');history.back();</script>";
          echo "<script>history.back();</script>";
          exit();
     }
     
     echo "<script>alert('삭제 성공');</script>";
     echo "<script>history.back();</script>";
?>