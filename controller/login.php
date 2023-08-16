<?php

session_start();
require_once "db.php";

$response = array("message" => "");
header("Content-Type: application/json", true, 500);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $email = $_POST['email'];
        $password = $_POST["password"];

        $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if ($user && $password === $user->password) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $user["username"];

            header("Content-Type: application/json", true, 200);
            $response["message"] = "Logged in successfully";
        } else {
            // $response["message"] = "Wrong email or password";
            throw new Error("Wrong email or password");
        }
    } catch (\Throwable $th) {
        $response["message"] = $th;
    }
}

echo json_encode($response);
