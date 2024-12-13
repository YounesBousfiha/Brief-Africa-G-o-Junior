<?php 

function emailEnumeration($conn, $email) {
    $isFound = false;
    $sql = 'SELECT * FROM Users WHERE Email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $emailDB = $stmt->get_result();

    if($emailDB->num_rows > 0) {
        $isFound = true;
    }
    return $isFound;
}

function SignUp($conn, $nom, $email, $password, $role) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO Users (Nom, Email, Password, ROLE) VALUES(?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $nom, $email, $hashed_password, $role);
    $stmt->execute();
}

function genrateToken() {
    return bin2hex(random_bytes(32));
}

function Login($conn, $email, $password) {
    $sql = 'SELECT * FROM Users WHERE Email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $data = $stmt->get_result();
    $creds = $data->fetch_assoc();
    if ($creds && password_verify($password, $creds['Password'])) {
        $token = genrateToken();
        session_start();
        setcookie("auth_token", $token, time() + 3600, "/");

        $sql = 'UPDATE Users SET Token = ? WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $token, $creds['ID']);
        $stmt->execute();
        return $creds;
    }
    return null;
}

function ValidateUser($conn) {
    $token = $_COOKIE['auth_token'];
    if(isset($token)) {
        $sql = 'SELECT * FROM Users WHERE Token = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $token);
        $stmt->execute();
        $data = $stmt->get_result();
        $user = $data->fetch_assoc();

        if($user) {
            return $user;
        } else {
            Logout();
            return null;
        }
    }
}

function Logout() {
    session_unset();
    session_destroy();
    setcookie("auth_token", "", time() - 3600, "/");
    header("Location: http://localhost:3000/public/index.php");
}
?>