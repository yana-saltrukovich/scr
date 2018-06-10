<?php
$string = "Lorem ipsum dolor sit amet, consectetur 
adipiscing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis 
nostrud exercitation ullamco laboris nisi ut aliquip 
ex ea commodo consequat. Duis 
aute irure dolor in reprehenderit in voluptate velit 
esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia 
deserunt mollit anim id est laborum.";
$arrayString = explode(".", $string);
function task1($arr, $second = FALSE)
{
    if ($second == FALSE) {
        for ($i = 0; $i < count($arr); $i++) {
            echo "<p>" . $arr[$i] . "</p>";
        }
    } else {
        $stringString = implode(".", $arr);
        return $stringString;
    }
}

task1($arrayString);
echo "<br>";
echo task1($arrayString, TRUE);
echo "";
echo "<br/>";


// Задание №2
function task2()
{
    for ($i = 0; $i < 2; $i++) {
        if ($i == 0) {
            $action = func_get_arg($i);
        } else {
            $someAct = func_num_args(1);
            $calc = '';
            if ($action == '+') {
                echo "Операция сложения:<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct + func_get_arg($j);
                    if ($j == 1) {
                        $calc = func_get_arg(1);
                    } else {
                        $calc = $calc . '+' . func_get_arg($j);
                    }
                }
                echo $calc . "=" . $someAct . "<br>";
            } elseif
            ($action == '-') {
                echo "Операция вычитания:<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct - func_get_arg($j);
                    if ($j == 1) {
                        $calc = func_get_arg(1);
                    } else {
                        $calc = $calc . '-' . func_get_arg($j);
                    }
                }
                echo $calc . "=" . $someAct . "<br>";
            } elseif ($action == '*') {
                echo "Операция умножения:<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct * func_get_arg($j);
                    if ($j == 1) {
                        $calc = func_get_arg(1);
                    } else {
                        $calc = $calc . '*' . func_get_arg($j);
                    }
                }
                echo $calc . "=" . $someAct . "<br>";
            } elseif ($action == '/') {
                echo "Оперрация деления:<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct / func_get_arg($j);
                    if ($j == 1) {
                        $calc = func_get_arg(1);
                    } else {
                        $calc = $calc . '/' . func_get_arg($j);
                    }
                }
                echo $calc . "=" . $someAct . "<br>";
            } else {
                echo "Операция неизвестна<br>";
            }
        }
    }
}

echo "<br>";
echo task2("+", 1, 2, 3, 5.2);
echo task2("-", 1, 2, 3, 5.2);
echo task2("*", 1, 2, 3, 5.2);
echo task2("/", 1, 2, 3, 5.2);


//Задание №3

function intcheck($a)
{
    if (!intval($a) or $a < 1 or !preg_match('/^\+?\d+$/', $a)) {
        return 'NOT ok';
    } else {
        return 'ok';
    }
}

function task3($x, $y)
{
    if (intcheck($x) == 'ok' and intcheck($y) == 'ok') {
        echo "<table border='1'>";
        echo "Таблица " . $x . " на " . $y;
        echo "<tr>";
        for ($i = 1; $i < $x; $i++) {
            for ($j = 1; $j < $y; $j++) {
                //$m=$i*$j;
                $proizv = $i * $j . " ";
                echo "<td>" . $proizv . "</td>";
            }
            $j = 1;
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Один из параметров введён неверно " . $x . "  " . $y;
        echo "<br> Введите корректный параметр ";
    }
}

echo "<br>";
echo task3(6, 4);
echo "<br>";
echo task3(5, 6);
echo "<br>";
echo task3(3, 3);
echo "<br>";
echo task3(2, 4);
echo "<br>";
echo task3(14, 5);
echo "<br>";
echo task3(8, 6);
echo "<br>";
echo task3(29.4, 6);
echo "<br>";


// Задание №4
echo " В реальном времени ";
$time = date(DATE_RSS);
echo $time . "<br/>";
echo " В формате UNIX ";
echo strtotime("now"), "\n" . "<br/>";

//Задание №5
$text = 'Карл у Клары украл Кораллы';
$regexp = '/К/u';
$result = preg_replace($regexp, ' ', $text);
echo $result;
echo "<br>";
$othertext = 'Две бутылки лимонада';
$regexp = '/Две/u';
$result = preg_replace($regexp, 'Три', $othertext);
echo $result . "<br/>";

//Задание №6
function task4($a = 'test.txt', $b = 'Hello, Again!')
{
    $fp = fopen($a, "w");
    fwrite($fp, $b);
    fclose($fp);
    $fp = fopen($a, "r");
    if ($fp) {
        while (!feof($fp)) {
            $mytext = fgets($fp, 999);
            return $mytext;
        }
    } else echo "Ошибка при открытии файла";
    fclose($fp);
}

echo task4("test.txt", "Hello, Again");
echo "<br>";