<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Image</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container">
      <h1>Simple Crud Image </h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Edit Leader</h2>
      <div class="row">
        <div class="col-md-6">
        <form action="<?=base_url()?>index.php/home/updatedata" method="post" enctype="multipart/form-data">
          <label>name</label>
          <input type="text" name="name" class="form-control" value="<?=$data->name?>">
          <label>pengarang</label>
          <input name="pengarang"  class="form-control" value="<?=$data->pengarang?>">
          <label>penerbit</label>
          <input name="penerbit"  class="form-control" value="<?=$data->penerbit?>">
          <label>foto</label><br>
          <input type="file" name="fotopost" class="form-control"><br><br>

          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->foto?>">
          <!-- ID -->
          <input type="hidden" name="id" value="<?=$data->id?>">

          <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
        </div>
      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
