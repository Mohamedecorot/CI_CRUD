<?php
echo form_open('crud/save', 'class=myform');
?>

<div class="form-group">
    <label for="nm">Full Name</label>
    <input type="text" name="nm" id="nm" class="form-control" placeholder="Entrez le nom">
</div>
<div class="form-group">
    <label for="em">Full Name</label>
    <input type="text" name="em" id="em" class="form-control" placeholder="Entrez l'émail'">
</div>
<div class="form-group">
    <label for="hp">Full Name</label>
    <input type="text" name="hp" id="hp" class="form-control" placeholder="Entrez le numéro de téléphone">
</div>
<div class="form-group">
    <label for="al">Full Name</label>
    <input type="text" name="al" id="al" class="form-control" placeholder="Entrez l'adresse">
</div>
<input type="submit" name="save" class="btn btn-primary" value="save">

<?php
echo form_close();
?>