<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-1">
				<h2 class="content-header-title">Manage WebSetting</h2>
			</div>
		</div>
		<div class="content-body">
			<?php if ($this->session->flashdata('msg_succ')) {?>
			<script>
				swal({
					title: "<?php echo $this->session->flashdata('msg_succ'); ?>",
					allowOutsideClick: true,
					type: "success",
					});
			</script>
			<?php }?>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-content collpase show">
							<div class="card-body">
								<?php $attr = array('class' => 'form-horizontal');?>
								<?php echo form_open('manageseting/update_websetting', $attr); ?>
								<!-- <form class="form form-horizontal"> -->
								<div class="form-body">
									<div class="form-group row">
										<label class="col-md-3 label-control" for="projectinput1">Mate Title</label>
										<div class="col-md-6">
											<input type="text" id="projectinput1" class="form-control" placeholder="Title" name="title" value="<?php echo $getdata->web_title; ?>">
											<?php echo form_error('title'); ?>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-md-3 label-control" for="projectinput1">Mate Keyword</label>
										<div class="col-md-6">
											<input type="text" id="projectinput1" class="form-control" placeholder="Mate Keyword" name="keyword" value="<?php echo $getdata->web_keyword; ?>">
											<?php echo form_error('keyword'); ?>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-md-3 label-control" for="projectinput1">Mata Description</label>
										<div class="col-md-6">
											<textarea id="userinput8" rows="6" class="form-control" placeholder="Mata Description" name="description"><?php echo $getdata->web_description; ?></textarea>
											<?php echo form_error('description'); ?>
										</div>
									</div>

									<div class="form-actions right">
										<button type="submit" class="btn btn-primary">
											<i class="la la-check-square-o"></i>
											Save
										</button>
									</div>

								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
