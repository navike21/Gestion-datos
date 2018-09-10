<h2>Country Branch</h2>
<div class="section_middle_left w_90">
    <div id="addcountry" class="boton_azul">Add Country</div>
</div>
<table id="" class="displayrecords4 stripe hover display nowrap" >
<?php
    $consultaSql = 'SELECT idcountry, nombre, email, estado FROM aklsdfjr_country WHERE estado = "a"';
    $sql = $PDO->prepare($consultaSql);
    $sql->execute();
    

?>
<!-- <table id="" class="displayrecords table table-striped table-bordered dt-responsive nowrap" > -->
        <thead>
            <tr>
                <th>Country</th>
                <th width="200">Email</th>
                <th width="150">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                // $datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "\n";
                echo '
                <tr>
                    <td>'.$fila[1].'</td>
                    <td>'.$fila[2].'</td>
                    <td>
                        <form action="" class="section_middle_center w_100 formulario form" id="Countryformulario'.$fila[0].'" data-nombre="Countryformulario'.$fila[0].'" data-destino="data/deleteActioncountry.php" action="">
                            <input type="hidden" name="idcountry" value="'.$fila[0].'" />
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                ';
            }
        ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Country</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>