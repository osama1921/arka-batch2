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
    <tr>
      <td>Rebecca</td>
      <td>Frontend Dev</td>
      <td>10.000.000</td>
      <td><a href="" data-toggle="modal" data-target="#del1"><i class="fa fa-trash-o" style="font-size: 30px; color: tomato; float: left;"></i></a><a href="" data-toggle="modal" data-target="#edit1"><i class="fa fa-pencil-square-o" style="font-size: 30px; color: #47b1ff; float: left;"></i></a></td>
    </tr>
        <tr>
      <td>Vita</td>
      <td>Back End Dev</td>
      <td>12.000.000</td>
      <td><a href="" data-toggle="modal" data-target="#del2"><i class="fa fa-trash-o" style="font-size: 30px; color: tomato; float: left;"></i></a><a href="" data-toggle="modal" data-target="#edit2"><i class="fa fa-pencil-square-o" style="font-size: 30px; color: #47b1ff; float: left;"></i></a></td>
    </tr>
        <tr>
      <td>Selvi</td>
      <td>Frontend Dev</td>
      <td>10.000.000</td>
      <td><a href="" data-toggle="modal" data-target="#del3"><i class="fa fa-trash-o" style="font-size: 30px; color: tomato; float: left;"></i></a><a href="" data-toggle="modal" data-target="#edit3"><i class="fa fa-pencil-square-o" style="font-size: 30px; color: #47b1ff; float: left;"></i></a></td>
    </tr>
  </table>
      <?php include 'button.php'; ?>

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
        <form method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name ..." required>
          </div>
          <div class="form-group">
            <select class="form-control" name="work" required>
              <option value="0">Work ...</option>
              <option value="1">Front end Dev</option>
              <option value="2">Back end Dev</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="salary" required>
              <option value="0">Salary ...</option>
              <option value="1">10.000.000</option>
              <option value="2">12.000.000</option>
             
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
if (isset($_GET['del'])) { 
$name=$_GET['name'];
  ?>
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
              <center><p><b>Data <?= $name ?> telah berhasil dihapus</b></p></center>
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