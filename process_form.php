<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $issue = htmlspecialchars($_POST['issue']);
    $serviceType = htmlspecialchars($_POST['service-type']);

    $to = "your-email@example.com"; // Ganti dengan email Anda
    $subject = "Permintaan Layanan Troubleshooting";
    $message = "Nama: $name\nEmail: $email\nDeskripsi Masalah: $issue\nJenis Layanan: $serviceType";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Permintaan Anda telah berhasil dikirim.";
    } else {
        echo "Terjadi kesalahan saat mengirim permintaan Anda. Silakan coba lagi.";
    }
}
?>