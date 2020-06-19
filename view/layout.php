<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16" />
    <title>Happy Hoops - 
        <?php if($_GET['page']=='index'){
      echo 'Home';
      }else if($_GET['page']=='events'){
      echo 'Events';
      }else if($_GET['page']=='checkout'){
      echo 'Checkout';
      }else if($_GET['page']=='about'){
        echo 'About';
        }else if($_GET['page']=='detail'){
            echo 'Event';
            } else echo 'Home';?></title>
</head>

<body>
    
    <?php echo $content;?>
    
    <script src="js/script.js"></script>
</body>

</html>