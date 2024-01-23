<?php

    $to = 'Redhat_1@mail.ru'; 
    $subject ='Сообщение с сайта RedHat '; 
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Заголовок: '.$_POST['title'].'</p>
                    <p>Имя: '.$_POST['name'].'</p>
                    <p>Телефон: '.$_POST['tel'].'</p>
                </body>
            </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: RedHat <kalinovsdky.job@example.com>\r\n"; 
    mail($to, $subject, $message, $headers); 

?>