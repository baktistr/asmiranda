<div class="container">
    <div class="col-sm-11 col-xs-10">
        <h2>Edit Satuan Kerja</h2>
    </div>
    <div class="h2 col-sm-1 col-xs-2">
        <a href="<?php echo site_url('admin/unit_list');?>" class="btn btn-warning "><i class="glyphicon glyphicon-step-backward"></i>back</a>
    </div>
    <br><br>
    <br>
    <hr>
    <form class="form-horizontal well" method="post" action="<?php echo site_url('admin/process_edit_unit');?>">
	<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $unit->id; ?>" >					
        <div class="form-group">
                    <label class="col-sm-3" for="unit_name">Satuan Kerja</label>
                <div class="col-sm-5">    
                    <input type="text" class="form-control" id="unit_name" name="unit_name" value="<?php echo $unit->unit_name; ?>" required>
                </div>
        </div>
			
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>
    <hr>
</div>