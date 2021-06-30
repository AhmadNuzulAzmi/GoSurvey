<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi mdi-stove"></i>
            </span> Member / Active Survey
        </h3>
        <br />

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">View Soal</h4>
                    </br>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-active">
                                <th> No Soal </th>
                                <!-- <th>id soal</th>
                                <th>id task</th> -->
                                <th> Soal</th>
                                <th> Tipe Soal </th>
                            </tr>
                        </thead>

                        <?php
                        foreach ($soal as $keyy => $value) { ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $keyy + 1 ?></td>
                                    <!-- <td><?php echo $value->id_soal ?></td>
                                    <td><?php echo $value->id_task ?></td> -->
                                    <td><?php echo $value->soal ?></td>
                                    <td><?php echo $value->type_soal ?></td>
                                </tr>

                                <?php
                                $kd = $value->id_soal;
                                if ($value->type_soal == "Radio") {
                                    foreach ($soal_opt as $key => $value) { ?>
                                        <?php
                                        if ($kd == $value->id_soal) { ?>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <!-- <td><?php echo $value->id_soal ?></td>
                                    <td><?php echo $value->id_task ?></td> -->
                                    <td><?php echo $value->pilihan_opt ?></td>
                                <?php }
                                ?>

                            <?php }
                                } elseif ($value->type_soal == "Checkbox") {
                                    foreach ($soal_opt as $key => $value) { ?>
                                <?php
                                        if ($kd == $value->id_soal) { ?>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <!-- <td><?php echo $value->id_soal ?></td>
                                    <td><?php echo $value->id_task ?></td> -->
                                    <td><?php echo $value->pilihan_opt ?></td>
                                </tr>
                <?php }
                                    }
                                }
                            } ?>
                            </tbody>
                    </table>
                    <br />
                    <br />
                    <!-- <table class="table table-bordered">
                        <thead>
                            <tr class="table-active">
                                <th> No </th>
                                <th>id soal</th>
                                <th>id task</th>
                                <th> Pilihan Option</th>
                            </tr>
                        </thead>

                        <?php foreach ($soal_opt as $key => $value) { ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $keyy + 1 ?></td>
                                    <td><?php echo $value->id_soal ?></td>
                                    <td><?php echo $value->id_task ?></td>
                                    <td><?php echo $value->pilihan_opt ?></td>

                                </tr>
                            <?php } ?>
                            </tbody>
                    </table> -->
                </div>
            </div>
        </div>
    </div>