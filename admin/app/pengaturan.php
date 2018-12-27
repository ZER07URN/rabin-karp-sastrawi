<?php
        $data=1;
        $sa = $conn->query("SELECT * from pengaturan where id='$data'");
        $getdata=$sa->fetch_array();
      
       
?>



<div class="card card-outline-success">
                            <div class="card-header">
                            <h4 class="m-b-0 text-white">Pengaturan</h4>
                            </div>
                            <div class="card-body">
                                   <form action="aksi.php?app=pengaturan&act=ubah" method="post" class="form-horizontal">
                                    <div class="form-body">
                                     <input type="hidden" name="id" value="<?= $getdata['id']; ?>">  
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Nilai K-Gram</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="kgram" class="form-control" value="<?= $getdata['kgram']; ?>" placeholder="">
                                                        </div>
                                                </div>     
                                        <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Nilai Prima Rolling Hash</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="prima" class="form-control" value="<?= $getdata['prima']; ?>" placeholder="">
                                                        
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>