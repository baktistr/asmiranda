<div class="container">
    <div class="h1 col-md-11 col-sm-10 col-xs-9">
        <h2>EDIT Klasifikasi Dokumen</h2>
    </div>
    <div class="h1 col-md-1 col-sm-1 col-xs-1">
        <a href="<?php echo site_url('documents/type_doc_list');?>" class="btn btn-warning "><i class="glyphicon glyphicon-step-backward"></i>back</a>
    </div>
    <br><br>
    <br>
    <hr>
    <form class="form-horizontal well" method="post" action="<?php echo site_url('documents/process_edit_doc_class');?>">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $doc_class->id; ?>" >                  						
        <div class="form-group">
                    <label class="col-sm-3" for="doc_class">Klasifikasi/Jenis Dokumen</label>
                <div class="col-sm-5">    
                    <input type="text" class="form-control" id="doc_class" name="doc_class" value="<?php echo $doc_class->name; ?>" required>
                </div>
        </div>
			
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>
    <hr>
</div>