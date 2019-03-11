 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">

 <head>
     <title>Buy Your Way to a Better Education!</title>
     <link href="buyagrade.css" type="text/css" rel="stylesheet" />
 </head>

 <body>
     <?php 
     $name = $_POST["name"];
     $section = $_POST["section"];
     $card = $_POST["card"];
     $cardType = (isset($_POST['cardType']) ? $_POST['cardType'] : '');
			if(empty($name) || empty($section) || empty($card) || empty($cardType)){ ?>
     <h1>Sorry</h1>
     <p>You didn`t fill out the form completely <a href="buyagrade.html">Try again?</a></p>
     <?php } else {?>
     <h1>Thanks, sucker!</h1>
     <p>
         Your information has been recorded.
     </p>
     <dl>
         <dt>Name</dt>
         <dd>
             <?= $_POST["name"]?>
         </dd>

         <dt>Section</dt>
         <dd>
             <?= $_POST["section"]?>
         </dd>

         <dt>Credit Card</dt>
         <dd>
             <?= $_POST["card"] ?> &#40<?= $_POST["cardType"] ?>&#41
         </dd>
     </dl>
     <?php
    $file = 'sucker.txt';
    $person = $_POST["name"] . ";" . $_POST["section"] . ";" . $_POST["card"] . ";" . $_POST["cardType"] . "\n";
    file_put_contents($file, $person, FILE_APPEND);
    $homepage = file_get_contents($file);
    ?>
     <pre>
<?= $homepage ?>
     </pre>
     <?php }?>
 </body>

 </html>