<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate blood, save life</h1>
						<p class="text-center">Donate blood to help the others.</p>
						</div>


						<h1 class="text-center">Search For Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select Area --</option>
<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup><option value="Anantapur">Anantapur</option>
<option value="Chittoor">Chittoor</option>
<option value="EastGodavari">EastGodavari</option>
<option value="Guntur">Guntur</option>
<option value="Kadapa">Kadapa</option>
<option value="Krishna">Krishna</option>
<option value="Kurnool">Kurnool</option>
<option value="Prakasam">Prakasam</option>
<option value="Nellore">Nellore</option>
<option value="Srikakulam">Srikakulam</option>
<option value="Vishakapatnam">Vishakapatnam</option>
<option value="Vijayanagaram">Vijayanagaram</option>
<option value="WestGodavari">WestGodavari</option>

<optgroup title="Andaman Nicobar and Islands" label="&raquo; Andaman Nicobar and Islands"></optgroup>
<option value="Nicobar">Nicobar</option>
<option value="Northmiddle Andaman">Northmiddle Andaman</option>
<option value="South Andaman">South Andaman</option>

<optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh"></optgroup>
<option value="Anjaw">Anjaw</option>
<option value="Changlang">Chanlang</option>
<option value="Dibang Valley">Dibang Valley</option>
<option value="East Kameng">East Kameng</option>
<option value="East Siang">East Siang</option>
<option value="Kra Daadi">Kra Daadi</option>
<option value="Kurung Kumey">Kurung Kumey</option>
<option value="Lohit">Lohit</option>
<option value="Longding">Longding</option>
<option value="Lower Dibang Valley">Lower Dibang Valley</option>
<option value="Lower Subansiri">Lower Subansiri</option>
<option value="Namsai">Namsai</option>
<option value="Papum Pare">Papum Pare</option>
<option value="Siang">Siang</option>
<option value="Tawang">Tawang</option>
<option value="Tirap">Tirap</option>
<option value="Upper Siang">Upper Siang</option>
<option value="Upper Subansiri">Upper Subansiri</option>
<option value="West Kameng">West Kameng</option>
<option value="West Siang">West Siang</option>
<option value="Itanagar">Itanagar</option>

<optgroup title="Assam" label="&raquo; Assam"></optgroup>
<option value="Baksa">Baksa</option>
<option value="Barpeta">Barpeta</option>
<option value="Biswanath">Biswanath</option>
<option value="Bongaigaon">Bongaigaon</option>
<option value="Cachar">Cachar</option>
<option value="Charaideo">Charaideo</option>
<option value="Chirang">Chirang</option>
<option value="Darrang">"Darrang</option>
<option value="Dhemaji">Dhemaji</option>
<option value="Dhubri">Dhubri</option>
<option value="Dibrugarh">Dibrugarh</option>
<option value="Goalpara">Goalpara</option>
<option value="Golaghat">Golaghat</option>
<option value="Hailakandi">Hailakandi</option>
<option value="Hojai">Hojai</option>
<option value="Jorhat">Jorhat</option>
<option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
<option value="Kamrup (Rural)">Kamrup (Rural)</option>
<option value="Karbi Anglong">Karbi Anglong</option>
<option value="Karimganj">Karimganj</option>
<option value="Kokrajhar">Kokrajhar</option>
<option value="Lakhimpur">Lakhimpur</option>
<option value="Majuli">Majuli</option>
<option value="Morigaon">Morigaon</option>
<option value="Nagaon">Nagaon</option>
<option value="Nalbari">Nalbari</option>
<option value="Dima Hasao">Dima Hasao</option>
<option value="Sivasagar">Sivasagar</option>
<option value="Sonitpur">Sonitpur</option>
<option value="South Salmara Mankachar">South Salmara Mankachar</option>
<option value="Tinsukia">Tinsukia</option>
<option value="Udalguri">Udalguri</option>
<option value="West Karbi Anglong">West Karbi Anglong</option>

<optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
<option value="Araria">Araria</option>
<option value="Arwal">Arwal</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Banka">Banka</option>
<option value="Begusarai">Begusarai</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Buxar">Buxar</option>
<option value="Darbhanga">Darbhanga</option>
<option value="East Champaran">East Champaran</option>
<option value="Gaya">Gaya</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Jamui">Jamui</option>
<option value="Jehanabad">Jehanabad</option>
<option value="Kaimur">Kaimur</option>
<option value="Katihar">Katihar</option>
<option value="Khagaria">Khagaria</option>
<option value="Kishanganj">Kishanganj</option>
<option value="Lakhisarai">Lakhisarai</option>
<option value="Madhepura">Madhepura</option>
<option value="Madhubani">Madhubani</option>
<option value="Munger">Munger</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Nalanda">Nalanda</option>
<option value="Nawada">Nawada</option>
<option value="Patna">Patna</option>
<option value="Purnia">Purnia</option>
<option value="Rohtas">Rohtas</option>
<option value="Saharsa">Saharsa</option>
<option value="Samastipur">Samastipur</option>
<option value="Saran">Saran</option>
<option value="Sheikhpura">Sheikhpura</option>
<option value="Sheohar">Sheohar</option>
<option value="Sitamarhi">Sitamarhi</option>
<option value="Siwan">Siwan</option>
<option value="Supaul">Supaul</option>
<option value="Vaishali">Vaishali</option>
<option value="West Champaran">West Champaran</option>

<optgroup title="Chandigarh" label="&raquo; Chandigarh"></optgroup>
<option value="Chandigarh">Chandigarh</option>

<optgroup title="Chattisgarh" label="&raquo; Chattisgarh"></optgroup>
<option value="Balod">Balod</option>
<option value="Baloda Bazar">Baloda Bazar</option>
<option value="Balrampur">Balrampur</option>
<option value="Bastar">Bastar</option>
<option value="Bemetara">Bemetara</option>
<option value="Bijapur">Bijapur</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Dantewada">Dantewada</option>
<option value="Dhamtari">Dhamtari</option>
<option value="Durg">Durg</option>
<option value="Gariaband">Gariaband</option>
<option value="Janjgir Champa">Janjgir Champa</option>
<option value="Jashpur">Jashpur</option>
<option value="Kabirdham">Kabirdham</option>
<option value="Kanker">Kanker</option>
<option value="Kondagaon">Kondagaon</option>
<option value="Korba">Korba</option>
<option value="Koriya">Koriya</option>
<option value="Mahasamund">Mahasamund</option>
<option value="Mungeli">Mungeli</option>
<option value="Narayanpur">Narayanpur</option>
<option value="Raigarh">Raigarh</option>
<option value="Raipur">Raipur</option>
<option value="Rajnandgaon">Rajnandgaon</option>
<option value="Sukma">Sukma</option>
<option value="Surajpur">Surajpur</option>
<option value="Surguja">Surguja</option>

<optgroup title="Dadra Nagar Haveli" label="&raquo; Dadra Nagar Haveli"></optgroup>
<option value="Dadra Nagar Haveli">Dadra Nagar Haveli</option>

<optgroup title="Daman and Diu" label="&raquo; Daman and Diu"></optgroup>
<option value="Daman">Daman</option>
<option value="Diu">Diu</option>

<optgroup title="Delhi" label="&raquo; Delhi"></optgroup>
<option value="Central Delhi">Central Delhi</option>
<option value="East Delhi">East Delhi</option>
<option value="New Delhi">New Delhi</option>
<option value="North Delhi">North Delhi</option>
<option value="North East Delhi">North East Delhi</option>
<option value="North West Delhi">North West Delhi</option>
<option value="Shahdara">Shahdara</option>
<option value="South Delhi">South Delhi</option>
<option value="South West Delhi">South West Delhi</option>
<option value="West Delhi">West Delhi</option>

<optgroup title="Lakshadweep" label="&raquo; Lakshadweep"></optgroup>
<option value="Lakshadweep">Lakshadweep</option>

<optgroup title="Puducherry" label="&raquo; Puducherry"></optgroup>
<option value="Karaikal">Karaikal</option>
<option value="Mahe">Mahe</option>
<option value="Puducherry">Puducherry</option>
<option value="Yanam">Yanam</option>

<optgroup title="Goa" label="&raquo; Goa"></optgroup>
<option value="North Goa">North Goa</option>
<option value="South Goa">South Goa</option>

<optgroup title="Gujarat" label="&raquo; Gujarat"></optgroup>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Amreli">Amreli</option>
<option value="Anand">Anand</option>
<option value="Aravalli">Aravalli</option>
<option value="Banaskantha">Banaskantha</option>
<option value="Bharuch">Bharuch</option>
<option value="Bhavnagar">Bhavnagar</option>
<option value="Botad">Botad</option>
<option value="Chhota Udaipur">Chhota Udaipur</option>
<option value="Dahod">"Dahod</option>
<option value="Dang">Dang</option>
<option value="Devbhoomi Dwarka">Devbhoomi Dwarka</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Gir Somnath">Gir Somnath</option>
<option value="Jamnagar">Jamnagar</option>
<option value="Junagadh">Junagadh</option>
<option value="Kheda">Kheda</option>
<option value="Kutch">Kutch</option>
<option value="Mahisagar">Mahisagar</option>
<option value="Mehsana">Mehsana</option>
<option value="Morbi">Morbi</option>
<option value="Narmada">Narmada</option>
<option value="Navsari">Navsari</option>
<option value="Panchmahal">Panchmahal</option>
<option value="Patan">Patan</option>
<option value="Porbandar">Porbandar</option>
<option value="Rajkot">Rajkot</option>
<option value="Sabarkantha">Sabarkantha</option>
<option value="Surat">Surat</option>
<option value="Surendranagar">Surendranagar</option>
<option value="Tapi">Tapi</option>
<option value="Vadodara">Vadodara</option>
<option value="Valsad">Valsad</option>

<optgroup title="Haryana" label="&raquo; Haryana"></optgroup>
<option value="Ambala">Ambala</option>
<option value="Bhiwani">Bhiwani</option>
<option value="Charkhi Dadri">Charkhi Dadri</option>
<option value="Faridabad">Faridabad</option>
<option value="Fatehabad">Fatehabad</option>
<option value="Gurugram">Gurugram</option>
<option value="Hisar">Hisar</option>
<option value="Jhajjar">Jhajjar</option>
<option value="Jind">Jind</option>
<option value="Kaithal">Kaithal</option>
<option value="Karnal">Karnal</option>
<option value="Kurukshetra">Kurukshetra</option>
<option value="Mahendragarh">Mahendragarh</option>
<option value="Mewat">Mewat</option>
<option value="Palwal">Palwal</option>
<option value="Panchkula">Panchkula</option>
<option value="Panipat">Panipat</option>
<option value="Rewari">Rewari</option>
<option value="Rohtak">Rohtak</option>
<option value="Sirsa">Sirsa</option>
<option value="Sonipat">Sonipat</option>
<option value="Yamunanagar">Yamunanagar</option>

<optgroup title="Himachal Pradesh" label="&raquo; Himachal Pradesh"></optgroup>
<option value="Bilaspur">Bilaspur</option>
<option value="Chamba">Chamba</option>
<option value="Hamirpur">Hamirpur</option>
<option value="Kangra">Kangra</option>
<option value="Kinnaur">Kinnaur</option>
<option value="Kullu">Kullu</option>
<option value="Lahaul Spiti">Lahaul Spiti</option>
<option value="Mandi">Mandi</option>
<option value="Shimla">Shimla</option>
<option value="Sirmaur">Sirmaur</option>
<option value="Solan">Solan</option>
<option value="Una">Una</option>

<optgroup title="Jammu and Kashmir" label="&raquo; Jammu and Kashmir"></optgroup>
<option value="Anantnag">Anantnag</option>
<option value="Bandipora">Bandipora</option>
<option value="Baramulla">Baramulla</option>
<option value="Budgam">Budgam</option>
<option value="Doda">Doda</option>
<option value="Ganderbal">Ganderbal</option>
<option value="Jammu">Jammu</option>
<option value="Kargil">Kargil</option>
<option value="Kathua">Kathua</option>
<option value="Kishtwar">Kishtwar</option>
<option value="Kulgam">Kulgam</option>
<option value="Kupwara">Kupwara</option>
<option value="Leh">Leh</option>
<option value="Poonch">Poonch</option>
<option value="Pulwama">Pulwama</option>
<option value="Ramban">Ramban</option>
<option value="Reasi">Reasi</option>
<option value="Samba">Samba</option>
<option value="Shopian">Shopian</option>
<option value="Srinagar">Srinagar</option>
<option value="Udhampur">Udhampur</option>

<optgroup title="Jharkhand" label="&raquo; Jharkhand"></optgroup>
<option value="Bokaro">Bokaro</option>
<option value="Chatra">Chatra</option>
<option value="Deoghar">Deoghar</option>
<option value="Dhanbad">Dhanbad</option>
<option value="Dumka">Dumka</option>
<option value="East Singhbhum">East Singhbhum</option>
<option value="Garhwa">Garhwa</option>
<option value="Giridih">Giridih</option>
<option value="Godda">Godda</option>
<option value="Gumla">Gumla</option>
<option value="Hazaribagh">Hazaribagh</option>
<option value="Jamtara">Jamtara</option>
<option value="Khunti">Khunti</option>
<option value="Koderma">Koderma</option>
<option value="Latehar">Latehar</option>
<option value="Lohardaga">Lohardaga</option>
<option value="Pakur">Pakur</option>
<option value="Palamu">Palamu</option>
<option value="Ramgarh">Ramgarh</option>
<option value="Ranchi">Ranchi</option>
<option value="Sahebganj">Sahebganj</option>
<option value="Seraikela Kharsawan">Seraikela Kharsawan</option>
<option value="Simdega">Simdega</option>
<option value="West Singhbhum">West Singhbhum</option>

<optgroup title="Karnataka" label="&raquo; Karnataka"></optgroup>
<option value="Bagalkot">Bagalkot</option>
<option value="Bangalore Rural">Bangalore Rural</option>
<option value="Bangalore Urban">Bangalore Urban</option>
<option value="Belgaum">Belgaum</option>
<option value="Bellary">Bellary</option>
<option value="Bidar">Bidar</option>
<option value="Vijayapura">Vijayapura</option>
<option value="Chamarajanagar">Chamarajanagar</option>
<option value="Chikkaballapur">Chikkaballapur</option>
<option value="Chikkamagaluru">Chikkamagaluru</option>
<option value="Chitradurga">Chitradurga</option>
<option value="Dakshina Kannada">Dakshina Kannada</option>
<option value="Davanagere">Davanagere</option>
<option value="Dharwad">Dharwad</option>
<option value="Gadag">Gadag</option>
<option value="Gulbarga">Gulbarga</option>
<option value="Hassan">Hassan</option>
<option value="Haveri">Haveri</option>
<option value="Kodagu">Kodagu</option>
<option value="Kolar">Kolar</option>
<option value="Koppal">Koppal</option>
<option value="Mandya">Mandya</option>
<option value="Mysore">Mysore</option>
<option value="Raichur">Raichur</option>
<option value="Ramanagara">Ramanagara</option>
<option value="Shimoga">Shimoga</option>
<option value="Tumkur">Tumkur</option>
<option value="Udupi">Udupi</option>
<option value="Uttara Kannada">Uttara Kannada</option>
<option value="Yadgir">Yadgir</option>

<optgroup title="Kerala" label="&raquo; Kerala"></optgroup>
<option value="Alappuzha">Alappuzha</option>
<option value="Ernakulam">Ernakulam</option>
<option value="Idukki">Idukki</option>
<option value="Kannur">Kannur</option>
<option value="Kasaragod">Kasaragod</option>
<option value="Kollam">Kollam</option>
<option value="Kottayam">Kottayam</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Malappuram">Malappuram</option>
<option value="Palakkad">Palakkad</option>
<option value="Pathanamthitta">Pathanamthitta</option>
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
<option value="Thrissur">Thrissur</option>
<option value="Wayanad">Wayanad</option>

<optgroup title="Madhya Pradesh" label="&raquo; Madhya Pradesh"></optgroup>
<option value="Agar Malwa">Agar Malwa</option>
<option value="Alirajpur">Alirajpur</option>
<option value="Anuppur">Anuppur</option>
<option value="Ashoknagar">Ashoknagar</option>
<option value="Balaghat">Balaghat</option>
<option value="Barwani">Barwani</option>
<option value="Betul">Betul</option>
<option value="Bhindi">Bhindi</option>
<option value="Bhopal">Bhopal</option>
<option value="Burhanpur">Burhanpur</option>
<option value="Chhatarpur">Chhatarpur</option>
<option value="Chhindwara">Chhindwara</option>
<option value="Damoh">Damoh</option>
<option value="Datia">Datia</option>
<option value="Dewas">Dewas</option>
<option value="Dhar">Dhar</option>
<option value="Dindori">Dindori</option>
<option value="Guna">Guna</option>
<option value="Gwalior">Gwalior</option>
<option value="Harda">Harda</option>
<option value="Hoshangabad">Hoshangabad</option>
<option value="Indore">Indore</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Jhabua">Jhabua</option>
<option value="Kathix">Kathix</option>
<option value="Khandwa">Khandwa</option>
<option value="Khargone">Khargone</option>
<option value="Mandla">Mandla</option>
<option value="Mandsaur">Mandsaur</option>
<option value="Morena">Morena</option>
<option value="Neemuch">Neemuch</option>
<option value="Raisen">Raisen</option>
<option value="Panna">Panna</option>
<option value="Rajgarh">Rajgarh</option>
<option value="Ratlam">Ratlam</option>
<option value="Rewa">Rewa</option>
<option value="Sagar">Sagar</option>
<option value="Satna">Satna</option>
<option value="Sehore">Sehore</option>
<option value="Seoni">Seoni</option>
<option value="Shahdol">Shahdol</option>
<option value="Shajapur">Shajapur</option>
<option value="Shivpuri">Shivpuri</option>
<option value="Sidhi">Sidhi</option>
<option value="Singrauli">Singrauli</option>
<option value="Tikamgarh">Tikamgarh</option>
<option value="Ujjain">Ujjain</option>
<option value="Umaria">Umaria</option>
<option value="Vidisha">Vidisha</option>

<optgroup title="Maharastra" label="&raquo; Maharastra"></optgroup>
<option value="Ahmednagar">Ahmednagar</option>
<option value="Akola">Akola</option>
<option value="Amravati">Amravati</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Beed">Beed</option>
<option value="Bhandara">Bhandara</option>
<option value="Buldhana">Buldhana</option>
<option value="Chandrapur">Chandrapur</option>
<option value="Dhule">Dhule</option>
<option value="Gadchiroli">Gadchiroli</option>
<option value="Gondia">Gondia</option>
<option value="Hingoli">Hingoli</option>
<option value="Jalgaon">Jalgaon</option>
<option value="Jalna">Jalna</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Latur">Latur</option>
<option value="Mumbai City">Mumbai City</option>
<option value="Mumbai Suburban">Mumbai Suburban</option>
<option value="Nagpur">Nagpur</option>
<option value="Nanded">Nanded</option>
<option value="Nandurbar">Nandurbar</option>
<option value="Nashik">Nashik</option>
<option value="Osmanabad">Osmanabad</option>
<option value="Palghar">Palghar</option>
<option value="Parbhani">Parbhani</option>
<option value="Pune">Pune</option>
<option value="Raigad">Raigad</option>
<option value="Ratnagiri">"Ratnagiri</option>
<option value="Sangli">Sangli</option>
<option value="Satara">Satara</option>
<option value="Sindhudurg">Sindhudurg</option>
<option value="Solapur">Solapur</option>
<option value="Thane">Thane</option>
<option value="Wardha">Wardha</option>
<option value="Washim">Washim</option>
<option value="Yavatmal">Yavatmal</option>

<optgroup title="Manipur" label="&raquo; Manipur"></optgroup>
<option value="Bishnupur">Bishnupur</option>
<option value="Chandel">Chandel</option>
<option value="Churachandpur">Churachandpur</option>
<option value="Imphal East">Imphal East</option>
<option value="Imphal West">Imphal West</option>
<option value="Jiribam">Jiribam</option>
<option value="Kakching">Kakching</option>
<option value="Kamjong">Kamjong</option>
<option value="Kangpokpi">Kangpokpi</option>
<option value="Noney">Noney</option>
<option value="Pherzawl">Pherzawl</option>
<option value="Senapati">Senapati</option>
<option value="Tamenglong">Tamenglong</option>
<option value="Tengnoupal">Tengnoupal</option>
<option value="Thoubal Ukhrul">Thoubal</option>
<option value="Ukhrul">Ukhrul</option>

<optgroup title="Meghalaya" label="&raquo; Meghalaya"></optgroup>
<option value="East Garo Hills">East Garo Hills</option>
<option value="East Jaintia Hills">East Jaintia Hills</option>
<option value="East Khasi Hills">East Khasi Hills</option>
<option value="North Garo Hills">North Garo Hills</option>
<option value="Ri Bhoi">Ri Bhoi</option>
<option value="South Garo Hills">South Garo Hills</option>
<option value="South West Garo Hills">South West Garo Hills</option>
<option value="South West Khasi Hills">South West Khasi Hills</option>
<option value="West Garo Hills">West Garo Hills</option>
<option value="West Jaintia Hills">West Jaintia Hills</option>
<option value="West Khasi Hills">West Khasi Hills</option>

<optgroup title="Mizoram" label="&raquo; Mizoram"></optgroup>
<option value="Aizawl">Aizawl</option>
<option value="Champhai">Champhai</option>
<option value="Kolasib">Kolasib</option>
<option value="Lawngtlai">Lawngtlai</option>
<option value="Lunglei">Lunglei</option>
<option value="Mamit">Mamit</option>
<option value="Saiha">Saiha</option>
<option value="Serchhip">Serchhip</option>

<optgroup title="Nagaland" label="&raquo; Nagaland"></optgroup>
<option value="Dimapur">Dimapur</option>
<option value="Kiphire">Kiphire</option>
<option value="Kohima">Kohima</option>
<option value="Longleng">Longleng</option>
<option value="Mokokchung">Mokokchung</option>
<option value="Mon">Mon</option>
<option value="Peren">Peren</option>
<option value="Phek">Phek</option>
<option value="Tuensang">Tuensang</option>
<option value="Wokha">Wokha</option>
<option value="Zunheboto">Zunheboto</option>

<optgroup title="Odisha" label="&raquo; Odisha"></optgroup>
<option value="Angul">Angul</option>
<option value="Balangir">Balangir</option>
<option value="Balasore">Balasore</option>
<option value="Bargarh">Bargarh</option>
<option value="Bhadrak">Bhadrak</option>
<option value="Boudh">Boudh</option>
<option value="Cuttack">Cuttack</option>
<option value="Debagarh">Debagarh</option>
<option value="Dhenkanal">Dhenkanal</option>
<option value="Gajapati">Gajapati</option>
<option value="Ganjam">Ganjam</option>
<option value="Jagatsinghpur">Jagatsinghpur</option>
<option value="Jajpur">Jajpur</option>
<option value="Jharsuguda">Jharsuguda</option>
<option value="Kalahandi">Kalahandi</option>
<option value="Kandhamal">Kandhamal</option>
<option value="Kendrapara">Kendrapara</option>
<option value="Kendujhar">Kendujhar</option>
<option value="Khordha">Khordha</option>
<option value="Koraput">Koraput</option>
<option value="Malkangiri">Malkangiri</option>
<option value="Mayurbhanj">Mayurbhanj</option>
<option value="Nabarangpur">Nabarangpur</option>
<option value="Nayagarh">Nayagarh</option>
<option value="Nuapada">Nuapada</option>
<option value="Puri">Puri</option>
<option value="Rayagada">Rayagada</option>
<option value="Sambalpur">Sambalpur</option>
<option value="Subarnapur">Subarnapur</option>
<option value="Sundergarh">Sundergarh</option>

<optgroup title="Punjab" label="&raquo; Punjab"></optgroup>
<option value="Amritsar">Amritsar</option>
<option value="Barnala">Barnala</option>
<option value="Bathinda">Bathinda</option>
<option value="Faridkot">Faridkot</option>
<option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
<option value="Fazilka">Fazilka</option>
<option value="Firozpur">Firozpur</option>
<option value="Gurdaspur">Gurdaspur</option>
<option value="Hoshiarpur">Hoshiarpur</option>
<option value="Jalandhar">Jalandhar</option>
<option value="Kapurthala">Kapurthala</option>
<option value="Ludhiana">Ludhiana</option>
<option value="Mansa">Mansa</option>
<option value="Moga">Moga</option>
<option value="Mohali">Mohali</option>
<option value="Muktsar">Muktsar</option>
<option value="Pathankot">Pathankot</option>
<option value="Patiala">Patiala</option>
<option value="Rupnagar">Rupnagar</option>
<option value="Sangrur">Sangrur</option>
<option value="Shaheed Bhagat Singh Nagar">Shaheed Bhagat Singh Nagar</option>
<option value="Tarn Taran">Tarn Taran</option>

<optgroup title="Rajasthan" label="&raquo; Rajasthan"></optgroup>
<option value="Ajmer">Ajmer</option>
<option value="Alwar">Alwar</option>
<option value="Banswara">Banswara</option>
<option value="Baran">Baran</option>
<option value="Barmer">Barmer</option>
<option value="Bharatpur">Bharatpur</option>
<option value="Bhilwara">Bhilwara</option>
<option value="Bikaner">Bikaner</option>
<option value="Bundi">Bundi</option>
<option value="Chittorgarh">Chittorgarh</option>
<option value="Churu">Churu</option>
<option value="Dausa">Dausa</option>
<option value="Dholpur">Dholpur</option>
<option value="Dungarpur">Dungarpur</option>
<option value="Ganganagar">Ganganagar</option>
<option value="Hanumangarh">Hanumangarh</option>
<option value="Jaipur">Jaipur</option>
<option value="Jaisalmer">Jaisalmer</option>
<option value="Jalore">Jalore</option>
<option value="Jhalawar">Jhalawar</option>
<option value="Jhunjhunu">Jhunjhunu</option>
<option value="Jodhpur">Jodhpur</option>
<option value="Karauli">Karauli</option>
<option value="Kota">Kota</option>
<option value="Nagaur">Nagaur</option>
<option value="Pali">Pali</option>
<option value="Pratapgarh">Pratapgarh</option>
<option value="Rajsamand">Rajsamand</option>
<option value="Sawai Madhopur">Sawai Madhopur</option>
<option value="Sikar">Sikar</option>
<option value="Sirohi">Sirohi</option>
<option value="Tonk">Tonk</option>
<option value="Udaipur">Udaipur</option>

<optgroup title="Sikkim" label="&raquo; Sikkim"></optgroup>
<option value="East Sikkim">East Sikkim</option>
<option value="North Sikkim">North Sikkim</option>
<option value="South Sikkim">South Sikkim</option>
<option value="West Sikkim">West Sikkim</option>

<optgroup title="Tamil Nadu" label="&raquo; Tamil Nadu"></optgroup>
<option value="Ariyalur">Ariyalur</option>
<option value="Chennai">Chennai</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Cuddalore">Cuddalore</option>
<option value="Dharmapuri">Dharmapuri</option>
<option value="Dindigul">Dindigul</option>
<option value="Erode">Erode</option>
<option value="Kanchipuram">Kanchipuram</option>
<option value="Kanyakumari">Kanyakumari</option>
<option value="Karur">Karur</option>
<option value="Krishnagiri">Krishnagiri</option>
<option value="Madurai">Madurai</option>
<option value="Nagapattinam">Nagapattinam</option>
<option value="Namakkal">Namakkal</option>
<option value="Nilgiris">Nilgiris</option>
<option value="Perambalur">Perambalur</option>
<option value="Pudukkottai">Pudukkottai</option>
<option value="Ramanathapuram">Ramanathapuram</option>
<option value="Salem">Salem</option>
<option value="Sivaganga">Sivaganga</option>
<option value="Thanjavur">Thanjavur</option>
<option value="Theni">Theni</option>
<option value="Thoothukudi">Thoothukudi</option>
<option value="Tiruchirappalli">Tiruchirappalli</option>
<option value="Tirunelveli">Tirunelveli</option>
<option value="Tiruppur">Tiruppur</option>
<option value="Tiruvallur">Tiruvallur</option>
<option value="Tiruvannamalai">Tiruvannamalai</option>
<option value="Tiruvarur">Tiruvarur</option>
<option value="Vellore">Vellore</option>
<option value="Viluppuram">Viluppuram</option>
<option value="Virudhunagar">Virudhunagar</option>

<optgroup title="Telangana" label="&raquo; Telangana"></optgroup>
<option value="Adilabad">Adilabad</option>
<option value="Bhadradri Kothagudem">Bhadradri Kothagudem</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Jagtial">Jagtial</option>
<option value="Jangaon">Jangaon</option>
<option value="Jayashankar">Jayashankar</option>
<option value="Jogulamba">Jogulamba</option>
<option value="Kamareddy">Kamareddy</option>
<option value="Karimnagar">Karimnagar</option>
<option value="Khammam">Khammam</option>
<option value="Komaram Bheem">Komaram Bheem</option>
<option value="Mahabubabad">Mahabubabad</option>
<option value="Mahbubnagar">Mahbubnagar</option>
<option value="Mancherial">Mancherial</option>
<option value="Medak">Medak</option>
<option value="Medchal">Medchal</option>
<option value="Nagarkurnool">Nagarkurnool</option>
<option value="Nalgonda">Nalgonda</option>
<option value="Nirmal">Nirmal</option>
<option value="Nizamabad">Nizamabad</option>
<option value="Peddapalli">Peddapalli</option>
<option value="Rajanna Sircilla">Rajanna Sircilla</option>
<option value="Ranga Reddy">Ranga Reddy</option>
<option value="Sangareddy">Sangareddy</option>
<option value="Siddipet">Siddipet</option>
<option value="Suryapet">Suryapet</option>
<option value="Vikarabad">Vikarabad</option>
<option value="Wanaparthy">Wanaparthy</option>
<option value="Warangal Rural">Warangal Rural</option>
<option value="Warangal Urban">Warangal Urban</option>
<option value="Yadadri Bhuvanagiri">Yadadri Bhuvanagiri</option>

<optgroup title="Tripura" label="&raquo; Tripura"></optgroup>
<option value="Dhalai">Dhalai</option>
<option value="Gomati">Gomati</option>
<option value="Khowai">Khowai</option>
<option value="North Tripura">North Tripura</option>
<option value="Sepahijala">Sepahijala</option>
<option value="South Tripura">South Tripura</option>
<option value="Unakoti">Unakoti</option>
<option value="West Tripura">West Tripura</option>

<optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh"></optgroup>
<option value="Agra">Agra</option>
<option value="Aligarh">Aligarh</option>
<option value="Allahabad">Allahabad</option>
<option value="Ambedkar Nagar">Ambedkar Nagar</option>
<option value="Amethi">Amethi</option>
<option value="Amroha">Amroha</option>
<option value="Auraiya">Auraiya</option>
<option value="Azamgarh">Azamgarh</option>
<option value="Baghpat">Baghpat</option>
<option value="Bahraich">Bahraich</option>
<option value="Ballia">Ballia</option>
<option value="Balrampur">Balrampur</option>
<option value="Banda">Banda</option>
<option value="Barabanki">Barabanki</option>
<option value="Bareilly">Bareilly</option>
<option value="Basti">Basti</option>
<option value="Bhadohi">Bhadohi</option>
<option value="Bijnor">Bijnor</option>
<option value="Budaun">Budaun</option>
<option value="Bulandshahr">Bulandshahr</option>
<option value="Chandauli">Chandauli</option>
<option value="Chitrakoot">Chitrakoot</option>
<option value="Deoria">Deoria</option>
<option value="Etah">Etah</option>
<option value="Etawah">Etawah</option>
<option value="Faizabad">Faizabad</option>
<option value="Farrukhabad">Farrukhabad</option>
<option value="Fatehpur">Fatehpur</option>
<option value="Firozabad">Firozabad</option>
<option value="Gautam Buddha Nagar">Gautam Buddha Nagar</option>
<option value="Ghaziabad">Ghaziabad</option>
<option value="Ghazipur">Ghazipur</option>
<option value="Gonda">Gonda</option>
<option value="Gorakhpur">Gorakhpur</option>
<option value="Hamirpur">Hamirpur</option>
<option value="Hapur">Hapur</option>
<option value="Hardoi">Hardoi</option>
<option value="Hathras">Hathras</option>
<option value="Jalaun">Jalaun</option>
<option value="Jaunpur">Jaunpur</option>
<option value="Jhansi">Jhansi</option>
<option value="Kannauj">Kannauj</option>
<option value="Kanpur Dehat">Kanpur Dehat</option>
<option value="Kanpur Nagar">Kanpur Nagar</option>
<option value="Kasganj">Kasganj</option>
<option value="Kaushambi">Kaushambi</option>
<option value="Kheri">Kheri</option>
<option value="Kushinagar">Kushinagar</option>
<option value="Lalitpur">Lalitpur</option>
<option value="Lucknow">Lucknow</option>
<option value="Maharajganj">Maharajganj</option>
<option value="Mahoba">Mahoba</option>
<option value="Mainpuri">Mainpuri</option>
<option value="Mathura">Mathura</option>
<option value="Mau">Mau</option>
<option value="Meerut">Meerut</option>
<option value="Moradabad">Moradabad</option>
<option value="Muzaffarnagar">Muzaffarnagar</option>
<option value="Pilibhit">Pilibhit</option>
<option value="Pratapgarh">Pratapgarh</option>
<option value="Raebareli">Raebareli</option>
<option value="Rampur">Rampur</option>
<option value="Saharanpur">Saharanpur</option>
<option value="Sambhal">Sambhal</option>
<option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
<option value="Shahjahanpur">Shahjahanpur</option>
<option value="Shamli">Shamli</option>
<option value="Shravasti">Shravasti</option>
<option value="Siddharthnagar">Siddharthnagar</option>
<option value="Sitapur">Sitapur</option>
<option value="Sonbhadra">Sonbhadra</option>
<option value="Sultanpur">Sultanpur</option>
<option value="Unnao">Unnao</option>
<option value="Varanasi">Varanasi</option>

<optgroup title="Uttarakhand" label="&raquo; Uttarakhand"></optgroup>
<option value="Almora">Almora</option>
<option value="Bageshwar">Bageshwar</option>
<option value="Chamoli">Chamoli</option>
<option value="Champawat">Champawat</option>
<option value="Dehradun">Dehradun</option>
<option value="Haridwar">Haridwar</option>
<option value="Nainital">Nainital</option>
<option value="Pauri">Pauri</option>
<option value="Pithoragarh">Pithoragarh</option>
<option value="Rudraprayag">Rudraprayag</option>
<option value="Tehri">Tehri</option>
<option value="Udham Singh Nagar">Udham Singh Nagar</option>
<option value="Uttarkashi">Uttarkashi</option>

<optgroup title="West Bengal" label="&raquo; West Bengal"></optgroup>
<option value="Alipurduar">Alipurduar</option>
<option value="Bankura">Bankura</option>
<option value="Birbhum">Birbhum</option>
<option value="Cooch Behar">Cooch Behar</option>
<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
<option value="Darjeeling">Darjeeling</option>
<option value="Hooghly">Hooghly</option>
<option value="Howrah">Howrah</option>
<option value="Jalpaiguri">Jalpaiguri</option>
<option value="Jhargram">Jhargram</option>
<option value="Kalimpong">Kalimpong</option>
<option value="Kolkata">Kolkata</option>
<option value="Malda">Malda</option>
<option value="Murshidabad">Murshidabad</option>
<option value="Nadia">Nadia</option>
<option value="North 24 Parganas">North 24 Parganas</option>
<option value="Paschim Bardhaman">Paschim Bardhaman</option>
<option value="Paschim Medinipur">Paschim Medinipur</option>
<option value="Purba Bardhaman">Purba Bardhaman</option>
<option value="Purba Medinipur">Purba Medinipur</option>
<option value="Purulia">Purulia</option>
<option value="South 24 Parganas">South 24 Parganas</option>
<option value="Uttar Dinajpur">Uttar Dinajpur</option>

</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									<option value="">--Select Bloodgroup--</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">BLOODLINE</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							A website to help people in need of blood.
							The main aim of this project is to help the people who need blood in an
        emergency and to associate some donors who are willing to donate their
        blood to needy people and save their lives.It will help us to find the blood group with the most efficient time to take care
of the blood and it is more easy to hand over the blood to help people to get
blood on time.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Why Donate Blood</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									
									<ul>
									<li>We need atleast 400 donors to meet the present demand</li>
									<li>Around 1350 donors a year to replace those who can no longer donate</li>
									<li>3000 new donors with priority blood types such as O negative every year</li>
									<li>More young people to start giving blood so we can make sure we have enough blood in the future</li>
								</ul>
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Can You Donate</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To donate blood you will need to :
									<ul>
									<li>Be generally fit and well</li>
									<li>Have suitable veins (we will check these before you donate)</li>
									<li>Meet all donor eligibility criteria (we will check this with you before you donate)</li>
									<li>Men can give blood every 12 weeks and women can give blood every 16 weeks.</li>
								</ul>
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Who can't donate blood</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									You can't donate blood if you:
									<ul>
										
										<li>Have had most types of cancer</li>
										<li>Have some heart conditions</li>
										<li>Have received blood, platelets, plasma or any other blood products after 1 January 1980</li>
										<li>Have tested positive for HIV</li>
										<li>Have had an organ transplant</li>
										<li>Have injected non-prescribed drugs</li>
									</ul>
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>