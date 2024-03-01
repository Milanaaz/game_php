<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игра "Волк и Зайчик"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            if (!isset($_POST['step'])) {
                echo "<h1>Игра \"Волк и Зайчик\"</h1>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='step' value='1'>";
                echo "<button type='submit'>Начать игру</button>";
                echo "</form>";
            } elseif ($_POST['step'] == 1) {
                echo "<h2>Кем ты хочешь быть в игре?</h2>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='step' value='2'>";
                echo "<button type='submit' name='character' value='wolf'>Волк</button>";
                echo "<button type='submit' name='character' value='rabbit'>Зайчик</button>";
                echo "</form>";
            } elseif ($_POST['step'] == 2) {
                $character = $_POST['character'];
                if ($character == 'wolf') {
                    echo "<img src='https://i.pinimg.com/564x/a6/f6/66/a6f6664c0c0df98b97953a7db32dabf9.jpg' alt='Волк'>";
                    echo "<h3>Ты поймал зайчика, что будешь делать?</h3>";
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='step' value='3'>";
                    echo "<button type='submit' name='action' value='eat'>Съесть</button>";
                    echo "<button type='submit' name='action' value='release'>Отпустить</button>";
                    echo "</form>";
                } elseif ($character == 'rabbit') {
                    echo "<img src='https://i.pinimg.com/564x/be/50/20/be502072276c3ce46638c0da6a93edca.jpg' alt='Зайчик'>";
                    echo "<h3>Тебя поймал волк, что делать?</h3>";
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='step' value='3'>";
                    echo "<button type='submit' name='action' value='cry'>Заплакать</button>";
                    echo "<button type='submit' name='action' value='flower'>Подарить цветок</button>";
                    echo "</form>";
                }
            } elseif ($_POST['step'] == 3) {
                $action = $_POST['action'];
                if ($action == 'eat') {
                    echo "<p>Ты плохой волк! Ты съел зайчика.</p>";
                } elseif ($action == 'release') {
                    echo "<p>Ты хороший волк! Ты отпустил зайчика.</p>";
                } elseif ($action == 'cry') {
                    echo "<p>Тебя съели, потому что ты заплакал.</p>";
                } elseif ($action == 'flower') {
                    echo "<p>Ты выжил, потому что ты милый и подарил цветок.</p>";
                }
                echo "<p><a href=''>Играть ещё раз</a></p>";
            }
        ?>
    </div>
</body>
</html>
