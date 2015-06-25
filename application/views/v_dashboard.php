<!-- #content -->

<div class="container">
    <ul id="tabs" class="nav nav-tabs nav-justified" data-tabs="tabs">
        <?php if($this->session->userdata('logged_in')['role'] === 'admin') { ?>
        <li class="active"><a href="#staffs" data-toggle="tab">Staffs</a></li>
        <?php } ?>
        <li <?php if ($this->session->userdata('logged_in')['role'] !== 'admin') { ?> class="active" <?php }?>><a href="#documents" data-toggle="tab">Documents</a></li>
        <li><a href="#dispositions" data-toggle="tab">Dispositions</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">

        <!-- STAFFS PANEL - ADMIN ONLY -->
        <?php if($this->session->userdata('logged_in')['role'] === 'admin') { ?>
        <div class="tab-pane active" id="staffs">
        	<br>
            <!-- head staffs -->
        	<div class = "row">
        		<div class="col-sm-7">
		        	<a href="<?php echo site_url('admin/add_staff');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Staff</a>
		            <a href="<?php echo site_url('admin/unit_list');?>" class="btn btn-success"><i class="glyphicon glyphicon-cog"></i> Atur Satuan Kerja</a>
	            </div>
	            
				<div class="col-sm-3 pull-right">
				<form class="navbar-form" role="search">
				    <div class="input-group">
				    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
				        <div class="input-group-btn">
				            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				        </div>
		 	        </div>
		        </form>
		        </div>	
			</div>
            <!-- end of head staffs -->
            <hr>
            <!-- content staffs -->
            <h1>Staffs</h1>
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center"><strong>Email</strong></td>
                        <td class="text-center"><strong></strong></td>
                        <td class="text-center"><strong>Nama Lengkap</strong></td>
                        <td class="text-center"><strong>Satuan Kerja</strong></td>
                        <td class="text-center"><strong>role</strong></td>
                        <td class="text-center"><strong>Action</strong></td>
                    </tr>
                </thead>
                <?php foreach($staffs as $staff):?>
                    <tr>
                        <td><?php echo $staff->email;?></td>
                        <td><?php echo $staff->staff_initial;?></td>
                        <td><?php echo $staff->staff_name;?></td>
                        <td><?php echo $staff->unit_name;?></td>
                        <td><?php echo $staff->role;?></td>
                        <td>
                            <center>
                                <a href="<?php echo site_url('admin/edit_staff')."/".$staff->id;?>" class="btn btn-sm btn-success">Edit</a>
                                <button data-id="<?php echo $staff->id;?>" data-name="<?php echo $staff->staff_name;?>" class="btn btn-sm btn-danger staff_delete">Delete</button>
                            </center>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
            </div>
            <!-- end of content staffs -->
        </div>
        <?php } ?>
        <!-- END OF STAFFS PANEL -->

        <!-- DOCUMENTS PANEL -->
        <?php if ($this->session->userdata('logged_in')['role'] !== 'admin') { ?> 
        <div class="tab-pane active" id="documents">
        <?php } else {?>
        <div class="tab-pane" id="documents">
        <?php } ?>   
            <br>
            <!-- head documents -->
            <div class = "row">
                <div class="col-sm-7">
                    <a href="<?php echo site_url('documents/add_document');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Dokumen</a>
                    <a href="<?php echo site_url('documents/type_doc_list');?>" class="btn btn-success"><i class="glyphicon glyphicon-cog"></i> Atur Jenis Dokumen</a>
                    <a href="<?php echo site_url('documents/archive');?>" class="btn btn-warning"><i class="glyphicon glyphicon-book"></i> Atur Pengarsipan</a>                
                </div>
                <div class="col-sm-3 pull-right">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- end of head documents -->
            <hr>
            <!-- content documents -->
            <h1>Documents</h1>
            <p>query document list here</p>
            <!-- end of content documents -->
        </div>
        <!-- END OF DOCUMENTS PANEL -->

        <!-- DISPOSITIONS PANEL -->
        <div class="tab-pane" id="dispositions">
            <br>
            <!-- head dispositions -->
            <div class = "row">
                <div class="col-sm-7">
                    <a href="<?php echo site_url('admin/add_staff');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Disposisi</a>
                    <a href="<?php echo site_url('admin/unit_list');?>" class="btn btn-success"><i class="glyphicon glyphicon-cog"></i> Atur Disposisi</a>
                </div>
                <div class="col-sm-3 pull-right">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- end of head dispositions -->
            <hr>
            <!-- content dispositions -->
            <h1>Dispositions</h1>
            <p>query disposition list here</p>
            <!-- end of content dispositions -->
        </div>
        <!-- END OF DISPOSITIONS PANEL -->
    </div>
</div>

