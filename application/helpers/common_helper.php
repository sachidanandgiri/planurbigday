<?php

function pr($val, $flag, $msg) {
    echo "<pre>";
    print_r($val);
    if ($flag) {
        die($msg);
    }
}
