<?php

class onlineshop
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'prettyshop';
    private $charset = 'utf8mb4';
    private $pdo;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            // Connect without specifying a database
            $dsn = "mysql:host={$this->host};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
    
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
    
            // Create the database if it doesn't exist
            $this->pdo->exec("CREATE DATABASE IF NOT EXISTS {$this->databasename}");
    
            // Switch to the specified database
            $this->pdo->exec("USE {$this->databasename}");
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public function createTables()
    {
        $queries = [
            // Users Table
            "CREATE TABLE IF NOT EXISTS Users (
                UserID INT AUTO_INCREMENT PRIMARY KEY,
                Username VARCHAR(50) UNIQUE,
                Email VARCHAR(100) UNIQUE,
                Password VARCHAR(255),
                FirstName VARCHAR(50),
                LastName VARCHAR(50),
                DateOfBirth DATE,
                Address VARCHAR(255),
                Phone VARCHAR(20),
                UserType ENUM('customer', 'admin')
            )",
            
            // Suppliers Table
            "CREATE TABLE IF NOT EXISTS Suppliers (
                SupplierID INT AUTO_INCREMENT PRIMARY KEY,
                CompanyName VARCHAR(100),
                ContactPerson VARCHAR(100),
                Email VARCHAR(100) UNIQUE,
                Phone VARCHAR(20),
                Address VARCHAR(255),
                ProductLine VARCHAR(255)
            )",
            
            // Workers Table
            "CREATE TABLE IF NOT EXISTS Workers (
                WorkerID INT AUTO_INCREMENT PRIMARY KEY,
                FirstName VARCHAR(50),
                LastName VARCHAR(50),
                DateOfBirth DATE,
                Email VARCHAR(100) UNIQUE,
                Phone VARCHAR(20),
                Address VARCHAR(255),
                Position VARCHAR(100),
                Salary DECIMAL(10, 2)
            )"
        ];
        
        foreach ($queries as $query) {
            try {
                $this->pdo->exec($query);
                echo "Table created \n";
            } catch (PDOException $e) {
                die("Error executing query: " . $e->getMessage());
            }
        }
    }

    public function testConnection()
    {
        try {
            $this->connect();
            $this->createTables();
            echo "Database connection successful.\n";
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}

// Usage
$onlineshop = new onlineshop();
$onlineshop->testConnection();
?>
