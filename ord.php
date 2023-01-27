<?php
session_start();
header('Content-type:text/html; charset=utf-8');

$id = $_SESSION['uid'];


$conn=oci_connect("B889015", "B889015", "203.249.87.162:1521/orcl");

if(!$conn){
   echo"Connect Fail";
}

$sql=oci_parse($conn, "select * from Member where Mid='$id'");
$chk=oci_execute($sql);
$row=oci_fetch_array($sql);
if(!$chk){
   echo "<script>alert('오류');history.back();</script>";
  exit();
}


$name = $row[MNAME];
$phone = $row[MTP];
$address = $row[MADD];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>주문</title>
</head>
<body>
<div id="main">
  <div id="join_main_top_basket">
		<div id="ord_title">
			주문
		</div>
	</div>
<form method="post" action="ord_insert.php">
	<!-구매정보-->
	<div id="OrdBox">
	<div id="join_top_basket">
		<div id="ord_title">
			구매자정보
		</div>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			이름
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" name="name" value="<?=$name?>">
		</div>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			연락처
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" placeholder="010-0000-0000" name="phone_number" value="<?=$phone?>">
		</div>
	</div>
	</div>
	<div id="OrdBox">
	<div id="join_top_basket">
		<div id="ord_title">
			배송지 정보 지정
		</div>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			이름
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" name="ship_name" value="<?=$name?>">
		</div>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			연락처
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" placeholder="010-0000-0000" name="ship_number" value="<?=$phone?>">
		</div>
	</div>
	<div id="join_box">
  <div id="join_box_mini">
			주소
	</div>
	<div id="ord_box_mini">
			<input type="text" id="join_input"  name="ship_address" value="<?=$address?>">
	</div>
	</div>
	</div>
    <div id="basket_buy">
    <button type="submit" id="basket_select_buy">
      결제하기
    </button>
		<a href="cart.php">
    <div id="basket_full_buy">
      이전페이지
    </div>
		</a>
  </div> 
  </form>
</div>
	</body>

</html>