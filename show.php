<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="style1" rel="stylesheet">
   <title>Show Review</title>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <link  href="'https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script&family=Dangrek&family=Roboto:ital,wght@1,300&display=swap'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review cafe</title>
    <link rel="stylesheet"  href="style-show.css">
    <script src="peosttest3.js"></script>
    <script src="jquery.js"></script>
</head>
<!-- <script>
    confirm('anda yakin ingin mengakses website ini?!!');
</script> -->
<body style="background-image: url(https://i.pinimg.com/564x/dd/6e/7c/dd6e7cab19114331503d64d32b3f716b.jpg);">
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=""><b>Cafe Finder</b></a></div>
            <div class="menu">
                <ul>
                <li class="button1"><a href="input-user.php"><b>Review</b></a></li>
                    <li class="button1"><a href="tampilan-awal.php"><b>Home</b></a></li>
                    <li class="button1"><a href="halaman baru.html"><b>About Us</b></a></li>
                    <li><img src="moon.png" id = "icon"></li>
                </ul>
            </div>

        </div>
    </nav>
   


    <div class="boxinput2" align = center>
        
        <h1 align = center>  Review Cafe</h1>
        <!-- <div class="homee"><img src="https://t3.ftcdn.net/jpg/04/08/32/56/240_F_408325699_jiRD7UnmMbzffteCMKgl3hDgAFf4I1pr.jpg" alt=""></div> -->
      <table>
          <tr>
        <td><b> Tanggal Kunjungan </b></td>  
        <td>:<?php echo $_POST['bulan']; ?></td> 
        </tr>

        <tr>
        <td><b> Range Harga </b></td> 
        <td>:<?php echo $_POST['harga']; ?></td>  
        </tr>

        <tr>
        <td><b>Nama cafe  </b></td> 
        <td>:<?php echo $_POST['nama']; ?></td>  
        </tr>

        <tr>
        <td><b> Alamat Cafe </b></td> 
        <td>:<?php echo $_POST['alamat']; ?></td>
        </tr> 
        
      </table>
</div>
    <footer>
    <b>Copyright &copy; 2022</b>
   <b>Designed by dinamauldh</b>
</footer>
    <body>
    
<!-- <footer>
    <b>Copyright &copy; 2022</b>
   <b>Designed by dinamauldh</b>
</footer> -->

<script src="peosttest3.js">
</script>
</body>


</html>