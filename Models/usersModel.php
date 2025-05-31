<?php

class UserModel 
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    // ✅ Get user by email
    public function getUserByEmail($email)
{
    // Assuming you're using PDO:
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        error_log("No user found for email: " . $email);
    }

    return $user;
}


    // ✅ Get user by ID
    public function getUserById(int $id): ?array
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    // ✅ Optional: Check if user exists by email
    public function userExists(string $email): bool
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetchColumn() > 0;
    }
}
