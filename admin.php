<?php

    session_start();
    $pass = '12345';
    $err = '';

?>

<div class="admin-form" style="display: flex; flex-direction: column;">
    <form action="inter.php" method="post">
        <label for="login">Логин: </label> <input name="login" id="login" type="text" require>
        <label for="pass">Пароль: </label><input name="pass" id="pass" type="password" require>
        <input type="submit" name="sub" value="Администрирование">

    </form>
</div>
    

<?php

    if (isset($_POST['button']) && $_POST['button'] == 'Администрирование') {
        if ($_POST['pass'] == 12345 && $_POST['login'] == 'admin') {
            header("Location: inter.php");
        } else {
            echo 'Вы ввели непрвильный пароль!';
        }



    }

?>