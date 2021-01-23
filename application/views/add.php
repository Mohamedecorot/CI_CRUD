<?php
echo form_open('crud/save', 'class="myform"');
?>

<div class="form-group">
    <label for="nm">Full Name</label>
    <input type="text" name="nm" id="nm" class="form-control" placeholder="Entrez le nom">
</div>
<div class="form-group">
    <label for="em">Email</label>
    <input type="text" name="em" id="em" class="form-control" placeholder="Entrez l'émail">
</div>
<div class="form-group">
    <label for="hp">Numéro de téléphone</label>
    <input type="text" name="hp" id="hp" class="form-control" placeholder="Entrez le numéro de téléphone">
</div>
<div class="form-group">
    <label for="al">Adresse</label>
    <input type="text" name="al" id="al" class="form-control" placeholder="Entrez l'adresse">
</div>
<input type="submit" name="edit" class="btn btn-primary" value="edit">
<a href="<?php echo site_url('crud') ?>" class="btn btn-link">Retour en arrière</a>

<?php
echo form_close();
?>