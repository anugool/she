<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0 d-inline-block">Promotion Code</h3>
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
      <section class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <form action="">
                <?php if($code){ ?>
                  <a href="javascript:;" data-href="#"
                    data-toggle="modal" data-target="#" class="btn btn-success">Generate Code</a>
                <?php }else{ ?>
                  <a href="javascript:;" data-href="<?php echo site_url('Promotioncode/generate'); ?>"
                    data-toggle="modal" data-target="#confirm-generate" class="btn btn-success">Generate Code</a>
                <?php } ?>

                  <a href="javascript:;" data-href="<?php echo site_url('Promotioncode/reset'); ?>"
                    data-toggle="modal" data-target="#confirm-reset" class="btn btn-warning">Reset Code</a>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <section class="card">
            <div class="card-body">
              <?php if($code){ ?>
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-content collapse show">
                        <div class="card-body">
                          <p><h4>Code List</h4></p>
                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Code</th>
                                </tr>
                              </thead>
                              <?php $num = 1; ?>
                              <tbody>
                                <?php foreach($code as $row): ?>
                                  <tr>
                                    <td scope="row"><?php echo $num++; ?></td>
                                    <td><?php echo $row->code_name; ?></td>
                                  </tr>
                                <?php endforeach; ?>
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
          </section>
        </div>
      </div>
    </div>


    <!-- Modal Generate Code -->
    <div class="modal fade" id="confirm-generate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cofrim Generate Code?</h5>
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

  <!-- Modal Reset Code -->
  <div class="modal fade" id="confirm-reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cofrim Reset Code?</h5>
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

$('#confirm-generate').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

  //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});

$('#confirm-reset').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

  //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});

</script>
