<?php
    $getpage = $_POST['page'];
    
    $txt = array(
        'home' => 'Home Page',
        'about' => 'About Page',
        'service' => 'Service Page'
    );
    
    $color = array(
        'home' => 'red',
        'about' => 'green',
        'service' => 'blue'
    );
    
    $textColor = array(
        'home' => 'white',
        'about' => 'white',
        'service' => 'white'
    );
    
    if($_POST){
        if($getpage == 'home'){
            echo json_encode(array('content' => $txt['home'], 'color' => $color['home'], 'textcolor'=> $textColor['home']));
        }else if($getpage == 'about'){
            echo json_encode(array('content' => $txt['about'], 'color' => $color['about'], 'textcolor' => $textColor['about']));
        }else if($getpage == 'service'){
            echo json_encode(array('content' => $txt['service'], 'color' => $color['service'], 'textcolor' => $textColor['service']));
        }
    }
?>