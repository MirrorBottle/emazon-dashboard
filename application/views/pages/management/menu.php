<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-folder mr-2"></i>
		Menu List</div>
	<div class="card-body">
		<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addMenuModal">
			<span class="fas fa-plus"></span>
			Add Menu
		</button>
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Menu</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="align-middle">1</td>
						<td class="align-middle">
							Dashboard
						</td>
						<td class="align-middle text-right">
							<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#editMenuModal" tooltip="true" title="Edit" data-placement="top"
								id="idForEdit" data-id="1">
								<span class="fas fa-pencil-alt"></span>
							</button>

							<button type="button" class="btn btn-success" data-toggle="modal"
								data-target="#accessMenuModal" tooltip="true" title="Access" data-placement="top"
								id="idForAccess" data-id="1">
								<span class="fas fa-lock"></span>
							</button>

							<button type="button" class="btn btn-danger" data-toggle="modal"
								data-target="#deleteMenuModal" tooltip="true" title="Delete" data-placement="top"
								id="idForDelete" data-id="1">
								<span class="fas fa-trash-alt"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- { Modal } Edit Menu -->
<div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="editMenuModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editMenuModal">Edit Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="editForm">
				<div class="modal-body">
					<div class="form-group">
						<input type="number" class="form-control" id="menuId" name="newMenuId" placeholder="ID">
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
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="hidden" name="menuId" value="1" id="menuIdForEdit">
					<button type="submit" name="submitEdit" value="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- { Modal } Access Menu -->
<div class="modal fade" id="accessMenuModal" tabindex="-1" role="dialog" aria-labelledby="accessMenuModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="accessMenuModal">Edit role access to this menu.</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post">
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table mb-0" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th class="table-bordered">ID</th>
									<th class="table-bordered border-right-0">Role</th>
									<th class="table-bordered border-left-0"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle table-bordered">1</td>
									<td class="align-middle table-bordered border-right-0">
										<label class="form-check-label" for="role1">
											Admin
										</label>
									</td>
									<td class="text-right table-bordered border-left-0">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="role1">
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<form method="post">
						<input type="hidden" name="menuId" value="1" id="menuIdForAccess">
						<button type="submit" name="submitAccess" class="btn btn-success">Change</button>
					</form>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- { Modal } Delete Menu -->
<div class="modal fade" id="deleteMenuModal" tabindex="-1" role="dialog" aria-labelledby="deleteMenuModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteMenuModal">Delete Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<span class="text-danger">
					Are you sure you want to delete 'Dashboard' menu?
				</span>
				<div class="alert alert-info p-1 text-center mt-3 mb-1">
					<span class="text-muted" id="deleteMenuCode"></span>
				</div>
				<input type="text" class="form-control" id="confirmCode"
					placeholder="Enter code above to confirm deleting menu...">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<form method="post">
					<input type="hidden" name="menuId" value="1" id="menuIdForDelete">
					<button type="submit" name="submitDelete" class="btn btn-danger" id="confirmDeleteMenu"
						disabled>Delete</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- { Modal } Add Menu -->
<div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="addMenuModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addMenuModal">Add Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="editForm">
				<div class="modal-body">
					<div class="form-group">
						<input type="number" class="form-control" id="menuId" name="newMenuId" placeholder="ID">
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
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submitAdd" value="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>