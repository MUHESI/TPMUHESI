<h3 class="">Exportation du fichier</h3>
<form action="<?= $_SERVER['PHP_SELF'];?>?page=exportation" method="post" enctype="multipart/form-data">
     <div class="back-primary">                
            <br/>
        <div class="fileinput fileinput-new back-primary" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
            <div>
                <span class="btn btn-info btn-file">                                
                    <input type="file" name="img">
                </span>
                <button type="submit" class="btn btn-primary fileinput-exists" name="laboimg" title="save in db">
            Enregistrer </button>   
            </div>
        </div>
        <br>
    </div>
</form>