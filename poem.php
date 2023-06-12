<?php
require 'functions.php';

$genres = [
    'Лирика',
    'Эпос',
    'Драма',
    'Сатира',
    'Ода',
    'Сонет',
    'Экспериментальная поэзия',
];

$poets = [
    'Александр Пушкин',
    'Михаил Лермонтов',
    'Фёдор Тютчев',
    'Анна Ахматова',
    'Сергей Есенин',
    'Борис Пастернак',
    'Владимир Маяковский',
];


if(isset($_POST['words'])){
    $word = 'С ключевыми словами: ' . $_POST['words'] . '. ';
} else {
    $word = "";
}

if(isset($_POST['poet'])){
    $poet = 'В стиле поэта: ' . $_POST['poet'] . '.';
}
else {
    $poet = '';
}


if (isset($_POST['count']) && isset($_POST['genre'])) {
    $prompt = 'напиши стихотворение из ' . $_POST['count'] . ' четверостиший. По жанру: '. $_POST['genre'] . '. ' . $word . $poet;
    //print_r($prompt); day();

    $answer = chatgpt($prompt);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Генератор цитат</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="mt-3" method="POST">
                    <div class="mb-3">
                        <label for="count" class="form-label">Количество четверостиший</label>
                        <input type="number" class="form-control" id="count" name="count" value="<?= $_GET['count'] ?? 1 ?>">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="genre" require>
                            <option selected disabled>Выберите жанр генирируемого стихотворения</option>
                            <?php foreach($genres as $genre) : ?>
                                <option <?= ($_POST['genre'] ?? '') == $genre ? 'selected' : '' ?>><?= $genre ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="words" class="form-label">Возможные ключевые слова для стихотворения</label>
                        <textarea rows="2" class="form-control" id="words" name="words"><?= $_POST['words'] ?? '' ?></textarea>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="poet" require>
                            <option selected disabled>В стиле какого поэта генерировать стихотворение?</option>
                            <?php foreach($poets as $poet) : ?>
                                <option <?= ($_POST['poet'] ?? '') == $poet ? 'selected' : '' ?>><?= $poet ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>

                <?php if (isset($answer)): ?>
                    <div class="mt-3">
                        <p class="mt-3">
                            <pre><?= $answer ?></pre>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>