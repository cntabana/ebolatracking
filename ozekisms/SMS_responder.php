<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_GET['sender']) and isset($_GET['msg']))
{
$con = mysqli_connect("localhost","root","","psfdb");
//$msg = "kubaza*cntabana@yahoo.fr*ndifuza kumenya amazina yanjye";//$_GET['msg'];
//$msg = "igisubizo*13";

$valuearray=explode("*",$msg);
$service = $valuearray[0];





	if(strtolower($service) == "kubaza")
	{
            $email   = $valuearray[1];
			$request = $valuearray[2];
			//$message = "";
			$phone   = $_GET['sender'];

				//query from database 
				    
					$query="insert into request(request,phonenumber,email,requestdate,status) values ('".$request."','".$phone."','".$email."',now(),0)";
					$rs = mysqli_query($con,$query);
										
						$queryId = "SELECT max(id) as id FROM request WHERE request = '".$request."' ";
						
						$rep = mysqli_query($con,$queryId );
						    while($id = mysqli_fetch_array($rep))
							{
							 
							 $message = "Twishimiye ikibazo cyanyu,tuzabasubiza vuba.Numero yanyu ni ".$id['id']." Murakoze." ;
							}

	}
	else if(strtolower($service) == "igisubizo"){

                $idrequest = $valuearray[1];

               
				
				$query="select status,email from request where id =".$idrequest;
									
                $rs = mysqli_query($con,$query);
				//end of query from database
				while($row = mysqli_fetch_array($rs))
				{
				
				 if($row['status'] == 0){
                       	$message = "Pending";
				 }
				 else  if($row['status'] == 1){
                      $message = "Open";
				 }
				 else  if($row['status'] == 2){
                      $message = "Under Process";
				 }else{
				 	
					  $message = "Dossier yanyu yararangiye,mushobora kureba igisubizo muri email '".$row['email']."' ";

				 }
			     
				    
			   }
			
			
	}else{

		$message = "Iyaaaa,wanditse nabi message yawe";
	}
	
	
   echo "{SMS:TEXT}{}{+250788543310}{".$_GET['sender']."}{".$message."}";
mysqli_close($con);
}


?>