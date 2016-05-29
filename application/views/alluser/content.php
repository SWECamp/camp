<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>ค้นหารายชื่อผู้เข้าร่วมการปประชุมทางวิชาการ</h1>
         <form action="<?php echo site_url('camp/search'); ?>" method="post">
            <div class="form-group col-lg-6">
                    <label>ชื่อ   </label><br>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
            </div>
            <div class="form-group col-lg-6">
                    <label>นามสกุล   </label><br>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
            </div>

         	<label>สถานะการชำระเงิน</label> <br>
            <label><input type="radio"  name="money" value="2" <?php if($money==2) echo "checked"; ?>> ชำระเงินแล้ว</label>&nbsp;&nbsp;&nbsp;
         	<label><input type="radio"  name="money" value="1" <?php if($money==1) echo "checked"; ?>> ค้างชำระ</label>&nbsp;&nbsp;&nbsp;
         	<label><input type="radio"  name="money" value="3" <?php if($money==3) echo "checked"; ?>> ไม่เลือก</label>&nbsp;&nbsp;&nbsp;
            <br>
            <input type="submit" class="btn btn-primary"  value="ค้นหา">
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