
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Задача 5 - php loops - Кодираща и декодираща програма</title>
</head>
<body>

    <?php

        $cript = array(
            'a'     =>      '<span style="font-weight: bold; color: red;">@</span>', 
            'e'     =>      '<span style="font-weight: bold; color: green;">3</span>',
            'A'     =>      '<span style="font-weight: bold; color: red;">@</span>',
            'А'     =>      '<span style="font-weight: bold; color: red;">@</span>', // това е за кирилцата
            'E'     =>      '<span style="font-weight: bold; color: green;">3</span>',
            'Е'     =>      '<span style="font-weight: bold; color: green;">3</span>', // това е за кирилицата
            'а'     =>      '<span style="font-weight: bold; color: red;">@</span>', // това е за кирилицата
            'е'     =>      '<span style="font-weight: bold; color: green;">3</span>' // това е за кирилицата
            );

        $decript  = array(
        '@' => 'a',
        '3' => 'e'); // тук няма нужда да се декодира специално на кирилица

        if ($_POST) {

                if ($_POST['text'] != '') {
                    
                    echo '<p>Това е оригиналния текст</p>';

                    echo $text = $_POST['text'];

                    echo '<hr />';

                    $text = strtr($text, $cript);

                    echo 'Това е криптирания текст<br />' . $text;

                    echo '<hr /> Това е декприптирания текст <br />';

                    $text = strtr($text, $decript);

                    echo $text;

                }                    

            }    
            
    ?>

    <form method="post" action="">
        
        <p>Въведете текст:</p>
        <textarea name="text"></textarea><br />
        <input type="submit" name="submit" value="Кодирай" />

    </form>

</body>
</html>