<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Изчисляване на Вашия ЕГН</title>
    </head>
    <body align="center">
        <h1>Изчисляване на Вашия ЕГН!</h1>
        <form method="post" action="">
            <h3>Въведете първите 9 цифри от Вашия ЕГН</h3>
            <label>1 </label><input  type="number" name="num1" value="" /><br />
            <label>2 </label><input type="number" name="num2" value="" /><br />
            <label>3 </label><input type="number" name="num3" value="" /><br />
            <label>4 </label><input type="number" name="num4" value="" /><br />
            <label>5 </label><input type="number" name="num5" value="" /><br />
            <label>6 </label><input type="number" name="num6" value="" /><br />
            <label>7 </label><input type="number" name="num7" value="" /><br />
            <label>8 </label><input type="number" name="num8" value="" /><br />
            <label>9 </label><input type="number" name="num9" value="" /><br /><br />
            <input type="submit" name="submit" value="Изчисли">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            
            echo 'Въведохте <b>';
            echo $egn_1 = $_POST['num1'];
            echo $egn_2 = $_POST['num2'];
            echo $egn_3 = $_POST['num3'];
            echo $egn_4 = $_POST['num4'];
            echo $egn_5 = $_POST['num5'];
            echo $egn_6 = $_POST['num6'];
            echo $egn_7 = $_POST['num7'];
            echo $egn_8 = $_POST['num8'];
            echo $egn_9 = $_POST['num9'];
            echo '</b><br />';

            $egn = ($egn_1 * 2) + ($egn_2 * 4) + ($egn_3 * 8) + ($egn_4 * 5) + ($egn_5 * 10) + ($egn_6 * 9) + ($egn_7 * 7) + ($egn_8 * 3) + ($egn_9 * 6);

            echo '<br/>Контролната цифра е <b>' . $control_number = $egn % 11;

            echo '</b><br />';

            if ($control_number < 10) {
                echo '<br />Следователно Вашият ЕГН е <b>';
                echo $egn_1;
                echo $egn_2;
                echo $egn_3;
                echo $egn_4;
                echo $egn_5;
                echo $egn_6;
                echo $egn_7;
                echo $egn_8;
                echo $egn_9;
                echo round($control_number) . '</b>';
            } else {
                $control_number = 0;
                echo '<br />Следователно Вашият ЕГН е <b>';
                echo $egn_1;
                echo $egn_2;
                echo $egn_3;
                echo $egn_4;
                echo $egn_5;
                echo $egn_6;
                echo $egn_7;
                echo $egn_8;
                echo $egn_9;
                echo $control_number . '</b>';
            }
        };
        ?>
    </body>
</html>