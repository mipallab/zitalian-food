<?php


if ( file_exists(__DIR__."/app/data.php" )) {
    require_once( __DIR__."/app/data.php" );
} else {
    echo "data file not found.";
}

if ( file_exists( __DIR__."/app/functions.php" )) {
    require_once( __DIR__."/app/functions.php" );
} else {
    echo "functoins file not found.";
}