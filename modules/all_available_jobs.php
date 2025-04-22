<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>All Available Jobs</h2>
    
    <?php
    $query = "SELECT j.companyName, j.jobTitle, j.salary, j.location, c.level
             FROM jobAd j
             JOIN company c ON j.companyName = c.name
             ORDER BY 
                 CASE c.level 
                     WHEN 'Platinum' THEN 1
                     WHEN 'Gold' THEN 2
                     WHEN 'Silver' THEN 3
                     WHEN 'Bronze' THEN 4
                     ELSE 5
                 END, j.companyName, j.salary DESC";
    $result = $connection->query($query);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Company</th><th>Sponsorship Level</th><th>Job Title</th><th>Salary</th><th>Location</th></tr>";
        while ($row = $result->fetch()) {
            $salary = $row['salary'] ? '$' . number_format($row['salary']) : 'Not specified';
            echo "<tr>";
            echo "<td>{$row['companyName']}</td>";
            echo "<td>{$row['level']}</td>";
            echo "<td>{$row['jobTitle']}</td>";
            echo "<td>{$salary}</td>";
            echo "<td>{$row['location']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No jobs found.</p>";
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>