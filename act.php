<?php
// Перевіряємо, чи були передані змінні a і b через GET
if (isset($_GET['a']) && isset($_GET['b'])) {
    // Отримуємо значення змінних a і b з адресного рядка і змінюємо їх тип на цілі числа
    $a = (int)$_GET['a'];
    $b = (int)$_GET['b'];

    // Виконуємо математичні операції
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;

    // Перевіряємо, чи друге число не є нулем, щоб уникнути ділення на нуль
    if ($b != 0) {
        $quotient = $a / $b;
    } else {
        $quotient = "Ділення на нуль";
    }

    // Виводимо результати
    echo "<h2>Результати математичних операцій:</h2>";
    echo "<p>Сума: $a + $b = $sum</p>";
    echo "<p>Добуток: $a * $b = $product</p>";
    echo "<p>Різниця: $a - $b = $difference</p>";
    echo "<p>Частка: $a / $b = $quotient</p>";
} else {
    // Якщо змінні a і b не були передані через GET, виводимо повідомлення про помилку
    echo "<h2>Помилка: Введіть значення для змінних a і b в адресному рядку.</h2>";
}
