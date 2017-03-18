<?php
if(empty($report->problem)){
    $report->problem[0]['details'] = 'Tiada sebarang aduan yang diterima dari para pelajar.';
    $report->problem[0]['datetime'] = 'Sepanjang bulan '.$report->reportDate;
    $report->problem[0]['venue'] = '-';
    $report->problem[0]['action'] = '-';
    $report->problem[0]['notes'] = '-';
}

?>
    <!doctype html>
    <html>
    <style>
        @media print {
            #footer {
                position: absolute;
                bottom: 20px;
            }
        }
        
        #problem table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #problem td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        #problem tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>

    <body>
        <div>
            <div>
                <div>
                    <h3>
                    <b>BORANG LAPORAN BULANAN PPP / PEGAWAI / STAF</b>
                </h3>
                    <p> BULAN : <b style="padding-left: 14.7em;"><?= $report->reportDate ?></b>
                        <br/> TARIKH BERTUGAS : <b style="padding-left: 9em;"><?= $report->workingDates ?></b>
                        <br/> NAMA PEGAWAI BERTUGAS : <b style="padding-left: 5em;"><?= $report->user->name ?></b>
                        <br> NO. TEL PEGAWAI BERTUGAS : <b style="padding-left: 4.3em;"><?= $report->user->hp_num ?> </b></p>
                    <div id="problem">
                        <table>
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Perkara/Isu </th>
                                    <th> Tarikh & Masa </th>
                                    <th> Tempat </th>
                                    <th> Tindakan </th>
                                    <th> Gambar </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($report->problem as $i=>$problem): ?>
                                    <tr>
                                        <td>
                                            <?= $i+1 ?>
                                        </td>
                                        <td>
                                            <?= $problem['details'] ?>
                                        </td>
                                        <td>
                                            <?= $problem['datetime'] ?>
                                        </td>
                                        <td>
                                            <?= $problem['venue'] ?>
                                        </td>
                                        <td>
                                            <?= $problem['notes'] ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="footer">

                <span style=""> <u>Tindakan Unit Pengurusan kolej & NR</u></span>
                <table>
                    <tr>
                        <td style="padding-right:150px">
                            <table>
                                <tr>
                                    <td>Pengurus Asrama Kanan</td>
                                    <td style="width:35px;border: 1px solid"> </td>
                                </tr>
                                <tr>
                                    <td>Pegawai Pembangunan Pelajar</td>
                                    <td style="width:35px;border: 1px solid"></td>
                                </tr>
                                <tr>
                                    <td>Pegawai Kaunseling / Pusat Islam</td>
                                    <td style="width:35px;border: 1px solid"></td>
                                </tr>
                                <tr>
                                    <td>Tatatertib</td>
                                    <td style="width:35px;border: 1px solid"></td>
                                </tr>
                                <tr>
                                    <td>Simpanan / Fail</td>
                                    <td style="width:35px;border: 1px solid"></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <div>
                                <span align="right">Tandatangan Pegawai Bertugas</span>
                                <br/>
                                <br/>
                                <br/>
                                <span>.......................................</span>
                                <br/>
                                <span>CRS</span>
                                <br/>
                                <span>Nama & Cop</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>

    </html>
