<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя первая web страница</title>
    <style>
   a {
    color: #008000; 
    text-decoration: none; 
   }
   a:visited {
    color: #800080; 
   } 
   a:hover {
    color: #800000; 
    text-decoration: underline; 
   }
  </style>
    <link rel="stylesheet" href="style.css" />
</head>
<body bgcolor="#008080">
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>
          <hr>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/1.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p>
                        <ol> 
                            <li>В ходе прохождения учебной  программы  на  платформе SkillFactory  я научился создавать переменные </li>
                            <li>Изучил простые операции с ними </li>
                       </ol>
                    </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
