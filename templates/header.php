<!DOCTYPE html>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../public/css/bootstrap.css" rel="stylesheet"/>

               

        <link href="../public/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../public/css/font-awesome.css">                
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="../public/css/cart.css">

        <?php 
          if(isset($css))
            echo '<link rel="stylesheet" href="'.$css.'"'. "/>";          
        ?>



        <script src="../public/js/jquery-1.10.2.min.js"></script>        
        <script src="../public/js/bootstrap.min.js"></script>

        <?php if (isset($title)): ?>
            <title>Farmland-<?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Farmland</title>
        <?php endif ?>
        <?php 
          if(isset($script))
          {
              echo '<script type="text/javascript" src="'.$script.'"'. "</script>"; 
          }
        ?>
        <script src="../public/js/scripts.js"></script>
       

        <style type="text/css">
            #profile_pic
            {
                padding:5px;
                border-radius: 10px;
                cursor: pointer;
            }
        </style>
    </head>

    <body> 

       <div class="row">
        <div class="col-md-2">Welcome <?php echo $_SESSION["name"]?>!</div>
         <div class="col-md-8">
           
         </div>
         <div class="col-md-2" >
           <a href="../public/logout.php" style="float: right;">Logout</a> 
         </div>
       </div>         
       
    
        <div class="row">

          