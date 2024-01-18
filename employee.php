<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="menu">
        <li class="menu"><a href="index.html">Home</a></li>
        <li class="menu"><a class="active" href="employee.php">Booked Ticket</a></li>
        <li class="menu"><a href="search.php">Search</a></li>
        <li style="float:right"><a href="#about">About</a></li>
    </ul>

    <h1>Customer List</h1>

    <table id="customer">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Waktu Keberangkatan</th>
            <th>Terminal Tujuan</th>
            <th>Tiket</th>
            <th>Harga</th>
            <th>Armada Bus</th>
            <th>No. Bus</th>
            <th>Action</th>
        </tr>

    <?php
        //kaitkan dengan data referensi
        include_once "data_ref.php";

        //ambil list pegawai
        $krim_customer = f_all_customer();

        //buat pencacah
        $cacah=1;

        //buat link ADD
        echo "<a href='employee_create.php'><button class='button'>Create</button> </a><br><br>";

        //buat looping untuk menampilkan data sd selesai
        foreach($krim_customer as $krim){    
    ?>
    
    <!--tampilkan record-->
    <tr>
        <td><?= $cacah ?> </td> 
        <td><?= $krim['nama_cust'] ?> </td> 
        <td><?= $krim['email_cust'] ?> </td> 
        <td><?= $krim['jadwal_cust'] ?> </td> 
        <td><?= $krim['nama_terminal'] ?> </td> 
        <td><?= $krim['jenis_tiket'] ?> </td> 
        <td align="right"><?= $krim['harga_tiket'] ?> </td>
        <td><?= $krim['nama_bus'] ?> </td>
        <td align="center"><?= $krim['no_bus'] ?> </td> 
        <td> <a href="employee_update.php?arg= <?= $krim['cust_id'] ?>">Update</a>&nbsp;
             <a href="employee_delete.php?arg= <?= $krim['cust_id'] ?>">Delete</a> </td>
    </tr>

    <?php
         //next record
         $cacah++;
    }
    ?>

   </table>
</body>
</html>
