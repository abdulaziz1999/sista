<html>
<head>
 <title>Membuat login dengan codeigniter | www.kioscoding.com</title>
</head>
<body>
 <h1>Login berhasil !</h1>
 <h2>Hallo, <?php echo $this->session->userdata("nama"); ?>
  Selamat Datang</h2>
  sebagai <?php echo $this->session->userdata('level'); ?>


  <?php echo var_dump($this->session->userdata()); ?>
 <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>