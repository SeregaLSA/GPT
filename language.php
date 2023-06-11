<?php
require 'functions.php';

$language = [
    'Английский',
    'Французкий',
    'Немецкий',
    'Марсианский'
];


if (isset($_POST['lang']) && isset($_POST['words'])) {
    $prompt = 'Переведид текст'. $_POST['words'] . 'с русского на ' . $_POST['lang'];

    $answer = chatgpt($prompt);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Генератор отзывов</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="mt-3" method="POST">
                    <div class="mb-3">
                        <select class="form-select" name="lang" require>
                            <option selected disabled>Выберите на какой язык требуется перевод</option>
                            <?php foreach($language as $lang) : ?>
                                <option <?= ($_POST['lang'] ?? '') == $lang ? 'selected' : '' ?>><?= $lang ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="words" class="form-label">Исходный текст</label>
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