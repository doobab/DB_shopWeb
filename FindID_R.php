<?php
   $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
   if(!$conn) {
      echo "Connect Fail"; 
      exit();
   }

   $name = $_POST["name"];
   $tp = $_POST["tp"];

   $sql = oci_parse($conn, "select Mid from Member where Mname='$name' and Mtp = '$tp'");
   oci_execute($sql);
   $result = oci_fetch_array($sql);
   oci_free_statement($sql);

   if($result){
      echo "<script>alert('회원님의 ID는 ".$result['MID']."입니다.');</script>";
      echo "<script>location.href='Login.html'</script>";
   }
   else{
      echo "<script>alert('회원이 아닙니다.');</script>";
      echo "<script>location.href='FindID.html'</script>";
   }
   oci_close($conn);
?>