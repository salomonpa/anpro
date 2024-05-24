<?php

function bizdirectory_sanitize_checkbox( $input ) {
    if ( true === $input ) {
        return 1;
     } else {
        return 0;
     }
}
function bizdirectory_sanitize_url( $url ) {
  return esc_url_raw( $url );
}