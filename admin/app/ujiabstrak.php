<?php

switch($_GET['act']){
	default:
        
          $sa = $conn->query("SELECT DISTINCT hasil_uji.judul, hasil_uji.hasil, abstrak_asli.judul as judulbr, hasil_uji.id_asli, abstrak_asli.id FROM hasil_uji JOIN abstrak_asli ON hasil_uji.id_asli = abstrak_asli.id  ORDER BY hasil_uji.hasil DESC LIMIT 5");
        ?>
<div class="card">
                            <div class="card-body">
                              <h2 class="text-center">Hasil Uji Cek Plagiarisme</h2>
                                
                                <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
        <th style="text-align:center">judul skripsi Uji</th>
        <th style="text-align:center">Judul skripsi Asli</th>
        <th style="text-align:center">Tingkat Plagiarisme</th>
      

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
                                                <td style="text-align:left"><?= $value[judulbr] ?></td>
                                                <td style="text-align:left"><?= $value[judul] ?></td>
                                              <td style="text-align:center"><?= round($value[hasil],2) ?> %</td>
                                               
                                            </tr
                                           
                                            
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
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                      
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Judul skripsi</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="Judul">
                                                        </div>
                                                </div><div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Abstraksi skripsi</label>
                                                    <div class="col-md-10">
                                                        <textarea class="textarea_editor form-control" rows="15" placeholder="abstraksi skripsi" style="height:300px"></textarea>
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
        $sa = $conn->query("SELECT * from abstrak where id='$data'");
        $getdata=$sa->fetch_array();
      
       
?>

<div class="card card-outline-success">
                            <div class="card-header">
                            <h4 class="m-b-0 text-white">Edit data abstraksi skripsi</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                      
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Judul skripsi</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="<?= $getdata['judul']; ?>" placeholder="Judul">
                                                        </div>
                                                </div><div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Abstraksi skripsi</label>
                                                    <div class="col-md-10">
                                                        <textarea class="textarea_editor form-control" rows="15" placeholder="abstraksi skripsi" style="height:300px"><?= $getdata['abstrak']; ?></textarea>
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
                                                        <button type="submit" class="btn btn-info">Submit</button>
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