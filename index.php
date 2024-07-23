<?php
// scp * itcrowdindia@10.10.11.102:/home/itcrowdindia/htdocs/www.itcrowdindia.com/blacklisted/

require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View BlackListed Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>View BlackListed Data</h2>
    <table>
        <tr>
            <th>S. No.</th>
            <th>Type</th>
            <th>Company Name</th>
            <th>Total Rounds</th>
            <th>Your Pseudo Name</th>
            <th>Company Web Address</th>
            <th>What's Wrong Notes</th>
            <th>Comments</th>
        </tr>
       <?php
        // Prepare SQL statement to fetch data from BlackListed table
        $sql = "SELECT s_no, Type, company_name, total_rounds, whats_wrong_notes, pseudo_name, company_web_address, extra_comments
                FROM BlackListed";

        // Execute SQL statement
        $result = $conn->query($sql);

        // Display fetched data in a table
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['s_no'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['company_name'] . "</td>";
                echo "<td>" . $row['total_rounds'] . "</td>";
                echo "<td>" . $row['pseudo_name'] . "</td>";
                echo "<td>" . $row['company_web_address'] . "</td>";
                echo "<td>" . $row['whats_wrong_notes'] . "</td>";
                echo "<td>" . $row['extra_comments'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No data found</td></tr>";
        }

        // Close database connection
        $conn->close();
        ?>
    </table>
</body>
</html>