<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">RESTAURANTE</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($resultado as $r) { ?>
                    <tr>
                      <td><?php echo $r->id ?></td>
                      <td><?php echo $r->usuario ?></td>
                      <td><?php echo $r->nombre_restaurante ?></td>
                      

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>