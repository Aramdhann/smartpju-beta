<?php
session_start();
include '../core/connection.php' // memanggil file connection
?>

<div class="text dashboard-title">Recent Data</div>
<!-- table data -->
<div class="text">
    <div class="card recent-sales border-0 rounded-4">
        <div class="card-body">
            <h5 class="card-title">Recent Sensor Data <span>| Today</span></h5>
            <table class="table table-borderless datatable flex-nowrap">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Status Lampu</th>
                        <th scope="col">Tegangan</th>
                        <th scope="col">Nilai Arus</th>
                        <th scope="col">Nilai LDR</th>
                        <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1; // untuk pengurutan nomor
                    $datas = mysqli_query($connect, "SELECT * FROM tbl_sensor ORDER BY id"); // script untuk menampilkan data
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($datas)) : // melakukan perulangan ?>
                    <tr>
                        <td class="fw-bold">
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $row['val_lamp']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_volt']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_amp']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_ldr']; ?>
                        </td>
                        <td>
                            <?php echo $row['val_time']; ?>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>