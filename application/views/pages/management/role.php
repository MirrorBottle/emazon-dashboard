<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-user-tag mr-2"></i>
		Role List</div>
	<div class="card-body">
		<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addRoleModal">
			<span class="fas fa-plus"></span>
			Add Role
		</button>
		<?php if( $this->session->has_userdata('role_management_message') ) : ?>
			<?php 
				$message = $this->session->flashdata('role_management_message'); 
				$text = $message['text'];
				$type = $message['type'];
			?>
			<div class="alert alert-<?= $type; ?>"><?= $text; ?></div>
		<?php endif; ?>
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Role</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
						<?php foreach( $roles as $role ) : ?>
							<tr>
								<td class="align-middle"><?= $role['id']; ?></td>
								<td class="align-middle">
									<?= $role['name']; ?>
								</td>
								<td class="align-middle text-right">
									<button type="button" class="btn btn-primary" data-toggle="modal"
										data-target="#editRoleModal" tooltip="true" title="Edit" data-placement="top"
										id="idForEdit" data-id="<?= $role['id']; ?>">
										<span class="fas fa-pencil-alt"></span>
									</button>	
									<button type="button" class="btn btn-danger" id="idForDelete" data-toggle="modal"
										data-target="#DeleteRoleModal" tooltip="true" title="Delete" data-placement="top" data-id="1">
										<span class="fas fa-trash-alt"></span>
									</button>
								</td>
							</tr>
						<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- { Modal } Edit Role -->
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editRoleModal">Edit Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="editForm" action="<?= base_url('management/role/edit'); ?>">
				<div class="modal-body">
					<div class="form-group">
						<input type="number" class="form-control" id="roleIdEdit" name="newRoleId" placeholder="ID">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="roleNameEdit" name="roleName" placeholder="Name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="hidden" name="roleId" value="1" id="roleIdForEdit">
					<button type="submit" name="submitEdit" value="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- { Modal } Add Role -->
<div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addRoleModal">Add Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="addForm" action="<?= base_url('management/role/add'); ?>">
				<div class="modal-body">
					<div class="form-group">
						<?php 
							$this->db->order_by('id', 'DESC');
							$last_role_id = $this->db->get('role')->row_array()['id'] + 1;
						?>
						<input type="number" class="form-control" id="roleId" name="roleId" placeholder="ID" value="<?= $last_role_id; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="roleName" name="roleName" placeholder="Name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submitEdit" value="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- { Modal } Delete Role -->
<div class="modal fade" id="DeleteRoleModal" tabindex="-1" role="dialog" aria-labelledby="DeleteRoleModal"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="DeleteRoleModal">Delete Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<span class="text-danger">
					Are you sure you want to delete 'Admin' role?
				</span>
				<div class="alert alert-info p-1 text-center mt-3 mb-1">
					<span class="text-muted" id="codeDeleteRole"></span>
				</div>
				<input type="text" class="form-control" id="confirmCode"
					placeholder="Enter code above to confirm deleting role...">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<form method="post">
					<input type="hidden" name="roleId" value="1" id="roleIdForDelete">
					<button type="submit" name="submitDelete" class="btn btn-danger" id="confirmDeleteRole"
						disabled>Delete</button>
				</form>
			</div>
		</div>
	</div>
</div>
