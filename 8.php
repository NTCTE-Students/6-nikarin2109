<?php
// Переименование файла
$old_name = 'old_file.txt';
$new_name = 'new_file.txt';

if (file_exists($new_name)) {
    echo 'Ошибка: файл с новым именем уже существует';
} else {
    rename($old_name, $new_name);
}
?>
