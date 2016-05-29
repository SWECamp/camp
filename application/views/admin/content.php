<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>ADMIN</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="text-align:center">ชื่อต้น</th>
                    <th style="text-align:center">ชื่อ</th>
                    <th style="text-align:center">นามสกุล</th>
                    <th style="text-align:center">ประเภท</th>
                    <th style="text-align:center">จำนวนเงิน</th>
                    <th style="text-align:center">วันที่ชำระเงิน</th>
                    <th style="text-align:center">สถานะการชำระเงิน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
        foreach($data->result() as $row) { ?>
        <tr>
            <form action="<?php echo site_url('camp/reArtifact/'.$row->accountID)?>" method="post">
            <?php  $mainpay=0;
                if($row->join == 1) $mainpay = 7000;
                elseif($row->join == 2) $mainpay = 5000;
                $price = $mainpay+($row->tour1*2000)+($row->tour2*1000)+($row->tour3*1000); ?>
                    <td><?php if($row->title == 1){ echo "นาย";
                    }else if($row->title == 1){ echo "นาง";
                        }else{ echo "นางสาว";
                        } ?></td>
                    <td class="text-left"><?php echo $row->firstname; ?></td>
                    <td class="text-left"><?php echo $row->lastname; ?></td>
                    <td><?php if($row->join == 1) echo "ผู้นำเสนอผลงาน";
                    else echo "ผู้สนใจเข้าร่วมงาน" ; ?></td>
                    <td><?=$price?></td>
                    <td><?php 
                        if($row->artifact == 0){
                            echo $row->datesubit;
                        }else{
                            ?>
                            <input type="text" name="dat" placeholder="<?=date("Y-m-d H:i:s")?>" required>
                            <?php
                        }
                     ?></td>
                    <td><?php 
                        if($row->artifact == 1){
                            //echo "<a href='".site_url('camp/reArtifact/'.$row->accountID)."'>ยืนยัน</a>";
                            ?>
                            <input type="submit" value="ยืนยัน"><?php
                        }else{
                            echo "<font style='color:green;'>ยืนยันการชำระเงินแล้ว</font>";
                        }
                     ?></td>
                    <!-- echo "<a href='".site_url('camp/reArtifact/'.$row->accountID)."'>ยืนยัน</a>":echo ""; -->
        </tr>
        </form>
        <?php }
         ?>

                </tr>
            </tbody>
        </table>
        

        </div>
    </section>