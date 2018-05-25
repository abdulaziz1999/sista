<html>
<head>
 <title>Membuat Login Menggunakan CodeIgniter | www.kioscoding.com</title>
</head>
<body>
 <h1 align="center">Membuat Login Menggunakan CodeIgniter <br/> www.kioscoding.com</h1><br /><br />
 <?php echo form_open('login/cek_login'); ?>
  <table align="center">
   <tr>
    <td>Username</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" value="Login"></td>
   </tr>
  </table>
  <?php if (isset($pesan)) {
    echo $pesan;
  } ?>
<?php echo form_close(); ?>
</body>
</html>