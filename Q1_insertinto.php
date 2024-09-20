
<?php

include("conn.php");
mysqli_select_db($conn,"emarket");
$passbuyer=md5("buyer123");
$passseller=md5("seller123");
$sql = "insert into user(username,password,role) values('buyer','$passbuyer','buyer'),('seller','$passseller','seller') ";
$result=mysqli_query($conn,$sql);
if(!$result){
die("Inavlid query".mysqli_error());
}
echo "Data Inserted";
mysqli_close($conn);
?>
</body>
</html>