#!/bin/bash

echo "Старе ім’я файлу:"
ls | grep index.*
echo "Нове ім’я файлу:"
mv $1.php index.$2
ls | grep index.*
