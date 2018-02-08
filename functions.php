<?php
include("conn.php");
?>
<?php

class connection
{

    function select($uname,$pwd,$type)
    {
    $sql="select * from user where username='$uname' and password='$pwd' and type='$type'";
	$result=mysql_query($sql);
	if($row=mysql_fetch_array($result))
	{
		$type=$row['type'];
		return $type;
		}
	
	return '';
    }
	
	function insert($uname,$pwd,$type,$email,$name,$contact,$city,$p_add,$ofc_add,$date,$status)
	{
	$sql="insert into user(username,password,type,email,name,contact,city,p_address,ofc_address,reg_date,status)values('$uname','$pwd','$type','$email','$name',$contact,'$city','$p_add','$ofc_add','$date','$status')";	
	$result=mysql_query($sql);
	return $result;	
		
    }
	
	function insert_city($cname)
	{
		$sql="insert into city(cname)values('$cname')";
		$result=mysql_query($sql);
		return $result;
		
	}

    function insert_courier($c_id,$fname,$toname,$fcont,$tocont,$fadd,$toadd,$fcity,$tocity,$pdate,
$subadmin,$status,$cstatus)
	{
		$sql="insert into courier(c_id,from_name,to_name,from_contact,to_contact,from_address,to_address,from_city,to_city,post_date,subadmin,status,city_status)values('$c_id','$fname','$toname','$fcont','$tocont','$fadd','$toadd','$fcity','$tocity','$pdate','$subadmin','$status','$cstatus')";
		$result=mysql_query($sql);
		return $result;

	}
	
	function add_complain($title,$desc,$name,$contact,$email,$date)
	{
	  $sql="insert into complain(title,description,name,contact,email,date)values('$title','$desc','$name','$contact','$email','$date')";
	 $result=mysql_query($sql);	
	 return $result;	
	}
	
	
}
?>