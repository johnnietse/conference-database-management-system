<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>Conference Attendees</h2>
    
    <h3>Students</h3>
    <?php
    $query = "SELECT a.id, a.fName, a.lName, r.num as roomNum
             FROM attendee a
             JOIN student s ON a.id = s.id
             JOIN room r ON s.roomNum = r.num
             ORDER BY a.lName, a.fName";
    $result = $connection->query($query);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Room</th></tr>";
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['fName']} {$row['lName']}</td>";
            echo "<td>{$row['roomNum']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No students found.</p>";
    }
    ?>
    
    <h3>Professionals</h3>
    <?php
    $query = "SELECT a.id, a.fName, a.lName
             FROM attendee a
             JOIN professional p ON a.id = p.id
             ORDER BY a.lName, a.fName";
    $result = $connection->query($query);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th></tr>";
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['fName']} {$row['lName']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No professionals found.</p>";
    }
    ?>
    
    <h3>Sponsors</h3>
    <?php
    $query = "SELECT a.id, a.fName, a.lName, s.companyName
             FROM attendee a
             JOIN sponsor s ON a.id = s.id
             ORDER BY s.companyName, a.lName, a.fName";
    $result = $connection->query($query);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Company</th></tr>";
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['fName']} {$row['lName']}</td>";
            echo "<td>{$row['companyName']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No sponsors found.</p>";
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>