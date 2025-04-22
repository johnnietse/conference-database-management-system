<?php 
include '../includes/header.php';
include '../connectdb.php';
?>

<div class="container">
    <h2>Sub-Committee Members</h2>
    
    <form method="post" action="">
        <label for="committee">Select Sub-committee:</label>
        <select name="committee" id="committee" required>
            <option value="">-- Select --</option>
            <?php
            $query = "SELECT name FROM subcommittee";
            $result = $connection->query($query);
            while ($row = $result->fetch()) {
                echo "<option value='{$row['name']}'>{$row['name']}</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="View Members">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $committee = $_POST['committee'];
        $query = "SELECT m.fName, m.lName 
                  FROM member m 
                  JOIN memberOf mo ON m.id = mo.id 
                  WHERE mo.subcommittee = :committee";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':committee', $committee);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "<h3>Members of {$committee}</h3>";
            echo "<table>";
            echo "<tr><th>First Name</th><th>Last Name</th></tr>";
            while ($row = $stmt->fetch()) {
                echo "<tr><td>{$row['fName']}</td><td>{$row['lName']}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='error'>No members found for this committee.</p>";
        }
    }
    ?>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>