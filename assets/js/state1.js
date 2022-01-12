function selct_district1($val, selected_city)
{
    if($val=='Select State') {
   var options = '';
  $('#secondlist').html(options);
  }
 if($val=='Andhra Pradesh') {
   var andhra = ["Select District","Anantapur","Chittoor","East Godavari","Guntur","Krishna","Kurnool","Prakasam","Srikakulam","SriPotti Sri Ramulu Nellore",
                                    "Vishakhapatnam","Vizianagaram","West Godavari","Cudappah"];
   $(function() {
  var options = '';
  for (var i = 0; i < andhra.length; i++) {
	  if(selected_city == andhra[i]){
		options += '<option value="' + andhra[i] + '" selected>' + andhra[i] + '</option>';
	  } else {
		options += '<option value="' + andhra[i] + '">' + andhra[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Arunachal Pradesh') {
    var ap = ["Select District","Anjaw","Changlang","Dibang Valley","East Siang","East Kameng","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Papum Pare",
                                        "Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang"];
   $(function() {
  var options = '';
  for (var i = 0; i < ap.length; i++) {
	  if(selected_city == ap[i]){
		options += '<option value="' + ap[i] + '" selected>' + ap[i] + '</option>';
	  } else {
		options += '<option value="' + ap[i] + '">' + ap[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Assam') {
    var assam = ["Select District","Baksa","Barpeta","Bongaigaon","Cachar","Chirang","Darrang","Dhemaji","Dima Hasao","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Jorhat",
                                     "Kamrup","Kamrup Metropolitan","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Morigaon","Nagaon","Nalbari","Sivasagar","Sonitpur","Tinsukia","Udalguri"];
   $(function() {
  var options = '';
  for (var i = 0; i < assam.length; i++) {
	  if(selected_city == assam[i]){
		options += '<option value="' + assam[i] + '" selected>' + assam[i] + '</option>';
	  } else {
		options += '<option value="' + assam[i] + '">' + assam[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Bihar') {
    var bihar = ["Select District","Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur",
                                        "Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa",
                                        "Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
   $(function() {
  var options = '';
  for (var i = 0; i < bihar.length; i++) {
	  if(selected_city == bihar[i]){
		options += '<option value="' + bihar[i] + '" selected>' + bihar[i] + '</option>';
	  } else {
		options += '<option value="' + bihar[i] + '">' + bihar[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Chhattisgarh') {
    var Chhattisgarh = ["Select District","Bastar","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Jashpur","Janjgir-Champa","Korba","Koriya","Kanker","Kabirdham (formerly Kawardha)","Mahasamund",
                                            "Narayanpur","Raigarh","Rajnandgaon","Raipur","Surajpur","Surguja"];
   $(function() {
  var options = '';
  for (var i = 0; i < Chhattisgarh.length; i++) {
	  if(selected_city == Chhattisgarh[i]){
		options += '<option value="' + Chhattisgarh[i] + '" selected>' + Chhattisgarh[i] + '</option>';
	  } else {
		options += '<option value="' + Chhattisgarh[i] + '">' + Chhattisgarh[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Dadra and Nagar Haveli') {
    var dadra = ["Select District","Amal","Silvassa"];
   $(function() {
  var options = '';
  for (var i = 0; i < dadra.length; i++) {
	  if(selected_city == dadra[i]){
		options += '<option value="' + dadra[i] + '" selected>' + dadra[i] + '</option>';
	  } else {
		options += '<option value="' + dadra[i] + '">' + dadra[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Daman and Diu') {
    var daman = ["Select District","Daman","Diu"];
   $(function() {
  var options = '';
  for (var i = 0; i < daman.length; i++) {
	  if(selected_city == daman[i]){
		options += '<option value="' + daman[i] + '" selected>' + daman[i] + '</option>';
	  } else {
		options += '<option value="' + daman[i] + '">' + daman[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Delhi') {
    var delhi = ["Select District","Delhi","New Delhi","East_Delhi","North Delhi","North East Delhi","North West Delhi ","Shahdara","South East Delhi","South Delhi","South_West_Delhi","West_Delhi"];
   $(function() {
  var options = '';
  for (var i = 0; i < delhi.length; i++) {
	  if(selected_city == delhi[i]){
		options += '<option value="' + delhi[i] + '" selected>' + delhi[i] + '</option>';
	  } else {
		options += '<option value="' + delhi[i] + '">' + delhi[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Goa') {
    var goa = ["Select District","Chapora","Dabolim","Madgaon","Marmugao (Marmagao)","Panaji Port","Panjim","Pellet Plant Jetty/Shiroda","Talpona","Vasco da Gama"];
   $(function() {
  var options = '';
  for (var i = 0; i < goa.length; i++) {
	  if(selected_city == goa[i]){
		options += '<option value="' + goa[i] + '" selected>' + goa[i] + '</option>';
	  } else {
		options += '<option value="' + goa[i] + '">' + goa[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Gujarat') {
    var gujarat = ["Select District","Ahmedabad","Amreli district","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Dahod","Dang","Gandhinagar","Jamnagar","Junagadh",
                                        "Kutch","Kheda","Mehsana","Narmada","Navsari","Patan","Panchmahal","Porbandar","Rajkot","Sabarkantha","Surendranagar","Surat","Tapi","Vadodara","Valsad"];
   $(function() {
  var options = '';
  for (var i = 0; i < gujarat.length; i++) {
	  if(selected_city == gujarat[i]){
		options += '<option value="' + gujarat[i] + '" selected>' + gujarat[i] + '</option>';
	  } else {
		options += '<option value="' + gujarat[i] + '">' + gujarat[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Haryana') {
    var haryana = ["Select District","Ambala","Bhiwani","Faridabad","Fatehabad","Gurgaon","Hissar","Jhajjar","Jind","Karnal","Kaithal",
                                            "Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamuna Nagar"];
   $(function() {
  var options = '';
  for (var i = 0; i < haryana.length; i++) {
	  if(selected_city == haryana[i]){
		options += '<option value="' + haryana[i] + '" selected>' + haryana[i] + '</option>';
	  } else {
		options += '<option value="' + haryana[i] + '">' + haryana[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='Himachal Pradesh') {
    var himachal = ["Select District","Baddi","Baitalpur","Chamba","Dharamsala","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul & Spiti","Mandi","Simla","Sirmaur","Solan","Una"];
   $(function() {
  var options = '';
  for (var i = 0; i < himachal.length; i++) {
	  if(selected_city == himachal[i]){
		options += '<option value="' + himachal[i] + '" selected>' + himachal[i] + '</option>';
	  } else {
		options += '<option value="' + himachal[i] + '">' + himachal[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Jammu and Kashmir') {
    var jammu = ["Select District","Jammu","Leh","Rajouri","Srinagar"];
   $(function() {
  var options = '';
  for (var i = 0; i < jammu.length; i++) {
	  if(selected_city == jammu[i]){
		options += '<option value="' + jammu[i] + '" selected>' + jammu[i] + '</option>';
	  } else {
		options += '<option value="' + jammu[i] + '">' + jammu[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Jharkhand') {
    var jharkhand = ["Select District","Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribag","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu",
                                            "Ramgarh","Ranchi","Sahibganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
   $(function() {
  var options = '';
  for (var i = 0; i < jharkhand.length; i++) {
	  if(selected_city == jharkhand[i]){
		options += '<option value="' + jharkhand[i] + '" selected>' + jharkhand[i] + '</option>';
	  } else {
		options += '<option value="' + jharkhand[i] + '">' + jharkhand[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Karnataka') {
    var karnataka = ["Select District","Bagalkot","Bangalore","Bangalore Urban","Belgaum","Bellary","Bidar","Bijapur","Chamarajnagar", "Chikkamagaluru","Chikkaballapur",
                                           "Chitradurga","Davanagere","Dharwad","Dakshina Kannada","Gadag","Gulbarga","Hassan","Haveri district","Kodagu",
                                           "Kolar","Koppal","Mandya","Mysore","Raichur","Shimoga","Tumkur","Udupi","Uttara Kannada","Ramanagara","Yadgir"];
   $(function() {
  var options = '';
  for (var i = 0; i < karnataka.length; i++) {
	  if(selected_city == karnataka[i]){
		options += '<option value="' + karnataka[i] + '" selected>' + karnataka[i] + '</option>';
	  } else {
		options += '<option value="' + karnataka[i] + '">' + karnataka[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Kerala') {
    var kerala = ["Select District","Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thrissur","Thiruvananthapuram","Wayanad"];
   $(function() {
  var options = '';
  for (var i = 0; i < kerala.length; i++) {
	  if(selected_city == kerala[i]){
		options += '<option value="' + kerala[i] + '" selected>' + kerala[i] + '</option>';
	  } else {
		options += '<option value="' + kerala[i] + '">' + kerala[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Madhya Pradesh') {
    var mp = ["Select District","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhilai","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Dewas","Dhar","Guna","Gwalior","Hoshangabad",
                                    "Indore","Itarsi","Jabalpur","Khajuraho","Khandwa","Khargone","Malanpur","Malanpuri (Gwalior)","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Pithampur","Raipur","Raisen","Ratlam",
                                    "Rewa","Sagar","Satna","Sehore","Seoni","Shahdol","Singrauli","Ujjain"];
   $(function() {
  var options = '';
  for (var i = 0; i < mp.length; i++) {
	  if(selected_city == mp[i]){
		options += '<option value="' + mp[i] + '" selected>' + mp[i] + '</option>';
	  } else {
		options += '<option value="' + mp[i] + '">' + mp[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Maharashtra') {
    var maharashtra = ["Select District","Ahmednagar","Akola","Alibag","Amaravati","Arnala","Aurangabad","Aurangabad","Bandra","Bassain","Belapur","Bhiwandi","Bhusaval","Borliai-Mandla","Chandrapur","Dahanu","Daulatabad","Dighi (Pune)","Dombivali","Goa","Jaitapur","Jalgaon",
                                             "Jawaharlal Nehru (Nhava Sheva)","Kalyan","Karanja","Kelwa","Khopoli","Kolhapur","Lonavale","Malegaon","Malwan","Manori",
                                             "Mira Bhayandar","Miraj","Mumbai (ex Bombay)","Murad","Nagapur","Nagpur","Nalasopara","Nanded","Nandgaon","Nasik","Navi Mumbai","Nhave","Osmanabad","Palghar",
                                             "Panvel","Pimpri","Pune","Ratnagiri","Sholapur","Shrirampur","Shriwardhan","Tarapur","Thana","Thane","Trombay","Varsova","Vengurla","Virar","Wada"];
   $(function() {
  var options = '';
  for (var i = 0; i < maharashtra.length; i++) {
	  if(selected_city == maharashtra[i]){
		options += '<option value="' + maharashtra[i] + '" selected>' + maharashtra[i] + '</option>';
	  } else {
		options += '<option value="' + maharashtra[i] + '">' + maharashtra[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
   if ($val=='Manipur') {
    var manipur = ["Select District","Bishnupur","Churachandpur","Chandel","Imphal East","Senapati","Tamenglong","Thoubal","Ukhrul","Imphal West"];
   $(function() {
  var options = '';
  for (var i = 0; i < manipur.length; i++) {
	  if(selected_city == manipur[i]){
		options += '<option value="' + manipur[i] + '" selected>' + manipur[i] + '</option>';
	  } else {
		options += '<option value="' + manipur[i] + '">' + manipur[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
   if ($val=='Meghalaya') {
    var meghalaya = ["Select District","Baghamara","Balet","Barsora","Bolanganj","Dalu","Dawki","Ghasuapara","Mahendraganj","Moreh","Ryngku","Shella Bazar","Shillong"];
   $(function() {
  var options = '';
  for (var i = 0; i < meghalaya.length; i++) {
	  if(selected_city == meghalaya[i]){
		options += '<option value="' + meghalaya[i] + '" selected>' + meghalaya[i] + '</option>';
	  } else {
		options += '<option value="' + meghalaya[i] + '">' + meghalaya[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
   if ($val=='Mizoram') {
    var mizoram = ["Select District","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
   $(function() {
  var options = '';
  for (var i = 0; i < mizoram.length; i++) {
	  if(selected_city == mizoram[i]){
		options += '<option value="' + mizoram[i] + '" selected>' + mizoram[i] + '</option>';
	  } else {
		options += '<option value="' + mizoram[i] + '">' + mizoram[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
   if ($val=='Nagaland') {
    var nagaland = ["Select District","Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
   $(function() {
  var options = '';
  for (var i = 0; i < nagaland.length; i++) {
	  if(selected_city == nagaland[i]){
		options += '<option value="' + nagaland[i] + '" selected>' + nagaland[i] + '</option>';
	  } else {
		options += '<option value="' + nagaland[i] + '">' + nagaland[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Orissa') {
    var orissa = ["Select District","Bahabal Pur","Bhubaneswar","Chandbali","Gopalpur","Jeypore","Paradip Garh","Puri","Rourkela"];
   $(function() {
  var options = '';
  for (var i = 0; i < orissa.length; i++) {
	  if(selected_city == orissa[i]){
		options += '<option value="' + orissa[i] + '" selected>' + orissa[i] + '</option>';
	  } else {
		options += '<option value="' + orissa[i] + '">' + orissa[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Puducherry') {
    var puducherry = ["Select District","Karaikal","Mahe","Pondicherry","Yanam"];
   $(function() {
  var options = '';
  for (var i = 0; i < puducherry.length; i++) {
	  if(selected_city == puducherry[i]){
		options += '<option value="' + puducherry[i] + '" selected>' + puducherry[i] + '</option>';
	  } else {
		options += '<option value="' + puducherry[i] + '">' + puducherry[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Punjab') {
    var punjab = ["Select District","Amritsar","Barnala","Bathinda","Firozpur","Faridkot","Fatehgarh Sahib","Fazilka","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Sri Muktsar Sahib","Pathankot",
                                        "Patiala","Rupnagar","Ajitgarh (Mohali)","Sangrur","Shahid Bhagat Singh Nagar","Tarn Taran"];
   $(function() {
  var options = '';
  for (var i = 0; i < punjab.length; i++) {
	  if(selected_city == punjab[i]){
		options += '<option value="' + punjab[i] + '" selected>' + punjab[i] + '</option>';
	  } else {
		options += '<option value="' + punjab[i] + '">' + napunjabgaland[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Rajasthan') {
    var rajasthan = ["Select District","Ajmer","Banswara","Barmer","Barmer Rail Station","Basni","Beawar","Bharatpur","Bhilwara","Bhiwadi","Bikaner","Bongaigaon","Boranada, Jodhpur","Chittaurgarh","Fazilka","Ganganagar","Jaipur","Jaipur-Kanakpura",
                                       "Jaipur-Sitapura","Jaisalmer","Jodhpur","Jodhpur-Bhagat Ki Kothi","Jodhpur-Thar","Kardhan","Kota","Munabao Rail Station","Nagaur","Rajsamand","Sawaimadhopur","Shahdol","Shimoga","Tonk","Udaipur"];
   $(function() {
  var options = '';
  for (var i = 0; i < rajasthan.length; i++) {
	  if(selected_city == rajasthan[i]){
		options += '<option value="' + rajasthan[i] + '" selected>' + rajasthan[i] + '</option>';
	  } else {
		options += '<option value="' + rajasthan[i] + '">' + rajasthan[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  if ($val=='Sikkim') {
    var sikkim = ["Select District","Chamurci","Gangtok"];
   $(function() {
  var options = '';
  for (var i = 0; i < sikkim.length; i++) {
	  if(selected_city == sikkim[i]){
		options += '<option value="' + sikkim[i] + '" selected>' + sikkim[i] + '</option>';
	  } else {
		options += '<option value="' + sikkim[i] + '">' + sikkim[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='Tamil Nadu') {
    var tn = ["Select District","Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Mandapam","Nagapattinam","Nilgiris","Namakkal","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Thiruvallur","Tirupur",
                                   "Tiruchirapalli","Theni","Tirunelveli","Thanjavur","Thoothukudi","Tiruvallur","Tiruvannamalai","Vellore","Villupuram","Viruthunagar"];
   $(function() {
  var options = '';
  for (var i = 0; i < tn.length; i++) {
	  if(selected_city == tn[i]){
		options += '<option value="' + tn[i] + '" selected>' + tn[i] + '</option>';
	  } else {
		options += '<option value="' + tn[i] + '">' + tn[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='Telangana') {
    var telangana = ["Select District","Adilabad","Hyderabad","Karimnagar","Mahbubnagar","Medak","Nalgonda","Nizamabad","Ranga Reddy","Warangal"];
   $(function() {
  var options = '';
  for (var i = 0; i < telangana.length; i++) {
	  if(selected_city == telangana[i]){
		options += '<option value="' + telangana[i] + '" selected>' + telangana[i] + '</option>';
	  } else {
		options += '<option value="' + telangana[i] + '">' + telangana[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='Tripura') {
    var tripura = ["Select District","Agartala","Dhalaighat","Kailashahar","Kamalpur","Kanchanpur","Kel Sahar Subdivision","Khowai","Khowaighat","Mahurighat","Old Raghna Bazar","Sabroom","Srimantapur"];
   $(function() {
  var options = '';
  for (var i = 0; i < tripura.length; i++) {
	  if(selected_city == tripura[i]){
		options += '<option value="' + tripura[i] + '" selected>' + tripura[i] + '</option>';
	  } else {
		options += '<option value="' + tripura[i] + '">' + tripura[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='Uttar Pradesh') {
    var up = ["Select District","Agra","Allahabad","Auraiya","Banbasa","Bareilly","Berhni","Bhadohi","Dadri","Dharchula","Gandhar","Gauriphanta","Ghaziabad","Gorakhpur","Gunji",
                                    "Jarwa","Jhulaghat (Pithoragarh)","Kanpur","Katarniyaghat","Khunwa","Loni","Lucknow","Meerut","Moradabad","Muzaffarnagar","Nepalgunj Road","Pakwara (Moradabad)",
                                    "Pantnagar","Saharanpur","Sonauli","Surajpur","Tikonia","Varanasi"];
   $(function() {
  var options = '';
  for (var i = 0; i < up.length; i++) {
	  if(selected_city == up[i]){
		options += '<option value="' + up[i] + '" selected>' + up[i] + '</option>';
	  } else {
		options += '<option value="' + up[i] + '">' + up[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='Uttarakhand') {
    var uttarakhand = ["Select District","Almora","Badrinath","Bangla","Barkot","Bazpur","Chamoli","Chopra","Dehra Dun","Dwarahat","Garhwal","Haldwani","Hardwar","Haridwar","Jamal","Jwalapur","Kalsi","Kashipur","Mall",
                                           "Mussoorie","Nahar","Naini","Pantnagar","Pauri","Pithoragarh","Rameshwar","Rishikesh","Rohni","Roorkee","Sama","Saur"];
   $(function() {
  var options = '';
  for (var i = 0; i < uttarakhand.length; i++) {
      options += '<option value="' + uttarakhand[i] + '">' + uttarakhand[i] + '</option>';
	  if(selected_city == uttarakhand[i]){
		options += '<option value="' + uttarakhand[i] + '" selected>' + uttarakhand[i] + '</option>';
	  } else {
		options += '<option value="' + uttarakhand[i] + '">' + uttarakhand[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
  
  if ($val=='West Bengal') {
    var wb = ["Select District","Alipurduar","Bankura","Bardhaman","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah",
                                    "Jalpaiguri","Kolkata","Maldah","Murshidabad","Nadia","North 24 Parganas","Paschim Medinipur","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
   $(function() {
  var options = '';
  for (var i = 0; i < wb.length; i++) {
	  if(selected_city == wb[i]){
		options += '<option value="' + wb[i] + '" selected>' + wb[i] + '</option>';
	  } else {
		options += '<option value="' + wb[i] + '">' + wb[i] + '</option>';
	  }
  }
  $('#secondlist').html(options);
  });
  }
  
}