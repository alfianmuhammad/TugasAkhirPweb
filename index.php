<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM data_gambar");
?>
<html>
    <head>
        <title></title>
        <link rel='stylesheet' href='css2.css'>
    </head>
    <body>
        <a href="form.php">Upload Gambar</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Action</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="image_view.php?id_gambar=<?php echo $row['id']; ?>" width="50"/></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><?php echo $row['tipe']; ?></td>
                    <td><?php echo $row['ukuran']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>