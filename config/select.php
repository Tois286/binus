<?php
include 'config.php';

$select = mysqli_query($koneksi, "SELECT * FROM liat");

while ($data = mysqli_fetch_array($select)) {
    echo "<br>";
    echo $data['liat'] . "<br>";
    echo $data['nama'];
}
