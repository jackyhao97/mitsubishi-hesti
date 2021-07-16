<?php
    require_once 'config.php';

    function query($query) {
      global $conn;
      $result = mysqli_query($conn, $query);
      $rows[] = [];
      while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
      }

      return $rows;
    }
    
    function tambah($data) {
      global $conn;    
      $nama = isset($data['namaAccount']) ? $data['namaAccount'] : '';
      $nomor = isset($data['nomorAccount']) ? $data['nomorAccount'] : '';
      $alamat = isset($data['alamatAccount']) ? $data['alamatAccount'] : '';
      $email = isset($data['emailAccount']) ? $data['emailAccount'] : '';
      $varian = isset($data['varian']) ? $data['varian'] : '';
      $createdOn = date('Y-m-d H:i:s');
      $sql = $conn->query("INSERT INTO datacustomer VALUES ('', '$nama', '$nomor', '$alamat', '$email', '$varian', '$createdOn')");

      return mysqli_affected_rows($conn);
    }
?>