 <?php
// Validation
$errors = [];

if (empty($_GET['name'])) {
    $errors[] = "Name is required.";
}
if (empty($_GET['email'])) {
    $errors[] = "Email is required.";
}
if (empty($_GET['phone'])) {
    $errors[] = "Phone number is required.";
}

if (!empty($errors)) {
    echo "<h2>Errors:</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul><a href='form_get.html'>Go Back</a>";
    exit;
}

// Output
$name = htmlspecialchars($_GET['name']);
$email = htmlspecialchars($_GET['email']);
$phone = htmlspecialchars($_GET['phone']);
?>

<h2>Submitted Data (GET Method)</h2>
<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Phone:</strong> <?php echo $phone; ?></p>
