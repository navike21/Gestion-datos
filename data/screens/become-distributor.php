<h2>Become a Distributor</h2>
<div class="w_90 section_middle_right">
    <label>Origin:&nbsp;</label>
    <select class="origin3">
        <option value="">All</option>
        <option>ENG</option>
        <option>ESP</option>
    </select>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <label>Export to: </label>
    <a href="" class="export"><img src="images/excel.svg"></a>
</div>
<table id="" class="displayrecords3 stripe hover display nowrap" >
<?php
    $consultaSql = 'SELECT iddistributor, name, companny, country, city, address, state, zipcode, phone, email, comments, origin, registro FROM psnbliberw_distributor ORDER BY registro ASC';
    $sql = $PDO->prepare($consultaSql);
    $sql->execute();
?>
<!-- <table id="" class="displayrecords table table-striped table-bordered dt-responsive nowrap" > -->
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Company</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
                <th>State</th>
                <th>Zip code</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Origin web</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            while ($fila = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                switch ($fila[11]) {
                    case 'en':
                        $valFlag = "ENG";
                        break;
                    case 'es':
                        $valFlag = "ESP";
                        break;
                }
                // $datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "\n";
                echo '
                <tr>
                    <td class="align_center">'.$fila[12].'</td>
                    <td>'.$fila[1].'</td>
                    <td>'.$fila[2].'</td>
                    <td class="align_center">'.$fila[3].'</td>
                    <td class="align_center">'.$fila[4].'</td>
                    <td class="align_center">'.$fila[5].'</td>
                    <td class="align_center">'.$fila[6].'</td>
                    <td class="align_center">'.$fila[7].'</td>
                    <td class="align_center">'.$fila[8].'</td>
                    <td>'.$fila[9].'</td>
                    <td class="align_center"><div class="flag '.$fila[11].'">'.$valFlag.'</div></td>
                    <td class="align_center">'.$fila[10].'</td>
                </tr>
                ';
            }
        ?>
        <!-- <tr>
                <td class="align_center">28/07/2018</td>
                <td>Tiger Nixon</td>
                <td>Nixon's Beauty</td>
                <td class="align_center">USA</td>
                <td class="align_center">the street view #432 of 75</td>
                <td class="align_center">Florida</td>
                <td class="align_center">---</td>
                <td class="align_center">457</td>
                <td class="align_center">+01 54748745</td>
                <td>tiguer@mail.com</td>
                <td class="align_center"><div class="flag en">ENG</div></td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In incidunt quos minima perspiciatis repellat debitis atque excepturi suscipit dolorum error, iure similique deleniti ratione dolor voluptates eos praesentium inventore vel?</td>
            </tr> -->
            <!-- <tr>
                <td class="align_center">25/07/2018</td>
                <td>Jorge Gomez</td>
                <td>Gomez, belleza</td>
                <td class="align_center">Colombia</td>
                <td class="align_center">Av Miraflores #784</td>
                <td class="align_center">Cali</td>
                <td class="align_center">---</td>
                <td class="align_center">457</td>
                <td class="align_center">+01 54748745</td>
                <td>gomez@mail.com</td>
                <td class="align_center"><div class="flag es">ESP</div></td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In incidunt quos minima perspiciatis repellat debitis atque excepturi suscipit dolorum error, iure similique deleniti ratione dolor voluptates eos praesentium inventore vel?</td>
            </tr> -->
            
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Company</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
                <th>State</th>
                <th>Zip code</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Origin web</th>
                <th>Comments</th>
            </tr>
        </tfoot>
    </table>