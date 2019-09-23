<?php

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('posts', 'Rainlab\Blog\Http\Post');
});
