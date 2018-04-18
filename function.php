<?php
/**
 * Check Input
 * PHP version 7.1
 *
 * @category Check
 * @package  PackageName
 * @author   Sheyko Bogdan <afisttiik@gmail.com>
 * @license  https://mysite.ua PHP License
 * @link     https://mysite.ua
 */

/**
 * Short description
 *
 * @param string $data Description
 *
 * @return string
 */
function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Short description
 *
 * @param string $amountDay Description
 *
 * @return bool
 */
function checkNumeric($amountDay)
{
    $result = true;
    if ((!preg_match("|^[\d]+$|", $amountDay)) or (999<$amountDay)) {
        echo  "Введіть вірні данні";
        $result = false;
    }

    return $result;
}
