<?php
$mysqli = require __DIR__ . "/connectionDb.php";   

$sql = "insert into produk(nama_produk,jumlah_produk) VALUES(?,?)";
$stmt = $mysqli->stmt_init();
if (! $stmt->prepare($sql)) {
        die("sql error" . $mysqli->error);
}
if (empty($_POST["namaprdk"]) && empty($_POST["jmlprdk"])) {
    echo"<script>
    alert('field harus diisi');
    document.location='./views/v_home.php';
    </script>
    ";
}else{

    $stmt->bind_param("ss",
    $_POST["namaprdk"],
        $_POST["jmlprdk"]
    );
    
    if ($stmt->execute()) {
        echo"<script>
        alert('produk di tambah');
        document.location='./views/v_home.php';
        </script>
        ";
    
    
    }
}

