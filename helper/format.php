<?php
function currency_format($number, $suffix = '₫')
{
    return number_format($number,0,'',',').$suffix;
}

function date_format($date, $fomat = '%e %M  %Y')
{
    return date_format($date).$fomat;
}

function number_format_custom($price, $decimals = 2, $dec_point = '.', $thousands_sep = ',') {
    return number_format($price, $decimals, $dec_point, $thousands_sep);
}