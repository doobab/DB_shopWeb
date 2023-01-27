<!DOCTYPE html>
<html lang="kr">
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>회원정보</title>
   <link rel="stylesheet" href="css/register.css">

   <?php
      session_start();

      $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
      if(!$conn) {
         echo "Connect Fali"; 
         exit();
      }
      $id = $_SESSION['uid'];
      $sql = oci_parse($conn, "select * from Member where Mid='$id'");
      oci_execute($sql);
      $rows = oci_fetch_array($sql);
      
      oci_free_statement($sql);
   ?>

</head>
<body>

<div class="wrapper">
    <div class="title">
      회원정보
    </div>
    <form action = "Member_R.php" method="post">
    <div class="form">
       <div class="inputfield">
          <label>ID</label>
          <input type="text"  name = "id" class="input" value="<?php echo $_SESSION['uid'];?>" disabled>
       </div>  
       <div class="inputfield">
          <label>비밀번호</label>
          <input required type="password" class="input" name = "pw" placeholder="비밀번호">
       </div> 
       <div class="inputfield">
          <label>이름</label>
          <input required type="text" class="input" name = "name" value="<?php echo $rows['MNAME'];?>" disabled>
       </div>  
      <div class="inputfield">
          <label>전화번호</label>
          <input required placeholder="010-0000-0000" type="text" class="input" name = "tp" value="<?php echo $rows['MTP'];?>" >
       </div> 
      <div class="inputfield">
          <label>주소</label>
          <input required placeholder="ex) Seoul Gangnam-gu"class="input" name = "add" value="<?php echo $rows['MADD'];?>"></textarea>
       </div>
      <div class="inputfield">
        <input type="submit" value="수정" class="btn">
      </div>
      <div class="inputfield">
        <input type="button" value="탈퇴" class="btn" onclick="location.href='Member_Pwchk.html'">
      </div>
    </div>
</div>   
   
</body>
</html>