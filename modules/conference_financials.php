<?php 
include '../includes/header.php';
include '../connectdb.php';

// registration fees
$regQuery = $connection->query("
    SELECT 
        SUM(fee = '0') as free_count,
        SUM(fee = '50') as fifty_count,
        SUM(fee = '100') as hundred_count,
        SUM(CASE fee WHEN '50' THEN 50 WHEN '100' THEN 100 ELSE 0 END) as total_fees
    FROM attendee
");
$regData = $regQuery->fetch();

// sponsorship income
$sponsorQuery = $connection->query("
    SELECT 
        level,
        COUNT(*) as count,
        CASE level 
            WHEN 'Platinum' THEN 10000
            WHEN 'Gold' THEN 5000 
            WHEN 'Silver' THEN 2000
            WHEN 'Bronze' THEN 1000
        END as amount
    FROM company
    GROUP BY level
    ORDER BY FIELD(level, 'Platinum', 'Gold', 'Silver', 'Bronze')
");
$sponsorData = $sponsorQuery->fetchAll();

$total_sponsorship = array_sum(array_map(
    fn($row) => $row['count'] * $row['amount'], 
    $sponsorData
));

$total_income = ($regData['total_fees'] ?? 0) + $total_sponsorship;
?>

<div class="container">
    <h2>Financial Report</h2>
    
    <h3>Registration Fees</h3>
    <table>
        <tr><th>Fee Type</th><th>Count</th><th>Subtotal</th></tr>
        <tr><td>$0</td><td><?= $regData['free_count'] ?? 0 ?></td><td>$0</td></tr>
        <tr><td>$50</td><td><?= $regData['fifty_count'] ?? 0 ?></td><td>$<?= ($regData['fifty_count'] ?? 0) * 50 ?></td></tr>
        <tr><td>$100</td><td><?= $regData['hundred_count'] ?? 0 ?></td><td>$<?= ($regData['hundred_count'] ?? 0) * 100 ?></td></tr>
        <tr><th>Total</th><th><?= ($regData['free_count'] + $regData['fifty_count'] + $regData['hundred_count']) ?? 0 ?></th>
            <th>$<?= $regData['total_fees'] ?? 0 ?></th></tr>
    </table>
    
    <h3>Sponsorship Income</h3>
    <table>
        <tr><th>Level</th><th>Count</th><th>Amount</th><th>Subtotal</th></tr>
        <?php foreach ($sponsorData as $row): ?>
        <tr>
            <td><?= $row['level'] ?></td>
            <td><?= $row['count'] ?></td>
            <td>$<?= number_format($row['amount']) ?></td>
            <td>$<?= number_format($row['count'] * $row['amount']) ?></td>
        </tr>
        <?php endforeach ?>
        <tr><th colspan="3">Total Sponsorship</th><th>$<?= number_format($total_sponsorship) ?></th></tr>
    </table>
    
    <h3>Total Conference Income Amount</h3>
    <p>Registration Fees Amount: $<?= number_format($regData['total_fees'] ?? 0) ?></p>
    <p>Sponsorship Income Amount: $<?= number_format($total_sponsorship) ?></p>
    <p><strong>Total Income Amount: $<?= number_format($total_income) ?></strong></p>
    
    <p><a href="../conference.php">Back to Main Menu</a></p>
</div>

<?php 
include '../includes/footer.php';
$connection = null;
?>