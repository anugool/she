<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shelongs</title>
</head>

<body>
    <p>www.shelongs.com</p>
    <table width="1200px">
        <tr>
            <td width="20%">[รายการสั่งซื้อเลขที่ <?php echo $maxorder->order_no; ?>]</td>
            <td width="50%"></td>
        </tr>
    </table>
    <br>
    <table width="1200px">
        <thead bgcolor="#ec125f">
            <th width="10%">
                <font color=white>ลำดับ</font>
            </th>
            <th width="45%">
                <font color=white>รายการ</font>
            </th>
            <th width="15%">
                <font color=white>ค่าบริการ(บาท)</font>
            </th>
            <th width="15%">
                <font color=white>รวม(บาท)</font>
            </th>
        </thead>
        <tbody bgcolor="#DCDCDC">
            <tr>
                <td align="center">1</td>
                <td>สมัครสมาชิก SHELONGS แบบรายเดือน</td>
                <td align="right"><?php echo number_format($total_price, 2); ?></td>
                <td align="right"><?php echo number_format($total_price, 2); ?></td>
            </tr>
            <tr align="right">
                <td colspan="2" align="right">รวม</td>
                <td ><?php echo number_format($total_price, 2); ?></td>
                <td><h1><?php echo number_format($total_price, 2); ?></h1></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="600px">
        <thead bgcolor="#ec125f">
            <th>
                <font color=white>ข้อมูลสำรองสำหรับการออกใบเสร็จรับเงิน</font>
            </th>
        </thead>
        <tbody bgcolor="#DCDCDC">
            <tr>
                <td><b>&nbsp;&emsp;&emsp;
                        จ่ายในนาม</b>: บริษัท ชีลองส์ 959 กรุ๊ป จำกัด
                </td>
            </tr>
            <tr>
                <td><b>&emsp;&emsp;&emsp;&emsp;&emsp;
                        ที่ตั้ง</b>: 657 ถนนประชาราษฎร์บำเพ็ญ แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310
                </td>
            </tr>
        </tbody>
    </table>
    <p>
        <b>โปรดอ่านเงื่อนไขเหล่านี้</b>
        <ol>
            <li>บริษัทขอสงวนสิทธิ์ในการเปลี่ยนแปลงค่าบริการโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
            <li>ในกรณีการโอนเงินมีสลิปใบโอน ให้เก็บใบโอนไว้เป็นหลักฐาน เผื่อในกรณีที่ต้องมีการตรวจสอบภายหลัง</li>
        </ol>
    </p>
    <p>
        ชำระค่าบริการโดยโอนเข้าบัญชีธนาคารต่อไปนี้
    </p>
    <table width="900px" >
        <thead bgcolor="#ec125f">
            <th width="20%">
                <font color=white>ธนาคาร</font>
            </th>
            <th width="20%">
                <font color=white>เลขบัญชี</font>
            </th>
            <th width="20%">
                <font color=white>ประเภทบัญชี</font>
            </th>
            <th width="20%">
                <font color=white>ชื่อบัญชี</font>
            </th>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://parewa253607.files.wordpress.com/2013/06/scb12_scb_easy_512x512px.png" alt="" width="20px" height="20px"> ไทยพาณิชย์</td>
                <td>038-469682-4</td>
                <td>ออมทรัพย์</td>
                <td>บริษัท จำกัด ชีลองส์ 959</td>
            </tr>
        </tbody>
    </table>
    <p><b>ในกรณีที่ชำระเงินแล้ว ให้กรอกฟอร์มแจ้งชำระเงินได้ที่นี่<br><a href="https://www.shelongs.com/#!/confirmpayment">แจ้งการชำระเงินคลิกที่นี้</a></b></p>
    <br>
    <p>ขอบคุณที่ใช้บริการค่ะ</p>
    <br>
    <p>ด้วยความนับถือ<br>ผ่ายบริการลูกค้า</p>
    <br>
    <p>
        <font color=gray>
            บริษัท ชีลองส์ 959 กรุ๊ป จำกัด<br>
             657 ถนนประชาราษฎร์บำเพ็ญ แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310<br>
            โทร: 02-275-8886<br>
            อีเมล: <a href="#">support@shelongs.com</a><br>
            เว็บไซต์: <a href="#">https://www.shelongs.com</a>
        </font>
    </p>
</body>

</html>
