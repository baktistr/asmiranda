
<div class="container content-login">
	<div class="row">
		<div class="col-md-6">
			<div class="page-header">
				<h1>Selamat datang di Asmiranda!</h1>
			</div>
		
			<p class="lead">Asmiranda adalah sebuah website untuk memudahkan para karyawan DPSI Bank Indonesia dalam mengurus surat menyurat. Dibuat oleh mahasiswa ITB, Fahmi, Bakti, dan Ade.</p>
			<p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
		</div>
	    <?php if(!$this->session->userdata('logged_in')) { ?>
		<!-- LOGIN PANEL -->
		<div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Bank Indonesia Secure Login &reg</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo site_url('account/login');?>" method="post">
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">
                                Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">
                                Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"/>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Sign in</button>
                                     <button type="reset" class="btn btn-default btn-sm">
                                    Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Tak terdaftar? <a href="http://www.bi.go.id">Hubungi Administrator</a></div>
            </div>
        </div>
		<?php } ?>
		
	</div>
</div>

