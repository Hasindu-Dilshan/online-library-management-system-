

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.txtName{
		
			
		}
		div{
			background-color:blue;
			color:darkblue;
			display: inline;
			width: 250px;
			padding: 20px 20px 20px 20px;
		
		}
		label{
			
		}
  form{
  	border: 500px 500px 500px 500px;
  	background-color:lightblue;
  }
  input .txtAge {
  	padding-right: 1000px;

  }
	</style>
	<title></title>
</head>
<body>
	 <div >
		<form method="get" >
			Enter  Frist Number:<input id="txtName"class="txtName" name="txtName" type="number" value="0"></input><br>
			<label>Enter Second Number:</label><input id="txtAge"class="txtAge" name="txtAge" type="Number" value="0"></input><br>
			<label>Select operator    :</label>
			<select id="txt"class="txt" name="op">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			</select><br>
			<input id="btnS"class="btnS" name="btnS" type="Submit"></input>

		</form></div>
	 </body>
</html>
<?php 
$a;
if(isset($_GET["btnS"])){

$n1=$_GET["txtName"];
$n2=$_GET["txtAge"];
$o=$_GET["op"];

if($o=='-'){
$a= $n1-$n2;
echo "Answer is:".$a;
} else if($o=='+'){
$a= $n1+$n2;
echo "Answer is:".$a;
} else if($o=='*'){

$a= $n1*$n2;
echo "Answer is:".$a;
} else if($o=='/'){
$a= $n1/$n2;
echo "Answer is:".$a;
} 

}
 ?>
 