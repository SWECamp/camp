<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>ADMIN</h1>
                        
            <center><table borber="1">
            	<tr>
                    <th>ชื่อต้น</th>
            		<th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>email</th>
            		<th>ยืนยัน</th>
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
                    <td><?php echo $row->email; ?></td>
                    <td><?php 
                        if($row->artifact == 1){
                            echo "<a href='".site_url('camp/reArtifact/'.$row->accountID)."'>ยืนยัน</a>";
                        }else{
                            echo "ยืนยันแล้ว";
                        }
                     ?></td>
                    <!-- echo "<a href='".site_url('camp/reArtifact/'.$row->accountID)."'>ยืนยัน</a>":echo ""; -->
        </tr>
        <?php }
         ?>
        </table></center>
        </div>
    </section>