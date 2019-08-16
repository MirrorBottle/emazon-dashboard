<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-clipboard-list mr-2"></i>
		User Activity Log's</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Date</th>
						<th>Log</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="align-middle">2019/8/16</td>
						<td class="align-middle">
							Eddy Gunawan was deleted by <a href="#">M. Novil Fahlevy</a>
						</td>
						<td class="align-middle text-center">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteLog">
								<span class="fas fa-trash-alt"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- { Modal } Delete Log -->
<div class="modal fade" id="deleteLog" tabindex="-1" role="dialog" aria-labelledby="deleteLogModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteLogModal">Delete log</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this log?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>