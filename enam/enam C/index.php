<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <style type="text/css">
  img{
    width: 100px;
  }
    table{
      margin-top: 30px;
    }
    th, td{
    width: 34%;
    }
    .fa{
      display: inline-block;
    }
    .navbar{
      height: 70px;
    }
    .navbar a{
      margin-left: 20px;
      font-size: 20px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-sm navbar-light shadow p-2 mb-4 bg-white rounded">
  <a class="navbar-brand" href="#" style="color: black; font-weight: bold; "><img src="img/logo.png" alt="">ARKADEMY BOOTCAMP</a>
</nav>
<br>
<div class="container">
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add" style="float: right;">
  ADD
</button>
<br>
	<table class="table table-responsive table-hover">
		<tr>
			<th>Name</th>
			<th>Work</th>
			<th>Salery</th>
			<th>Aksi</th>
		</tr>
    <?php
    $query=mysqli_query($kon,"SELECT nama.id, nama.name, work.name as work, kategori.salary FROM ((nama INNER JOIN work ON work.id=nama.id_work) INNER JOIN kategori ON kategori.id=nama.id_salary)") or die(mysqli_error($kon));
    while ($data=mysqli_fetch_array($query)) { ?>
    <tr>
      <td><?= $data['name'];?></td>
      <td><?= $data['work'];?></td>
      <td><?= $data['salary'];?></td>
      <td><a href="" data-toggle="modal" data-target="#del<?php echo $data['id']; ?>"><i class="fa fa-trash-o" style="font-size: 30px; color: tomato; float: left;"></i></a><a href="" data-toggle="modal" data-target="#edit<?php echo $data['id']; ?>"><i class="fa fa-pencil-square-o" style="font-size: 30px; color: #47b1ff; float: left;"></i></a></td>
    </tr>
      <?php include 'button.php'; ?>
    <?php }
    ?>
	</table>

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="aksi.php">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name ..." required>
          </div>
          <div class="form-group">
            <select class="form-control" name="work" required>
              <option value="0">Work ...</option>
              <?php
              $querywork=mysqli_query($kon, "SELECT * FROM work");
              while ($datawork = mysqli_fetch_array($querywork)) { ?>
              <option value="<?= $datawork['id'];?>"><?= $datawork['name'];?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="salary" required>
              <option value="0">Salary ...</option>
              <?php
              $querykate=mysqli_query($kon, "SELECT * FROM kategori");
              while ($datakate = mysqli_fetch_array($querykate)) { ?>
              <option value="<?= $datakate['id'];?>"><?= $datakate['salary'];?></option>
              <?php } ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="add">ADD</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- pop up -->
<?php
if (isset($_GET['del'])) { ?>
<div class="modal fade" id="pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body"> 
              <center><i class="fa fa-check-circle" style="font-size: 100px; color: lightgreen;"></i></center>
              <center><p><b>Data <?= $_GET['name'];?> telah berhasil dihapus</b></p></center>
      </div>
    </div>
  </div>
</div>
</div>
  
<?php } ?>
<script type="text/javascript">
  $('#pop').modal('show');
</script>
</body>
</html>