<?php

/** Based on the number of railings and posts, determine the largest complete fence that could be made
 * @param Int $num_posts
 * @param Int $num_railings
 * @return Float
 */
function calcFence(Int $num_posts, Int $num_railings) : Float {
    if ($num_posts < 2 || $num_railings < 1) {
        //if there aren't enough materials
        return 0;
    } elseif ($num_posts > $num_railings) {
        //if there are more posts than railings, base fence on railing number
        return ($num_railings*1.5) + (($num_railings + 1)*0.1);
    }
    // otherwise, (if there are more railings than posts) base on posts
    return (($num_posts - 1)*1.5) + ($num_posts*0.1);
}

/** Based on the length of fence, determine the supplies you would need
 * @param Int $fence_length
 * @return array
 */
function calcSupplies(Int $fence_length) : Array {
    // if the fence length is less than 0, no supplies required
    if ($fence_length < 0) {
        return ['railings' => 0, 'posts' => 0];
    }
    // What supplies are being used
    $railing = 150;
    $post = 10;
    $post_and_railing = $post + $railing;
    // Fence length (changed to cm) - extra post, divided by size of both added === number of each (+1 for post)
    $number_of_each = ($fence_length*100 - $post) / $post_and_railing;
    // Round up for imperfect length fences
    $end_railings = ceil($number_of_each);
    $end_posts = $end_railings + 1;
    // return number of railings and posts
    return ['railings' => $end_railings, 'posts' => $end_posts];
}

