    <p>
        <a href="<?php echo site_url('crud/add') ?>" class="btn btn-primary">Ajouter une nouvelle donnée</a>
    </p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($mydata == false) {
                    ?>
                        <div class="alert alert-info">les données sont encore vides, veuillez d'abord remplir</div>
                    <?php
                } else {
                    $no = 1;
                    foreach ($mydata as $row) {
                ?>
                <tr>
                    <td><?php echo $no ++ ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->phone ?></td>
                    <td><?php echo $row->address ?></td>
                    <td>
                        <a href="<?php echo site_url('crud/choose/'.$row->id) ?>" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>