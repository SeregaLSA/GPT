<?php
require 'functions.php';

$ages = [
    '10 - 15',
    '15 - 20',
    '20 - 25',
    '30 - 35',
    '40 - 45',
    '45 - 50',
    '50 -55',
    '55 - 60',
    '60 -65',
    '65 - 70',
];

$hobbys = [
    '0' => 'Искусство',
    '1' => 'Музыка',
    '2' => 'Рукоделие',
    '3' => 'Садоводство',
    '4' => 'Кулинария',
    '5' => 'Спорт',
    '6' => 'Литература',
    '7' => 'Путешествия',
    '8' => 'Танцы',
    '9' => 'Компьютерные игры',
    '10' => 'Коллекционирование',
    '11' => 'Робототехника',
    '12' => 'Творчество с бумагой',
    '13' => 'Готовка',
    '14' => 'Ремесла',
];

$hobby_cats = '';

$array_hobby = [
    $hobby_1 = [
        'рисование',
        'живопись',
        'скульптура',
        'фотография',
        'графический дизайн',
    ],
    $hobby_2 = [
        'игра на музыкальных инструментах',
        'пение',
        'создание и запись музыки',
    ],
    $hobby_3 = [
        'вязание',
        'шитье',
        'вышивка',
        'куклы-мотанки',
        'изготовление украшений',
    ],
    $hobby_4 = [
        'выращивание цветов',
        'овощей',
        'фруктов',
        'создание ландшафтного дизайна'
    ],
    $hobby_5 = [
        'приготовление различных блюд',
        'выпечка',
        'кондитерское искусство',
    ],
    $hobby_6 = [
        'футбол',
        'баскетбол',
        'теннис',
        'бег',
        'йога',
        'плавание',
        'езда на велосипеде',
    ],
    $hobby_7 = [
        'чтение',
        'написание книг',
        'написание стихов',
        'написание блогов',
    ],
    $hobby_8 = [
        'изучение новых мест',
        'фотографирование',
        'создание путеводителей',
    ],
    $hobby_9 = [
        'классические',
        'современные',
        'бальные',
        'народные',
        'хореография',
    ],
    $hobby_10 = [
        'игры на персональном компьютере',
        'консолях',
        'мобильных устройствах',
    ],
    $hobby_11 = [
        'марки',
        'монеты',
        'почтовые открытки',
        'антиквариат',
        'игрушки',
    ],
    $hobby_12 = [
        'создание и программирование роботов',
        'автоматизация процессов',
    ],
    $hobby_13 = [
        'оригами',
        'скрапбукинг',
        'квиллинг',
        'создание открыток',
    ],
    $hobby_14 = [
        'эксперименты с новыми рецептами',
        'приготовление домашних консервов',
    ],
    $hobby_15 = [
        'керамика',
        'гончарство',
        'ковка',
        'стеклодувное искусство',
    ],
];

/*
    1. Искусство: рисование, живопись, скульптура, фотография, графический дизайн.
    2. Музыка: игра на музыкальных инструментах, пение, создание и запись музыки.
    3. Рукоделие: вязание, шитье, вышивка, куклы-мотанки, изготовление украшений.
    4. Садоводство: выращивание цветов, овощей, фруктов, создание ландшафтного дизайна.
    5. Кулинария: приготовление различных блюд, выпечка, кондитерское искусство.
    6. Спорт: футбол, баскетбол, теннис, бег, йога, плавание, езда на велосипеде.
    7. Литература: чтение, написание книг, стихов, блогов.
    8. Путешествия: изучение новых мест, фотографирование, создание путеводителей.
    9. Танцы: классические, современные, бальные, народные, хореография.
    10. Компьютерные игры: игры на персональном компьютере, консолях, мобильных устройствах.
    11. Коллекционирование: марки, монеты, почтовые открытки, антиквариат, игрушки.
    12. Робототехника: создание и программирование роботов, автоматизация процессов.
    13. Творчество с бумагой: оригами, скрапбукинг, квиллинг, создание открыток.
    14. Готовка: эксперименты с новыми рецептами, приготовление домашних консервов.
    15. Ремесла: керамика, гончарство, ковка, стеклодувное искусство.
*/

//print_r($hobbys);
// if(isset($_POST['gender'])){
//     if($_POST['gender'] == 'men'){
//         $gender = "мужчина";
//         echo $gender;
//     } 
//     elseif($_POST['gender'] == 'women'){
//         $gender = "женщина";
//         echo $gender;
//     } 
//     day();
// }
if(isset($_POST['gender']) == 'men'){
    $x = '123';
    echo $x;
}else {
    $x = '456';
    echo $x;
}
//day();

if(isset($_POST['hobby'])){
    
    print_r($_POST['hobby']);
    $z = array_search($_POST['hobby'], $hobbys);
    $hobby_cats = $array_hobby[$z];
    print_r($hobby_cats);
} 


if(isset($_POST['words'])){
    $words = 'Используй ключевые слова: ' . $_POST['words'] . '.';
}
else {
    $words = '';
}


if (isset($_POST['hobby']) && isset($_POST['hobby_cat'])) {
    $prompt = 'Подбери подаророк человеку  ' . $_POST['count'] . ' четверостиший. По жанру: '. $_POST['genre'] . '. ' . $word . $poet;
    //print_r($prompt); day();

    $answer = chatgpt($prompt);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Подарочек</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Выбор подарка</h2>
        <div class="row">
            <div class="col">
                <form class="mt-3" method="POST">

                    <!-- Выбор пола получателю подарка -->
                    <h4>Выберите пол получателя подарка</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="men" checked>
                        <label class="form-check-label" for="radio1">
                            Мужчина
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="women">
                        <label class="form-check-label" for="radio2">
                            Женщина
                        </label>
                    </div>
                    <br>

                    <!-- Выбор возраста -->
                    <div class="mb-3">
                        <h4>Укажите возраст получателя</h4>
                        <select class="form-select" name="age" require>
                            <?php foreach($ages as $age) : ?>
                                <option <?= ($_POST['age'] ?? '') == $age ? 'selected' : '' ?>><?= $age ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- хобби получателя -->
                    <div class="mb-3">
                        <h4>Хобби получателя</h4>
                        <select class="form-select" name="hobby" require>
                            <option selected disabled>Выберите хобби получателя</option>
                            <?php foreach($hobbys as $hobby) : ?>
                                <option <?= ($_POST['hobby'] ?? '') == $hobby ? 'selected' : '' ?>><?=  $hobby ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Подтвердить</button>
                    </div>

                    <!-- категория хобби -->
                    <div class="mb-3">
                        <h4>Подкатегория хобби</h4>
                        <select class="form-select" name="hobby_cat" require>
                            <option selected disabled>Выберите подкатегорию хобби</option>
                            
                            <?php foreach($hobby_cats as $hobby_cat) : ?>
                                <option <?= ($_POST['hobby_cat'] ?? '') == $hobby_cat ? 'selected' : '' ?>><?= $hobby_cat ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="hobb" class="form-label">Возможные ключевые слова</label>
                        <textarea rows="2" class="form-control" id="words" name="words"><?= $_POST['words'] ?? '' ?></textarea>
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