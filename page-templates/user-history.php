<?php
/**
 * Template Name: User History
 * Author: mosesleewei
 * Date: 12/16/2017
 */

if (!is_user_logged_in()){
    exit;
}

$current_userID = get_current_user_id();
$balance = mycred_get_users_total_balance( $current_userID );


// Example 2: Get log entries for user 1
$args = array(
    'user_id' => $current_userID,
    'orderby' => array( 'time' => 'DESC' )
);

// The Query
$log = new myCRED_Query_Log( $args );

// The Loop
if ( $log->have_entries() ) {

    if ($balance == 1 || $balance == -1){
        $balancetext = 'Your total points is ' . $balance;
    }elseif ($balance == 0){
        $balancetext = 'You have no points.' ;
    }else{
        $balancetext = 'Your total points are ' . $balance;
    }

    echo '<div class="user-history-balance">';
    echo '<h2>' . $balancetext . '</h2>';
    echo '</div>';

?>

<section class="timeline">
    <div class="container">

<?php

    $i = 1;
    // Build your custom loop
    foreach ( $log->results as $entry ) {

        $historycreds = $entry->creds;

        $replacestring = "";

        $historyentry = ucfirst ( str_replace( "%plural% for ", $replacestring, $entry->entry));

        $timestring = $entry->time;
        $timestamp = intval($timestring);
        $formattime = "F j, Y";
        $timeentry = date (  $formattime , $timestamp );

        $fadeinleft = 'js--fadeInLeft';
        $fadeinright = 'js--fadeInRight';

        if($i%2 == 0){
            $fadeintext = $fadeinright;
        }else{
            $fadeintext = $fadeinleft;
        }

        ?>

        <div class="timeline-item">
            <div class="timeline-img"></div>
        <?php
            echo '<div class="timeline-content ' . $fadeintext . ' ">';
            echo '<h2>' . $historyentry .': ' .  $historycreds . '</h2>';
            echo '<div class="date">' . $timeentry .'</div>';
        ?>
            </div>
        </div>
        <?php
        $i++;
    }
}

?>

    </div>
</section>
