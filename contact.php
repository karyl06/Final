<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

if(empty($name)) {
    echo "Error: Name is required.";
    exit;
}

if(empty($email)) {
    echo "Error: Email is required.";
    exit;
}

if(empty($message)) {
    echo "Error: Message is required.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">Thank You!</h1>

        <p><strong>Name:</strong> <?php echo $name; ?></p>

        <p><strong>Email:</strong> <?php echo $email; ?></p>

        <p><strong>Message:</strong> <?php echo $message; ?></p>

        <a href="index.html" class="btn btn-primary">
            Back to Home
        </a>

    </div>

</div>

</body>
</html>
