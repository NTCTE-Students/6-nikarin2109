<?php
// Поиск определенного слова и подсчет его вхождений
$word = 'поиск';
$filename = 'file.txt';
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $count = substr_count($content, $word);
    echo "Количество вхождений слова \"$word\": $count";
} else {
    echo 'Ошибка: файл не найден';
}
?>
