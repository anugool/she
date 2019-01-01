<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0 d-inline-block">Confirm Order</h3>
      </div>
    </div>
    <div class="content-body">
      <section class="card">
        <div id="invoice-template" class="card-body">
          <div class="row justify-content-center mx-0" >
            <div class="col-12 text-center">
              <h4>คำสั่งซื้อเลขที่ <?php echo $get_detail->order_no; ?></h4>
            </div>
            <div class="col-md-6 text-sm-12 p-2 border rounded">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">ขื่อ:</label>
                <div class="col-md-9">
                  <?php echo $get_detail->cs_fname ." ". $get_detail->cs_lname; ?>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">เบอร์โทรศัพท์:</label>
                <div class="col-md-9">
                  <?php echo $get_detail->pay_tel; ?>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">ชื่อบัญชี:</label>
                <div class="col-md-9">
                  <?php echo $get_detail->bank_owner; ?>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">ธนาคาร:</label>
                <div class="col-md-9">
                  <?php echo $get_detail->bank_name; ?>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">เลขที่บัญชี:</label>
                <div class="col-md-9">
                  <?php echo $get_detail->bank_no; ?>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">ยอดโอน:</label>
                <div class="col-md-9">
                  <?php echo number_format($get_detail->pay_price, 2); ?> บาท
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">วันที่ : เวลา:</label>
                <div class="col-md-9">
                  <?php echo date('d-m-Y', strtotime($get_detail->pay_date)) ." : ". date('H:i', strtotime($get_detail->pay_time)); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-12 text-center">
                  <img src="<?php echo base_url(); ?>/assets/uploads/slip/<?php echo $get_detail->pay_image; ?>" alt="ยอดโอน" class="img-thumbnail">
                </div>
              </div>
              <div class="text-center">
                <!-- <button type="button" class="btn btn-icon btn-success mb-1" style="width:300px;">Accpet</button> -->
                <a href="javascript:;" class="btn btn-icon btn-success mb-1" style="width:300px;"
                data-href="<?php echo site_url('Confirmorder/accpet_order/'. $get_detail->order_id); ?>"
                data-toggle="modal" data-target="#confirm-accpet">Accpet</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>


<!--Modal Confirm Approve Cs -->
<div class="modal fade" id="confirm-accpet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cofrim Accpet?</h5>
        <button type="button" class="close" data-dismiss="modal"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- <div class="debug-url"></div> -->
    <div class="modal-footer">
      <a class="btn btn-success btn-ok" style="color: white;">OK</a>
      <button type="button" class="btn btn-secondary"
      data-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

$('#confirm-accpet').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>
