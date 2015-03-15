<?php

Route::get('happy', function(){
    return "I am so happy!";
});

Route::controller('hello', 'HelloController');