<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>ค้นหารายชื่อผู้เข้าร่วมการปประชุมทางวิชาการ</h1>
         <form action="<?php echo site_url('camp/search'); ?>" method="post">
         	ชื่อ <input type="text" name="firstname" value="<?php echo $firstname; ?>">
         	นามสกุล <input type="text" name="lastname" value="<?php echo $lastname; ?>"></br></br>
         	สถานะการชำระเงิน <input type="radio" name="money" value="2" <?php if($money==2) echo "checked"; ?>> ชำระเงินแล้ว
         	<input type="radio" name="money" value="1" <?php if($money==1) echo "checked"; ?>> ค้างชำระ
         	<input type="radio" name="money" value="3" <?php if($money==3) echo "checked"; ?>> ไม่เลือก</br>
         	<input type="submit" value="ค้นหา">
         </form>
         <br>
          <table class="table table-hover">
            <thead>
                <tr>
                    <th style="text-align:center">ชื่อ-นามสกุล</th>
                    <th style="text-align:center">ประเภทการสมัคร</th>
                    <th style="text-align:center">email</th>
                    <th style="text-align:center">สถานะการชำระเงิน</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data->result() as $row) { ?>
                <tr><td><?php echo $row->firstname." ".$row->lastname ?></td>
                	<td><?php if($row->join == 1){
                		echo "ผู้นำเสนอผลงาน";
                	}else{
                		echo "ผู้สนใจเข้าร่วมงาน";
                	} ?></td>
                	<td><?php echo $row->email; ?></td>
                	<td><?php if($row->artifact == 0){
                		echo "<font color='green'>ชำระเงินแล้ว</font>";
                	}else{
                		echo "<font color='orange'>ค้างชำระ</font>";
                	} ?></td>
                </tr>
            <?php } ?>
             </tbody>
           </table>
        </div>
    </section>