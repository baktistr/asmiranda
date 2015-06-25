<div class = "container">
	<br>
	<div class = "row">
		<div class="col-sm-11 col-xs-10">
        	<a href="<?php echo site_url('admin/add_unit');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Satuan Kerja</a>
        </div>
        <div class="col-sm-1 col-xs-1">
            <a href="<?php echo site_url('dashboard');?>" class="btn btn-warning "><i class="glyphicon glyphicon-step-backward"></i>back</a>
        </div>
	</div>
	<hr>
    <h1>Satuan Kerja</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td class="text-center"><strong>Satuan Kerja</strong></td>
                    <td class="text-center"><strong>Action</strong></td>
                </tr>
            </thead>
            <?php foreach($units as $unit):?>
                <tr>
                    <td><?php echo $unit->unit_name;?></td>
                    <td>
                        <center>
                            <a href="<?php echo site_url('admin/edit_unit')."/".$unit->id;?>" class="btn btn-sm btn-success">Edit</a>
                            <button data-id="<?php echo $unit->id;?>" data-name="<?php echo $unit->unit_name;?>" class="btn btn-sm btn-danger unit_delete">Delete</button>
                        </center>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>