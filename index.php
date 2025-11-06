<?php

class Calculator {
    private $num1;
    private $num2;
    
    public function __construct() {
        $this->num1 = null;
        $this->num2 = null;
    }
    
    public function showMenu() {
        echo "1. Ввести два числа\n";
        echo "2. Выполнить сложение\n";
        echo "3. Выполнить вычитание\n";
        echo "4. Выполнить деление\n";
        echo "5. Возвести число в степень\n";
        echo "6. Выход\n";
        echo "Выберите пункт меню: ";
    }
    
    public function run() {
        while (true) {
            $this->showMenu();
            $choice = trim(fgets(STDIN));
            
            switch ($choice) {
                case '1':
                    $this->inputNumbers();
                    break;
                case '2':
                $this->addNumbers();
                    break;
                case '3':
                    $this->subtractNumbers();
                    break;
                case '4':
                    $this->divideNumbers();
                    break;
                case '5':

                    break;
                case '6':
                    echo "До свидания!\n";
                    exit;
                default:
                    echo "Неверный выбор. Попробуйте снова.\n";
            }
        }
    }
    
    private function inputNumbers() {
        echo "Введите первое число: ";
        $this->num1 = (float)trim(fgets(STDIN));
        
        echo "Введите второе число: ";
        $this->num2 = (float)trim(fgets(STDIN));
        
        echo "Числа сохранены: {$this->num1} и {$this->num2}\n";
    }
}

private function addNumbers() {
    if ($this->validateNumbers()) {
        $result = $this->num1 + $this->num2;
        echo "Результат сложения: {$this->num1} + {$this->num2} = {$result}\n";
    }
}

private function validateNumbers() {
    if ($this->num1 === null || $this->num2 === null) {
        echo "Ошибка: сначала введите числа (пункт 1)\n";
        return false;
    }
    return true;
}
private function subtractNumbers() {
    if ($this->validateNumbers()) {
        $result = $this->num1 - $this->num2;
        echo "Результат вычитания: {$this->num1} - {$this->num2} = {$result}\n";
    }
}
private function divideNumbers() {
    if ($this->validateNumbers()) {
        if ($this->num2 == 0) {
            echo "Ошибка: деление на ноль невозможно!\n";
        } else {
            $result = $this->num1 / $this->num2;
            echo "Результат деления: {$this->num1} / {$this->num2} = {$result}\n";
        }
    }
}

$calculator = new Calculator();
$calculator->run();
?>