<?php 
include '../includes/header.php';
include '../connectdb.php';

// form for add sponsor 
if (isset($_POST['add_sponsor'])) {
    $companyName = $_POST['companyName'];
    $level = $_POST['level'];
    
    try {
        $query = "INSERT INTO company (name, emailsSent, level) VALUES (:name, 0, :level)";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':name', $companyName);
        $stmt->bindParam(':level', $level);
        $stmt->execute();
        $add_success = "Company {$companyName} added successfully as a {$level} sponsor.";
    } catch (PDOException $e) {
        $add_error = "Error adding company: " . $e->getMessage();
    }
}

// form for delete sponsor 
if (isset($_POST['delete_sponsor'])) {
    $companyName = $_POST['companyName'];
    
    try {
        $connection->beginTransaction();
        
        // delete all sponsor attendees --> cascade to delete from the table for attendee
        $query = "DELETE FROM sponsor WHERE companyName = :companyName";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':companyName', $companyName);
        $stmt->execute();
        
        // delete the company
        $query = "DELETE FROM company WHERE name = :companyName";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':companyName', $companyName);
        $stmt->execute();
        
        $connection->commit();
        $delete_success = "Company {$companyName} and all associated attendees deleted successfully.";
    } catch (PDOException $e) {
        $connection->rollBack();
        $delete_error = "Error deleting company: " . $e->getMessage();
    }
}
?>

<div class="container">
    <h2>Manage Sponsors</h2>
    
    <div class="section">
        <h3>Add New Sponsor</h3>
        
        <?php if (isset($add_success)): ?>
            <p class="success"><?php echo $add_success; ?></p>
        <?php endif; ?>
        
        <?php if (isset($add_error)): ?>
            <p class="error"><?php echo $add_error; ?></p>
        <?php endif; ?>
        
        <form method="post" action="">
            <div>
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" required>
            </div>
            
            <div>
                <label for="level">Sponsorship Level:</label>
                <select id="level" name="level" required>
                    <option value="Platinum">Platinum</option>
                    <option value="Gold">Gold</option>
                    <option value="Silver">Silver</option>
                    <option value="Bronze">Bronze</option>
                </select>
            </div>
            
            <input type="submit" name="add_sponsor" value="Add Sponsor">
        </form>
    </div>
    
    <div class="section">
        <h3>Delete Sponsor</h3>
        
        <?php if (isset($delete_success)): ?>
            <p class="success"><?php echo $delete_success; ?></p>
        <?php endif; ?>
        
        <?php if (isset($delete_error)): ?>
            <p class="error"><?php echo $delete_error; ?></p>
        <?php endif; ?>
        
        <form method="post" action="">
            <div>
                <label for="companyName">Select Company:</label>
                <select id="companyName" name="companyName" required>
                    <option value="">-- Select --</option>
                    <?php
                    $query = "SELECT name FROM company ORDER BY name";
                    $result = $connection->query($query);
                    while ($row = $result->fetch()) {
                        echo "<option value='{$row['name']}'>{$row['name']}</option>";
                    }
                    ?>
                </select>
            </div>
            
            <input type="submit" name="delete_sponsor" value="Delete Sponsor">
        </form>
    </div>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>