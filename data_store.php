<?php
// Pastikan ini adalah file PHP yang dipanggil setelah formulir disubmit

// Periksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Format data untuk ditulis ke log
    $logData = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Tentukan lokasi dan nama file log
    $logFile = 'form_submit_log.txt';

    // Tulis data ke file log
    file_put_contents($logFile, $logData, FILE_APPEND | LOCK_EX);

    // Beritahu pengguna bahwa pesan telah terkirim
    echo 'Thank you! Your message has been submitted.';
} else {
    // Jika bukan metode POST, tampilkan pesan kesalahan
    echo 'Error: Form submission method not allowed.';
}
?>
