<?php
include 'koneksi.php'; // Sesuaikan dengan nama file koneksi kamu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname   = $_POST['firstname'];
    $lname   = $_POST['lastname'];
    $stars   = $_POST['stars'];
    $comment = $_POST['comment'];

    // Amankan input dari SQL Injection
    $fname   = mysqli_real_escape_string($conn, $fname);
    $lname   = mysqli_real_escape_string($conn, $lname);
    $comment = mysqli_real_escape_string($conn, $comment);

    $sql = "INSERT INTO ratings (firstname, lastname, rating, comment) 
            VALUES ('$fname', '$lname', '$stars', '$comment')";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, balikkan ke halaman utama dengan pesan sukses
        echo "<script>
                alert('Thank you for your rating!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>