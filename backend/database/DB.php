<?php 
class DB
{
    private $pdo;
    public function __construct()
    {
        $host = "localhost";
        $dbname = "luxe_watches";
        $username = "root";
        $password = "";
        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function insert($table, $data)
    {
        try {
            $columns = implode(", ", array_keys($data));
            $placeholders = implode(", ", array_fill(0, count($data), "?"));
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array_values($data));
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            die("Insert failed: " . $e->getMessage());
        }
    }

    public function delete($table, $condition, $params = [])
    {
        try {
            $sql = "DELETE FROM $table WHERE $condition";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Delete failed: " . $e->getMessage());
        }
    }
    
    public function exists($table, $condition, $params = [])
    {
        try {
            $sql = "SELECT COUNT(*) FROM $table WHERE $condition";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            die("Exists check failed: " . $e->getMessage());
        }
    }

    public function edit($table, $data, $condition, $params = [])
    {
        try {
            // Prepare the SET clause of the SQL statement
            $setClause = "";
            foreach ($data as $column => $value) {
                $setClause .= "$column = ?, ";
            }
            $setClause = rtrim($setClause, ", "); // Remove trailing comma and space

            // Prepare the full SQL query
            $sql = "UPDATE $table SET $setClause WHERE $condition";

            // Merge the data values and the condition parameters for the final execution
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array_merge(array_values($data), $params));

            // Return the number of rows affected
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Update failed: " . $e->getMessage());
        }
    }
}