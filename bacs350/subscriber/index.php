<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'subscriber_views.php';
    require_once 'subscriber_db.php';


    // List subscriber records
    $list = render_subscribers(list_subscribers ($db));

    
    // Button to go to other views
    $add_button = '<a href="insert.php">Add Subscriber</a>';

    
    $intro = '
        <p>
            Database
        </p>

    ';
    $content = "$intro $list $add_button";

    // Show the page
    echo render_page('UNC BACS 350', "My Subscribers", $content);
?>
