<?php
//* Обозначается директории

function getFiles($dir,$level=0){

    $a ="/[a-zA-Z.\w]+$/i";
    $files = scandir($dir,1);

    foreach ($files as $file) {
        if ($file=='.'||$file=='..'){continue;}
        $path = $dir . '/' . $file;

        for ($i=0;$i<$level;$i++){
            echo "&numsp;&numsp;&numsp;";
        }

        preg_match($a,$path,$aMatch);
        if (is_dir($path)){
            echo "*";

        }

        $b = filesize($path);
        $perms = substr(sprintf('%o', fileperms("$path")), -4) ;
        foreach ($aMatch as $Match) {

            echo "$Match".' &numsp;('. "$b". ' байтов)'. "&numsp;($perms)" . "<br>" ;
        }

        if (is_dir($path)){
            getFiles($path,$level+1);
        }

        }
    }

getFiles("/home/romkarok/lessons/lesson_7/lesson_7_1");

// В первых скобках размер файлов в байтах, а во-вторых режим доступа(644 / 755).