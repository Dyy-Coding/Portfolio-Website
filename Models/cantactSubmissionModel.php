<?php 


class ContactModel
{
    private $conn;
    private $table = "contact_submissions";

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function insertSubmission($name, $email, $message)
    {
        $sql = "INSERT INTO $this->table (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        return $stmt->execute();
    }

    // Optional: fetch all contacts
    public function getAllContacts()
    {
        $sql = "SELECT * FROM $this->table ORDER BY timestamp DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    // Optional: delete contact by ID
    public function deleteContact($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}