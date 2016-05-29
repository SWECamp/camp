<style type="text/css">
.pinred{
	color:red;
	font-size:22px;
}
</style>
<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>สมัครเข้าร่วมการประชุม</h1>
        <div class="col-md-2">
        	
        </div>
		<div class="col-md-8 text-left">
			<form id="registrationForm" action="<?php echo site_url('camp/submitRegister')?>" method="post"  data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh"> 
				<div class="form-group col-lg-2">
					<label>คำนำหน้า <font class="pinred">*</font></label>
					<select name="title">
					  <option value="1">นาย</option>
					  <option value="2">นาง</option>
					  <option value="3">นางสาว</option>

					</select>
				</div>
				<div class="form-group col-lg-5">
					<label>ชื่อ <font class="pinred">*</font></label>
					<input type="text" name="firstname" class="form-control" id="" value="" placeholder="ชื่อ"  data-fv-notempty="true" required> 
				</div>
				<div class="form-group col-lg-5">
					<label>นามสกุล  <font class="pinred">*</font></label>
					<input type="text" name="lastname" class="form-control" id="" value="" placeholder="นามสกุล" required> 
				</div>
				<br>
				<div class="form-group col-lg-12">
					<label>ที่อยู่  <font class="pinred">*</font></label><br>
					<textarea name="address" style="height:100px;width:100%;" rows="6" cols="50" placeholder="181/52 ...."></textarea>
 
				</div>
				<div class="form-group col-lg-6">
					<label>จังหวัด  <font class="pinred">*</font></label><br>
					<select name="province" style="width:100%;" >
					  <option value="0">- เลือกจังหวัด -</option>


<option value="64">กระบี่   </option>

<option value="1">กรุงเทพมหานคร   </option>

<option value="56">กาญจนบุรี   </option>

<option value="34">กาฬสินธุ์   </option>

<option value="49">กำแพงเพชร   </option>

<option value="28">ขอนแก่น   </option>

<option value="13">จันทบุรี   </option>

<option value="15">ฉะเชิงเทรา   </option>

<option value="11">ชลบุรี   </option>

<option value="9">ชัยนาท   </option>

<option value="25">ชัยภูมิ   </option>

<option value="69">ชุมพร   </option>

<option value="72">ตรัง   </option>

<option value="14">ตราด   </option>

<option value="50">ตาก   </option>

<option value="17">นครนายก   </option>

<option value="58">นครปฐม   </option>

<option value="36">นครพนม   </option>

<option value="19">นครราชสีมา   </option>

<option value="63">นครศรีธรรมราช   </option>

<option value="47">นครสวรรค์   </option>

<option value="3">นนทบุรี   </option>

<option value="76">นราธิวาส   </option>

<option value="43">น่าน   </option>

<option value="77">บึงกาฬ</option>

<option value="20">บุรีรัมย์   </option>

<option value="4">ปทุมธานี   </option>

<option value="62">ประจวบคีรีขันธ์   </option>

<option value="16">ปราจีนบุรี   </option>

<option value="74">ปัตตานี   </option>

<option value="5">พระนครศรีอยุธยา   </option>

<option value="44">พะเยา   </option>

<option value="65">พังงา   </option>

<option value="73">พัทลุง   </option>

<option value="53">พิจิตร   </option>

<option value="52">พิษณุโลก   </option>

<option value="66">ภูเก็ต   </option>

<option value="32">มหาสารคาม   </option>

<option value="37">มุกดาหาร   </option>

<option value="75">ยะลา   </option>

<option value="24">ยโสธร   </option>

<option value="33">ร้อยเอ็ด   </option>

<option value="68">ระนอง   </option>

<option value="12">ระยอง   </option>

<option value="55">ราชบุรี   </option>

<option value="7">ลพบุรี   </option>

<option value="40">ลำปาง   </option>

<option value="39">ลำพูน   </option>

<option value="22">ศรีสะเกษ   </option>

<option value="35">สกลนคร   </option>

<option value="70">สงขลา   </option>

<option value="71">สตูล   </option>

<option value="2">สมุทรปราการ   </option>

<option value="60">สมุทรสงคราม   </option>

<option value="59">สมุทรสาคร   </option>

<option value="10">สระบุรี</option>

<option value="18">สระแก้ว   </option>

<option value="8">สิงห์บุรี   </option>

<option value="57">สุพรรณบุรี   </option>

<option value="67">สุราษฎร์ธานี   </option>

<option value="21">สุรินทร์   </option>

<option value="51">สุโขทัย   </option>

<option value="31">หนองคาย   </option>

<option value="27">หนองบัวลำภู   </option>

<option value="6">อ่างทอง   </option>

<option value="26">อำนาจเจริญ   </option>

<option value="29">อุดรธานี   </option>

<option value="41">อุตรดิตถ์   </option>

<option value="48">อุทัยธานี   </option>

<option value="23">อุบลราชธานี   </option>

<option value="45">เชียงราย   </option>

<option value="38">เชียงใหม่   </option>

<option value="61">เพชรบุรี   </option>

<option value="54">เพชรบูรณ์   </option>

<option value="30">เลย   </option>

<option value="42">แพร่   </option>

<option value="46">แม่ฮ่องสอน   </option>
					</select>
				</div>
				<div class="form-group col-lg-6">
					<label>รหัสไปรษณีย์  <font class="pinred">*</font></label>
					<input type="text" name="postal" class="form-control" id="" value="" placeholder="รหัสไปรษณีย์" required>

				</div>
				<div class="form-group col-lg-6">
					<label>เบอร์โทรศัพท์ <font class="pinred">*</font></label>
					<input type="text" name="phone" class="form-control" id="" value="" placeholder="เบอร์โทรศัพท์" required> 
				</div>
				<div class="form-group col-lg-6">
					<label>e-mail  <font class="pinred">*</font></label>
					<input type="text" name="email" class="form-control" id="" value="" placeholder="e-mail" required> 
				</div>
				<div class="form-group col-lg-12">
					<label>หน่วยงานต้นสังกัด  <font class="pinred">*</font></label>
					<input type="text" name="department" class="form-control" id="" value="" placeholder="" required> 
				</div>
				<div class="form-group col-lg-12">
					<label>รายการแพ้อาหาร</label><br>
					<textarea name="food" style="height:100px;width:100%;" rows="6" cols="50"></textarea>
				</div>
				<div class="form-group col-lg-12	">
					<label>เลือกประเภทผู้เข้าร่วมประชุมวิชาการ  <font class="pinred">*</font></label>
					<select name="join" style="width:100%;" >
					  <option value="1">ผู้นำเสนอผลงาน - ค่าธรรมเนียม 7,000 บาท</option>
					  <option value="2">ผู้สนใจเข้าร่วมงาน - ค่าธรรมเนียม 5,000 บาท</option>

					</select>
				</div>
				<div class="form-group col-lg-12		">
					<label> เข้าร่วมกิจกรรมท่องเที่ยว  <font class="pinred">*</font></label><br>
					<select name="tour" style="width:100%;" >
						<option value="0">- เลือกเข้าร่วมกิจกรรม -</option>
					  <option value="1">ชม โลมาสีชมพู ดำน้ำทะเลขนอม-หมู่เกาะทะเลใต้เกาะราบ หรือ เกาะแตน
- <small>ค่าธรรมเนียม 2,000 บาท</small></option>
					  <option value="2">เขาหลวง น้ำตกกรุงชิง - <small>ค่าธรรมเนียม 1,000 บาท</small> </option>
					  <option value="3">สัมผัสเสน่ห์เมืองนครศรีธรรมราช  - <small>ค่าธรรมเนียม 1,000</small>  </option>
					  <option value="4">ไม่เข้าร่วมกิจรรม</option>
					</select>

				</div>



				
				<hr>
				<div class="form-group col-lg-12">
					<label>รหัสผ่าน  <font class="pinred">*</font></label>
					<input type="password" name="password" class="form-control" id="" value="" min="6" placeholder="กรุณาใส่รหัสผ่านอย่างน้อย 6 ตัวอักษร" required> 
				</div>
				<div class="form-group col-lg-12">
					<label>ใส่รหัสผ่านอีกครั้ง  <font class="pinred">*</font></label>
					<input type="password" name="" class="form-control" id="" value="" min="6" placeholder="กรุณายืนยันรหัสผ่าน" required> 
				</div>
				<div class="form-group col-lg-12 text-center	">
					<button type="submit" class="btn btn-primary">ยืนยัน</button>
				</div>

				
		</form>
		</div>
		<div class="col-md-2">
        	
        </div>
            
        </div>
    </section>


<script>
$(document).ready(function() {
    $('#registrationForm').formValidation();
});
</script>