<?php

function pretty_print($in, $opened = true){
    if($opened)
        $opened = ' open';
    if(is_object($in) or is_array($in)){
        echo '<div>';
        echo '<details'.$opened.'>';
        echo '<summary>';
        echo (is_object($in)) ? 'Object {'.count((array)$in).'}':'Array ['.count($in).']';
        echo '</summary>';
        pretty_print_rec($in, $opened);
        echo '</details>';
        echo '</div>';
    }
}

function pretty_print_rec($in, $opened, $margin = 10){
    if(!is_object($in) && !is_array($in))
        return;

    foreach($in as $key => $value){
        if(is_object($value) or is_array($value)){
            echo '<details style="margin-left:'.$margin.'px" '.$opened.'>';
            echo '<summary>';
            echo (is_object($value)) ? $key.' {'.count((array)$value).'}':$key.' ['.count($value).']';
            echo '</summary>';
            pretty_print_rec($value, $opened, $margin+10);
            echo '</details>';
        }
        else{
            echo '<div style="margin-left:'.$margin.'px">'.$key . ' : <span style="color:'.$bgc.'">' . $value .'</span> ('.gettype($value).')</div>';
            switch(gettype($value)){
                case 'string':
                    $bgc = 'red';
                    break;
                case 'integer':
                    $bgc = 'green';
                    break;
            }
        }
    }
};

$array = array(
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => array(
        10 => 'j',
        11 => 'k',
        12 => array(
            20 => 't',
            21 => 'u'
        )
    )
);
pretty_print($array, false);