 <?php
// Validation
$errors = [];

if (empty($_POST['name'])) {
    $errors[] = "Name is required.";
}
if (empty($_POST['email'])) {
    $errors[] = "Email is required.";
}
if (empty($_POST['phone'])) {
    $errors[] = "Phone number is required.";
}

if (!empty($errors)) {
    echo "<h2>Errors:</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul><a href='form_post.html'>Go Back</a>";
    exit;
}

// Output
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
?>

<h2>Submitted Data (POST Method)</h2>
<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Phone:</strong> <?php echo $phone; ?></p>
