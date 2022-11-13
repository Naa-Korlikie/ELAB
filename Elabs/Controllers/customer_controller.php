<?php
//connect to the user account class
include("../Classes/customer_class.php");

/*function saveContactCtr($dataA,$dataB){
    $myData=new Contactclass();
    return $mydata->saveContact($dataA,$dataB);
}
*/

//--INSERT--//

function addCustomer_ctr($name,$email,$passhas,$country,$city,$contact,$user_role){
    $insertcustomer=new Customerclass();
    return $insertcustomer->addCustomer($name,$email,$passhas,$country,$city,$contact,$user_role);
}

//--SELECT--//
function getAllcustomers_ctr(){
    $selectcustomer=new Customerclass();
    return $selectcustomer->selectAll();  
}

//sanitize data
//function for login
function login_ctr($email, $passhas){
    $new_class = new Customerclass();
     return $new_class->login_cls( $email,$passhas);
  }
  
//--UPDATE--//
function updateCustomer_ctr($customer_id, $nname,$eemail,$ppasshas,$ccountry,$ccity,$ccontact,$uuser_role){
    $updatecustomer=new Customerclass();
    return $updatecustomer->updateCustomer($customer_id, $nname,$eemail,$ppasshas,$ccountry,$ccity,$ccontact,$uuser_role);

}

//--DELETE--//
function deletecustomer_ctr($customer_id){
    $deletecustomer=new Customerclass();
    return $deletecustomer->deleteCustomer($customer_id);
}

// print_r(getAllCustomers_ctr());

?>