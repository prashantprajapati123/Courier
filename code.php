<?php
session_start();
?>
<html>
<head>
<title>code</title>
</head>
<body>
<?php
include("conn.php");
include("functions.php");
?>
<?php
if(isset($_POST["login"]))
{
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
    $type=$_POST["type"];
	$obj=new connection();
	$a=$obj->select($uname,$pwd,$type,$con);
	if($a!='')
	{
		if($a=='admin')
		{
	         $_SESSION['aarchi']=$uname;
	         header("location:admin_home.php");
		}
	     else
	    {
	       $_SESSION['aarchi']=$uname;
	       header("location:subadmin_home.php");
		
	    }
     
	}
	else
	{
		$msg="Try Again";
		header("location:login.php?msg=".$msg);

	}

}
?>
<?php
if(isset($_POST["register"]))
{
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
    $type=$_POST["type"];
	$email=$_POST["email"];
	$name=$_POST["name"];
	$contact=$_POST["contact"];
	$city=$_POST["city"];
	$p_add=$_POST["p_add"];
	$ofc_add=$_POST["ofc_add"];
	$date=$_POST["date"];
	$status="Pending";
	
	$obj=new connection();
	$a=$obj->insert($uname,$pwd,$type,$email,$name,$contact,$city,$p_add,$ofc_add,$date,$status,$con);
	if($a>0)
	{
	
      $msg="Registration done successfully";
	  header("location:reg.php?msg=".$msg);
	}
	else
	{
		 $msg="Try Again";
		header("location:reg.php?msg=".$msg);

		
	}

}
?>
<?php
if(isset($_POST["add"]))
{
	$cname=$_POST["cname"];
	$obj=new connection();
	$add=$obj->insert_city($cname);
	if($add>0)
	{
		$msg="Record inserted";
	    header("location:add_city.php?msg=".$msg);

		
	}
	else
	{
	    echo"Try Again";	
		
	}
	
}
?>
<?php
if(isset($_POST["add_courier"]))
{
$c_id=$_POST["c_id"];	
$fname=$_POST["fname"];
$toname=$_POST["toname"];
$fcont=$_POST["fcont"];	
$tocont=$_POST["tocont"];	
$fadd=$_POST["fadd"];	
$toadd=$_POST["toadd"];	
$fcity=$_POST["fcity"];	
$tocity=$_POST["tocity"];	
$pdate=$_POST["pdate"];	
$subadmin=$_SESSION["aarchi"];	
$status="Pending";	
$cstatus=$tocity;	
		$obj=new connection();
		$r=$obj->insert_courier($c_id,$fname,$toname,$fcont,$tocont,$fadd,$toadd,$fcity,$tocity,$pdate,
$subadmin,$status,$cstatus);
if($r>0)
{
$msg="Record inserted";
 header("location:add_courier_subadmin.php?msg=".$msg);
	
}

else
{
 $msg="Try Again";
 header("location:add_courier_subadmin.php?msg=".$msg);
	
}	
	
}
?>
<?php
if(isset($_POST["add_complain"]))
{
  $title=$_POST["title"];
  $desc=$_POST["desc"]; 
  $name=$_POST["name"]; 
  $contact=$_POST["contact"]; 
  $email=$_POST["email"];
  $date=date('d/m/y');
  
  $obj=new connection();
  $result=$obj->add_complain($title,$desc,$name,$contact,$email,$date);
  if($result>0)
  {
	  $msg="Your complain is created";
	  header("location:user_add_complain.php?msg=".$msg);

  }
	else
	{
		$msg="Try Again";
		header("location:user_add_complain.php?msg=".$msg);

	}

	
}
?>
</body>
</html>