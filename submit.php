<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Companies Blacklist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
    <h2>Submit the Company details </h2>
       
        <input type="text" name="Type" placeholder="Type" required><br><br>

        <input type="text" name="company_name" placeholder="Company Name" required><br><br>

        <input type="number" name="total_rounds" placeholder="Total Rounds" required><br><br>

        <textarea name="whats_wrong_notes" rows="4" cols="50"></textarea><br><br>

        <input type="text" name="pseudo_name" placeholder="Pseudo Name"><br><br>

        <input type="text" name="company_web_address" placeholder="Company Website"><br><br>

        <textarea name="extra_comments" rows="4" cols="50"></textarea><br><br>

<?php
// Check if all required fields are filled
if (isset($_POST['Type'], $_POST['company_name'], $_POST['total_rounds'])) {

    // Prepare SQL statement to insert data into BlackListed table
    $sql = "INSERT INTO BlackListed (Type, company_name, total_rounds, whats_wrong_notes, pseudo_name, company_web_address, extra_comments)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiisss", $type, $company_name, $total_rounds, $whats_wrong_notes, $pseudo_name, $company_web_address, $extra_comments);

    // Set parameters from form input
    $type = $_POST['Type'];
    $company_name = $_POST['company_name'];
    $total_rounds = $_POST['total_rounds'];
    $whats_wrong_notes = $_POST['whats_wrong_notes'];
    $pseudo_name = $_POST['pseudo_name'];
    $company_web_address = $_POST['company_web_address'];
    $extra_comments = $_POST['extra_comments'];

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    echo "Please fill all the required Fields";
}
?>

        <input type="submit" value="Submit">
        </form>
        <div class="footer">
        Crafted by (Thejeswar Reddy) - <a href="https://github.com/ThejeswarReddy/itcidb">GitHub</a>
        </div>

    </body>
</html>