<link rel="shortcut icon" href="img/arrows.png" type="image/x-icon">

<link rel="stylesheet" href="css/style.css">

<script src="js/input-file.js"></script>

<!-- MODAL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

<div class="result">
    <?php
    session_start();
        if (isset($_SESSION['upload'])) :
            echo $_SESSION['upload'];
        endif;
        unset($_SESSION['upload']);

        if (isset($_SESSION['err_upload'])) :
            echo $_SESSION['err_upload'];
        endif;
        unset($_SESSION['err_upload']);
    ?>
</div>

<form class="form" action="model/upload.php" method="POST" enctype="multipart/form-data">
    
    <label class="file-input" for="file">
        <div class="drop-zone">
            <p class="text-file"><b>Selecione um arquivo</b> ou solte ele aqui!</p>
            <input type="file" name="img">
        </div>
    </label>
    <input href="#ex1" rel="modal:open" class="btn-enviar" type="submit" name="up-arq" id="file" value="ENVIAR">
</form>

