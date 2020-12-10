<?php

function isActiveRoute($path)
{
    return Route::is($path) ? 'active' : '';
}

function isSelected($currentKey, $compareKey)
{
    return ($currentKey == $compareKey) ? 'selected' : '';
}
