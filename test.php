<?php
/**
 * Create by: Vladislav Gladyr
 * Site: lockit.com.ua
 * Email: wild.savedo@gmail.com
 * Date : 02.09.2021
 * Time: 14:54
 * User: WyTcorporation
 */

function magic($number, $number2, $number3, $k)
{
    //$pow = pow($number, 2) + pow($number2, 2) + pow($number3, 2);

    $array = [$number, $number2, $number3];
    $number = '';
    foreach ($array as $arr) {
        $number += pow($arr, 2);
    }
    $pow = $number;

    return ($pow % $k) == 0 ? "Волшебство случается" : "Никакого волшебства";
}

$result = magic(2, 5, 7, 5);
//$result = magic(2, 5, 7, 39);
//$result = magic(2, 5, 7, 2);

function all_eq($lst)
{
    $maxLength = 0;
    foreach ($lst as $key => $val) {
        $length = mb_strlen($val);
        if ($length > $maxLength) {
            $maxLength = $length;
        }
    }

    foreach ($lst as $key => $val) {
        $length = mb_strlen($val);
        if (!is_null($maxLength) || $length < $maxLength) {
            if ($length < $maxLength) {
                $plus = $maxLength - $length;
                $line = str_repeat("_", $plus);
                $lst[$key] = $val . $line;
            }
        }
    }

    return $lst;
}

//$result = all_eq(['крот', 'белка', 'выхухоль']);
//$result = all_eq(['a', 'aa', 'aaa', 'aaaa', 'aaaaa']);
//$result = all_eq(['qweasdqweas', 'q', 'rteww', 'ewqqqqq']);

function set_gen($list)
{

    $arrays = array_count_values($list);
    $newArray = [];
    foreach ($arrays as $key => $val) {
        $newArray[] = $key;
        for ($i = 0; $i <= $val; $i++) {
            $item = str_repeat($key, $i);
            if (!empty($item) && $key != $item && $key != $item) {
                $newArray[] = str_repeat($key, $i);
            }
        }
    }
    return $newArray;
}

//$result = set_gen([1, 1, 3, 3, 1]);
//$result = set_gen([5, 5, 5, 5, 5, 5, 5]);
//$result = set_gen([2, 2, 1, 2, 2, 5, 6, 7, 1, 3, 2, 2]);

print_r($result);
?>

