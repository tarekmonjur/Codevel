
<div class="panel panel-default">
	<div class="panel-body">
		See the <b>User function. </b> how to insert data.
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<form class="form-horizontal" method="post" action="<?php echo base_url('HomeController/add_user');?>">
			<div class="form-group">
				<label class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="firstname" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="lastname" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">User Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" placeholder="User Name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email Address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="Email Address">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" name="submit" value="Sign UP" class="btn btn-default">
				</div>
			</div>
		</form>
	</div>
</div>
