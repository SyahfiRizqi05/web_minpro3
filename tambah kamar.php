<?php

session_start();


require 'koneksi.php';

if (isset($_POST['submit'])) {
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];
  $room = $_POST['room'];
  $pembayaran = $_POST['pembayaran'];

  $sql = "INSERT INTO
    kamar_pembayaran (checkin, checkout, room, pembayaran)
    VALUES ('$checkin', '$checkout', '$room', '$pembayaran')";
  
  $result = mysqli_query($conn, $sql);

  if ($result == true) {
    echo "<script>alert('Data berhasil ditambah')</script>";
    echo "<script>window.location.href = 'dashboard.php'</script>";
  } else {
    echo "<script>alert('Gagal menambah data')</script>";
    echo "<script>window.location.reload()</script>";
  }
}

