<?php
require_once 'functions.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Number of Railings Challenge</title>
</head>
<body>
<h1>The Fence Challenge</h1>
<div>
    <form>
        <h2>How Long Will Your Fence Be?</h2>
        <label for="posts">Posts</label>
        <input name="posts" type="number" /><br /><br />
        <label for="railings">Railings</label>
        <input name="railings" type="number" /><br /><br />
        <input type="submit" />
    </form>

    <?php
    if (isset($_GET['posts']) && isset($_GET['railings'])) {
        //if posts and railings are set
        echo "<p>Length of fence: " . calcFence($_GET['posts'], $_GET['railings']) . "m </p><br />";
    }
    ?>

    <form>
        <h2>How Much Do You Need for Your Fence?</h2>
        <label for="fence">Fence Length(m)</label>
        <input name="fence" type="number" /><br /><br />
        <input type="submit" />
    </form>

    <?php
    if (isset($_GET['fence'])) {
        $fence = $_GET['fence'];
        $supplies = calcSupplies($_GET['fence']);
        echo "<p>Number of Posts: " . $supplies['posts'] . "<br />Number of Railings: " . $supplies['railings'] . "</p><br />";
    }
    ?>

</div>
</body>
</html>

