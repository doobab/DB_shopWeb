<?php
   session_start();

   $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
   if(!$conn) {
      echo "Connect Fail"; 
      exit();
   }

   $id = $_POST["id"];
   $name = $_POST["name"];
   $tp = $_POST["tp"];

   $sql = oci_parse($conn, "select Mpw from Member where Mid='$id' and Mname='$name' and Mtp = '$tp'");
   oci_execute($sql);
   $result = oci_fetch_array($sql);
   oci_free_statement($sql);

   if($result){
      echo "<script>alert('회원님의 비밀번호는 ".$result['MPW']."입니다.');</script>";
      echo "<script>location.href='Login.html'</script>";
   }
   else{
      echo "<script>alert('정보를 정확하게 입력해주세요'); </script>";
      echo "<script>location.href='FindPW.html'</script>";
   }
   oci_close($conn);
?>