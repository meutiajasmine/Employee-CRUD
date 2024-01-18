<?php
//create connection
$conn = mysqli_connect("localhost","root","","db_tiketbus");

//if cancel
if (isset($_POST['CancelSubmit'])) {
    //do nothing

//if not cancel
} elseif (isset($_POST['UpdateSubmit'])) {

    //get var form user input
    $cust_id= $_POST['cust_id'];
    $nama_cust= $_POST['nama_cust'];
    $email_cust= $_POST['email_cust'];
    $jadwal_cust= $_POST['jadwal_cust'];
    $id_terminal = $_POST['id_terminal'];
    $id_tiket = $_POST['id_tiket'];
    $id_bus = $_POST['id_bus'];

     //check or validate
    if (!empty($nama_cust) && !empty($email_cust) && !empty($jadwal_cust)) {

        //create sql command
        $sql = "update t_cust
                set nama_cust = '$nama_cust',
                email_cust = '$email_cust',
                jadwal_cust = '$jadwal_cust',
                id_terminal = '$id_terminal',
                id_tiket = '$id_tiket',
                id_bus = '$id_bus',
                id_cust = '$cust_id'
                ";
    
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
}

//back to employee
header("location:employee.php");

?>