<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/logo.png" class="mylogo">
                    <?php echo $navigation; ?>
                </div>
                <img src="http://www.coffeecup.com/images/icons/applications/shopping-cart_128x128.png" align="right" class="cart">
            </div>
        </div>

        <?php echo $page_layout; ?>

        <?php echo $footer; ?>
    </div>
</body>
</html>    