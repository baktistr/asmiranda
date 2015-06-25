<div class="container">
    <div class="h1 col-md-11 col-sm-10 col-xs-9">
        Edit Staff
    </div>
    <div class="h1 col-md-1 col-sm-1 col-xs-1">
        <a href="<?php echo site_url('dashboard');?>" class="btn btn-warning "><i class="glyphicon glyphicon-step-backward"></i>back</a>
    </div>
    <br><br>
    <br>
    <hr>
    <form class="form-horizontal well" method="post" action="<?php echo site_url('admin/process_edit_staff');?>">
	    
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $staff->id; ?>" >                  
					
        <div class="form-group">
                    <label class="col-sm-3" for="email">Email</label>
                <div class="col-sm-5">    
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo($staff->email);?>" required>
                </div>
        </div>
        
        <div class="form-group">
                    <label class="col-sm-3" for="staff_name">Nama Lengkap Staff</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="staff_name" name="staff_name" value="<?php echo($staff->staff_name);?>" required>
                </div>
        </div>
         <div class="form-group">
                    <label class="col-sm-3" for="staff_alias">Nama Panggilan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="staff_alias" name="staff_alias" value="<?php echo($staff->staff_alias);?>" required>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3" for="staff_initial">Inisial</label>
                <div class="col-sm-3">
                    <select class="form-control" id="staff_initial" name="staff_initial" value="<?php echo($staff->initial);?>" required>
                        <option value="sdr">sdr</option>
                        <option value="sdri">sdri</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3" for="role">Role</label>
                <div class="col-sm-3">
                    <select class="form-control" id="role" name="role" required>
                        <option value ="user" <?php echo ($staff->role=='user'?'selected="selected"':''); ?>>Staff</option>
                        <option value="agendaris" <?php echo ($staff->role=='agendaris'?'selected="selected"':''); ?>>Agendaris</option>
                        <option value="admin" <?php echo ($staff->role=='admin'?'selected="selected"':''); ?>>Administrator</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3" for="unit">Satuan Kerja</label>
                <div class="col-sm-3">
                    <select class="form-control" id="unit" name="unit" required>
                        <?php foreach($units as $unit):?>
                        <option value="<?php echo $unit->id; ?>" <?php if($unit->id == $staff->unit_id) echo 'selected="selected"' ?>><?php echo $unit->unit_name; ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="col-sm-3">
                    <a href="<?php echo site_url('admin/unit_list');?>" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Atur Satuan Kerja"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
        </div>
		<div class="form-group">
                    <label class="col-sm-3" for="password">New Password</label>
                    <div class="col-sm-5">
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
        </div>	
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>
</div>