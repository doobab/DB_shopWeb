<?php
$conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
   if(!$conn) {
      echo "Connect Fali"; 
      exit();
   }

	$id = $_SESSION['uid'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$ship_name = $_POST['Dname'];
	$ship_number = $_POST['Dtp'];
	$address = $_POST['Dadd'];
		
	$sql=oci_parse($conn, "select Mid from Member where Mid='$id'");
	oci_execute($sql);
	$MemberID = oci_fetch_array($sql);
	oci_free_statement($sql);
	
	$sql1=oci_parse($conn, "insert into Delivery(Did, Dname, Dadd, Dtp) values('$id', '$phone','$name', '$ship_name', '$address', '$ship_number')");
	oci_execute($sql1);

      echo "<script>alert('주문완료'); </script>";
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>