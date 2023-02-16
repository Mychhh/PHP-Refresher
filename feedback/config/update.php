<?php

include '../config/database.php';

if (isset($_GET['id'])) {
    // Add to database
    $id = filter_input(INPUT_GET, 'email', FILTER_DEFAULT);
    $name = filter_input(INPUT_GET, 'name', FILTER_DEFAULT);
    $email = filter_input(INPUT_GET, 'email', FILTER_DEFAULT);
    $body = filter_input(INPUT_GET, 'body', FILTER_DEFAULT);

    $sqlInsertFeedback = "UPDATE feedback SET name = $name, email = $email, body $body= WHERE id=$id";

    if (mysqli_query($conn, $sqlInsertFeedback)) {
        // Success
        header('Location: ../feedback.php');
    } else {
        // Error
        echo 'Error : ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>