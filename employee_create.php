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

    <h1>Book Tiket</h1>
    <?php 
        //kaitkan dengan data referensi
        include_once "data_ref.php";

        //ambil list bus
        $list_bus = f_bus();

        //ambil list job_terminal
        $list_terminal = f_terminal();

        //ambil list tiket
        $list_tiket = f_tiket();
    ?>           

    <div class="container">
    <form action="employee_create_action.php" method="post">
    <div class="row">
        <div class="col-25">
        <label for="nama_cust">Nama</label>
        </div>
        <div class="col-75">
        <input type="text" id="nama_cust" name="nama_cust" placeholder="Masukkan Name">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="email_cust">Email</label>
        </div>
        <div class="col-75">
        <input type="text" id="email_cust" name="email_cust" placeholder="Masukkan Email">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="jadwal_cust">Waktu Keberangkatan</label>
        </div>
        <div class="col-75">
        <input type="text" id="jadwal_cust" name="jadwal_cust" placeholder="Pilih Waktu Keberangkatan">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="terminal">Terminal Tujuan</label>
        </div>
        <div class="col-75">
            <select id="terminal" name="id_terminal">
                <?php
                //ulangi untuk semua elemen dept
                foreach ($list_terminal as $d){
                    echo "<option value=$d[id_terminal]>" . $d['nama_terminal'] . "</option>";
                }            
            ?>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="tiket">Jenis Tiket</label>
        </div>
        <div class="col-75">
            <select id="tiket" name="id_tiket">
                <?php             
                //ulangi untuk semua elemen job level
                foreach ($list_tiket as $j){
                    echo "<option value=$j[id_tiket]>" . $j['jenis_tiket'] . "</option>";
                }            
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="bus">Armada Bus</label>
        </div>
        <div class="col-75">
            <select id="bus" name="id_bus">
                <?php             
                //ulangi untuk semua elemen job level
                foreach ($list_bus as $b){
                    echo "<option value=$b[id_bus]>" . $b['nama_bus'] . "</option>";
                }            
                ?>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-25">
            &nbsp;
        </div>
        <div class="col-75">
            <input type="submit" value="Create" name="CreateSubmit"> &nbsp;
            <input type="submit" value="Cancel" name="CancelSubmit">
        </div>
    </div>
    </form>
    </div>

</body>
</html>