<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">FECHA DE REGISTRO</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($resultado as $r) { ?>
                    <tr>
                      <td><?php echo $r->id ?></td>
                      <td><?php echo $r->correo ?></td>
                      <td><?php echo $r->fech_registro ?></td>
                      

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>