<?php
echo 'Hello ';
//include "test.php";
//include_once "test.php";
require "test.php";
//require_once "test.php";

echo ' good luck ';
//include "test.php";
//require_once "test.php";

/*
include включает и выполняет указанный файл. Если файл не найден, то мы увидим ошибку (предупреждение) и скрипт спокойно продолжиет своё выполнение.
require аналогичен include, за исключением того, что при виде ошибке он выдает ошибку(фатальную), при этом работа скрипта остановится!
Разница между include_once и require_once такая же, как и в случае подключения через include и require
*/
