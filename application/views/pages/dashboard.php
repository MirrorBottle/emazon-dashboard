<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-user mr-2"></i>
		User List</div>
	<div class="card-body">	
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Name</th>
						<th>Role</th>
						<th>Gender</th>
						<th>Age</th>
						<th>Start date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="#">Novil Fahlevy</a>
						</td>
						<td>Admin</td>
						<td>Age</td>
						<td>16</td>
						<td>2019/8/16</td>
						<td class="text-center">
							<button data-toggle="modal" data-target="#deleteUser" type="button" class="btn btn-danger">
								<span class="fas fa-trash-alt"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="card-footer small text-muted">
		Updated yesterday at 11:59 PM. See more <a href="<?= base_url('activity_log'); ?>">Activity Log</a>.
	</div>
</div>

<!-- { Modal } Delete Log -->
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="deleteUserModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteUserModal">Delete log</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-4 col-md-3 mx-auto">
								<img src="<?= ASSETS; ?>img/default.jpg" width="100%" height="90">
							</div>
							<div class="col-12">
								<h4 class="text-center mt-3 mb-0">M. Novil Fahlevy</h4>
							</div>
						</div>
					</div>
				</div>
				Are you sure you want to delete this user?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>
