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
      echo "<meta http-equiv='refresh' content='0;url=Member.php'>";
   }
   oci_close($conn);
?>