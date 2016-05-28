<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        <h1>USER</h1>
        <br>

        <?php 
        foreach ($result->result() as $value) {
        	$user = $value;
        	// echo "ชื่อ-สกุล:".$value->firstname." ";
        	// echo $value->lastname."<br>";
        	// echo "ที่อยู่ :".$value->address."<br>";
        	// //echo $value->province."<br>";
        	// echo "รหัสไปรษณีย์ :".$value->postalcode."<br>";
        	// echo "เบอร์โทร: ".$value->phoneno."<br>";
        	// echo "e-mail: ".$value->email."<br>";
        	// echo "หน่วยงานต้นสังกัด: ".$value->department."<br>";
        	// echo "รายการแพ้อาหาร: ".$value->food."<br>";
        	// //echo $value->artifact."<br>";
        	// //echo $value->join."<br>";
        	// //echo $value->tour1."<br>";
        	// //echo $value->tour2."<br>";
        	// //echo $value->tour3."<br>";
        	
        	       }
         ?>     
            
        </div>
    </section>