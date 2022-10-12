<?php

namespace App\Model;

use App\Interfaces\Geometry;

class GeometryDash implements Geometry {
    function circlePerimeter($radius) {
        $perimeter =  2 * pi() * $radius;
        return $perimeter;

    }



    function squarePerimeter($side) {
        $perimeter = $side * 4;
        return $perimeter;
    }



    function rectanglePerimeter($sideA, $sideB) {
        $perimeter =  ($sideA + $sideB) * 2;
        return $perimeter;
    }



    function rhombusPerimeter($side) {
        $perimeter =  $side * 4;
        return $perimeter;
    }
}