<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .bold {
            font-weight: bold;
        }

        body {
            font-size: 11px;
        }

        .center {
            height: 60px;
            width: 200px;
        }

        .mid {
            height: 100px;
            width: 300px;
        }
    </style>

</head>

<body>
    <div>
        <img src=" <?= base_url('assets/img/sslogostar.PNG') ?>" class="mid">
        <br>
        <h1 style="text-align:center;" class="bold">PURCHASE ORDER</h1>
    </div>

    <table border="0" style="width: 100%">
        <tr>
            <td>
                <p class="bold">
                    PT.STAR Software Indonesia <br>
                    Head Office:<br>
                    CityLofts Sudirman, Unit 2109 <br>
                    Jalan K.H Mas Mansyur No.121 <br>
                    Jakarta 10220 <br>
                    INDONESIA<br><br><br>Tel : +62 21 2555-8856 <br>
                    Fax : +62 21 2555-8767 <br>

                    Website : www.star-group.net
                </p>
            </td>
            <td>
                <p class="bold">
                    Branch Office: <br>
                    Jl. Kenangan 126B, Jombor Kidul <br>
                    Sinduadi, Mlati, Sleman <br>
                    Yogyakarta 55284 <br>
                    INDONESIA<br>
                    <br>
                    Tel : +622774-623-971 <br>
                </p>
            </td>
            <td></td>
            </>


    </table>
    <?php foreach ($pi as $pi) { ?>
        <table border="1" style="width: 70%" class="table" cellspacing="0" cellpadding="0" align="left">


            <tr>
                <td style="text-align:center; background-color:pink" class="bold" width="35%"><a>Project Name</a></td>



            </tr>
            <tr>
                <td style="text-align:center;" class="center" width="35%"><?php echo $pi->project_Name; ?></td>

            </tr>
        </table>
    <?php } ?>
    <table border="1" style="width: 25%" class="table" cellspacing="0" cellpadding="0" align="center">


        <tr>
            <td style="text-align:center; background-color:pink" class="bold" width="%">Date Issued</td>



        </tr>
        <tr>
            <td style="text-align:center; " class="center" width="%"><?php echo $pi->date; ?></td>

        </tr>
    </table>
    <br>
    <table border="1" style="width: 75%" class="table" cellspacing="0" cellpadding="0">


        <tr>
            <td style="text-align:center; background-color:pink" class="bold" width="35%">Project Manager</td>
            <td width="35%" style="text-align:center; background-color:pink" class="bold">Email</td>


        </tr>
        <tr>
            <td style="text-align:center;" class="center" width="35%"><?php echo $pi->nama_Pm; ?></td>
            <td width="35%" style="text-align:center;"><?php echo $pi->email_pm; ?></td>
        </tr>
    </table>
    <br>
    <table border="1" style="width: 75%" class="table" cellspacing="0" cellpadding="0">


        <tr>
            <td style="text-align:center; background-color:pink" class="bold" width="35%">Freelance</td>
            <td width="35%" style="text-align:center; background-color:pink" class="bold">Email</td>


        </tr>
        <tr>
            <td style="text-align:center;" class="center" width="35%"><?php echo $pi->resource_Name; ?></td>
            <td width="35%" style="text-align:center;"><?php echo $pi->resource_Email; ?></td>
        </tr>
        <tr>
            <td style="text-align:center; background-color:pink" class="bold" width="35%">Mobile Phone</td>
            <td width="35%" style="text-align:center; background-color:pink" class="bold">Addres</td>


        </tr>
        <tr>
            <td style="text-align:center;" class="center" width="35%"><?php echo $pi->mobile_Phone; ?></td>
            <td width="35%" style="text-align:center;"><?php echo $pi->address_Resource; ?></td>
        </tr>
    </table>

    <br>
    <table border="1" style="width: 100%" class="table" cellspacing="0" cellpadding="0">


        <tr>
            <td style="text-align:center; background-color:pink" class="bold" width="25">Match</td>
            <td width="25%" style="text-align:center; background-color:pink" class="bold">Word Count</td>
            <td style="text-align:center; background-color:pink" class="bold" width="25">Weighting</td>
            <td style="text-align:center; background-color:pink" class="bold" width="25">Weight Word Count</td>
        </tr>

        <tr>
            <td style="text-align:left;" width="25%">Locked</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->locked; ?></td>
            <td width="25%" style="text-align:center;">0%</td>
            <td width="25%" style="text-align:center;"></td>
        </tr>

        <tr>
            <td style="text-align:left;" width="25%">Repetition</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->repetitions; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '0%';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '15%';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '0%';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '0%';
                                                        }
                                                        ?></td>
            <td width="25%" style="text-align:center;">0.0</td>
        </tr>
        <tr>
            <td style="text-align:left;" width="25%">Fuzzy 100%/CM</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->fuzzy100; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '0';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '0';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '0';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '0';
                                                        }
                                                        ?>%</td>
            <td width="25%" style="text-align:center;">0.0</td>
        </tr>
        <tr>
            <td style="text-align:left;" width="25%">Fuzzy 95%-99%</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->fuzzy95; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '30';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '30';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '30';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '10';
                                                        }
                                                        ?>%</td>
            <td width="25%" style="text-align:center;">0.0</td>
        </tr>
        <tr>
            <td style="text-align:left;" width="25%">Fuzzy 85%-94%</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->fuzzy85; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '50';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '50';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '50';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '10';
                                                        }
                                                        ?>%</td>
            <td width="25%" style="text-align:center;">0.0</td>
        </tr>
        <tr>
            <td style="text-align:left;" width="25%">Fuzzy 75%-84%</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->fuzzy75; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '70';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '70';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '70';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '25';
                                                        }
                                                        ?>%</td>
            <td width="25%" style="text-align:center;">0.0</td>
        </tr>
        <tr>
            <td style="text-align:left;" width="25%">Fuzzy 50%-74%</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->fuzzy50; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '100';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '100';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '100';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '100';
                                                        }
                                                        ?>%</td>
            <td width="25%" style="text-align:center;">0.0</td>
        </tr>
        <tr>
            <td style="text-align:left;" width="25%">New</td>
            <td width="25%" style="text-align:center;"><?php echo $pi->new; ?></td>
            <td width="25%" style="text-align:center;"><?php
                                                        if ($pi->tipe_Po == 1) {
                                                            echo '100%';
                                                        } else if ($pi->tipe_Po == 2) {
                                                            echo '100%';
                                                        } else if ($pi->tipe_Po == 3) {
                                                            echo '80%';
                                                        } else if ($pi->tipe_Po == 4) {
                                                            echo '70%';
                                                        }
                                                        ?></td>
            <td width="25%" style="text-align:center;">2.0</td>
        </tr>
        <!-- <tr>
            <td style="text-align:left;" width="25%" class="bold">Total</td>
            <td width="25%" style="text-align:center;" class="bold">2</td>
            <td width="25%" style="text-align:center;" class="bold"></td>
            <td width="25%" style="text-align:center;" class="bold">2.0</td>
        </tr> -->

    </table>
    <br>
    <table border="1" style="width: 50%" align="right" cellspacing="0" cellpadding="0">
        <td width="25%" style="text-align:center; background-color:pink" class="bold">Rate</td>
        <td width="25%" style="text-align:center;" class="bold"><?php echo $pi->rate; ?></td>
        <td width="25%" style="text-align:center; background-color:pink" class="bold">Total Fee</td>
        <td width="25%" style="text-align:center;" class="bold"><?php echo $pi->grand_Total; ?></td>
    </table>
    <br>
    <table border="0" style="width: 100%" class="center" cellspacing="0" cellpadding="0">


        <tr>
            <td style="text-align:center;" class="bold" width="25"></td>
            <td width="25%" style="text-align:center;" class="bold"></td>
            <td style="text-align:center;" class="bold" width="25"></td>
            <td style="text-align:center;" class="bold" width="25">Regards,</td>
        </tr>
        <tr class="center"></tr>
        <tr>
            <td style="text-align:left;" width="25%"></td>
            <td width="25%" style="text-align:center;"></td>
            <td width="25%" style="text-align:center;"></td>
            <td width="25%" style="text-align:center;" class="bold"><?php echo $pi->nama_Pm; ?></td>
        </tr>

    </table>
    <br>
    <br>
    <div style="text-align:center;">For questions concerning this purchase order, please contact <br>
        respective PM who issued this purchase order.
    </div>
    <div style="text-align:center;" class="bold">Thank you for your service
    </div>
</body>
<!-- <script type="text/javascript">
    window.print();
</script> -->


</html>