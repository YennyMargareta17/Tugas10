<?php
class Model
{
    protected $db;

    public function __construct()
    {
        // Ganti dengan kredensial MySQL yang sesuai
        $host = 'localhost';         // Host MySQL
        $dbname = 'library';         // Nama database Anda
        $username = 'root';          // Username MySQL (default di XAMPP adalah 'root')
        $password = '';              // Password MySQL (default di XAMPP tidak ada password untuk user 'root')

        // Coba untuk menghubungkan ke database MySQL
        try {
            // Koneksi PDO ke MySQL
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // Set mode error untuk PDO
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Could not connect to the database: " . $e->getMessage());
        }
    }
}
