Hello PHP!
<?php

echo 'Hello PHP';
?>

<?php
    echo 'Это тест';
?>
<?php echo 'Это тест' ?>
<?php echo 'Мы опустили последний закрывающий тег';
?>
<h2> == оператор</h2>
<?php
$action = "show_version";
// == это оператор, который проверяет эквивалентность и возвращает boolean
if ($action == "show_version") {
    echo "The version is 1.23";
}

?>

<h1>Переполнение целых на 32-битных системах</h1>
<?php
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)
$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)
$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);                     // float(50000000000)

?>

<h2>Для большего контроля над округлением используйте функцию round().</h2>
<?php
var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>

<h2>Числа с плавающей точкой ( "float", "double", или "real"):</h2>
<?php
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
var_dump(($a+$b)/$c);
?>

<h2>String</h2>
<?php
echo 'это простая строка';
?>

<h2>Heredoc</h2>

<?php
class foo {
    public $bar = <<<EOT
bar
EOT;
}
?>

<h2>Nowdoc</h2>
<?php
$str = <<<'EOD'
Пример текста,
занимающего несколько строк,
с помощью синтаксиса nowdoc.
EOD;

?>

<p>Если интерпретатор встречает знак доллара ($), он захватывает так много символов, сколько возможно, чтобы сформировать правильное имя переменной. Если вы хотите точно определить конец имени, заключайте имя переменной в фигурные скобки.</p>

<?php

$greeting = 'Hello';
$name = 'Jane Doe';

echo "{$greeting}, {$name}";


$juice = "apple";
echo "He drank some $juice juice.".PHP_EOL; 
echo "He drank some juice made of $juices."; // Не корректно. 's' - верный символ для имени переменной, но переменная имеет имя $juice.
echo "He drank some juice made of ${juice}s." // Корректно. Строго указан конец имени переменной с помощью скобок 
?>
<p>
Любая скалярная переменная, элемент массива или свойство объекта, отображаемое в строку, может быть представлена в строке этим синтаксисом. Просто запишите выражение так же, как и вне строки, а затем заключите его в { и } . Поскольку { не может быть экранирован, этот синтаксис будет распознаваться только когда $ следует непосредственно за {. Используйте {\$, чтобы напечатать {$. 
</p>
<?php

$great = 'здорово';
echo "Это { $great}";// Не работает, выводит: Это { здорово}

echo "Это {$great}"; // Работает, выводит: Это здорово
?>

Символы в строках можно использовать и модифицировать, определив их смещение относительно начала строки, начиная с нуля, в квадратных скобках после строки, например, $str[42]. Если нужно получить или заменить более 1 символа, можно использовать функции substr() и substr_replace().

<h2>Использование отрицательного параметра start</h2>
    
    <?php
    $rest = substr("abcdef", -1);    // возвращает "f"
    $rest = substr("abcdef", -2);    // возвращает "ef"
    $rest = substr("abcdef", -3, 1); // возвращает "d"
    ?>


<h2>Использование отрицательного параметра length</h2>
    
   <?php
    $rest = substr("abcdef", 0, -1);  // возвращает "abcde"
    $rest = substr("abcdef", 2, -1);  // возвращает "cde"
    $rest = substr("abcdef", 4, -4);  // возвращает false
    $rest = substr("abcdef", -3, -1); // возвращает "de"
   ?>

<h2>Базовое использование substr()</h2>
<?php
echo substr('abcdef', 1);     // bcdef
echo substr('abcdef', 1, 3);  // bcd
echo substr('abcdef', 0, 4);  // abcd
echo substr('abcdef', 0, 8);  // abcdef
echo substr('abcdef', -1, 1); // f

// Получить доступ к отдельному символу в строке
// можно также с помощью "квадратных скобок"
$string = 'abcdef';
echo $string[0];                 // a
echo $string[3];                 // d
echo $string[strlen($string)-1]; // f

?>

<h2>Пример использования substr_replace()</h2>
<?php
$var = 'ABCDEFGH:/MNRPQR/';
echo "Оригинал: $var<hr />\n";

/* Обе следующих строки заменяют всю строку $var на 'bob'. */
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

/* Вставляет 'bob' в начало $var. */
echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

/* Обе следующих строки заменяют 'MNRPQR' в $var на 'bob'. */
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Удаляет 'MNRPQR' из $var. */
echo substr_replace($var, '', 10, -1) . "<br />\n";
?>


<p>
Строки могут быть объединены при помощи оператора '.' (точка). 
Обратите внимание, оператор сложения '+' здесь не работает. 
</p>

<?php
$StrValTest = 'Строки могут быть объединены при помощи оператора';
// Выводит 'StrValTest'
echo $StrValTest.' . (точка).';
?>

<p>Значение может быть преобразовано в строку, с помощью приведения (string), либо функции strval(). В выражениях, где необходима строка, преобразование происходит автоматически. Это происходит, когда вы используете функции echo или print, либо когда значение переменной сравнивается со строкой. 
</p>


<h2>Пример использования strval()</h2>

<?php
$StrValTest = 4.1E+6;
// Выводит 'StrValTest'
echo strval($StrValTest);
?>


<h2>print_r — Выводит удобочитаемую информацию о переменной</h2>


<?php
$StrValTest = 4.1E+6;

print_r($StrValTest);

print_r(strval($StrValTest));
?>

<h2>Определение констант</h2>

<?php
define("CONSTANT", "Здравствуй, мир.");
echo CONSTANT; // выводит "Здравствуй, мир."
echo Constant; // выводит "Constant" и предупреждение.

// Работает, начиная с версии PHP 5.3.0
const CONSTANT = 'Здравствуй, мир.';
echo CONSTANT;
?>

<h2>Есть девять волшебных констант</h2>

<?php
// __LINE__     Текущий номер строки в файле.
echo __LINE__;

// __FILE__     Полный путь и имя текущего файла с развернутыми симлинками. Если используется внутри подключаемого файла, то возвращается имя данного файла.
echo __FILE__;

//__DIR__     Директория файла. Если используется внутри подключаемого файла, то возвращается директория этого файла. Это эквивалентно вызову dirname(__FILE__). Возвращаемое имя директории не оканчивается на слэш, за исключением корневой директории.
echo __DIR__;
?>

<h2>Выражение include</h2>

<?php
echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>

