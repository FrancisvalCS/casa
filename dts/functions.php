<?php

    function mysqli_field_name($result, $y)
    {
        $properties = mysqli_fetch_field_direct($result, $y);
        return is_object($properties) ? $properties->name : null;
    }