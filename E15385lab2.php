<html>
<head>
</head>
<h1><p align="center"><b><strong> <font color="white">Your Information System</font></h1>
<body p align="center"  background="http://coolwallpaperz.info/user-content/uploads/wall/o/70/abstract-background-x-super-hd-and-stock-151449.jpg">
<font color="white">
<?php
$searchOrder=$_REQUEST["searchOrder"];
$size=$_REQUEST["size" ];
$colorSelector=$_REQUEST["colorSelector"];
$checkList1=$_REQUEST["checkList1"];
$checkList2=$_REQUEST["checkList2"];
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$Address1=$_REQUEST["Address1"];
$Address2=$_REQUEST["Address2"];
$Address3=$_REQUEST["Address3"];
$comments=$_REQUEST["comments"];



echo "Thank you, ".$firstname." for your purchase from our web site! <br>";
echo "Your item colour is: ".$colorSelector." & T-Shirt size : ".$size."<br>";
echo "Selected items/item are : <br>";
echo $checkList1."<br>";
echo $checkList2;
echo "<br>Your items will be sent to :<br>";
echo $firstname." ".$lastname.",<br>" ;
echo $Address1.",<br>" ;
		echo $Address2.",<br>" ;
		echo $Address3."<br>" ;
		echo "Thank you for submitting your comments. We appreciate it. You Said : <br>";
		?>
	<?php
		echo $comments;
      ?>

</font>
</body>
</html>