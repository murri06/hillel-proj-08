<?php

require __DIR__ . "/app/Circle.php";
require __DIR__ . "/app/Rectangle.php";

if (isset($_POST['submit'])) {
    switch ($_POST['figure']) {
        case 'Square':
            $figure = new Rectangle($_POST['side'], $_POST['side'], $_POST['color']);
            break;
        case 'Circle':
            $figure = new Circle($_POST['radius'], $_POST['color']);
            break;
        case 'Rectangle':
            $figure = new Rectangle($_POST['side1'], $_POST['side2'], $_POST['color']);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Малювання фігур</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<main class="form-container">
    <div class="container">
        <div class="form-container">
            <form method="post">
                <h3>Створення квадрату</h3>

                <label>
                    Введіть розмір сторони(у px):
                    <input required type="number" min="1" name="side">
                </label><br>

                <label>
                    Введіть колір у HEX форматі:
                    <input required type="text" name="color" pattern="#[a-fA-F0-9]{6}"
                           placeholder="#000000" title="invalid hex code">
                </label><br>
                <input type="hidden" name="figure" value="Square">
                <button type="submit" name="submit">Намалювати</button>
            </form>
        </div>

        <div>
            <form method="post">
                <h3>Створення кола</h3>

                <label>
                    Введіть радіус кола(у px):
                    <input required type="number" min="1" name="radius">
                </label><br>

                <label>
                    Введіть колір у HEX форматі:
                    <input required type="text" name="color" pattern="#[a-fA-F0-9]{6}"
                           placeholder="#000000" title="invalid hex code">
                </label><br>
                <input type="hidden" name="figure" value="Circle">
                <button type="submit" name="submit">Намалювати</button>
            </form>
        </div>

        <div>
            <form method="post">
                <h3>Створення прямокутника</h3>

                <label>
                    Введіть розмір першої сторони(у px):
                    <input required type="number" min="1" name="side1">
                </label><br>

                <label>
                    Введіть розмір другої сторони(у px):
                    <input required type="number" min="1" name="side2">
                </label><br>

                <label>
                    Введіть колір у HEX форматі:
                    <input required type="text" name="color" pattern="#[a-fA-F0-9]{6}"
                           placeholder="#000000" title="invalid hex code">
                </label><br>
                <input type="hidden" name="figure" value="Rectangle">
                <button type="submit" name="submit">Намалювати</button>
            </form>
        </div>

    </div>
    <div class="form-container" style="margin-left: 10vw;">
        <?php if (isset($figure)): ?>
            <ul>
                <?= $figure->createFigure() ?>
                <li><h3>Периметр: <?= $figure->parameter() ?> px</h3></li>
                <li><h3>Площа: <?= $figure->area() ?> px^2</h3></li>
            </ul>

        <?php endif; ?>
    </div>
</main>
</body>
</html>