<?php
// Добавление новой строки в конец файла
$filename = 'file.txt';
file_put_contents($filename, "\nНовая строка", FILE_APPEND | LOCK_EX); // Создает файл, если его нет
?>
