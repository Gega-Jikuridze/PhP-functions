<?php



// foreach Function 
function printValues($array, $key, $fun) {
    foreach ($array as $item) {
        if ($item[$key]) {
            $fun($item[$key]);
        }
    }
};



// h1 function 
function h1($value){
    echo '<h1>' . $value . '</h1>';
    
};



// h2 function 

function h2($value){
    echo '<h3>' . $value . '</h3>';

    return $value;
};



// h3 function 

function h3($value){
    echo '<h3>' . $value . '</h3>';

    return $value;
};






// h4 function 
function h4($value){
    echo '<h4>' . $value . '</h4>';

    return $value;
};




// h5 function 

function h5($value){
    echo '<h5>' . $value . '</h5>';

    return $value;
};





// h6 function 
function h6($value){
    echo '<h6>' . $value . '</h6>';

    return $value;
};





// p function 
function p($value){
    echo '<p>' . $value . '</p>';

    return $value;
};




// a , link function 

function a($value, $link){

    echo "<a href='$link'>" . $value . '</a>';

    return $value;

};



// img function 

function img($src) {
    echo '<img src="' . $src . '" alt="Image">';
    return $src;
};




