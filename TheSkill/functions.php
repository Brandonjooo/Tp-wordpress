<?php 

function gamesonline_LoadScripts(){
    wp_enqueue_style("tailwindcss",get_template_directory_uri()."/style.css");
    wp_enqueue_script('gamesOnline_hamburger',get_template_directory_uri().'/src/scripts/script.js',array(),'1.0.0',true);
}



?>