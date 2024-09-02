<?php
// Database connection
require "Database/connect.php";
// Fetch events data
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="logo">Logo</div>
        <div class="nav">
            <a href="#">Events</a>
            <a href="#">Profile</a>
        </div>
    </header>

    <main>
        <h1>Events</h1>
        <div class="event-list">
            <?php

            require 'Database/getEvents.php';

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="event-item">';
                    echo '<p class="event-title"><strong>' . htmlspecialchars($row["name"]) . '</strong></p>';
                    echo '<p>' . htmlspecialchars($row["description"]) . '</p>';
                    echo '<p><strong>Location: </strong>' . htmlspecialchars($row["location"]) . '</p>';
                    echo '<p><strong>Date: </strong>' . htmlspecialchars($row["date"]) . '</p>';
                    echo '<p><strong>Skills: </strong>' . htmlspecialchars($row["skills"]) . '</p>';

                    echo '</div>';
                }
            } else {
                echo '<p>No events found.</p>';
            }
            $conn->close();
            ?>
        </div>
    </main>
</body>

</html>