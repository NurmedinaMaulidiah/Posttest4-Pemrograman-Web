<!DOCTYPE html>
<html lang="en">
<head>
    <link  href="'https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script&family=Dangrek&family=Roboto:ital,wght@1,300&display=swap'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review cafe</title>
    <link rel="stylesheet"  href="style1.css">
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
    
    <div class="input">
        <p><b>Review Cafe</b></p>
        <form action="show.php" method="POST">
            <label id="form" > Bulan Kunjungan :  </label>
            <input id="form" type="date" menu="menu"  name = "bulan" required autocomplete='off' ><br>

            <label id="form" > Range Harga :  </label>
            <input id="form" type="text" menu="menu"  name = "harga" required autocomplete='off' ><br>

            <label id="form" > Nama cafe :  </label>
            <input id="form" type="text" menu="menu"  name = "nama" required autocomplete='off' ><br>

            <label id="form" > Alamat :  </label>
            <input id="form" type="text" menu="menu"  name = "alamat" required autocomplete='off' ><br>
            

            
            <button id = "submit" type="submitt" name="login" id="email" class="btn btn-primary deep-purple btn-block " required>Submit</button>
        </form>
    </div>
    
    <div class="boxinput2">
        <h1>CONTACT US</h1>
        <table>
        <tr>
            <td>Email</td>
            <td>nurmedinamaulidiah@gmail.com</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>0822220604444</td>
        </tr>
        <tr>
            <td>Office</td>
            <td>
                Jl. Green Andara Residence Blok B3 No. 19, <br>
                Pangkalan Jati Baru, Cinere, Depok, Jawa Barat Indonesia<br>
            </td>
        </tr>



        </table>
    <!-- <p id= "judul"><b>Reach Us</b></p><br>
    <p id= "awal"> Email : nurmedinamaulidiah@gmail.com</p><br>
    <p id= "awal"> Phone : 0822220604444</p><br>
    <p id= "awal"> office : Jl. Green Andara Residence Blok B3 No. 19,<br> Pangkalan Jati Baru, Cinere, Depok, Jawa Barat Indonesia</p><br> -->


    </div>
    
<!-- <footer>
    <b>Copyright &copy; 2022</b>
   <b>Designed by dinamauldh</b>
</footer> -->

<script src="peosttest3.js">
</script>
</body>
</html>
