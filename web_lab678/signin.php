<?php
echo <<< HEREDOC
<h3>Sign in</h3>
<form action="sql.php" method="post">
    <input name="name" type="text" required="required" maxlength="20"> Имя<br> 
    <input name="surname" type="text" required="required" maxlength="20"> Фамилия<br> 
    <input name="login" type="text" required="required" maxlength="20"> Логин<br> 
    <input name="password" type="text" required="required" maxlength="20"> Пароль<br> 
    <input name="phone" type="text" required="required" maxlength="20"> Номер телефона<br> 
    <input name="mail" type="text" required="required" maxlength="30"> E-mail<br><br> 
    <button type="submit">Зарегистрироваться</button>
</form>
HEREDOC;
