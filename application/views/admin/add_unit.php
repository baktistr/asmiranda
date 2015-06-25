<div class="container">
    <div class="h1 col-md-11 col-sm-10 col-xs-9">
        <h2>Tambah Satuan Kerja</h2>
    </div>
    <div class="h1 col-md-1 col-sm-1 col-xs-1">
        <a href="<?php echo site_url('admin/unit_list');?>" class="btn btn-warning "><i class="glyphicon glyphicon-step-backward"></i>back</a>
    </div>
    <br><br>
    <br>
    <hr>
    <form class="form-horizontal well" method="post" action="<?php echo site_url('admin/process_add_unit');?>">
						
        <div class="form-group">
                    <label class="col-sm-3" for="unit_name">Satuan Kerja</label>
                <div class="col-sm-5">    
                    <input type="text" class="form-control" id="unit_name" name="unit_name" required>
                </div>
        </div>
			
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>
    <hr>
</div>