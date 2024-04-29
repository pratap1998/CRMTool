<?php 

include ('connect.php');


$query = "select * from 'customer'";

$result=$conn->query($query);

if($conn->query($query)==TRUE){
    print_r($result);

}
else{
    echo "query failed".$conn->error();
}
?>
