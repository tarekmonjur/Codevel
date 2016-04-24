
	<div class="panel panel-default">
		<div class="panel-body">
			See the <b>HomeControlelr, home function. </b> how to get data.
		</div>
	</div>

	<table class="table table-bordered">
		<thead>
			<td>First Name</td>
			<td>Last Name</td>
			<td>User Name</td>
			<td>Email Address</td>
		</thead>
		<tbody>

		<?php foreach($user as $info){?>
			<tr>
				<td><?php echo $info->firstname;?></td>
				<td><?php echo $info->lastname;?></td>
				<td><?php echo $info->username;?></td>
				<td><?php echo $info->email;?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
