<?php
include "../../model/pdo.php";
include "../../model/binhluan/binhluan.php";
session_start();
$iduser = $_SESSION['hoten']['id'];
$idpro = $_REQUEST['idpro'];
$dsbl = load_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../style.css">
    <title>Nội dung</title>
</head>

<body>


    <div class="row ">
        <div class=" boxtitle mt-top">Bình Luận</div>
        <div class="row boxcontent ">
            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                echo '<tr>
            <td>' . $noidung . '</td>';
                echo '<td>' . $iduser . '</td>';
                echo '<td>' . $ngaybinhluan . '</td></tr>
            ';
            }

            ?>
            <dev class=" boxcontent ">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="gửi bình luận">

                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                </form>
            </div>

        </div>

    </div>

    <?php
    if (isset($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $iduser = $_SESSION['hoten']['id'];
        $idpro = $_REQUEST['idpro'];
        $ngaybinhluan = date("h:i:sa Y-m-d ");
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER["HTTP_REFERER"]);
    }
    ?>
    
</body>

</html>