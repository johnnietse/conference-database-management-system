<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>Sponsors</h2>
    
    <?php
    $query = "SELECT c.name, c.level, COUNT(s.id) as num_attendees
             FROM company c
             LEFT JOIN sponsor s ON c.name = s.companyName
             GROUP BY c.name
             ORDER BY 
                 CASE c.level 
                     WHEN 'Platinum' THEN 1
                     WHEN 'Gold' THEN 2
                     WHEN 'Silver' THEN 3
                     WHEN 'Bronze' THEN 4
                     ELSE 5
                 END, c.name";
    $result = $connection->query($query);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Company</th><th>Sponsorship Level</th><th>Attendees</th></tr>";
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['level']}</td>";
            echo "<td>{$row['num_attendees']}</td>";
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