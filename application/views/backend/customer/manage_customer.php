<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-1">
        <h2 class="content-header-title">Manage Customer</h2>
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
      <?php } ?>
      <section id="pdf-message">


<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">รายการลูกค้าสมัครสมาชิกใหม่</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  </ul>
                </div>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				</div>
				<div class="card-content collapse show">
          <?php if($getquery){ ?>
					<div class="card-body card-dashboard">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
            <div class="col-sm-12">
                    <table class="table table-striped table-bordered base-style dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                      <thead>
                        <tr role="row">

                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending" >No.</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Customer Number</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Firsname</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Lastname</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending" >Age</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Start Date</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Status</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $num = 1; ?>
                      <?php foreach($getquery as $row): ?>
                        <tr>
                          <td><?php echo $num++ ?></td>
                          <td><?php echo $row->cs_no; ?></td>
                          <td><?php echo $row->cs_fname; ?></td>
                          <td><?php echo $row->cs_lname; ?></td>
                          <td><?php echo $row->cs_age; ?></td>
                          <td><?php echo date('d-m-Y', strtotime($row->cs_create_date)); ?></td>
                          <td><?php echo $row->cs_status; ?></td>
                          <td>
                            <a href="<?php echo site_url('managecustomer/detailcustomer/'. $row->cs_id);?>">
                              <button type="button" class="btn btn-icon btn-info mr-1"><i class="la la-eye"></i></button>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-success mr-1"
                            data-href="<?php echo site_url('Managecustomer/approve_cs/'. $row->cs_id); ?>"
                            data-toggle="modal" data-target="#confirm-aprrove"><i class="la la-check"></i></a>

                            <a href="javascript:;" class="btn btn-icon btn-danger mr-1"
                            data-href="<?php echo site_url('Managecustomer/delete/'. $row->cs_id); ?>"
                            data-toggle="modal" data-target="#confirm-delete"><i class="la la-trash"></i></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    </table>
               </div>
            </div>
            <?php echo $links; ?> <!-- Pagination -->
            </div>
          <?php }else{
            echo "<center>ไม่มีข้อมูล</center>";
          } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
      </section>
    </div>
  </div>
</div>

<!--Modal Confirm Approve Cs -->
<div class="modal fade" id="confirm-aprrove" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cofrim Approve?</h5>
        <button type="button" class="close" data-dismiss="modal"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-footer">
      <a class="btn btn-success btn-ok" style="color: white;">OK</a>
      <button type="button" class="btn btn-secondary"
      data-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>

<!--Modal Confirm Delete Cs -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cofrim Delete?</h5>
        <button type="button" class="close" data-dismiss="modal"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-footer">
      <a class="btn btn-danger btn-ok" style="color: white;">OK</a>
      <button type="button" class="btn btn-secondary"
      data-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>




<script type="text/javascript">

$('#confirm-aprrove').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>
