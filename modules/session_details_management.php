<?php 
include '../includes/header.php';
include '../connectdb.php';

// form for session update 
if (isset($_POST['update_session'])) {
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $newLocation = $_POST['newLocation'];
    $newDate = $_POST['newDate'];
    $newTime = $_POST['newTime'];
    $newEndTime = $_POST['newEndTime'];
    
    try {
        // check if there is new slot
        $checkQuery = "SELECT COUNT(*) as count FROM session 
                      WHERE location = :newLocation 
                      AND sessionDate = :newDate 
                      AND startTime = :newTime
                      AND NOT (location = :location AND sessionDate = :date AND startTime = :time)";

        $stmt = $connection->prepare($checkQuery);
        $stmt->bindParam(':newLocation', $newLocation);
        $stmt->bindParam(':newDate', $newDate);
        $stmt->bindParam(':newTime', $newTime);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':time', $time);

        $stmt->execute();
        $row = $stmt->fetch();
        
        if ($row['count'] > 0) {
            $update_error = "The new time slot is already booked. Please choose a different time.";
        } else {
            // update session with new session details
            $updateQuery = "UPDATE session 
                           SET location = :newLocation, 
                               sessionDate = :newDate, 
                               startTime = :newTime,
                               endTime = :newEndTime
                           WHERE location = :location 
                           AND sessionDate = :date 
                           AND startTime = :time";
            $stmt = $connection->prepare($updateQuery);
            $stmt->bindParam(':newLocation', $newLocation);
            $stmt->bindParam(':newDate', $newDate);
            $stmt->bindParam(':newTime', $newTime);
            $stmt->bindParam(':newEndTime', $newEndTime);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':time', $time);
            $stmt->execute();
            
            $update_success = "Session updated successfully.";
        }
    } catch (PDOException $e) {
        $update_error = "Error updating session: " . $e->getMessage();
    }
}
?>

<div class="container">
    <h2>Manage Sessions</h2>
    
    <?php if (isset($update_success)): ?>
        <p class="success"><?php echo $update_success; ?></p>
    <?php endif; ?>
    
    <?php if (isset($update_error)): ?>
        <p class="error"><?php echo $update_error; ?></p>
    <?php endif; ?>
    
    <form method="post" action="">
        <h3>Select Session to Update</h3>
        
        <div>
            <label for="location">Current Location:</label>
            <select id="location" name="location" required>
                <option value="">-- Select --</option>
                <?php
                $query = "SELECT DISTINCT location FROM session ORDER BY location";
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    echo "<option value='{$row['location']}'>{$row['location']}</option>";
                }
                ?>
            </select>
        </div>
        
        <div>
            <label for="date">Current Date:</label>
            <select id="date" name="date" required>
                <option value="">-- Select --</option>
                <?php
                $query = "SELECT DISTINCT sessionDate FROM session ORDER BY sessionDate";
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    $formattedDate = date('Y-m-d', strtotime($row['sessionDate']));
                    echo "<option value='{$formattedDate}'>{$formattedDate}</option>";
                }
                ?>
            </select>
        </div>
        
        <div>
            <label for="time">Current Start Time:</label>
            <select id="time" name="time" required>
                <option value="">-- Select --</option>
                <?php
                $query = "SELECT DISTINCT startTime FROM session ORDER BY startTime";
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    $formattedTime = date('H:i:s', strtotime($row['startTime']));
                    echo "<option value='{$formattedTime}'>{$formattedTime}</option>";
                }
                ?>
            </select>
        </div>
        
        <h3>Enter New Session Details</h3>
        
        <div>
            <label for="newLocation">New Location:</label>
            <input type="number" id="newLocation" name="newLocation" required>
        </div>
        
        <div>
            <label for="newDate">New Date:</label>
            <input type="date" id="newDate" name="newDate" min="2025-05-01" max="2025-05-02" required>
        </div>
        
        <div>
            <label for="newTime">New Start Time:</label>
            <input type="time" id="newTime" name="newTime" required>
        </div>

        <div>
            <label for="newEndTime">New End Time:</label>
            <input type="time" id="newEndTime" name="newEndTime" required>
        </div>
        
        <input type="submit" name="update_session" value="Update Session">
    </form>
    
    <h3>Current Sessions</h3>
    <?php
    $query = "SELECT s.location, s.sessionDate, s.startTime, s.endTime, a.fName, a.lName 
             FROM session s
             JOIN speaker sp ON s.speakerID = sp.id
             JOIN attendee a ON sp.id = a.id
             ORDER BY s.sessionDate, s.startTime";
    $result = $connection->query($query);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Date</th><th>Time</th><th>Location</th><th>Speaker</th></tr>";
        while ($row = $result->fetch()) {
            $date = date('Y-m-d', strtotime($row['sessionDate']));
            $startTime = date('H:i', strtotime($row['startTime']));
            $endTime = date('H:i', strtotime($row['endTime']));
            echo "<tr>";
            echo "<td>{$date}</td>";
            echo "<td>{$startTime} - {$endTime}</td>";
            echo "<td>{$row['location']}</td>";
            echo "<td>{$row['fName']} {$row['lName']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No sessions found.</p>";
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>