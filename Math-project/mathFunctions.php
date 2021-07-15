<?php
    function powerFunction($base, $exponent)
    {
        return pow($base, $exponent);
    }
    function logFunction($arg, $base)
    {
        return log($arg, $base);
    }
    function factorialFunction($exponent)
    {
        $output = 1;
        for ($i = 2; $i <= $exponent; $i++)
        {
            $output *= $i;
        }
        return $output;
    }
?>
