<?php include 'includes/header.php'; ?>
<?php include 'connectdb.php'; ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application - Conference Management System</title>
    <link rel="stylesheet" href="includes/styles.css">
</head>

<div class="container">
    <h1>Web Application - Conference Management System</h1>
    <br>
    <br>
    <br>
    <img src="images/conferencelogo.png" alt="Conference Logo" class="logo">
    




    
    <div class="menu">
        <h2>Main Menu for Users</h2>
        <ul>
            <li><a href="modules/sub_committee_members.php">View Sub-Committee Members</a></li>
            <li><a href="modules/hotel_rooming.php">View Hotel Room (List of Students by Room)</a></li>
            <li><a href="modules/conference_daily_schedule.php">View Daily Conference Schedule</a></li>
            <li><a href="modules/list_of_sponsors.php">View the list of Sponsors and their level of Sponsorship</a></li>
            <li><a href="modules/company_jobs.php">View Jobs by Company</a></li>
            <li><a href="modules/all_available_jobs.php">View All Available Jobs</a></li>
            <li><a href="modules/list_of_attendees.php">View Attendees by Type</a></li>
            <li><a href="modules/add_new_attendee.php">Add New Attendee</a></li>
            <li><a href="modules/conference_financials.php">View Conference Financials</a></li>
            <li><a href="modules/sponsorship_companies_management.php">Manage Sponsoring Companies</a></li>
            <li><a href="modules/session_details_management.php">Manage Session Details</a></li>
        </ul>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php $connection = null; ?>