<?php
include_once "lib/Shout.php";
$shout = new Shout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Shout Box</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper clr">
       <header class="headsection">
           <h2>Basic Shoutbox with PHP OOP & Mysqli</h2>
       </header>
        <section class="content clr">
            <div class="box">
                <ul>
                <?php 
                    $getData = $shout->getAllData();
                    if($getData){
                    while($data = $getData->fetch_assoc()){ ?>
                      <li><span><?php echo $data['time']; ?></span> - <b><?php echo $data['name']; ?></b> <?php echo $data['body']; ?></li>  
                <?php }}
                    ?>
                    
                   
                </ul>
            </div>
            <?php 
            if($_SERVER['REQUEST_METHOD']== 'POST'){
                $shoutdata = $shout->insertData($_POST);
            }
            ?>
            <div class="shoutform clr">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" name="name" required placeholder="Pleace enter your name..."></td>
                        </tr>
                         <tr>
                            <td>Body</td>
                            <td>:</td>
                            <td><input type="text" name="body" required placeholder="Pleace enter your text..."></td>
                        </tr>
                         <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="Shout it" ></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
        <footer class="footsection clr">
            <h2>&copy; Copyright Md Shafiqul islam</h2>
        </footer>
    </div>
</body>
</html>