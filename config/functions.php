<?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
    
   
    function hasActive($param) {
        global $page;
       
        if ($param === pathinfo($page)['filename']) {
            return "active";
        } else {
            return '';
        }
    }

