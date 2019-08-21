<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-clipboard-list mr-2"></i>
		User Activity Log's</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Menu</th>
						<th>ID</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="align-middle">
							Dashboard
						</td>
						<td class="align-middle">1</td>
						<td class="align-middle text-right">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editMenu"
								tooltip="true" title="Edit" data-placement="top">
								<span class="fas fa-pencil-alt"></span>
							</button>
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#accessMenu"
								tooltip="true" title="Access" data-placement="top">
								<span class="fas fa-lock"></span>
							</button>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteMenu"
								tooltip="true" title="Delete" data-placement="top">
								<span class="fas fa-trash-alt"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- { Modal } Edelete Menu -->
<div class="modal fade" id="editMenu" tabindex="-1" role="dialog" aria-labelledby="editMenuModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editMenuModal">Edit log</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="number" class="form-control" id="menuId" name="menuId" placeholder="ID">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="menuName" name="menuName" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="menuUrl" name="menuUrl" placeholder="URL">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="menuIcon" name="menuIcon"
							placeholder="Icon (Font Awesome)">
						<span class="text-small text-danger">Font Awesome class does not valid! Please enter a valid
							Font Awesome classes.</span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- { Modal } Edit Menu -->
<div class="modal fade" id="deleteMenu" tabindex="-1" role="dialog" aria-labelledby="deleteMenuModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteMenuModal">Edit log</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                Are you sure you want to delete 'Dashboard' menu?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>