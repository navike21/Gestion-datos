<h2>Hair Professionals & Salons Register</h2>
<div class="w_90 section_middle_right">
    <label>Origin:&nbsp;</label>
    <select class="origin2">
        <option value="">All</option>
        <option>ENG</option>
        <option>ESP</option>
    </select>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <label>Export to: </label>
    <a href="" class="export"><img src="images/excel.svg"></a>
</div>
<table id="" class="displayrecords2 stripe hover display nowrap" >
<?php
    $consultaSql = 'SELECT idsalon, name, salon_name, phone, country, city, email, comment, use_products, origin, registro FROM sldgje_salon ORDER BY registro ASC';
    $sql = $PDO->prepare($consultaSql);
    $sql->execute();
?>
<!-- <table id="" class="displayrecords table table-striped table-bordered dt-responsive nowrap" > -->
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Salon name</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>Email</th>
                <th>Use U. products</th>
                <th>Origin web</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                // $datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "\n";
                switch ($fila[9]) {
                    case 'en':
                        $valFlag = "ENG";
                        break;
                    case 'es':
                        $valFlag = "ESP";
                        break;
                }
                echo '
                <tr>
                    <td>'.$fila[10].'</td>
                    <td>'.$fila[1].'</td>
                    <td>'.$fila[2].'</td>
                    <td>'.$fila[3].'</td>
                    <td>'.$fila[4].'</td>
                    <td>'.$fila[5].'</td>
                    <td>'.$fila[6].'</td>
                    <td class="align_center">'.$fila[8].'</td>
                    <td class="align_center"><div class="flag '.$fila[9].'">'.$valFlag.'</div></td>
                    <td>'.$fila[7].'</td>
                </tr>
                ';
            }
        ?>
            <!-- <tr>
                <td class="align_center">28/07/2018</td>
                <td>Tiger Nixon</td>
                <td>Nixon's Beauty</td>
                <td class="align_center">+01548454587</td>
                <td class="align_center">Florida</td>
                <td class="align_center">USA</td>
                <td class="align_center">tiguer@mail.com</td>
                <td class="align_center">Yes</td>
                <td class="align_center"><div class="flag en">ENG</div></td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In incidunt quos minima perspiciatis repellat debitis atque excepturi suscipit dolorum error, iure similique deleniti ratione dolor voluptates eos praesentium inventore vel?</td>
            </tr>             -->
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Salon name</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>Email</th>
                <th>Use U. products</th>
                <th>Origin web</th>
                <th>Comments</th>
            </tr>
        </tfoot>
    </table>