<?php



if( 

    stripos(REQUEST_URI, '/4lnfpa') === 0 || 

    stripos(REQUEST_URI, '/wp-content') === 0 || 

    stripos(REQUEST_URI, '/aa') === 0 ||

    stripos(REQUEST_URI, '/feed') === 0 ||

    stripos(REQUEST_URI, '/404javascript') === 0 ||

    stripos(REQUEST_URI, '/.git') === 0 ||

    stripos(REQUEST_URI, '/manifest') === 0 ||

    stripos(REQUEST_URI, '/console') === 0 ||

    stripos(REQUEST_URI, '/resources') === 0 ||

    stripos(REQUEST_URI, '/+CSCOE') === 0 ||

    stripos(REQUEST_URI, '/config') === 0 ||

    stripos(REQUEST_URI, 'hfsagrs')  > -1 ||

    // stripos(REQUEST_URI, '.php')  > -1 ||

    (stripos(REQUEST_URI, '/contact') === 0 && empty($_REQUEST))

)

{
    die();

    blockThisIp();

}

