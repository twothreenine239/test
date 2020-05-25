<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hello 헬로1<br/>";
        echo ("hello 헬로2<br/>");
        ECHO "hello 헬로3<br/>";
        echo "hello ","헬로4","<br/>";  // echo를 사용하여 두 개 이상의 인수를 전달할 땐 ()를 사용할 수 없다.

        $var_1 = "test";
        echo gettype($var_1);

        $var_2 = 10;

        echo "$var_2";
        echo "{$var_2}";

        echo "변수 \$var_2에 저장된 값은 {$var_2}입니다.<br/>";

        function varFunc(){
            $var_4 = 10;
            echo "함수 내 변수 var_4의 값은 {$var_4}입니다.<br/>";
        }

        varFunc();
        echo "함수 밖 변수 var_4의 값은 {$var_4}입니다.<br/>";

        $var_5 = 10;
        function varFunc2(){
            echo "함수 내 변수 var_5의 값은 {$var_5}입니다.<br/>";

            global $var_5;
            echo "함수 내 변수 var_5의 값은 {$var_5}입니다.<br/>";
        }

        varFunc2();
        echo "함수 밖 변수 var_5의 값은 {$var_5}입니다.<br/>";

        $var_6 = 10;
        function varFunc3(){
            echo "함수 내 변수 var_6의 값은 {$var_6}입니다.<br/>";
            echo "함수 내 변수 var_6의 값은 {$GLOBALS['var_6']}입니다.<br/>";
        }

        varFunc3();
        echo "함수 밖 변수 var_6의 값은 {$var_6}입니다.<br/>";

        function counter(){
            static $count = 0;
            echo "함수 내 변수 count의 값은 {$count}입니다.<br/>";
            $count++;
        }
        counter();
        counter();
        counter();

        define("PHP", "PHP 수업에 어서오세요.<br/>");
        echo PHP;

        define("PHP", "PHP 수업에 어서오세요.<br/>", true);
        echo php;
        echo Php;

        function defFunc(){
            echo PHP2;
            define("PHP2", "PHP2 수업에 어서오세요.<br/>");
            echo PHP2;
        }
        defFunc();
        echo PHP2;

        function magicCons(){
            echo __LINE__."<br/>";
            echo __FUNCTION__."<br/>";
            echo __METHOD__."<br/>";
        }

        magicCons();

        var_dump((bool) "false");

        echo "정수 타입의 크기는 ".PHP_INT_SIZE."바이트<br/>";
        echo "정수 타입의 최대 크기는 ".PHP_INT_MAX."바이트<br/>";
        $int_1 = 100;
        $int_2 = 2147483647;
        $int_3 = 2147483648;

        echo $int_3."<br/>";

        $float_1 = 3.14;
        $float_2 = 1.23e-4;
        $float_3 = 1.8E307;
        $float_4 = 1.8E308;

        echo $float_4."<br/>";

        class Lecture {
            function Lecture(){
                $this->lec_01 = "PHP";
                $this->lec_02 = "MySQL";
            }
        }

        $var = new Lecture;
        echo $var->lec_01;
        echo "<br/>";
        echo $var->lec_02;
        echo "<br/>";

        $PHP = "HTML";
        $HTML = "CSS";
        $CSS = "Ajax";

        echo $PHP."<br/>";
        echo $$PHP."<br/>";
        echo $$$PHP."<br/>";

        var_dump(0 < true);
        echo "<br/>";
        var_dump("123abc" == 123);
        echo "<br/>";
        var_dump("123abc" === 123);
        echo "<br/>";

        $arr_1 = array("a" => 10);
        $arr_2 = array("a" => 5);
        $arr_3 = array("a" => 5, "c" => 7);

        var_dump($arr_1 >= $arr_2);
        echo "<br/>";
        var_dump($arr_1 >= $arr_3);
        echo "<br/>";
        var_dump("문자열" < $arr_1);
        echo "<br/>";

        $num_1 = 15;
        $num_2 = 8;

        $str_1 = "php 수업";
        $str_2 = "에 오신 것을 환영합니다.";

        $arr_1 = array("1st" => "PHP", "2nd" => "MySQL");
        $arr_2 = array("1st" => "HTML", "2nd" => "CSS", "3rd" => "Java");

        $result_1 = $arr_1 + $arr_2;
        var_dump($result_1);
        echo "<br/>";
        $result_2 = $arr_2 + $arr_1;
        var_dump($result_2);
        echo "<br/>";
    ?>
</body>
</html>