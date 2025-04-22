<?php
function formatCurrency($amount) {
    return '$' . number_format($amount);
}

function formatDate($dateString) {
    return date('F j, Y', strtotime($dateString));
}

function formatTime($timeString) {
    return date('g:i A', strtotime($timeString));
}

function getAttendeeTypes() {
    return [
        'student' => 'Student',
        'professional' => 'Professional',
        'sponsor' => 'Sponsor'
    ];
}

function getSponsorshipLevels() {
    return [
        'Platinum' => 'Platinum',
        'Gold' => 'Gold',
        'Silver' => 'Silver',
        'Bronze' => 'Bronze'
    ];
}
?>