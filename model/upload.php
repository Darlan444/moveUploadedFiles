<?php

session_start();

if(isset($_POST['up-arq'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
       $destino = "../img/upload/";
       $temporario = $_FILES['img']['tmp_name'];
       $new_name = uniqid().".$extensao";  
       
        if(move_uploaded_file($temporario, $destino.$new_name)):
            header('Location: ../index.php');
            $_SESSION['upload'] = 'Arquivo enviado com Sucesso!';
        else:
            header('Location: ../index.php');
            $_SESSION['err_upload'] = 'Falha ao enviar arquivo!';
        endif;
    else:
        header('Location: ../index.php');
        $_SESSION['err_upload'] = 'Falha ao enviar arquivo!';    
    endif;    
endif;    

?>