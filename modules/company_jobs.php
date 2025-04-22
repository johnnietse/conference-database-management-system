<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>Jobs by Company</h2>
    
    <form method="post" action="">
        <label for="company">Select Company:</label>
        <select name="company" id="company" required>
            <option value="">-- Select --</option>
            <?php
            $query = "SELECT name FROM company ORDER BY name";
            $result = $connection->query($query);
            while ($row = $result->fetch()) {
                echo "<option value='{$row['name']}'>{$row['name']}</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="View Jobs">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $company = $_POST['company'];
        $query = "SELECT jobTitle, salary, location 
                 FROM jobAd 
                 WHERE companyName = :company
                 ORDER BY salary DESC";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':company', $company);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "<h3>Jobs at {$company}</h3>";
            echo "<table>";
            echo "<tr><th>Job Title</th><th>Salary</th><th>Location</th></tr>";
            while ($row = $stmt->fetch()) {
                $salary = $row['salary'] ? '$' . number_format($row['salary']) : 'Not specified';
                echo "<tr>";
                echo "<td>{$row['jobTitle']}</td>";
                echo "<td>{$salary}</td>";
                echo "<td>{$row['location']}</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='error'>No jobs found for this company.</p>";
        }
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>