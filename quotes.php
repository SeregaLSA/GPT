<?php
require 'functions.php';

$topics = [
    'Мотивация и вдохновение',
    'Любовь и отношения',
    'Мудрость и философия',
    'Цель и успех',
    'Жизнь и счастье',
    'Творчество и искусство',
];


if(isset($_POST['words'])){
    $word = $_POST['words'];
} else {
    $word = "";
}

if (isset($_POST['topic'])) {
    $prompt = 'Сгенирируй цитату по теме '. $_POST['topic'] . ' с ключевыми словами ' . $word;
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
                        <select class="form-select" name="topic" require>
                            <option selected disabled>Выберите тему для создания цитаты</option>
                            <?php foreach($topics as $topic) : ?>
                                <option <?= ($_POST['topic'] ?? '') == $topic ? 'selected' : '' ?>><?= $topic ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="words" class="form-label">Возможные ключевые слова для цитаты</label>
                        <textarea rows="4" class="form-control" id="words" name="words"><?= $_POST['words'] ?? '' ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>

                <?php if (isset($answer)): ?>
                    <div class="mt-3">
                        <p class="mt-3">
                            <?= $answer ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>