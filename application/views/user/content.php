<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>ผู้ร่วมการประชุมวิชาการ</h1>
        <div class="col-md-2">
        <br>
        </div>
		<div class="col-md-8 text-left">
			<hr> 
			<?php foreach($data->result() as $row) { ?>


			<?php  
				$mainpay=0;
				if($row->join == 1) $mainpay = 7000;
				elseif($row->join == 2) $mainpay = 5000;

				$price = $mainpay+($row->tour1*2000)+($row->tour2*1000)+($row->tour3*1000); ?>
				<p class="text-center	">จำนวนเงินที่ต้องชำระ <font color="red" size="20px"> <?=$price?> </font> บาท
					<br>
					<?php if ($row->artifact == 0)echo '<font color="green" >ยืนยันการชำระเงินเเล้ว</font>'; 
				else echo '<font color="red" >รอตรวจสอบการชำระเงิน</font>'; ?>	
				</p>


				<hr> 
			<form action="<?php echo site_url('camp/reUser/'.$row->accountID)?>" method="post"> 
				<div class="form-group col-lg-2">
					<label>คำนำหน้า</label>
					<select name="title">
					  <option value="1" <?php if($row->title == 1) echo "selected"; ?>>นาย</option>
					  <option value="2" <?php if($row->title == 2) echo "selected"; ?>>นาง</option>
					  <option value="3" <?php if($row->title == 3) echo "selected"; ?>>นางสาว</option>

					</select>
				</div>
				<div class="form-group col-lg-5">
					<label>ชื่อ</label>
					<input type="text" name="firstname" class="form-control" id="" value="<?php echo $row->firstname; ?>" placeholder="ชื่อ" > 
				</div>
				<div class="form-group col-lg-5">
					<label>นามสกุล</label>
					<input type="text" name="lastname" class="form-control" id="" value="<?php echo $row->lastname; ?>" placeholder="นามสกุล"> 
				</div>


				<div class="form-group col-lg-12">
					<label>ที่อยู่</label><br>
					<textarea name="address" style="height:100px;width:100%;" rows="6" cols="50" placeholder="<?php echo $row->address; ?>" ><?php echo $row->address; ?></textarea>
 
				</div>
				<div class="form-group col-lg-6">
					<label>จังหวัด</label><br>
					<select name="province" style="width:100%;" >
					  <option value="0">- เลือกจังหวัด -</option>


<option value="64" <?php if($row->province == 64) echo "selected"; ?>>กระบี่   </option>

<option value="1" <?php if($row->province == 1) echo "selected"; ?>>กรุงเทพมหานคร   </option>

<option value="56" <?php if($row->province == 56) echo "selected"; ?>>กาญจนบุรี   </option>

<option value="34" <?php if($row->province == 34) echo "selected"; ?>>กาฬสินธุ์   </option>

<option value="49" <?php if($row->province == 49) echo "selected"; ?>>กำแพงเพชร   </option>

<option value="28" <?php if($row->province == 28) echo "selected"; ?>>ขอนแก่น   </option>

<option value="13" <?php if($row->province == 13) echo "selected"; ?>>จันทบุรี   </option>

<option value="15" <?php if($row->province == 15) echo "selected"; ?>>ฉะเชิงเทรา   </option>

<option value="11" <?php if($row->province == 11) echo "selected"; ?>>ชลบุรี   </option>

<option value="9" <?php if($row->province == 9) echo "selected"; ?>>ชัยนาท   </option>

<option value="25" <?php if($row->province == 25) echo "selected"; ?>>ชัยภูมิ   </option>

<option value="69" <?php if($row->province == 69) echo "selected"; ?>>ชุมพร   </option>

<option value="72" <?php if($row->province == 72) echo "selected"; ?>>ตรัง   </option>

<option value="14" <?php if($row->province == 14) echo "selected"; ?>>ตราด   </option>

<option value="50" <?php if($row->province == 50) echo "selected"; ?>>ตาก   </option>

<option value="17" <?php if($row->province == 17) echo "selected"; ?>>นครนายก   </option>

<option value="58" <?php if($row->province == 58) echo "selected"; ?>>นครปฐม   </option>

<option value="36" <?php if($row->province == 36) echo "selected"; ?>>นครพนม   </option>

<option value="19" <?php if($row->province == 19) echo "selected"; ?>>นครราชสีมา   </option>

<option value="63" <?php if($row->province == 63) echo "selected"; ?>>นครศรีธรรมราช   </option>

<option value="47" <?php if($row->province == 47) echo "selected"; ?>>นครสวรรค์   </option>

<option value="3"<?php if($row->province == 3) echo "selected"; ?>>นนทบุรี   </option>

<option value="76" <?php if($row->province == 76) echo "selected"; ?>>นราธิวาส   </option>

<option value="43" <?php if($row->province == 43) echo "selected"; ?>>น่าน   </option>

<option value="77" <?php if($row->province == 77) echo "selected"; ?>>บึงกาฬ</option>

<option value="20" <?php if($row->province == 20) echo "selected"; ?>>บุรีรัมย์   </option>

<option value="4" <?php if($row->province == 4) echo "selected"; ?>>ปทุมธานี   </option>

<option value="62" <?php if($row->province == 62) echo "selected"; ?>>ประจวบคีรีขันธ์   </option>

<option value="16" <?php if($row->province == 16) echo "selected"; ?>>ปราจีนบุรี   </option>

<option value="74" <?php if($row->province == 74) echo "selected"; ?>>ปัตตานี   </option>

<option value="5" <?php if($row->province == 5) echo "selected"; ?>>พระนครศรีอยุธยา   </option>

<option value="44" <?php if($row->province == 44) echo "selected"; ?>>พะเยา   </option>

<option value="65" <?php if($row->province == 65) echo "selected"; ?>>พังงา   </option>

<option value="73" <?php if($row->province == 73) echo "selected"; ?>>พัทลุง   </option>

<option value="53" <?php if($row->province == 53) echo "selected"; ?>>พิจิตร   </option>

<option value="52" <?php if($row->province == 52) echo "selected"; ?>>พิษณุโลก   </option>

<option value="66" <?php if($row->province == 66) echo "selected"; ?>>ภูเก็ต   </option>

<option value="32" <?php if($row->province == 32) echo "selected"; ?>>มหาสารคาม   </option>

<option value="37" <?php if($row->province == 37) echo "selected"; ?>>มุกดาหาร   </option>

<option value="75" <?php if($row->province == 75) echo "selected"; ?>>ยะลา   </option>

<option value="24" <?php if($row->province == 24) echo "selected"; ?>>ยโสธร   </option>

<option value="33" <?php if($row->province == 33) echo "selected"; ?>>ร้อยเอ็ด   </option>

<option value="68" <?php if($row->province == 68) echo "selected"; ?>>ระนอง   </option>

<option value="12" <?php if($row->province == 12) echo "selected"; ?>>ระยอง   </option>

<option value="55" <?php if($row->province == 55) echo "selected"; ?>>ราชบุรี   </option>

<option value="7" <?php if($row->province == 7) echo "selected"; ?>>ลพบุรี   </option>

<option value="40" <?php if($row->province == 40) echo "selected"; ?>>ลำปาง   </option>

<option value="39" <?php if($row->province == 39) echo "selected"; ?>>ลำพูน   </option>

<option value="22" <?php if($row->province == 22) echo "selected"; ?>>ศรีสะเกษ   </option>

<option value="35" <?php if($row->province == 35) echo "selected"; ?>>สกลนคร   </option>

<option value="70" <?php if($row->province == 70) echo "selected"; ?>>สงขลา   </option>

<option value="71" <?php if($row->province == 71) echo "selected"; ?>>สตูล   </option>

<option value="2" <?php if($row->province == 2) echo "selected"; ?>>สมุทรปราการ   </option>

<option value="60" <?php if($row->province == 60) echo "selected"; ?>>สมุทรสงคราม   </option>

<option value="59" <?php if($row->province == 59) echo "selected"; ?>>สมุทรสาคร   </option>

<option value="10" <?php if($row->province == 10) echo "selected"; ?>>สระบุรี</option>

<option value="18" <?php if($row->province == 18) echo "selected"; ?>>สระแก้ว   </option>

<option value="8" <?php if($row->province == 8) echo "selected"; ?>>สิงห์บุรี   </option>

<option value="57" <?php if($row->province == 57) echo "selected"; ?>>สุพรรณบุรี   </option>

<option value="67" <?php if($row->province == 67) echo "selected"; ?>>สุราษฎร์ธานี   </option>

<option value="21" <?php if($row->province == 21) echo "selected"; ?>>สุรินทร์   </option>

<option value="51" <?php if($row->province == 51) echo "selected"; ?>>สุโขทัย   </option>

<option value="31" <?php if($row->province == 31) echo "selected"; ?>>หนองคาย   </option>

<option value="27" <?php if($row->province == 21) echo "selected"; ?>>หนองบัวลำภู   </option>

<option value="6" <?php if($row->province == 6) echo "selected"; ?>>อ่างทอง   </option>

<option value="26" <?php if($row->province == 26) echo "selected"; ?>>อำนาจเจริญ   </option>

<option value="29" <?php if($row->province == 29) echo "selected"; ?>>อุดรธานี   </option>

<option value="41" <?php if($row->province == 41) echo "selected"; ?>>อุตรดิตถ์   </option>

<option value="48" <?php if($row->province == 48) echo "selected"; ?>>อุทัยธานี   </option>

<option value="23" <?php if($row->province == 23) echo "selected"; ?>>อุบลราชธานี   </option>

<option value="45" <?php if($row->province == 45) echo "selected"; ?>>เชียงราย   </option>

<option value="38" <?php if($row->province == 38) echo "selected"; ?>>เชียงใหม่   </option>

<option value="61" <?php if($row->province == 61) echo "selected"; ?>>เพชรบุรี   </option>

<option value="54" <?php if($row->province == 54) echo "selected"; ?>>เพชรบูรณ์   </option>

<option value="30" <?php if($row->province == 30) echo "selected"; ?>>เลย   </option>

<option value="42" <?php if($row->province == 42) echo "selected"; ?>>แพร่   </option>

<option value="46" <?php if($row->province == 46) echo "selected"; ?>>แม่ฮ่องสอน   </option>
					</select>
				</div>
				<div class="form-group col-lg-6">
					
					<label>รหัสไปรษณีย์</label>
					<input type="text" name="postal" class="form-control" id="" value="<?php echo $row->postalcode; ?>" placeholder="รหัสไปรษณีย์" >

				</div>
				<div class="form-group col-lg-6">
					<label>เบอร์โทรศัพท์</label>
					<input type="text" name="phone" class="form-control" id="" value="<?php echo $row->phoneno; ?>" placeholder="เบอร์โทรศัพท์" > 
				</div>
				<div class="form-group col-lg-6">
					<label>e-mail</label>
					<input type="text" name="email" class="form-control" id="" value="<?php echo $row->email; ?>" placeholder="e-mail" > 
				</div>
				<div class="form-group col-lg-12">
					<label>หน่วยงานต้นสังกัด</label>
					<input type="text" name="department" class="form-control" id="" value="<?php echo $row->department; ?>" placeholder="" > 
				</div>
				<div class="form-group col-lg-12">
					<label>รายการแพ้อาหาร</label><br>
					<textarea name="food" style="height:100px;width:100%;" rows="6" cols="50" placeholder="<?php echo $row->food; ?>" ><?php echo $row->food; ?></textarea>
 
				</div>
				<div class="form-group col-lg-12	">
					<label>เลือกประเภทผู้เข้าร่วมประชุมวิชาการ</label>
					<select name="join" style="width:100%;" <?php if($row->artifact == 0) echo " disabled"; ?>>
					  <option value="1" <?php if($row->join == 1) echo "selected"; ?>>ผู้นำเสนอผลงาน - <font color="red">ค่าธรรมเนียม 7,000 บาท </font></option>
					  <option value="2" <?php if($row->join == 2) echo "selected"; ?>>ผู้สนใจเข้าร่วมงาน - <font color="red">ค่าธรรมเนียม 5,000 บาท</font></option>

					</select>
				</div>
				<div class="form-group col-lg-12		">
					<label> เข้าร่วมกิจกรรมท่องเที่ยว</label><br>
					<select name="tour" style="width:100%;" <?php if($row->artifact == 0) echo " disabled"; ?>>
						<option value="0">- เลือกเข้าร่วมกิจกรรม -</option>
					  <option value="1" <?php if($row->tour1 == 1) echo "selected"; ?>>ชม โลมาสีชมพู ดำน้ำทะเลขนอม-หมู่เกาะทะเลใต้เกาะราบ หรือ เกาะแตน
- <small>ค่าธรรมเนียม 2,000 บาท</small></option>
					  <option value="2" <?php if($row->tour2 == 1) echo "selected"; ?>>เขาหลวง น้ำตกกรุงชิง - <small>ค่าธรรมเนียม 1,000 บาท</small> </option>
					  <option value="3" <?php if($row->tour3 == 1) echo "selected"; ?>>สัมผัสเสน่ห์เมืองนครศรีธรรมราช  - <small>ค่าธรรมเนียม 1,000</small>  </option>
					  <option value="4" <?php if($row->tour1 == 0&&$row->tour2 == 0&&$row->tour3 == 0) echo "selected"; ?>>ไม่เข้าร่วมกิจรรม</option>
					</select>
<!-- 
					<input type="checkbox" name="tour1" value="1" <?php if($row->tour1 == 1) echo "checked"; if($row->artifact == 0) echo " disabled"; ?>> ชม โลมาสีชมพู ดำน้ำทะเลขนอม-หมู่เกาะทะเลใต้เกาะราบ หรือ เกาะแตน
<small>จ่ายเงินเพิ่ม 2,000</small> <br>
					<input type="checkbox" name="tour2" value="1" <?php if($row->tour2 == 1) echo "checked"; if($row->artifact == 0) echo " disabled"; ?>> เขาหลวง น้ำตกกรุงชิง <small>จ่ายเงินเพิ่ม 1,000</small>  <BR>
					<input type="checkbox" name="tour3" value="1" <?php if($row->tour3 == 1) echo "checked"; if($row->artifact == 0) echo " disabled"; ?>> สัมผัสเสน่ห์เมืองนครศรีธรรมราช <small>จ่ายเงินเพิ่ม 1,000</small>  <br>
 -->				</div>



				
				<hr>
				<div class="form-group col-lg-12">
					<label>รหัสผ่าน</label>
					<input type="password" name="password" class="form-control" id="" value="<?php echo $row->password; ?>" min="6" placeholder="กรุณาใส่รหัสผ่านอย่างน้อย 6 ตัวอักษร" > 
				</div>
				<div class="form-group col-lg-12">
					<label>ใส่รหัสผ่านอีกครั้ง</label>
					<input type="password" name="" class="form-control" id="" value="<?php echo $row->password; ?>" min="6" placeholder="กรุณายืนยันรหัสผ่าน" > 
				</div>
				
				
				<div class="form-group col-lg-12 text-center	">
					<button type="submit" class="btn btn-primary">ยืนยัน</button>
				</div>

				
		</form>
		<?php }
         ?>
		</div>
		<div class="col-md-2">
        	
        </div>
            
        </div>
    </section>