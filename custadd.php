<?php

if(isset($_POST['add_cust'])){
    $cust_name=$_POST['cust_name'];
    $cust_id=$_POST['cust_id'];
    $mRR=$_POST['mRR'];
 
 
    if($cust_name == "" || empty($cust_name)){
        header('location: customers.php?message=Fill in company name!');
    }

    else{

        $query = "INSERT INTO customer(company_name,company_id,mRR) VALUES ('$cust_name','$cust_id','$mRR')";

        $result = mysqli_query($conn,$query);

        if($result==TRUE){
            die("Query Failed".mysqli_error($conn));
        }

        else{
            header('location: customers.php');
        }
    }
 
}

?>