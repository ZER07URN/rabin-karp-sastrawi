<?php

     $asli = $conn->query("SELECT COUNT(id) as jml FROM abstrak_asli");
    $getdata=$asli->fetch_array();
    $jml=$getdata['jml']; 

 $uji = $conn->query("SELECT COUNT(id) as jml FROM hasil_uji");
    $getdata2=$uji->fetch_array();
    $jml2=$getdata2['jml']; 
?>
<div class="row">
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-book f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?= $jml ?></h2>
                                    <p class="m-b-0">Data Abstrak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-book f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?= $jml2 ?></h2>
                                    <p class="m-b-0">Data Uji Plagiarisme</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>