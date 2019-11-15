<?php
    require_once 'views.php';
    // Read Markdown Text from file
    $content = render_markdown("Planner.md");
    // Display the HTML in the page
    echo render_page("Dyani's Project Planner", "UNC BACS 350", $content);
?>