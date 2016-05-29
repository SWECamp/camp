<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>ADMIN</h1>
                        
            <center><table borber="1">
            	<tr>
                    <th style="text-align:center">ชื่อต้น</th>
            		<th style="text-align:center">ชื่อ</th>
                    <th style="text-align:center">นามสกุล</th>
                    <th style="text-align:center">ประเภท</th>
                    <th style="text-align:center">จำนวนเงิน</th>
                    <th style="text-align:center">วันที่ชำระเงิน</th>
            		<th style="text-align:center">สถานะการชำระเงิน</th>
            	</tr>
        <?php 
        foreach($data->result() as $row) { ?>
        <tr>
                    <td><?php if($row->title == 1){ echo "นาย";
                    }else if($row->title == 1){ echo "นาง";
                        }else{ echo "นางสาว";
                        } ?></td>
                    <td><?php echo $row->firstname; ?></td>
                    <td><?php echo $row->lastname; ?></td>
                    <td><?php if($row->join == 1) echo "ผู้นำเสนอผลงาน";
                    else echo "ผู้สนใจเข้าร่วมงาน"  ?></td>
                    <td></td>
                    <td></td>
                    <td><?php 
                        if($row->artifact == 1){
                            echo "<a href='".site_url('camp/reArtifact/'.$row->accountID)."'>ยืนยัน</a>";
                        }else{
                            echo "ยืนยันการชำระเงินแล้ว";
                        }
                     ?></td>
                    <!-- echo "<a href='".site_url('camp/reArtifact/'.$row->accountID)."'>ยืนยัน</a>":echo ""; -->
        </tr>
        <?php }
         ?>
        </table></center>
        </div>
    </section>