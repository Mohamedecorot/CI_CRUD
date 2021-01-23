<?php
echo form_open('crud/update', 'class="myform"');
?>

<div class="form-group">
    <label for="id">ID</label>
    <input type="text" name="id" id="id" class="form-control" value="<?php echo $id ?>" readonly>
</div>
<div class="form-group">
    <label for="nm">Full Name</label>
    <input type="text" name="nm" id="nm" class="form-control" value="<?php echo $nm ?>">
</div>
<div class="form-group">
    <label for="em">Email</label>
    <input type="text" name="em" id="em" class="form-control" value="<?php echo $em ?>">
</div>
<div class="form-group">
    <label for="hp">Numéro de téléphone</label>
    <input type="text" name="hp" id="hp" class="form-control" value="<?php echo $hp ?>">
</div>
<div class="form-group">
    <label for="al">Adresse</label>
    <input type="text" name="al" id="al" class="form-control" value="<?php echo $al ?>">
</div>
<input type="submit" name="edit" class="btn btn-primary" value="Update">
<a href="<?php echo site_url('crud') ?>" class="btn btn-link">Retour en arrière</a>
<?php
echo form_close();
?>