<?php

switch($_GET['act']){
	default:
        
          $sa = $conn->query("SELECT * from admin");
        ?>
<div class="card">
                            <div class="card-body">
                              <h2 class="text-center">Admin Profil</h2>
                                
                                <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
        <th style="text-align:center">Nama</th>
        <th style="text-align:center">Username</th>
        <th style="text-align:center">Aksi</th>
       
      

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    $no=1;
        foreach ($sa as $value) 
			{
            ?>
                                          
                                             <tr>
                                                <td><?= $no ?></td>
                                                 <td style="text-align:left"><?= $value["nama"]; ?></td>
                                                <td style="text-align:left"><?= $value["username"]; ?></td>
                                              <td style="width:12%;text-align:center;"><a href="?app=admin&act=editadmin&id=<?= $value["id"]; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                                               
                                            </tr>
                                            <?php
            $no++;
    
        }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<?php

	break;
	case "editadmin":
              $data=$_GET[id];
        $sa = $conn->query("SELECT * from admin where id='$data'");
        $getdata=$sa->fetch_array();
?>

<div class="card card-outline-success">
                            <div class="card-header">
                            <h4 class="m-b-0 text-white">Edit data admin</h4>
                            </div>
                            <div class="card-body">
                                <form action="aksi.php?app=admin&act=ubah" method="post" class="form-horizontal">
                                    <div class="form-body">
                                        <input type="hidden" name="id" value="<?= $getdata['id']; ?>">
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Nama</label>
                                                    <div class="col-md-10">
                                                        <input type="text" value="<?= $getdata['nama']; ?>" class="form-control" name="nama" placeholder="nama">
                                                        </div>
                                                </div><div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Username</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="username" readonly value="<?= $getdata['username']; ?>" class="form-control" placeholder="nama">
                                                        </div>
                                                </div> <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Password</label>
                                                    <div class="col-md-10">
                                                        <input type="password" name="password" class="form-control" placeholder="">
                                                        </div>
                                                </div>
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-info">simpan</button>
                                                        <button type="button" class="btn btn-danger">batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


<?php
break;
}
?>