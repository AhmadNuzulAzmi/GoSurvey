<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi mdi-stove"></i>
            </span> Member / My Survey
        </h3>
        <br /><br />

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Riwayat Pembuatan Survey</h4><br />
                        <div class="table-responsive">

                            <table class="table" id="data_tables">
                                <thead align=" center">
                                    <tr class="table-active">
                                        <th> No </th>
                                        <th> Nama Responden </th>
                                        <?php
                                        foreach ($soal as $key => $value) { ?>
                                            <th><?php echo $value->soal ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>

                                <tbody align="center">
                                    <?php
                                    foreach ($jwb as $key => $value1) {
                                    ?>
                                        <tr height="50px">
                                            <td> <?= ++$key ?> </td>
                                            <td> <?= $value1->nama_usr ?> </td>
                                            <?php

                                            $jaw = json_decode($value1->jawaban);
                                            foreach ($jaw as $key => $item) {
                                                if ($item->type_soal == "Checkbox") { ?>
                                                    <td><?php echo join(', ', $item->answer) ?></td>
                                                <?php
                                                } elseif ($item->type_soal == "Text" || $item->type_soal == "Textarea" || $item->type_soal == "Radio") { ?>
                                                    <td><?php echo $item->answer ?></td>
                                        <?php }
                                            }
                                        } ?>
                                        </tr>

                                </tbody>
                            </table>
                            <br />
                            <br />

                        </div>
                    </div>
                </div>
            </div>