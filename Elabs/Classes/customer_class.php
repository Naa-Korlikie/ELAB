<?php
//connect to database class
require("../Settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class Customerclass extends db_connection
{
	//save contact
	

	//--INSERT--//
	public function addCustomer($name, $email, $passhas, $country, $city, $contact, $user_role){
		//write sql
		$sql="INSERT INTO `customer` (`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) VALUES ('$name','$email','$passhas','$country','$city','$contact','$user_role')";
		//exceute sql
		return $this->db_query($sql);
		

	}
	//--SELECT--//
	//verify user email
	public function verify_email($email){
		$sql = "select * from 'customer' where 'customer_email' = $email";
		return $this->db_fetch_one($sql);
	}
	
	//login 
	public function login_cls($email,$passhas){
		$sql="SELECT `customer_id`,`user_role` FROM `customer` WHERE `customer_email` = '$email' and `customer_pass` = '$passhas'";
			return $this->db_fetch_one($sql);
	}


	//--SELECT--//
	public function selectOne($customer_id){
		$sql="SELECT `customer_name` FROM `customer` WHERE `customer_id`='$customer_id)' ";
		return $this->db_fetch_one($sql);

	}

	public function selectAll(){
		//write sql){
		$sql="SELECT * FROM `cutomer`";
		return $this->db_fetch_all($sql);

	}



	//--UPDATE--//
	public function updatecustomer($customer_id, $nname,$eemail,$ppasshas,$ccountry,$ccity,$ccontact,$uuser_role){
		$sql="UPDATE `customer` SET `customer_name`=' $nname',`customer_email`='$eemail', `customer_pass`= '$ppasshas', `customer_country`='$ccountry',`customer_city`='$ccity',`customer_contact`='$ccontact',`user_role`='$uuser_role' WHERE `customer_id`='$customer_id' ";
		//exceute sql
		return $this->db_query($sql);

	}



	//--DELETE--//
	public function deleteCustomer($customer_id){
		//write sql
		$sql="DELETE FROM `customer` WHERE `customer_id`='$customer_id'";
		//exceute sql
		return $this->db_query($sql);
		

	}
	

}

?>