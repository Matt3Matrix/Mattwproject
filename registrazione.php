<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Crittografare la password prima di salvarla
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Salva i dati nel file
    $file = 'utenti.txt';
    $data = "$username|$hashedPassword\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Registrazione completata con successo!";
}
?>
