<?php
//create connection
$conn = mysqli_connect("localhost","root","","db_tiketbus");

//if cancel
if (isset($_POST['CancelSubmit'])) {
    //do nothing

//if not cancel
} elseif (isset($_POST['DeleteSubmit'])) {

    //get var form user input
    $cust_id= $_POST['cust_id'];

    //create sql command
    $sql = "delete from t_cust where id_cust = '$cust_id'";
    
    //get result
    $result = mysqli_query($conn,$sql);
    
    //if success
    if ($result) {
        //do nothing

    //if not success
    } else {
        //send error
        echo mysqli_error($conn);
        exit();   
    }
}

//back to employee
header("location:employee.php");

?>