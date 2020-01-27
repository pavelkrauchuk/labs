<?php
echo <<< HEREDOC
<h3>Log in | <a href="signin.php">Sign in</a></h3>
<form action="sql.php" method="post">
    <input name="login" type="text" required="required"> Логин<br> 
    <input name="password" type="password" required="required"> Пароль<br><br>
    <button type="submit">Войти</button>
</form>
HEREDOC;
