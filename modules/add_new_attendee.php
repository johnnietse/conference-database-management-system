<?php 
include '../includes/header.php';
include '../connectdb.php';

// submission of process form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $connection->beginTransaction();

        // fee based on type of attendee
        // if not the below two cases, then the default is sponsor
        $fee = '0';
        if ($_POST['attendeeType'] == 'student') {
            $fee = '50';
        } elseif ($_POST['attendeeType'] == 'professional') {
            $fee = '100';
        }
               
        
        // make insertion into attendee table 
        $attendeeQuery = "INSERT INTO attendee (id, fName, lName, fee) VALUES (:id, :fName, :lName, :fee)";
        $stmt = $connection->prepare($attendeeQuery);
        
        // new id 
        $idQuery = "SELECT MAX(id) as maxId FROM attendee";
        $result = $connection->query($idQuery);
        $row = $result->fetch();
        $newId = $row['maxId'] + 1;
        
        $stmt->bindParam(':id', $newId);
        $stmt->bindParam(':fName', $_POST['fName']);
        $stmt->bindParam(':lName', $_POST['lName']);
        $stmt->bindParam(':fee', $_POST['fee']);
        $stmt->execute();
        
        // make insertion into specific attendee type table 
        $type = $_POST['attendeeType'];
        if ($type == 'student') {
            $studentQuery = "INSERT INTO student (id, roomNum) VALUES (:id, :roomNum)";
            $stmt = $connection->prepare($studentQuery);
            $stmt->bindParam(':id', $newId);
            $stmt->bindParam(':roomNum', $_POST['roomNum']);
            $stmt->execute();
        } elseif ($type == 'professional') {
            $profQuery = "INSERT INTO professional (id) VALUES (:id)";
            $stmt = $connection->prepare($profQuery);
            $stmt->bindParam(':id', $newId);
            $stmt->execute();
        } elseif ($type == 'sponsor') {
            $sponsorQuery = "INSERT INTO sponsor (id, companyName) VALUES (:id, :companyName)";
            $stmt = $connection->prepare($sponsorQuery);
            $stmt->bindParam(':id', $newId);
            $stmt->bindParam(':companyName', $_POST['companyName']);
            $stmt->execute();
        }
        
        $connection->commit();
        $success = "Attendee added successfully with ID: {$newId}";
    } catch (PDOException $e) {
        $connection->rollBack();
        $error = "Error: " . $e->getMessage();
    }
}
?>

<div class="container">
    <h2>Add New Attendee</h2>
    
    <?php if (isset($success)): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>
    
    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <form method="post" action="">
        <div>
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required>
        </div>
        
        <div>
            <label for="lName">Last Name:</label>
            <input type="text" id="lName" name="lName" required>
        </div>
        
        <div>
            <label for="fee">Registration Fee:</label>
            <input type="text" id="feeDisplay" readonly>
            <input type="hidden" id="fee" name="fee">
        </div>
        
        <div>
            <label>Attendee Type:</label>
            <input type="radio" id="student" name="attendeeType" value="student" checked>
            <label for="student">Student ($50)</label>
            
            <input type="radio" id="professional" name="attendeeType" value="professional">
            <label for="professional">Professional ($100)</label>
            
            <input type="radio" id="sponsor" name="attendeeType" value="sponsor">
            <label for="sponsor">Sponsor ($0)</label>
        </div>
        
        <div id="studentFields">
            <label for="roomNum">Room Number:</label>
            <select id="roomNum" name="roomNum">
                <option value="">-- Select Room --</option>
                <?php
                $query = "SELECT num FROM room ORDER BY num";
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    echo "<option value='{$row['num']}'>{$row['num']}</option>";
                }
                ?>
            </select>
        </div>
        
        <div id="sponsorFields" style="display: none;">
            <label for="companyName">Company:</label>
            <select id="companyName" name="companyName">
                <option value="">-- Select Company --</option>
                <?php
                $query = "SELECT name FROM company ORDER BY name";
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    echo "<option value='{$row['name']}'>{$row['name']}</option>";
                }
                ?>
            </select>
        </div>
        
        <input type="submit" value="Add Attendee">
    </form>
    
    <script>
        // based on the type of attendee, either hide or show the fields 
        document.querySelectorAll('input[name="attendeeType"]').forEach(radio => {
            radio.addEventListener('change', function() {
            
                const feeDisplay = document.getElementById('feeDisplay');
                const feeInput = document.getElementById('fee');
                                
                if (this.value === 'student') {
                    feeDisplay.value = '$50';
                    feeInput.value = '50';
                } else if (this.value === 'professional') {
                    feeDisplay.value = '$100';
                    feeInput.value = '100';
                } else if (this.value === 'sponsor') {
                    feeDisplay.value = '$0';
                    feeInput.value = '0';
                }




                document.getElementById('studentFields').style.display = 
                    this.value === 'student' ? 'block' : 'none';
                document.getElementById('sponsorFields').style.display = 
                    this.value === 'sponsor' ? 'block' : 'none';
            });
        });


    
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('student').dispatchEvent(new Event('change'));
        });
        
    </script>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>