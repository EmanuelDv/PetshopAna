<?php
    $kilos=$_GET['kilos'];
    $resultado=$kilos/2.205;
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ana.css">
    <title>ResultadoPetshop</title>
</head>
<body>
<h1>!!LB A KG!!</h1>
 
 <form>

<div>
     <label >KILOS</label>
     <input type="text" name="kilos" id="kilos" class="datos"
     value="<?php echo $kilos?>" disabled="disabled">
</div>
<div>
     <label >LIBRAS</label>
     <input type="text" name="resultado" id="resultado" class="datos"
     value="<?php echo $resultado?>" disabled="disabled">
</div>

 </form>
 <div>
 <a href="../ANA/ana.html">Nuevo Calculo</a>
 </div>
</body>
</html>
    