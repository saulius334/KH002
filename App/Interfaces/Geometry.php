<?php

namespace App\Interfaces;

interface Geometry {
    function circlePerimeter($radius);
    function squarePerimeter($side);
    function rectanglePerimeter($sideA, $sideB);
    function rhombusPerimeter($side);
}

