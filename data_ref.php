<?php

//fungsi list bus
function f_bus(){
    $conn = mysqli_connect("localhost","root","","db_tiketbus");
    $sql = "SELECT * from t_bus order by nama_bus ASC";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}


//fungsi list terminal
function f_terminal(){
    $conn = mysqli_connect("localhost","root","","db_tiketbus");
    $sql = "SELECT * from t_terminal order by nama_terminal ASC";

    //buat query
    $result = mysqli_query($conn,$sql);

    //eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}

//fungsi list tiket
function f_tiket(){
    $conn = mysqli_connect("localhost","root","","db_tiketbus");
    $sql = "SELECT * from t_tiket order by jenis_tiket ASC";

    //buat query
    $result = mysqli_query($conn,$sql);

    //eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}


//fungsi get single customer
function f_get_cust($id_cust){
    $conn = mysqli_connect("localhost","root","","db_tiketbus");
    $sql = "SELECT * from t_cust where id_cust = '$id_cust'";

    //buat query
    $result = mysqli_query($conn,$sql);

    //eksekusi query
    $data= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $data;
}

//fungsi semua customer
function f_all_customer(){
    //buat koneksi
    $conn = mysqli_connect("localhost","root","","db_tiketbus");
 
    //buat string sql
    $sql = "SELECT
            t_cust.id_cust as cust_id,
            t_cust.nama_cust,
            t_cust.email_cust,
            t_cust.jadwal_cust,
            t_terminal.nama_terminal,
            t_tiket.jenis_tiket,
            t_tiket.harga_tiket,
            t_bus.nama_bus,
            t_bus.no_bus
            FROM
            t_cust
            Inner Join t_bus ON t_cust.id_bus = t_bus.id_bus
            Inner Join t_terminal ON t_cust.id_terminal = t_terminal.id_terminal
            Inner Join t_tiket ON t_cust.id_tiket = t_tiket.id_tiket
            ORDER BY t_cust.nama_cust ASC
            ";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}

//  echo "<pre>";
//  $d = f_dept();
//  print_r ($d);

//  $j = f_job_level();
//  print_r ($j);

//  $e = f_get_employee(2);
//  print_r ($e);

//coba donks eksekusi fungsi f_all_employee
 //$umar = f_all_employee();
// echo "<pre>";
 //print_r($umar);
// echo "</pre>";
// foreach($umar as $m){
//   echo $m['emp_name'] . "<br>";
// }
 
?>