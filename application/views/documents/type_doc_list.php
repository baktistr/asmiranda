<div class = "container">
    <br>
    <div class = "row">
        <div class="col-sm-11 col-xs-10">
            <a href="<?php echo site_url('documents/add_doc_class');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
        </div>
        <div class="col-sm-1 col-xs-1">
            <a href="<?php echo site_url('dashboard/#documents');?>" class="btn btn-warning "><i class="glyphicon glyphicon-step-backward"></i>back</a>
        </div>
    </div>
    <hr>
    <h1>Klasifikasi Dokumen</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td class="text-center"><strong>Klasifikasi Dokumen</strong></td>
                    <td class="text-center"><strong>Action</strong></td>
                </tr>
            </thead>
            <?php foreach($doc_classes as $class):?>
                <tr>
                    <td><?php echo $class->name;?></td>
                    <td>
                        <center>
                            <a href="<?php echo site_url('documents/edit_doc_class')."/".$class->id;?>" class="btn btn-sm btn-success">Edit</a>
                            <button data-id="<?php echo $class->id;?>" data-name="<?php echo $class->name;?>" class="btn btn-sm btn-danger doc_list_delete">Delete</button>
                        </center>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>