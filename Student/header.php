<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// If this student has actually joined a game, route Exit through
// leave-game.php first so their `students` row gets flipped to Offline
// before they're sent back to the login page.
$exitUrl = !empty($_SESSION['student_row_id']) ? 'leave-game.php' : '../Admin/login.php';
?>
<div class="header">
    <div class="logo">
        <div class="logo-box">T</div>
        <span>TripleT Edu</span>
    </div>

    <div class="nav-btns">
        <a href="<?php echo htmlspecialchars($exitUrl); ?>" class="btn outline">Exit</a>
    </div>
</div>