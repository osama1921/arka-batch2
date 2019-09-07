<!-- edit -->
<div class="modal fade" id="edit<?= $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
           <?php 
           $datanama=mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM nama WHERE id='".$data['id']."'"));
           ?>
        <form method="POST" action="aksi.php?id=<?= $data['id'];?>">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name ..." required value="<?= $datanama['name'] ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="work" required>
              <?php
              $querywork=mysqli_query($kon, "SELECT * FROM work");
              while ($datawork = mysqli_fetch_array($querywork)) { ?>
              <option value="<?= $datawork['id'];?>" <?php if ($datawork['id']==$datanama['id_work']): echo "selected" ?>
              	
              <?php endif ?>><?= $datawork['name'];?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="salary" required>
              <?php
              $querykate=mysqli_query($kon, "SELECT * FROM kategori");
              while ($datakate = mysqli_fetch_array($querykate)) { ?>
              <option value="<?= $datakate['id'];?>" <?php if ($datakate['id']==$datanama['id_salary']): echo "selected" ?>
              	
              <?php endif ?>><?= $datakate['salary'];?></option>
              <?php } ?>
            </select>
          </div>
      </div>
       <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="Save">Edit</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- DELETE -->
<div class="modal fade" id="del<?= $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
        	<?php
			$datanama=mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM nama WHERE id='".$data['id']."'"));		
				?>
				<div class="container-fluid">
					<h5><center>Are You Sure To Delete ? <strong><?php echo $datanama['name']; ?></strong></center></h5> 
                </div> 
      </div>
       <div class="modal-footer">
       	<button class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href="aksi.php?id=<?= $data['id'];?>&del=true&name=<?= $data['name'];?>"><button class="btn btn-warning" name="Hapus">Delete</button></a>
      </div>
    </div>
  </div>
</div>
</div>
