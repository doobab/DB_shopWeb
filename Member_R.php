<?php
   $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
   if(!$conn) {
      echo "Connect Fali"; 
      exit();
   }
   session_start();
   
   $id = $_SESSION['uid'];
   $pw = $_POST["pw"];
   $tp = $_POST["tp"];
   $add = $_POST["add"];
   
   $sql = "update Member set Mpw='$pw', Mtp='$tp', Madd='$add' where Mid='$id'";
   $chk = oci_execute(oci_parse($conn, $sql));
   oci_free_statement($sql);
   
   if(!$chk){
      echo "실행 오류";
   } else{
      echo "<script>alert('수정 완료');</script>";
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
   }
   oci_free_statement($sql);
   oci_close($conn);
?>