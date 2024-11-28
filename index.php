<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
#Кавычки
echo '<b>Hello</b>,world! <br>'; //внутри скрипта можно прописывать тэги
print_r("function print<br><br>") ; //двойные или одинарные кавычки
//echo '\'''; //вывод какой-то информации
#Одностроные комментарии:
//
# UNIX-system
//===========
#Многострочный комментарий:
/*
 Comment1
 Comment2
 */
//===========

?>
<?php
#Переменные
$num = 5.45; //создаем переменную : при установке чиcла идет зн-е float плавающее число
//$num = 45; //обратился к переменной и перназначил
$number = 45; //: при установке чиcла идет зн-е int целое число
//$num1 = 5;
$str = "П еременная 2"; //: при установке слова идет зн-е string что означает строка, которую мы заключаем в двойные кавычки
echo "$num" . "$number<br><br>"; //оператор точка лбъединяет значения
echo 'Переменная:<br>' ."$num" . "$number<br><br>";
//$bool = true //спользуюся в циклах while/do while или в условных операторах if /if else
echo $str . ':' . $number . '<br>Var:' . $num .'<br><br>'; //можно вставлять строковые значения
#Константы
//Константы и переменные - это одно и тоже, только с разницой константам - нельзя перезначать значения
//define (myvozrast, 39);
//echo myvozrast;
#Математические действия
$a = 10;
$b = 20;
$result = $a + $b; //сложение
$x = 100;
$y = 5;
$y = $y + 10; //прибавление числа
echo 'Прибавление числа к переменной:' . '<br>' . $a . '<br>';
$a +=10; //сокрщенная форма прибавления числа и других операций подставляя значения
echo 'Прибавление числа к переменной: сокр форма с другими значениями' . '<br>' . $a . '<br>';
$x++; //еще более сокращенная форма
echo 'Прибавление числа к переменной: более сокр форма' . '<br>' . $x . '<br>';
echo 'Математически операции:' . '<br>' . $result . '<br>';
echo $a - $b . '<br>'; //вычитание
echo $a * $b . '<br>'; //умножение
echo $a / $b . '<br>'; //деление
echo $a % $b . '<br><br>'; //получение остатка при делении

#Есть еще встроенные константы в рнр
echo 'Обращение к встроенной константе ПИ:' .'<br>' . M_PI . '<br>';
echo 'Обращение к встроенной функции abs:' .'<br>' . abs(-22) . '<br>';
echo "округление к большему round, а функция floor округляет к меньшему";
#Строковые операции
$vasya = "Cool";
echo '<br><br>Вывод строковой перменной'  . '<br>' . $vasya; //' text' соединение строк читается как сплошной текст
echo "<br><br>Вывод строковой перменной вариант2 <br> $vasya"; //" text +$" соединение строк читается как текст+переменная
#На двойные кавычки уходит 2 раза больше памяти
echo '<br><br>Вывод поля ввода html тэга input:' . "<input type='text'> " . '<br>';

$length = strlen($vasya); //подсчет количества символов
echo '<br><br>Подсчет кол-ва символов/длинна строки strlen:' . '<br>' . $length . '<br>';
$delete = trim($str); //удаляет символы спереди и сзади
echo '<br><br>Удаление символов trim:' . '<br>' . $delete . '<br>';
$lowercase = strtolower($vasya); //функция для кириллицы mb_strtolower
echo '<br><br>Привод текста к строковым буквам strlower:' . '<br>' . $lowercase . '<br>';
$lowercase2 = strtoupper($vasya); //функция для кириллицы mb_strtolower
echo '<br><br>Привод текст к верхнему регистру strtoupper:' . '<br>' . $lowercase2 . '<br>';
//md5_file("qwerty"); //за хэшировать строку файла, а можно строку md5
echo '<br>' . md5("qwerty") .  '<br>';
#Условные операторы (конструкции)
$zuk = 5;
if($zuk == 5) { //переменная равна 5
    echo '<br>' . '$zuk = 5';
}

$zuk2 = 6;
if($zuk2 != 5) { //переменная не равна 5
    echo '<br>' . 'Да';
}

$str = "Мир";
if ($str == "Мир") echo '<br>' . 'Yes';

//переменная >= больше or равно
//переменная <= меньше

/* Оператор ELSE необязательный оператор

служит дополнительным операторром к if
В else код будет срабатывать каждый раз как в if будет отработан
в зависимости от условия */

$zuk2 = 6;
if($zuk2 >= 10) { //переменная не равна 5
    echo '<br>' . 'Yeees';
} else {
    echo '<br>' . 'Nooo';
}
//ФИГУРНЫЕ СКОБКИ { } НУЖНО ПРОСТАВЛЯТЬ, ЕСЛИ БОЛЬШЕ 3 СТРОЧЕК КОДА!!
// Оператор ELSE IF создается для дополнительной проверке
$str = "Мир";
$zuk2 = 6;
if($zuk2 >= 10)
    echo '<br>' . 'Yeees';
else if ($str == "Мир")
    echo '<br>' . 'YES';
 else
    echo '<br>' . 'Nooo';

$str2 = "Hello";
$weather = false;
if ($str2 != "Hello" || $weather == false) // || - оператор ИЛИ
    echo '<br><br>' . 'First'; // если 1 из значений выполняется (верное) выводим First

/*$str3 = "Hello";
$weather2 = false;
if ($str3 != "Hello" && !$weather2) // && - оператор И означает, оба условия должны быть true / ! в переменной = значению выше
    echo 'First2' //не будет выведено т.к. оба условия различны
*/
#Оператор SWITCH CASE относиться к условным операторам
//Позволяет проверить переменную на множество значений
$arb = 6;
switch ($arb) {
    case 5: //: вместо {} начало условия / прописываются значения
        echo "Var: 5";
        break; //конец условия
    case 7:
        echo "Var: 7";
        break;
    case 8:
        echo '<br>' . "Var: 8";
        break;
    /*case 6:
        echo '<br>' . "Var: 8";
        break; */
    default:
        echo '<br>' . "Default work!";
        break; //в этом случае не обязательный
        //default = else можно прописывать, а можно нет т.к. необязательный
        //default удобено пользоваться, когда не одно из условий не сработало
}
#Array (Массивы) Одномерные/Многомерные
/*Массив данных некая переменная, которая хранит 1 значение, а вот
в массиве значений может быть множество значений.
*/
$arr = array(4, 5, 7, 0 , -23);
$arr [1] = 45; //обратились к массиву по индексу с заменой значения
echo '<br><br>' . $arr [4]; //индекс к которому хотим обратиться в массиве
              //нумерация начинает с нуля
              //значит будет выведено 5
echo '<br><br>' . $arr [1];
#Одномерные массивы
$numnum = ["44", 7.5, "Lion" , -23]; //вместо array сразу можно писать
echo '<br><br>' . $numnum [2];
#Ассоциативный массив вместо индекса - УКАЗЫВАЕМ КЛЮЧИ KEY/ => нАЗВАНИЯ Value
//Упрощает обращение к массиву
$list = ["age" => 39, "nam" => "Alex", "hobby" => "coding"]; //каждому эл-ту прописываем ключ
$list ["nam"] = "John";
echo '<br><br>' . $list["nam"]; //обращаеся к ключу
#Многомерные массивы
//Каждый элемент представляет из себя дополнительный массив
//Представляется в виде матрицы
$matrix = [
        [4, 6, 8],
        [3, 2],
        [1, "weight"]
          ];
echo '<br><br>' . $matrix[0][2];
/*Во всех массивах мы выводили, только одно значение массива, чтобы
выводить боле 1 значения, или пользоваться 2-ым массивом, нужно
пребегать к ЦИКЛАМ + ФУНКЦИЯ */
#Операторы циклов: FOR/WHILE/DO WHILE/FOREACH
//Циклы специальный конструкции при помощи которых мы можем выполнять код несколько раз
#FOR
print_r ('<h1>For цикл</h1>');
for ($i = 0; $i <5; $i++) { //прописываем переменную, условия
    echo '<br>' . $i . '<br>';
}

#WHILE
print_r ('<h1>While цикл</h1>');
$ii = 1;
while ($ii <= 7) { //в этом цикле только прописываем условие
echo $ii . '<br>';
$ii++; //прописываем как будем работать с переменной
}

#DO WHILE
print_r ('<h1>Do While цикл</h1>');
$il = 10;
do {
    echo $il . '<br>';
} while ($il < 5); //указываем условие
#Операторы в циклах (Управление циклами break & continue)
print_r ('<h1>Операторы в циклах</h1>');
for ($el = 100; $el > 10; $el /= 2) {
    if($el < 15)
    break;
    if($el % 2 == 0)
    continue;
    echo $el . '<br>';
}
#Вывод массива через цикл FOR
print_r ('<h1>Вывод массива через цикл FOR</h1>');
$li = [5, 7, 3, 8, "summer", 4.5];
for ($h = 0; $h < count($li); $h++)
    echo "Element $h: $li[$h]<br>";
#FOREACH
//Можно использовать как для 1-ых/2-ых, а также ассоциативных массивов
print_r ('<h1>Foreach цикл</h1>');
$list = ["age" => 39, "nam" => "Alex", "hobby" => "coding"];
foreach ($list as $item => $value) {
    echo "Key: $item. Value: $value. <br><br>";
    }
$arr = [4, 5, 7, 0 , -23];
foreach ($arr as $i => $value) {
    echo "Index: $i. Value: $value. <br>";
}
#Функции.Область видимости
/*Функции небольшие подпрограммы к которым можем ссылаться и
существенно сократить код */
print_r ('<h1>Функции</h1>');
function infos() { //без параметра
    echo "Info printed<br>"; //тело функции
}
infos(); //обращаемся, только после этого выводится echo
function print_info($word = "Hello") { //c параметром
     echo "$word <br>"; //тело функции
}
print_info ();

function info($word) { //c параметром
    echo "$word <br>"; //тело функции
}
function math($x, $y) {
      return $x + $y; //возвращает нам значения и никуда не выводит
}
$res_1 = math(1, 2); //выводим значения
$res_2 = math(5, 5.5);

info ($res_1);
info ($res_2);

function summary($arma) {
    $summa = 0;
foreach ($arma as $value) {
    $summa += $value;
    }
return $summa;
}
$arra = [4, 5, 7];
echo summary($arra) . "<br>"; //вывод суммы массива
echo summary([5,2,3]); //тут выполнили другое действие из кода функции
print_r ('<h1>Область видимости GLOBAL/LOCALE/STATIC</h1>');
function visible()
{
    $habba = 0; //область видимости LOCALE
}
$habba =10; //записали вне функции = GLOBAL
visible();
echo $habba . "<br>";
function click()
{
    static $count;
    $count++;
    echo $count . "<br>";
}
click();
click();
click();
print_r ('<h1>Подключение файлов php в HTML</h1>');
/*
    require  позволяет подключить ф-л, если будет ошибка/нет файла:
выдается ошибка и последующий код не выводится

    include   позволяет подключить ф-л, если будет ошибка/нет файла:
выдается ошибка, но код выдается
Директивы выполняются один, раз вне зависимости от ссылок
    require_once
    include_once

Подключать заголовок к каждой странице
    echo $title;
    <?=title?>
    */
print_r ('<h1>Обработка форм. Передача данных GET & POST</h1>');
//POST - данные передаются скрытно
//GET - данные передаюся через URL-строку, что не безопасно
//SERVER - схож с функцией $_GET
print_r ('<h1>Работа с датой и временем</h1>');

echo date('m-d H:i:s', strtotime ("now")) . '<br>'; //выводится месяц/число затем время ч:м:с
echo date('m-d H:i:s', strtotime ("+1 Day +1 Hour")) . '<br>'; //вывожу +1 день strtotime и многое другое
echo date('m-d H:i:s', strtotime ("last Saturday")); //вывод прошлой субботы
print_r ('<h1>Встроенные функции PHP</h1>');


#Функции по работе с массивами
$lis = [5,7,3,9,10]; //создали массив
unset($lis [2]); //удалить индекс через обращение к массиву
$lis = array_values($lis); //обновляет адресацию, если выше был удален индекс
sort ($lis); //сортировать массив min for max REVERS mx -min R_SORT
//shuffle($lis); //сортировка в разброс
//in_array(0, $lis);//найти элемент внутри массива
//echo in_array(1, $lis);//элемент внутри массива выводиться так,Array ( [0] =>
//значение массива не найдено и равно FALSE
/*if  (in_array(0, $lis) == "") {
    echo "Not Found";
}
else {
    echo "Found";
}
*/
$arr = array_slice($lis, 2 , count ($lis)); //позволяет обрезать определенный массив
print_r ($arr) ;
echo "<br>";
var_dump($arr);// одно и тоже, что и print_r но для разработчика "use objects"
echo "<br>";
print_r($lis); //вывели значения key - value "use array"\
echo "<br>";
//Создадим еще 2 массива и объединим в один
$arround_1 = [10.8,677,45,3,5];
$arround_2 = [1,77,4,33,5];
$arround_3 = array_merge($arround_1, $arround_2);
echo "<br>";
print_r($arround_3);
#Функции по работе с переменными
echo "<br><br>";
$anh = 10;
$anh_2 = "Pi";
$anh_3 = 5.5;
echo gettype($anh). "<br>";//вывести тип переменной
echo gettype($anh_2). "<br>";
echo is_numeric($anh_3) . "<br>"; //является функция числом 1-true empty - false
//is_bool
//is_array
//is_double  - явл-ся число с точкой
//is_integer - явл-ся переменная цклочисленная
#Функции по работе со строками
$env = "Example";
echo strpos($env, "am")."<br><br>"; //
$bla_bla = "John, bob, Alex";
$arr_bla = explode(",", $bla_bla);
print_r($arr_bla);
print_r ('<h1>Массив $_SERVER</h1>');
//$_SERVER находятся все данные сервера
echo '<pre>'; //вывод информции о настройках в читабельном виде
print_r($_SERVER);
echo '</pre>';
//echo $_SERVER ['HTTPS']; //узнать о протоколе
//echo $_SERVER ['HTTP_HOST']; //узнать информацию о домене/порт
//echo $_SERVER ['REQUEST_URI']; //узнать URL адрес
//echo $_SERVER ['HTTP_USER_AGENT']; //узнать ОС
/*if ($_GET['source'] != "") {
    $link = explode("?source=", $_SERVER['REQUEST_URI']);
    $redirect = "http://" .$_SERVER['HTTP_HOST'].$link[0];
    header('Location: '.$redirect);
    exit();
}
*/
print_r ('<h1>Отправка почты без формы с локального сервера на глобальный</h1>');
/*$message = "Test function on PHP";
$to = "dna16573@doolk.com"; //адресат
$from = "jimasi8321@fna6.com";//от кого будем отправлять
$subject = "Тест"; //тема сообщения
$subject = "=?utf-8?B?".base64_encode($subject). "?="; //указываем кодировку
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n"; //указываем заголовки от кого письмо
mail($to, $subject, $message, $headers) //функция передачи почты
//с локального сервера на глобальный отправить почту не возможно
*/
print_r ('<h1>Куки и сессии</h1>');
//Cookies - хранятся данные по устанавливаемым параметрам
//Session  - данные хранятся в течении сессии
#Cookie
//$user_name = "Alex";
//setcookie("Wulf", $user_name, time() + 160);
//print_r($_COOKIE);
//setcookie("Wulf", $user_name, time() - 60); //удаляем куки
//echo $_COOKIE ['Wulf'];
#Session
//Session должны стартовать до выполнения и вывода на экран

echo session_status();
?>
</body>
</html>

