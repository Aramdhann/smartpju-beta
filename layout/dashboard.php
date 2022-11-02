<?php
session_start();
include '../core/connection.php' // memanggil file connection
?>
<div class="text dashboard-title">Dashboard</div>
<div class="text row container">
    <div class="col-lg-3 col-md-6 col-sm-12 ">
        <div class="card card-lamp border-0 rounded-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Status Lampu</h5>
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-regular fa-lightbulb"></i>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="ps-3 fs-5 fw-bold" id="status_lampu">
                                    <?php
                                    $status_lampu = mysqli_query($connect, "SELECT val_lamp FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                                    $data = mysqli_fetch_array($status_lampu);
                                    echo $data['val_lamp'];
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mt-md-0 mt-lg-0 mt-sm-3">
        <div class="card card-tegangan border-0 rounded-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Tegangan</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bolt-lightning"></i>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ps-3 fs-5 fw-bold" id="tegangan"><?php
                                    $nilai_tegangan = mysqli_query($connect, "SELECT val_volt FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                                    $data = mysqli_fetch_array($nilai_tegangan);
                                    echo $data['val_volt'];
                                    ?><span> Voltage</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mt-md-3 mt-lg-0 mt-sm-3">
        <div class="card card-arus border-0 rounded-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nilai Arus</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class='bx bx-water'></i>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class=" ps-3 fs-5 fw-bold" id="nilai_arus"><?php
                                    $nilai_arus = mysqli_query($connect, "SELECT val_amp FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                                    $data = mysqli_fetch_array($nilai_arus);
                                    echo $data['val_amp'];
                                    ?><span> Ampere</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mt-md-3 mt-lg-0 mt-sm-3">
        <div class="card card-ldr border-0 rounded-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nilai LDR</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-atom"></i>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ps-3 fs-5 fw-bold" id="nilai_LDR"><?php
                                    $nilai_LDR = mysqli_query($connect, "SELECT val_LDR FROM tbl_sensor ORDER BY id DESC LIMIT 1");
                                    $data = mysqli_fetch_array($nilai_LDR);
                                    echo $data['val_LDR'];
                                    ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>