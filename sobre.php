<?php
	include_once 'php_action/db_connect.php';
	require_once 'includes/header.php';

    session_start();
?>

<style>
    /* SOBRE BODY */
    .text{
                margin-top: 300px;
                text-align: center;
                font-size: 50px;
            }

    .dataatual{
        margin-top: 50px;
        text-align: center;
        font-size: 30px;
    }
</style>

<?php
            include_once 'php_action/db_connect.php';

            date_default_timezone_set('America/Sao_paulo');
            $horadia=date("H");

            if($horadia<6) echo '<div class="text">Boa madrugada! Bem-vindo a sua agenda de contatos</div>';
            elseif($horadia<12) echo '<div class="text">Bom dia! Bem-vindo a sua agenda de contatos</div>';
            elseif($horadia<18) echo '<div class="text">Boa tarde! Bem-vindo a sua agenda de contatos</div>';
            elseif($horadia<24) echo '<div class="text">Boa noite! Bem-vindo a sua agenda de contatos</div>';

            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            echo strftime('<div class="dataatual">%A, %d de %B de %Y</div>');
        ?>

<?php
    require_once 'includes/footer.php';
?>