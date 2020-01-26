<?php
$array = array(array('это', 'массив', 'в', 'php', ''), array('еще', 'одна', 'ячейка', 'в', 'таблице'));

function printArray($arg){
    echo "<h4>Пример вывода массива в таблицу</h4>";
    echo "<table border='1'>";
    foreach($arg as $value){
        echo "<tr>";
        foreach($value as $item){
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
    
function printForm(){
    $fileName = $_FILES['userFile']['name'];
    echo <<< HEREDOC
    <h4>Переданные формой данные</h4>
    <table border="1">
        <tr>
            <th>textField</th>
            <th>list</th>
            <th>userFile</th>
            <th>QUERY_STRING</th>
            <th>HTTP_USER_AGENT</th>
            <th>REMOTE_ADDR</th>
        </tr>
        <tr>
            <td>$_POST[textField]</td>
            <td>$_POST[list]</td>
            <td>$fileName</td>
            <td>$_SERVER[QUERY_STRING]</td>
            <td>$_SERVER[HTTP_USER_AGENT]</td>
            <td>$_SERVER[REMOTE_ADDR]</td>
        </tr>
    </table>
HEREDOC;
}  
    
printArray($array);

if (isset($_POST['textField']) || isset($_POST['list']) || isset($_FILES['userFile'])) {
    printForm();
}
?>