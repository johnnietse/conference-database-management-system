<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>Conference Schedule</h2>
    
    <form method="post" action="">
        <label for="day">Select Day:</label>
        <select name="day" id="day" required>
            <option value="">-- Select --</option>
            <option value="2025-05-01">May 1, 2025</option>
            <option value="2025-05-02">May 2, 2025</option>
        </select>
        <input type="submit" name="submit" value="View Schedule">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $day = $_POST['day'];
        $query = "SELECT s.location, s.startTime, s.endTime, a.fName, a.lName 
                 FROM session s
                 JOIN speaker sp ON s.speakerID = sp.id
                 JOIN attendee a ON sp.id = a.id
                 WHERE s.sessionDate = :day
                 ORDER BY s.startTime";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':day', $day);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "<h3>Schedule for " . date('F j, Y', strtotime($day)) . "</h3>";
            echo "<table>";
            echo "<tr><th>Time</th><th>Location</th><th>Speaker</th></tr>";
            while ($row = $stmt->fetch()) {
                $startTime = date('g:i A', strtotime($row['startTime']));
                $endTime = date('g:i A', strtotime($row['endTime']));
                echo "<tr>";
                echo "<td>{$startTime} - {$endTime}</td>";
                echo "<td>{$row['location']}</td>";
                echo "<td>{$row['fName']} {$row['lName']}</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='error'>No sessions scheduled for this day.</p>";
        }
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>