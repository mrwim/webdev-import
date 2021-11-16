<?php

require_once '../db.php';
$db = DB::getInstance();
?>

<html lang="en">
<head>
    <title>Guestbook</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<h2>Guestbook</h2>
<?php
$posts = $db->query("SELECT id, posted_at, name, email, message, INET_NTOA(ip_address) as ip_address FROM guestbook");

foreach ($posts as $post) {
    ?>

    <div class="post">
        <div class="post-name"><?php echo $post['name'] ?></div>
        <p><?php echo $post['message'];?></p>
        <p class="post-footer"><?php echo "posted at " . $post['posted_at'] . " from " . $post['ip_address']?> </p>
    </div>
<?php
}

