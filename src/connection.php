<?php 

$host = 'db.khhmaxbegomuwdzkaxpj.supabase.co'; 
$dbname = 'postgres';
$username = 'postgres';
$password = 'PHPSDKll@123';
$table_name = "breads";

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection Error: ' . $e->getMessage();
    exit;
}
?>