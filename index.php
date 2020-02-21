<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /// global örneği 1. yol
    /// $x = 5;
    /// $y = 3;
    /// $z = 0;
    /// function  myFunction()
    /// {
    ///     global $x,$y,$z;
    ///     $z = $x+$y;
    /// }
    /// myFunction();
    /// echo $z;

    /// global örneği 2. yol
    $x = 5;
    $y = 2;
    $z = 0;
    function myFunction()
    {
        $GLOBALS['z'] = $GLOBALS['y'] + $GLOBALS['x'];
    }
    myFunction();
    echo "$z</p>";

    ///static örneği. Eğer bir değişkene static atanırsa o değişkenin
    ///bir sonraki satırlardaki değeri ilk hali gibi kalmaz son hali neyse odur
    ///bir fonksiyonda static olmayan değişkenler fonksiyon başladığındaki değeri neyse odur
    ///fonksiyon içinde static değişken tanımlarsanız fonksiyon çıkışındaki değeri tekrar fonksiyona girildiğinde de uygulanır
    ///aşağıdaki örneğe bakalım
    function staticExample()
    {
        static $x = 0;
        echo $x;
        $x++;
    }
    staticExample();
    staticExample();
    staticExample();

    ///eche ve print. çok fark yok
    ///echo değer döndürmez print döndürür
    ///echo hızlı print yavaş
    ///echo birden fazla parametre alır print sadece 1 parametre alır
    echo "</br>you "
    , "can "
    , "define "
    , "multiple "
    , "parameters "
    , "by "
    , "using "
    , "comma(,) ";
    echo "</br>";

    ///var_dump tanımlanan değişkenin hangi veri tipinde olduğunu söyler
    ///float c# taki double olarak kullanılır
    $string     = "asdkfdk";
    $float      = 11.2;
    $boolean    = true;
    $array      = array(1,3,24);
    var_dump($string);
    echo "</br>";
    var_dump($float);
    echo "</br>";
    var_dump($boolean);
    echo "</br>";
    var_dump($array);
    echo "</br></br>";

    
   class Animal {
        function Animal($legCount,$name,$sex,$breed){
            $this->legCount=$legCount;
            $this->name=$name;
            $this->sex=$sex;
            $this->breed=$breed;
        }
    }

    $silent = new Animal(4,"kuçu kuçu","erkek","köpek","HAV");
    echo $silent->legCount.$silent->name.$silent->sex.$silent->breed;

    ///null karakter tanımlaması örneği
    echo "</br></br>";

    $x = "helloworld";
    $x = null;
    var_dump($x);

    echo "</br></br>";
    ///strlen adlı method stringin uzunluğunu verir.LENGTH
    echo strlen("hello world");///11

    echo "</br></br>";
    ///str_word_count adlı method dizedeki kelime sayısını sayar
    echo str_word_count("hello word");

    ///strrev adlı method stringi ters çevirir.REVERSE
    echo "</br></br>";
    echo strrev("hello world");

    ///strpos dlı method dize içinde arama yapmanızı sağlar "aranan","aratılan"
    echo "</br></br>";
    echo strpos("hello world","el");///1

    ///str_replace adlı method dize içinde seçilen birşeyin yerine 
    ///başka bir şey yerleştirmenizi sağlar
    ///str_replace("seçilen","yerleştirilecek","string")
    ///büyük küçük harf duyarlıdır World yazdığınızda baş hatfi büyük olanlar aranır
    ///Eğer aranan şeyden dize içinde birden fazla varsa, yerdeğiştirme hepsine uygulanacaktır.
    echo "</br></br>";
    echo str_replace("world" ,"Oqkoin","Hello world!");///Hello oqkoin!
    ?>



</body>
</html>