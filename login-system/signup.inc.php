<?php
require "dbh.inc.php";

if (isset($_POST['signup-submit'])) {
    session_start();

    // Collect form data
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    $usertype = $_POST['acc-type'];

    // Input validation
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($usertype)) {
        header("Location: ../signup.php?error=emptyfields&uid=" . urlencode($username) . "&mail=" . urlencode($email));
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=" . urlencode($username));
        exit();
    }

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=" . urlencode($email));
        exit();
    }

    if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=" . urlencode($username) . "&mail=" . urlencode($email));
        exit();
    }

    // Check if username or email already exists
    $sql = "SELECT uidUsers FROM users WHERE uidUsers = ? OR emailUsers = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        header("Location: ../signup.php?error=useroremailtaken&mail=" . urlencode($email));
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, userType) VALUES (?, ?, ?, ?)";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $usertype);
    mysqli_stmt_execute($stmt);

    $_SESSION['userUid'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['userType'] = $usertype;

    header("Location: ../index.php?signup=success");
    exit();
} else {
    header("Location: ../signup.php");
    exit();
}
?>
