<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-1">
        <h2 class="content-header-title">Manage Admin</h2>
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
      <?php }elseif($this->session->flashdata('msg_error')){?>
        <script>
        swal({
          title: "<?php echo $this->session->flashdata('msg_error'); ?>",
          allowOutsideClick: true,
          type: "error",
        });
        </script>
      <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content collpase show">
              <div class="card-body">
                <?php $attr = array('class' => 'form-horizontal'); ?>
                <?php echo form_open('Manageadmin/insert', $attr); ?>
                <div class="form-body">
                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput1" un>User Name</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="User Name"
                      name="username">
                      <?php echo form_error('username'); ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput1">Password</label>
                    <div class="col-md-6">
                      <input type="password" class="form-control" placeholder="Password"
                      name="password">
                      <?php echo form_error('password'); ?>
                    </div>
                  </div>

                  <div class="form-actions right">
                    <button type="submit" class="btn btn-primary">
                      <i class="la la-check-square-o"></i> Save
                    </button>
                  </div>

                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content collpase show">
              <div class="card-body">
                <?php if($getdata){ ?>
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">User Name</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Action</th>
                      </tr>
                    </thead>
                    <?php $num = 1;?>
                    <tbody>
                      <?php foreach($getdata as $row): ?>
                        <tr>
                          <td><?php echo $num++;?></td>
                          <td><?php echo $row->admin_user;?></td>
                          <td><?php echo date('d-m-Y', strtotime($row->admin_create));?></td>
                          <td>
                            <a href="javascript:;" class="btn btn-icon btn-danger mr-1"
                            data-href="<?php echo site_url('Manageadmin/delete/'. $row->admin_id); ?>"
                            data-toggle="modal" data-target="#confirm-delete"><i class="la la-trash"></i></a>
                          </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                <?php }else{
                  echo "<center>ไม่มีข้อมูล</center>";
                } ?>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- Modal Confirm Delete Admin -->
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

<!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

<div class="modal-body">
ต้องการลบรายการหรือไม่
</div>

<div class="modal-footer">
<a class="btn btn-danger btn-ok">Delete</a>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div> -->
<script type="text/javascript">

$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

   //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>
