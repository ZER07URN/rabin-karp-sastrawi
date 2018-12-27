<?php

switch($_GET['act']){
	default:
        
          $sa = $conn->query("SELECT * from abstrak_asli");
        ?>
<div class="card">
                            <div class="card-body">
                              <h2 class="text-center">abstrak</h2>
                                <a class="btn button btn-success"  href="?app=abstrak&act=addabstrak">tambah</a>
                                <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
        <th style="text-align:center">judul skripsi</th>
        <th style="text-align:center">Abstrak</th>
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
                                                <td style="text-align:left"><?= $value["judul"]; ?></td>
                                               <td style="text-align:left"><?= substr($value["abstrak"], 0,200) . '...'; ?></td>
                                                <td style="width:12%;text-align:center;"><a href="?app=abstrak&act=editabstrak&id=<?= $value["id"]; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a href="aksi.php?app=abstrak&act=hapus&id=<?= $value["id"]; ?>" class="btn btn-danger sweet-confirm"><i class="fa fa-trash"></i></a></td>
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
	case "addabstrak":
?>

<div class="card card-outline-success">
                            <div class="card-header">
                            <h4 class="m-b-0 text-white">Tambah data abstraksi skripsi</h4>
                            </div>
                            <div class="card-body">
                                <form action="aksi.php?app=abstrak&act=tambah" method="post" class="form-horizontal">
                                    <div class="form-body">
                                      
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Judul skripsi</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="judul" class="form-control" placeholder="Judul">
                                                        </div>
                                                </div><div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Abstraksi skripsi</label>
                                                    <div class="col-md-10">
                                                        <textarea name="abstrak" class="textarea_editor form-control" rows="15" placeholder="abstraksi skripsi" style="height:300px"></textarea>
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
case "editabstrak" :
        $data=$_GET[id];
        $sa = $conn->query("SELECT * from abstrak_asli where id='$data'");
        $getdata=$sa->fetch_array();
      
       
?>

<div class="card card-outline-success">
                            <div class="card-header">
                            <h4 class="m-b-0 text-white">Edit data abstraksi skripsi</h4>
                            </div>
                            <div class="card-body">
                               <form action="aksi.php?app=abstrak&act=ubah" method="post" class="form-horizontal">
                                   <input type="hidden" name="id" value="<?= $getdata['id']; ?>">
                                    <div class="form-body">
                                      
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Judul skripsi</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="judul" class="form-control" value="<?= $getdata['judul']; ?>" placeholder="Judul">
                                                        </div>
                                                </div><div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Abstraksi skripsi</label>
                                                    <div class="col-md-10">
                                                        <textarea name="abstrak" class="textarea_editor form-control" rows="15" placeholder="abstraksi skripsi" style="height:300px"><?= $getdata['abstrak']; ?></textarea>
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
                                                        <button type="submit" class="btn btn-info">Update</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
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