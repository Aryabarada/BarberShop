<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>

<body>
    <?php
    include('config.php');

    $query = "SELECT * FROM booking";

    $result = mysqli_query($conn, $query);

    ?>

    <div class="container bg-info" style="padding-top: 50px; padding-bottom: 30px; padding-left: 1px; padding-right: 1px;">
        <div class="row">
            <div class="col-sm-4">
                <h3>Tambah Pelanggan</h3>
                <form role="form" action="insert.php" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomer Hp</label>
                        <input type="text" name="nomerhp_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Service</label>
                        <input type="text" name="service_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="time" name="waktu_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <input type="text" name="pesan_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga_bk" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Tambah booking</button>
                    <a class="btn btn-info btn-block" target="_blank" href="cetak.php">
                            <font color="White">Cetak Daftar booking</font>
                        </a>
                </form>

            </div>
            <div class="col-sm-8">
                <h3>Daftar Pelanggan Barber</h3>
                <table class="table table-striped table-hover dtabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomer Hp</th>
                            <th>Service</th>
                            <th>Waktu</th>
                            <th>Tanggal</th>
                            <th>Pesan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama_booking']; ?></td>
                                <td><?php echo $row['nomerhp_booking']; ?></td>
                                <td><?php echo $row['service_booking']; ?></td>
                                <td><?php echo $row['waktu_booking']; ?></td>
                                <td><?php echo $row['tanggal_booking']; ?></td>
                                <td><?php echo $row['pesan_booking']; ?></td>
                                <td><?php echo $row['harga_booking']; ?></td>
                                <td>
                                    <a href="editform.php?id=<?php echo $row['id_booking']; ?>" class="btn btn-success" role="button">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id_booking'] ?>" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dtabel').DataTable();
    });
</script>

</html>