<?php $__env->startSection('content'); ?>
<button type="button" class="btn btn-primary" onclick="redirect('/admin-panel/the-province/festivals/new')"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(1)')">Name  <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(2)')">Created At <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $festivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $festival): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="item">
				<td><?php echo e($festival->name); ?></td>
				<td><?php echo e($festival->updated_at->format('M d, Y - h:i:s A')); ?></td>
				<td>
					<button type="button" title="View or Edit" class="btnViewCityMun btn btn-warning btn-sm" onclick="redirect('/admin-panel/the-province/festivals/<?php echo e($festival->id); ?>')"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/the-province/festivals/<?php echo e($festival->id); ?>/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div id="deleteModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to delete this item?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger initiateDelete">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>
</div>

<form id="deleteForm" method="post" action="">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('delete')); ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>