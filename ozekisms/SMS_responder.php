<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_GET['sender']) and isset($_GET['msg']))
{
$con = mysqli_connect("localhost","root","","eboladb");
//$msg = "ikibazo*ndifuza kumenya amazina yanjye";
$msg=$_GET['msg'];
//$msg = "igisubizo*13";

$valuearray=explode("*",$msg);
$service = $valuearray[0];





	if(strtolower($service) == "ikibazo")
	{
            $email   = "";//$valuearray[1];
			$request = $valuearray[1];
			//$message = "";
			$phone   = $_GET['sender'];

				//query from database 
				    
					$query="insert into request(request,phonenumber,email,requestdate,status) values ('".$request."','".$phone."','".$email."',now(),0)";
					$rs = mysqli_query($con,$query);
					$message = "Murakoze kutumenyesha,turaje vuba byihuse." ;
			}
	else{

		$message = "ikibazo*message";
	}
	//echo $message;
	echo "{SMS:TEXT}{}{+250788543310}{".$_GET['sender']."}{".$message."}";
mysqli_close($con);
}


?>