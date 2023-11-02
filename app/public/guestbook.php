<?php
require_once '../db.php';
$db = DB::getInstance();
$GET_ALL_POSTS = 'SELECT id, posted_at, name, email, message, INET_NTOA(ip_address) as ip_address FROM guestbook ORDER BY id DESC';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
    $stmt = $db->prepare("INSERT INTO guestbook
        (name, email, message, posted_at, ip_address)
        VALUES
        (:name, :email, :message, now(), :ip_address)");
    $message = nl2br($_POST['message']);
    // Only variables can be called pass by reference
    $ip_address = ip2long($_SERVER["REMOTE_ADDR"]);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':ip_address', $ip_address);

    $stmt->execute();
}
?>

    <html lang="en">
    <head>
        <title>Guestbook</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
<body>

    <h2>Guestbook</h2>

    <form method="post">
        <fieldset>
            <legend>Leave a message</legend>
            <div class="form-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-field">
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <div class="form-field">
                <label>&nbsp;</label>
                <input type="submit" value="Send"/>
            </div>
        </fieldset>
    </form>
<?php
$posts = $db->query($GET_ALL_POSTS);

foreach ($posts as $post) {
    ?>

    <div class="post">
        <div class="post-name"><?php echo $post['name'] ?></div>
        <p><?php echo $post['message']; ?></p>
        <p class="post-footer"><?php echo "posted at " . $post['posted_at'] . " from " . $post['ip_address'] ?> </p>
    </div>
    <?php
}

