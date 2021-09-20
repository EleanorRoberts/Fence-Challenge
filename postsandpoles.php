<?php
$railing = 150;
$post = 10;

$length_of_fence = 810;
$num_of_railings = 6;
$num_of_posts = 7;

//to calculate the length of fence based on number of railings and posts
$end_of_fence = ($num_of_railings*$railing) + ($num_of_posts*$post) + $post;
echo 'Length of fence: ' . $end_of_fence/100 . "m <br />";


//to calculate the number of posts and railings based on length of fence
$post_and_railing = $post + $railing;
$number_of_both = ($length_of_fence - $post) / $post_and_railing;
$end_railings = ceil($number_of_both);
$end_posts = $end_railings + 1;
echo "Number of railings: " . $end_railings . '<br />';
echo "Number of posts: " . $end_posts;



function calculateFence(Int $num_posts, Int $num_railings) : Int {
    if ($num_posts + 1 === $num_railings) {
        return ($num_railings*150) + ($num_of_posts*10);
    } elseif ($num_posts > $num_railings) {
        return ($num_railings*150) + (($num_railings + 1)*10);
    } else {
        return (($num_posts - 1)*150) + ($num_of_posts*10);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Number of Railings Challenge</title>
<!---->
<!--    <link rel="stylesheet" href="normalize.css" />-->
<!--    <link rel="stylesheet" href="xxx.css" />-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
</head>
<body>
<h1>The Fence Challenge</h1>
<div>
    <p></p>

</div>
</body>
</html>

