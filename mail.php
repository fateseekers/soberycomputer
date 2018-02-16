<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $email = $_POST['theme'];

        $name = trim(name);
        $email = trim(email);
        $email = trim(theme);

        if (mail("fateseekers@mail.ru", "Заявка с сайта", "Имя:".$_POST['name']." E-mail: ".$_POST['email']." Тема сообщения:".$email = $_POST['theme'])){ 
        echo "Сообщение успешно отправлено"; 
        } else { 
        echo "При отправке сообщения возникли ошибки";
        }
    ?>
    <?php
                    $time= date("h");
                    if ($time>=12){
                        $time="evening"
                    } 
                    else{
                        $time="morning"
                    }
                ?>
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="http://soberipc.std-278.ist.mospolytech.ru");}
    window.setTimeout("changeurl();", 3000);
</script>
</body>
</html>

