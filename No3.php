<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Code Warna</title>
</head>
<body>
   <br>
   <form action="" method="get">
     Warna: <input type="text" name="warna" />
     <br />
     <br />
     <input type="submit" value="Proses Data" >
   </form>
   <br>
    
<?php
if (isset($_GET['warna']))
{
   $warna=$_GET['warna'];
}
else
{
   die("Silahkan masukkan Code Warna");
}
  
if(empty($warna))
{
   die("Maaf, kolom tidak boleh kosong.");
}
else
{
   if (is_numeric($warna))
   {
      die("Format Hex Code salah!");
   }
   else
   {
      echo "Format Hex Code benar!";
   }
}
?>
</body>
</html>