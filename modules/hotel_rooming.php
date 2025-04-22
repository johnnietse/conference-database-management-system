<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>Hotel Room Occupants</h2>
    
    <form method="post" action="">
        <label for="room">Select Room Number:</label>
        <select name="room" id="room" required>
            <option value="">-- Select --</option>
            <?php
            $query = "SELECT num FROM room ORDER BY num";
            $result = $connection->query($query);
            while ($row = $result->fetch()) {
                echo "<option value='{$row['num']}'>{$row['num']}</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="View Occupants">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $room = $_POST['room'];
        $query = "SELECT a.fName, a.lName 
                 FROM attendee a 
                 JOIN student s ON a.id = s.id 
                 WHERE s.roomNum = :room";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':room', $room);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "<h3>Students in Room {$room}</h3>";
            echo "<table>";
            echo "<tr><th>First Name</th><th>Last Name</th></tr>";
            while ($row = $stmt->fetch()) {
                echo "<tr><td>{$row['fName']}</td><td>{$row['lName']}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='error'>No students found in this room.</p>";
        }
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>