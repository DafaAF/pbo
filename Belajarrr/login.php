<?php 
 session_start();     
  ?> 
  <title>Peduli diri</title>
   <h1>Halaman Login</h1> 
    <head>   
            
 <link rel="stylesheet" type="text/css" href="style.css"> </head> 
 <div class="kotak_login"> 
 <p class="tulisan_login">Silahkan login</p>   
 <form action="loginn.php" method="post" name="form_input">    
<label>Nik</label>
 <input type="text" name="nik" class="form_login" placeholder="Masukan Nik"> 
<label>Nama</label>  
 <input type="text" name="nama" class="form_login" placeholder="Masukan Nama">   
 <div class="tombol">
     <button class="tombol_login">LOGIN</button> 
     <a href="register.php" class="btn btn-info mb-3">BUAT AKUN</a>  
 <br/>  
 <br/> 
</form> 
</div>                   