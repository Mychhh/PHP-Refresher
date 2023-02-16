<?php include 'database.php'; ?>
<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (empty($name)) {
    // error
    header('Location: ../view_crud.php');
} else if (empty($_POST['email'])) {
    // error
    header('Location: ../view_crud.php');
} else if (empty($_POST['feedback'])) {
    // error
    header('Location: ../view_crud.php');
}

if (!empty($name) && !empty($email) && !empty($feedback)) {
    // Add to database
    $sqlInsertFeedback = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$feedback')";

    if (mysqli_query($conn, $sqlInsertFeedback)) {
        // Success
        header('Location: ../feedback.php');
    } else {
        // Error
        echo 'Error : ' . mysqli_error($conn);
    }
}
