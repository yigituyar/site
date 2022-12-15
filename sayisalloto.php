<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="sayisalloto.php" method="POST">
            <h1>SAyıSAL loto</h1>
            <input type="text" name="bir" id="">  
            <input type="text" name="iki" id="">  
            <input type="text" name="üç" id="">
            <input type="text" name="dört" id="">  
            <input type="text" name="beş" id="">  
            <input type="text" name="altı" id="">   
            <br>
            <input type="submit" value="GÖNDER">
            <input type="reset" value="TEMİZLE">
        </form>
        <div border="2">
        <?php
            $loto[]=0;
            $i=0;
              while($i<6){
                  $rsayi = rand(1,49);
              if(!in_array($rsayi,$loto))
              {
                  $loto[$i]=$rsayi;
                  echo"$loto[$i]    ";
                  $i++;
              }}?>
                    <p> Tahmin Ettiğiniz Sayılar:</p>
                    <p> Bildiğiniz Sayi sayisi:</p>
                </div>
</center>  <?php
   
    
      if($_POST){ 
        $tahmin = array($_POST['bir'],$_POST['iki'],$_POST['üç'],$_POST['dört'],$_POST['beş'],$_POST['altı']);
        $bilinen=0;
        for ($i=0; $i<6 ; $i++) { 
                if(in_array($tahmin[$i],$loto)){
                    $bilinen++;
                
            }
        }
    }
    
    

    ?>
</body>
</html>