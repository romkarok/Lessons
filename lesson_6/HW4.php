<?php

$array = [
    [
        // Название фильмов
        "СКАЙУОКЕР ВОСХОД",
        "ХАН СОЛО",
        "ПОСЛЕДНИЕ ДЖЕДАИ",
        "ИЗГОЙ-ОДИН",
        "ПРОБУЖДЕНИЕ CИЛ",
    ],
    [
        //Места в кинотеатре
        "1"=> [1, 2, 3, 4, 5],
        "2"=> [6, 7, 8, 9, 10],
        "3"=> [11, 12, 13, 14, 15],
        "4"=> [16, 17, 18, 19, 20],
        "5"=> [21, 22, 23, 24, 25],
    ],
    [
        //Список оценок
        "Biology" => [4, 5, 5, 4, 3, 5],
        "History" => [3, 5, 4, 3, 4, 5],
        "Algebra" => [4, 4, 4, 4, 5, 3],
        "Physics" => [3, 3, 3, 4, 4, 3],
    ]];
$search = "25";

function search ($array, $search){

    foreach ($array as $key => $value) {
        foreach ($value as $ke => $valu) {

            if (is_array($valu)) {

                foreach ($valu as $k => $val) {

                    if ($val == $search) {

                        echo "[$key][$ke][$k] <= key \n";

                    }
                }
            }
            else {

                if($valu == $search){

                    echo "[$key][$ke] <= key \n";
                }
            }
        }
    }
    return false;

}

search ($array, $search);