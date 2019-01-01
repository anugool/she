<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0 d-inline-block">Invoice</h3>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right">
              <button class="btn btn-info " type="button">print</button>
            </div>
          </div>
        </div>
        <div class="content-body">
        <section class="card">
            <div id="invoice-template" class="card-body">
                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row">
                    <div class="col-md-12 text-center text-md-right">
                        <h2>เอกสารออกเป็นชุด</h2>
                    </div>
                </div>

        		<div class="media row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group text-primary">
                         <span style="font-size: 20px; font-weight: bold;">บริษัท สำหรับการสาธิต จำกัด</span><br>
                         44/200-203 ถ.พหลโยธิน แขวงอนุสาวรีย์ เขตุบางเขน กรุงเทพ 10220<br>
                         <span>โทรศัพท์ </span>0-2971-4444<br>
                         <span>เลขประจำตัวผู้เสียภาษี</span> 12345678990123/สำนักงานใหญ่
                        </div>
                    </div>
				</div>  
                <div class="row">
                    <div class="col-12 text-center">
                        <h1><b>ใบกำกับภาษี</b><br><b>TAX INVOICE</b></h1>
                        
                    </div>
                </div>        
        
                <div class="row mx-0" >
                        <div class="col-md-7 col-sm-12 text-md-left border rounded">
                            <div class="row my-2">
                                <div class="col-md-2">
                                    <small><b>รหัสลูกค้า <br>
                                    Code</b></small>
                                    
                                </div>
                                <div class="col-md-10 text-primary" style="margin-top: 5px">
                                    570199  เลขประจำตัวผู้เสียภาษี 353000559999 / สำนักงานใหญ่
                                 </div>
                                 <div class="col-md-2">
                                 <small><b>นามลูกค้า <br>
                                    Name</b></small>
                                </div>
                                <div class="col-md-10 text-primary" style="margin-top: 5px">
                                    บริษัท โฮมเชฟ จำกัด(มหาชน)
                                </div>
                                 <div class="col-md-2">
                                 <small><b>ที่อยู่ <br>
                                    Address</b></small>
                                </div>
                                <div class="col-md-10 text-primary" style="margin-top: 5px">
                                    4/115 ซ.หมู่บ้านหนองแก ต.หนองแก อ.หัวหิน จ.ประจวบคีรีขันธ์ 77110
                                </div>
                                <div class="col-md-2">
                                <small><b>หมายเหตุ <br>
                                    Remark</b></small>
                                </div>
                                <div class="col-md-10 text-primary" style="margin-top: 5px">
                                    ซื้อสินค้าเป็นเงินสด เลขที่ใบสั่งซื้อ: PO57010099 จัดส่งโดย: EMS
                                </div>                             
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12  border rounded " >
                            <div class="row  my-2">
                                    <div class="col-md-3">
                                            <small><b>วันที่ <br>
                                            Date</b></small>
                                            
                                        </div>
                                        <div class="col-md-9 text-primary" style="margin-top: 5px">
                                            10/12/56 <span class="ml-4">คลังสินค้า 001</span>
                                    </div>
                                    <div class="col-md-3">
                                            <small><b>เลขที่ใบกำกับ<br>
                                            Order No.</b></small>
                                            
                                    </div>
                                    <div class="col-md-9 text-primary" style="margin-top: 5px">
                                            B1259/5522
                                     </div>
                                     <div class="col-md-3">
                                            <small><b>พนักงานขาย<br>
                                            Saleman</b></small>
                                    </div>
                                    <div class="col-md-9 text-primary" style="margin-top: 5px">
                                            ผ่องศรี
                                     </div>
                                     <div class="col-md-3">
                                            <small><b>กำหนดชำระเงิน<br>
                                            Time</b></small>
                                    </div>
                                    <div class="col-md-9 text-primary" style="margin-top: 5px">
                                           30;yo
                                     </div>
                                     <div class="col-md-3">
                                            <small><b>ครบกำหนดวันที่<br>
                                            Due Date</b></small>
                                    </div>
                                    <div class="col-md-9 text-primary" style="margin-top: 5px">
                                            21/12/2015
                                     </div>
                                </div>                           
                            </div>
                    </div>  

                    <div id="invoice-items-details" class="pt-2">
                        <div class="row">
                            <div class="table-responsive col-sm-12">
                                <table class="table table-column">
                                <thead>
                                    <tr class="text-center text-white border" style="background-color: #a12063;">
                                    <th>รหัสสินค้า<br>Product Code</th>
                                    <th width="40%">รายละเอียด<br>Description</th>
                                    <th>จำนวน<br>Quantity</th>
                                    <th>หน่วยละ<br>Unit</th>
                                    <th>ส่วนลด<br>Discount</th>
                                    <th>จำนวนเงิน<br>Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="border rounded text-right text-primary">
                                    <tr>
                                        <td class="text-left">134070</td>
                                        <td class="text-left">Printer Canon P2500</td>
                                        <td>$ 20.00/hr</td>
                                        <td>120</td>
                                        <td>250</td>
                                        <td>$ 2400.00</td>
                                    </tr>
                                    <tr >
                                        <td class="text-left">134070</td>
                                        <td class="text-left">Printer Canon P2500</td>
                                        <td>$ 20.00/hr</td>
                                        <td>120</td>
                                        <td>250</td>
                                        <td>$ 2400.00</td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                </tbody>
                                <tfoot >
                                        <tr class="text-primary">
                                            <td colspan="3" class="border">ห้าพันหนึ่งร้อยสามสิบสองสตางค์</td>
                                            <td colspan="2" class="text-dark border" style="background-color: rgba(255,192,203, 0.5);">
                                            <b>รวมเงิน<br>Sub Total</b></td>
                                            <td class="border text-right">45235</td>
                  
                                        </tr>
                                        <tr >
                                            <td colspan="3"  rowspan="2"> 
                                                ชำระโดย: <br>
                                                (  ) เงินสด <br>
                                                (  ) เช็คธนาคาร....................................สาขา....................................เลขที่....................................ลงวันที่....................................<br>
                                                <span class="ml-4">(ในกรณีชำระเงินด้วยเช็ค โปรดสั่งจ่ายในนามของ บริษัท เท่านั้น)</span> 
                                            </td>

                                            <td colspan="2" class="text-dark border" style="background-color: rgba(255,192,203, 0.5);">
                                            <b>ภาษีมูลค่าเพิ่ม</b><span class="ml-2 text-primary">7.00%</span><br><b> V.A.T</b>
                                            </td>
                                            <td class="border text-right text-primary">336.25</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-dark border" style="background-color: rgba(255,192,203, 0.5);">
                                            <b>ยอดรวมสุทธิ<br>Net Total</b></td>
                                            <td class="border text-right text-primary ">511.25</td>
                                        </tr>
                                </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                       <div class="row" >
                        <div class="col-md-3 col-sm-12 text-center">
                            ผู้รับของ /Reciever 
                            <div class="d-flex flex-column border rounded" style="height: 150px;">
                                    <div class="mb-auto">
                                    ได้รับสินค้าตามราายการถูกต้องแล้ว
                                    </div>
                                    <div class="text-left mx-1" style="border-top: 1px solid black; padding: 6px 0px 6px 0px">
                                    วันที่/Date __________________________
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center">
                            ผู้ส่งของ /Delivery By 
                            <div class="d-flex flex-column border rounded" style="height: 150px;">
                                    <div class="mb-auto">
                                    </div>
                                    <div class="text-left mx-1" style="border-top: 1px solid black; padding: 6px 0px 6px 0px">
                                    วันที่/Date __________________________
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center">
                            ผู้รับเงิน /Collector 
                            <div class="d-flex flex-column border rounded" style="height: 150px;">
                                    <div class="mb-auto">
                                    </div>
                                    <div class="text-left mx-1" style="border-top: 1px solid black; padding: 6px 0px 6px 0px">
                                    วันที่/Date __________________________
                                    </div>
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-12 text-center">
                            ผู้จัดการ /Manager 
                            <div class="d-flex flex-column border rounded" style="height: 150px;">
                                    <div class="mb-auto">
                                    </div>
                                    <div class="text-left mx-1" style="border-top: 1px solid black; padding: 6px 0px 6px 0px">
                                    วันที่/Date __________________________
                                    </div>
                            </div>
                        </div>
                </div>
            </div>  
        </section>
    </div>
</div>











<script>
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
            var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
            filePath.html("<small>Selected File: " + fileName + "</small>");
        });
    });
</script>