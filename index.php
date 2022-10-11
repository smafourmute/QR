$relative = qrcdr()->relativePath();
require dirname(__FILE__).'/'.$relative.'include/head.php';
?>
<!doctype html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $rtl['dir']; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>QR | SMAN 4 Muara Teweh</title></title>
        <meta name="description" content="ini adalah laman generator atau pembuat kode QR yang ada dibawah naungan SMAN 4 Muara Teweh untuk kami dan publik">
        <meta name="keywords" content="sma4mute,QR generator,smafourmute">
        <link href="<?php echo $relative; ?>bootstrap/css/bootstrap<?php echo $rtl['css']; ?>.min.css" rel="stylesheet">
        <link href="<?php echo $relative; ?>css/font-awesome.min.css" rel="stylesheet">
        <script src="<?php echo $relative; ?>js/jquery-3.5.1.min.js"></script>
        <?php
        $custom_page = false;
        $body_class = '';
        if (isset($_GET['p'])) {
            $load_page = dirname(__FILE__).'/'.$relative.'template/'.$_GET['p'].'.html';
            if (file_exists($load_page)) {
                $custom_page = file_get_contents($load_page);
            }
        }
        qrcdr()->loadQRcdrCSS($version);
        if (!$custom_page) {
            $body_class = 'qrcdr';
            qrcdr()->loadPluginsCss();
        }
        qrcdr()->setMainColor(qrcdr()->getConfig('color_primary'));
        ?>
    </head>
    <body class="<?php echo $body_class; ?>">
        <?php
        if (file_exists(dirname(__FILE__).'/'.$relative.'template/navbar.php')) {
        }
        if (file_exists(dirname(__FILE__).'/'.$relative.'template/header.php')) {
 
        }
        if ($custom_page) {
            echo '<div class="container mt-4">'.$custom_page.'</div>';
        } else {

            include dirname(__FILE__).'/'.$relative.'include/generator.php';
        }
        if (file_exists(dirname(__FILE__).'/'.$relative.'template/footer.php')) {
        }
        qrcdr()->loadQRcdrJS($version);

        if (!$custom_page) {
            qrcdr()->loadPlugins();
        }
        ?>
    </body>
</html>
