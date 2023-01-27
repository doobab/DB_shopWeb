<?php
   $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
   if(!$conn) {
      echo "Connect Fali"; 
      exit();
   }
   
   $id = $_POST["id"];
   $pw = $_POST["pw"];
   $name = $_POST["name"];
   $tp = $_POST["tp"];
   $add = $_POST["add"];

   $sql= oci_parse($conn, "select Mid from Member where Mid='$id'");
   oci_execute($sql);
   $num_rows = oci_fetch_all($sql, $rows);
   oci_free_statement($sql);

   if($num_rows){
      echo "<script>alert('중복된 ID 입니다.');history.back();</script>";
      oci_close($conn);
      exit();
   }
   
   $sql = "insert into Member values('$id','$pw','$name', '$tp', '$add')";
   $chk = oci_execute(oci_parse($conn, $sql));
   
   if(!$chk){
      echo "<script>alert('회원가입 실패');history.back();</script>";
   } else{
      echo "<script>alert('회원가입 성공!');</script>";
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
   }
   oci_free_statement($sql);
   oci_close($conn);
?>