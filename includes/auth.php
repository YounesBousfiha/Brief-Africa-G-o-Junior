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



function SignUp($conn, $nom, $email, $password) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO Users (Nom, Email, Password) VALUES(?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nom, $email, $hashed_password);
    $stmt->execute();
}

function Login($conn, $email, $password) {
    $sql = 'SELECT * FROM Users WHERE Email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $data = $stmt->get_result();
    $creds = $data->fetch_assoc();

    if ($creds && password_verify($password, $creds['Password'])) {
        return $creds;
    }
}

function Logout() {
    var_dump($_COOKIE);
    session_unset();
    session_destroy();
    setcookie("type", "");
}
?>