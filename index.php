<?php

$num1 = 0;
$num2 = 0;
$numbersEntered = false;

function showMenu() {
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "6. Выход\n";
    echo "Выберите пункт: ";
}

function inputNumbers() {
    global $num1, $num2, $numbersEntered;
    
    echo "Первое число: ";
    $num1 = (float)trim(fgets(STDIN));
    
    echo "Второе число: ";
    $num2 = (float)trim(fgets(STDIN));
    
    $numbersEntered = true;
}

function addNumbers() {
    global $num1, $num2, $numbersEntered;
    
    if (!$numbersEntered) {
        echo "Сначала введите числа\n";
        return;
    }
    
    echo $num1 + $num2 . "\n";
}

function subtractNumbers() {
    global $num1, $num2, $numbersEntered;
    
    if (!$numbersEntered) {
        echo "Сначала введите числа\n";
        return;
    }
    
    echo $num1 - $num2 . "\n";
}

function divideNumbers() {
    global $num1, $num2, $numbersEntered;
    
    if (!$numbersEntered) {
        echo "Сначала введите числа\n";
        return;
    }
    
    if ($num2 == 0) {
        echo "Деление на ноль\n";
        return;
    }
    
    echo $num1 / $num2 . "\n";
}

function powerNumbers() {
    global $num1, $num2, $numbersEntered;
    
    if (!$numbersEntered) {
        echo "Сначала введите числа\n";
        return;
    }
    
    echo pow($num1, $num2) . "\n";
}

while (true) {
    showMenu();
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case '1':
            inputNumbers();
            break;
        case '2':
            addNumbers();
            break;
        case '3':
            subtractNumbers();
            break;
        case '4':
            divideNumbers();
            break;
        case '5':
            powerNumbers();
            break;
        case '6':
            exit;
        default:
            echo "Неверный выбор\n";
    }
}

?>