<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <title>장바구니</title>
<style>
  table {
    border: 1px solid #444444;
    border-collapse: collapse;
    margin-left : auto;
    margin-right : auto;
    width: 700px;
    height: 130px;
  }
  th, td {
    border: 1px solid #444444;
    padding: 10px;
    text-align: center;
  }
  th {
     background-color: #18bc9c;
  }
  .t {
     text-decoration:none;
     font-size:200%;
     color:#2C3E50;
  }
  h2 { text-align: center; }
  .h {
      text-decoration:none;
      font-size:130%;
      color:GREEN;
  }
  .q {
      text-align:center;
  }
</style>

  <?php
      session_start();

      $id = $_SESSION['uid'];

      if(!isset($id)){
         echo "<script>alert('로그인 후 이용해주세요');history.back();</script>";
         exit();
      }
      $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
      if(!$conn) {
         echo "Connect Fail"; 
         exit();
      }
  ?>
  </head>
  <body>

<?php


      $sql = oci_parse($conn, "select Product.Pid, Product.Pname, Product.Pprice, Orders.Oamount from Orders, Product where Orders.Pid = Product.Pid and Orders.Mid = 'qkqhdqhd'");
      $chk= oci_execute($sql);
      

      if(!chk){
          echo "<script>alert('출력 오류');history.back();</script>";
          exit();
     }
     $sum = 0;
   ?>

    <header>
      <a class="t" href="index.php">Drug Store</a>
    </header>


    <h2>장바구니</h2>

    <table>
      <thead>
        <tr>
          <th>상품명</th><th>가격</th><th>수량</th><th>삭제</th>
        </tr>
      </thead>
      <tbody>
      <?php while($row = oci_fetch_array($sql)){
          
          $name = $row['PNAME'];
          $price = $row['PPRICE'];
          $amount = $row['OAMOUNT'];
          $pid = $row['PID'];
          $sum = $sum + ($price*$amount);?>
       <form method="POST" action="Delete_order.php">
       <input type="hidden" name = "pid" value="<?php echo $pid;?>">
        <tr>
          <td><?php echo $name;?></td>
          <td><?php echo $price;?></td>
          <td><?php echo $amount;?></td>
          <td><button type = "submit">Delete</button></td>
        </tr>

      <?php  } ?>

        <tr>
          <td>총  가  격</td><td colspan="3"><?php echo $sum;?></td>
        </tr>
      </tbody>
    </table>
  <div class = "q">
    <a class = "h" href="ord.php">주문하기</a>
  </div>
  </body>
</html>
