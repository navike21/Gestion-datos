<h2>Subscribers</h2>
<div class="w_90 section_middle_right">
    <label>Origin:&nbsp;</label>
    <select class="origin">
        <option value="">All</option>
        <option>ENG</option>
        <option>ESP</option>
    </select>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <label>Export to: </label>
    <a href="" class="export"><img src="images/excel.svg"></a>
</div>
<table id="" class="displayrecords1 stripe hover display nowrap" >
<?php
    $consultaSql = 'SELECT id, name, country, city, email, coments, origin, registro FROM sdfogn_subscribe ORDER BY registro ASC';
    $sql = $PDO->prepare($consultaSql);
    $sql->execute();
    

?>
<!-- <table id="" class="displayrecords table table-striped table-bordered dt-responsive nowrap" > -->
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Email</th>
                <th>Origin web</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                // $datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "\n";
                switch ($fila[6]) {
                    case 'en':
                        $valFlag = "ENG";
                        break;
                    case 'es':
                        $valFlag = "ESP";
                        break;
                }
                echo '
                <tr>
                    <td class="align_center">'.$fila[7].'</td>
                    <td>'.$fila[1].'</td>
                    <td class="align_center">'.$fila[2].'</td>
                    <td class="align_center">'.$fila[3].'</td>
                    <td class="align_center">'.$fila[4].'</td>
                    <td class="align_center"><div class="flag '.$fila[6].'">'.$valFlag.'</div></td>
                    <td>'.$fila[5].'</td>
                </tr>
                ';
            }
        ?>           
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Email</th>
                <th>Origin web</th>
                <th>Comments</th>
            </tr>
        </tfoot>
    </table>