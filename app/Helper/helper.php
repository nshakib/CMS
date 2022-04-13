<?php

if(!function_exists('set_active')){
    function set_active($uri, $output='active'){

        if(is_array($uri)){
            foreach ($uri as $uris) {
                if(Route::is($uris)){
                    return $output;
                }
                else{
                    if(Route::is($uri)){
                        return $output;
                    }
                }
            }
        }
    }
}
