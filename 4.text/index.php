<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текст</title>
</head>
<body>
    <?php
        $text = <<<TXT
        <p class="big">
        Год основания: <b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
        </p>
        <p class="float">
        <img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
        <span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
        </p>
        <p>
        <i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала 
        <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). 
        Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. 
        Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
        </p>
        TXT;
        // удаление тэгов
        $new_text = strip_tags($text);
        // вносим слова в массив (каждое слово элемент массива, пробелы не учитываются)
        $array = explode(' ', $new_text);
        // находим 29-ое слово
        $word = implode(' ', array_slice($array, 29, 1));
        // находим это слово в тексте с разметкой и обрезаем текст
        $new_text = strstr($text, $word, true);
        // избавляемся от двоеточия
        $new_text = mb_strimwidth($new_text, 0, -2);
        echo $new_text.'...';
    ?>
</body>
</html>