<?php
   session_start();

   $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
   if(!$conn) {
      echo "Connect Fali"; 
      exit();
   }

   $id = $_SESSION['uid'];
   $pw = $_POST["pw"];

   $sql = oci_parse($conn, "select Mid, Mpw from Member where Mid='$id' and Mpw = '$pw'");
   oci_execute($sql);
   $num_rows = oci_fetch_all($sql, $rows);
   oci_free_statement($sql);

   if(!$num_rows){
      echo "<script>alert('비밀번호가 틀렸습니다!');history.back();</script>";
      exit();
   }
   else{
      $sql=oci_parse($conn, "delete from Member where Mid='$id'");
      $chk=oci_execute($sql);
      oci_free_statement($sql);
      if(!$chk){
         echo "<script>alert('탈퇴 실패');history.back();</script>";
         exit();
      } else{
         echo "<script>alert('탈퇴 완료');</script>";
         session_destroy();
         echo "<meta http-equiv='refresh' content='0;url=index.php'>";
      }
   }
   oci_close($conn);
?>