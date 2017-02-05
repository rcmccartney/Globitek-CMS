<?php
require_once('../private/initialize.php');


// Set default values for all variables the page needs.
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success_page = 'registration_success.php';

// if this is a POST request, process the form
// Hint: private/functions.php can help
if (is_post_request())
{
    // Confirm that POST values are present before accessing them.
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';



    // Perform Validations
    // Hint: Write these in private/validation_functions.php
    $errors = [];
    if (is_blank($_POST['first_name'])) {
        $errors[] = "First name cannot be blank.";
    } elseif (!has_length($_POST['first_name'], ['min' => 2, 'max' => 255])) {
        $errors[] = "First name must be between 2 and 255 characters.";
    }
    if (is_blank($_POST['last_name'])) {
        $errors[] = "Last name cannot be blank.";
    } elseif (!has_length($_POST['last_name'], ['min' => 2, 'max' => 255])) {
        $errors[] = "Last name must be between 2 and 255 characters.";
    }

    if (is_blank($username)) {
        $errors[] = "Username cannot be blank.";
    } elseif (!has_length ($username, ['min' => 8, 'max' => 255])) {
        $errors[] = "Username must be between 8 and 255 characters.";
    }

    if (!has_valid_email_format($email)) {
        $errors[] = "Email is not valid.";
    }


    // if there were no errors, submit data to database
    if (empty($errors))
    {
        $current_dt = date("Y-m-d H:i:s");
        // Write SQL INSERT statement
        $sql = "INSERT INTO users (first_name, last_name, email, username, created_at) VALUES ('$first_name', '$last_name', '$email', '$username', '$current_dt')";

        // For INSERT statments, $result is just true/false
        $result = db_query($db, $sql);
        if($result){
            db_close($db);
            // TODO redirect user to success page
            header("Location: {$success_page}");
            exit;
        }
        else {
            // The SQL INSERT statement failed.
            // Just show the error, not the form
            echo h(db_error($db));
            db_close($db);
            exit;
        }
    }
}
?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

<?php
// TODO: display any form errors here
// Hint: private/functions.php can help
if (!empty($errors)) {
    echo h("Please fix the following errors:");
    echo "<br>";
    echo "<ul>";
        foreach ($errors as $i => $val) {
            echo "<li>";
                echo h($val);
            echo "</li>";
        }
    echo "</ul>";
}
?>

  <!-- TODO: HTML form goes here -->
<form action="register.php" method="post">
First Name:<br>
  <input type="text" name="first_name" value="<?php echo h($first_name); ?>" />
<br />
Last Name:<br>
  <input type="text" name="last_name" value="<?php echo ($last_name); ?>" />
<br />
Email:<br>
  <input type="text" name="email" value="<?php echo ($email); ?>" /><br />
Username:<br>
  <input type="text" name="username" value="<?php echo h($username); ?>" /><br />
  <br />
  <input type="submit" name="submit" value="Submit" />
</form>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
