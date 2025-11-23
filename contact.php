<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<h2>Liên hệ với chúng tôi</h2>
<form action="" method="POST">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <label>Nội dung:</label><br>
    <textarea name="message"></textarea><br><br>
    <button type="submit">Gửi</button>
</form>

<?php
require_once 'includes/footer.php';
?>