<div class="app-content content">
      <div class="content-wrapper">

        <div class="content-body"><!-- Basic Tables start -->
          <?php if ($this->session->flashdata('msg_succ')) {?>
            <script>
            swal({
              title: "<?php echo $this->session->flashdata('msg_succ'); ?>",
              allowOutsideClick: true,
              type: "success",
            });
            </script>
          <?php } ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content colslapse show">
                      <?php if($confirm){ ?>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>รายการสั่งซื้อ</th>
                                            <th>สถานะการสั่งซื้อ</th>
                                            <th>วันที่</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($confirm as $row): ?>
                                        <tr>
                                            <th>1</th>
                                            <th scope="row"><a href="<?php echo site_url("confirmorder/detail/". $row->pay_id); ?>"><?php echo $row->order_no; ?></a></th>
                                            <th><button class="btn btn-sm btn-yellow btn-lighten-4 text-dark"><?php echo $row->order_status; ?></button></th>
                                            <td><?php echo date('d-m-Y', strtotime($row->order_create)); ?></td>
                                        </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
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

    </div>
</div>
