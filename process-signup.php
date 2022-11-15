<?php
    if (empty($_POST["name"])) {
die("username cant null");
    }

    if (strlen($_POST["password"])< 8) {
   die("password min length 8 character");


     }

    if ($_POST["password"] != $_POST["password_confirmation"]) {
        die("password must match");

    }
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "/connectionDb.php";   

$sql = "insert into users(email,username,password) VALUES(?,?,?)";
$stmt = $mysqli->stmt_init();
if (! $stmt->prepare($sql)) {
        die("sql error" . $mysqli->error);
}

$stmt->bind_param("sss",
$_POST["email"],
    $_POST["name"],
    $password_hash
);

if ($stmt->execute()) {
    echo"<script>
    alert('Selamat Anda Berhasil Daftar');
    document.location='./index.php';
    </script>
    ";


}

