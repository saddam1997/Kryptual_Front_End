<?php
//define('api_url','http://103.201.142.41:4000/');
ini_set("display_errors",1);
define('api_url','http://103.201.142.41:4000/');
if($_POST['q']=='subscribe')
{
	subscribe();
}else if($_POST['q']=='contactus')
{
	contactus();
}else if($_POST['q']=='getalltokens')
{
	getalltokens();
}

else if($_POST['q']=='gettokensbysort')
{
	gettokensbysort();
}

else if($_POST['q']=='getoption')
{
	getoption();
}



function getoption(){

$type=$_POST['type'];

if($type=='Sortby'){
echo '<option value="0">--Select--</option> <option value="asc">Ascending</option>  <option value="desc">Descending</option>'; 
}

elseif($type=='supply'){

echo '<option value="0">--Select--</option>
      <option value="1-100">1-100</option>
      <option value="101-1000">101-1000</option>
      <option value="1001-10000">1001-100000</option>';

}


elseif($type=='date'){

echo '<option value="0">--Select--</option>
      <option value="running">Running</option>
      <option value="expired">Expired</option>';

}

}

function subscribe()
{
	$email=$_POST['email'];
	//echo $email;

	$postData = array(
		   "email"=> $email
		   );
		   $context = stream_context_create(
		   	 array(
		   'http' => array(
		    'method' => 'POST',
		    'header' => "Content-Type: application/json\r\n",
		    'content' => json_encode($postData)
		    )
		    ));
	 $response = file_get_contents(api_url.'api/subscribeUs',false,$context);
	 $result=json_decode($response,true);

	 //print_r($result);
	
	 if($result)
	 {
	 	echo "test^".$result['message']."^test";
	 }else{
	 	echo "test^Error occured while subscribing your email!!!^test";
	 }
 // echo "<script>  alert('success'); </script>";
	//  echo "<script> location.replace('../index.php') ; </script>";
}

function contactus()
{
	$email=$_POST['email'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$postData = array(
		   "email"=> $email,"name"=> $name,"subject"=> $subject,"message"=> $message
		   );
		   $context = stream_context_create(
		   	 array(
		    'http' => array(
		    'method' => 'POST',
		    'header' => "Content-Type: application/json\r\n",
		    'content' => json_encode($postData)
		    )
		    ));
	 $response = file_get_contents(api_url.'api/contactUs',false,$context);
	 $result=json_decode($response,true);
	
	 if($result)
	 {
	 	echo "test^".$result['message']."^test";
	  }else{
	  	echo "test^Error occured while sending your details!!!^test";
	  }
}

function getalltokens()
{
	$count=$_POST['count'];
	   $context = stream_context_create(
		   	 array(
		    // "ssl"=>array(
		    //  'verify_peer'=>false,
		    //  'verify_peer_name'=>false,
		    // ),
		    
		    ));
	
	 $response = file_get_contents(api_url.'api/getAllTokens');
	 $responsedata=json_decode($response,true);
	 $responsecount=count($responsedata['data']);
	
	 
	 if($count=='All')
	 {
	 	$i=$responsecount;
	 }else{
	 	$i=$count;
	 }
	 $j=1;
	 foreach ($responsedata['data'] as $tokenn=>$data) {
                   //print_r($tokenn['data']);
	 	if($j<=$i){
	 		
                              ?>
                           <script>
var countDownDate<?php echo $j; ?> = new Date("<?php echo $data['endTime']; ?>").getTime();
var x<?php echo $j; ?> = setInterval(function() {
var now<?php echo $j; ?> = new Date().getTime();
var distance<?php echo $j; ?> = countDownDate<?php echo $j; ?> - now<?php echo $j; ?>;
var days<?php echo $j; ?> = Math.floor(distance<?php echo $j; ?> / (1000 * 60 * 60 * 24));
var hours<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60 * 60)) / (1000 * 60));
var seconds<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60)) / 1000);
document.getElementById("demo<?php echo $j; ?>").innerHTML = days<?php echo $j; ?> + "d " + hours<?php echo $j; ?> + "h "
+ minutes<?php echo $j; ?> + "m " + seconds<?php echo $j; ?> + "s ";

if (distance<?php echo $j; ?> < 0) {
clearInterval(x<?php echo $j; ?>);
document.getElementById("demo<?php echo $j; ?>").innerHTML = "EXPIRED";
}
}, 1000);
                           </script>
                      <div class="col-md-4  col-lg-4 ">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#">
                                                <img class="img rounded" src="<?php if($data['tokenImage']==null) { echo 'assets/img/No-preview.png' ;} else { echo  $data['tokenImage'] ;} ?>" style="height: 220px;" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="category text-danger">
                                                <i class="now-ui-icons media-2_sound-wave"></i> <?php echo $data['tokenTicker'] ; ?>
                                            </h6>
                                            <h5 class="card-title" id="tokenName">
                                                <?php echo $data['tokenName'] ; ?>
                                            </h5>
                                            <p class="card-description">
                                              
                                                                                                
                                                <div class="price" style="float: left;text-align: left;">
                                                    <span>Rate</span> 
                                                    <h4><?php echo $data['tokenRate'] ; ?></h4> 
                                                </div> 
                                                <div class="price pull-right"> 
                                                    <span>Market cap</span> 
                                                    <h4><?php echo $data['tokenSupply'] ; ?></h4> 
                                                </div>                                            
                                            
                                                <div class="price" style="padding: 0 20px;width: 100%;float: left;"> 
                                                    <h4 style="font-size: 15px;" id="demo<?php echo $j; ?>"></h4> 
                                                </div> 
                                            </p>
                                        </div>
                                            
                                            
                                            <div class="card-footer" style="float: left;width: 100%;float: left;width: 100%;padding: 0;margin: 0 10px;">
                                                <a href="#" class="btn btn-primary" style="display: block;margin: 0px 0 30px 50px;width: 60%;">View</a>
                                            </div>
                                            
                                        </div>
                                    </div>

<?php 
}
$j++;}  
}



function gettokensbysort()
{
	$sorttype=$_POST['sorttype']; 
	   $context = stream_context_create(
		   	 array(
		    // "ssl"=>array(
		    //  'verify_peer'=>false,
		    //  'verify_peer_name'=>false,
		    // ),
		    
		    ));

	 $response = file_get_contents(api_url.'api/getAllTokens');
	 $responsedata=json_decode($response,true);



if($sorttype=='desc'){

	$responsedata = array_reverse($responsedata['data']) ;
}
elseif($sorttype=='asc'){

$responsedata = $responsedata['data'] ;

}

elseif($sorttype=='1-100') {
	$responsedata1 =  array();


foreach ($responsedata['data'] as $tokenn=>$data) {
if(($data['tokenSupply']>='1') && ($data['tokenSupply']<='100')){

	$responsedata1[] = $data ;

//echo $sorttype; die();
}

} 
$responsedata = $responsedata1 ; 
 // print_r($responsedata); die();
}

elseif($sorttype=='101-1000') {
	$responsedata1 =  array();


foreach ($responsedata['data'] as $tokenn=>$data) {
if(($data['tokenSupply']>='101') && ($data['tokenSupply']<='1000')){

	$responsedata1[] = $data ;

//echo $sorttype; die();
}

} 
$responsedata = $responsedata1 ; 
 // print_r($responsedata); die();
}

elseif($sorttype=='1001-10000') {
	$responsedata1 =  array();


foreach ($responsedata['data'] as $tokenn=>$data) {
if(($data['tokenSupply']>='1001') && ($data['tokenSupply']<='10000')){

	$responsedata1[] = $data ;

//echo $sorttype; die();
}

} 
$responsedata = $responsedata1 ; 


// print_r($responsedata); die();

}


elseif($sorttype=='running') {
	$responsedata1 =  array();


foreach ($responsedata['data'] as $tokenn=>$data) {
	$endtime = strtotime($data['endTime']);
	$currenttime =  strtotime(date("y-m-d h:i:s"));

	
if($endtime>= $currenttime) {

	$responsedata1[] = $data ;

//echo $sorttype; die();
}

} 
$responsedata = $responsedata1 ; 


// print_r($responsedata); die();

}


elseif($sorttype=='expired') {
	$responsedata1 =  array();


foreach ($responsedata['data'] as $tokenn=>$data) {
	$endtime = strtotime($data['endTime']);
	$currenttime =  strtotime(date("y-m-d h:i:s"));

	
if($endtime < $currenttime) {

	$responsedata1[] = $data ;

//echo $sorttype; die();
}

} 
$responsedata = $responsedata1 ; 


// print_r($responsedata); die();

}




if(empty($responsedata)) {

echo "no records found" ; die();
}

   
	$i=count($responsedata);
	
	 
	 $count = 'All';
	
	 $j=1;
	 foreach ($responsedata as $tokenn=>$data) {
                   //print_r($tokenn['data']);
	 	if($j<=$i){
	 		
                              ?>
                           <script>
var countDownDate<?php echo $j; ?> = new Date("<?php echo $data['endTime']; ?>").getTime();
var x<?php echo $j; ?> = setInterval(function() {
var now<?php echo $j; ?> = new Date().getTime();
var distance<?php echo $j; ?> = countDownDate<?php echo $j; ?> - now<?php echo $j; ?>;
var days<?php echo $j; ?> = Math.floor(distance<?php echo $j; ?> / (1000 * 60 * 60 * 24));
var hours<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60 * 60)) / (1000 * 60));
var seconds<?php echo $j; ?> = Math.floor((distance<?php echo $j; ?> % (1000 * 60)) / 1000);
document.getElementById("demo<?php echo $j; ?>").innerHTML = days<?php echo $j; ?> + "d " + hours<?php echo $j; ?> + "h "
+ minutes<?php echo $j; ?> + "m " + seconds<?php echo $j; ?> + "s ";

if (distance<?php echo $j; ?> < 0) {
clearInterval(x<?php echo $j; ?>);
document.getElementById("demo<?php echo $j; ?>").innerHTML = "EXPIRED";
}
}, 1000);
                           </script>
                      <div class="col-md-4  col-lg-4 ">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#">
                                                <img class="img rounded" src="<?php if($data['tokenImage']==null) { echo 'assets/img/No-preview.png' ;} else { echo  $data['tokenImage'] ;} ?>" style="height: 220px;" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="category text-danger">
                                                <i class="now-ui-icons media-2_sound-wave"></i> <?php echo $data['tokenTicker'] ; ?>
                                            </h6>
                                            <h5 class="card-title" id="tokenName">
                                                <?php echo $data['tokenName'] ; ?>
                                            </h5>
                                            <p class="card-description">
                                              
                                                                                                
                                                <div class="price" style="float: left;text-align: left;">
                                                    <span>Rate</span> 
                                                    <h4><?php echo $data['tokenRate'] ; ?></h4> 
                                                </div> 
                                                <div class="price pull-right"> 
                                                    <span>Market cap</span> 
                                                    <h4><?php echo $data['tokenSupply'] ; ?></h4> 
                                                </div>                                            
                                            
                                                <div class="price" style="padding: 0 20px;width: 100%;float: left;"> 
                                                    <h4 style="font-size: 15px;" id="demo<?php echo $j; ?>"></h4> 
                                                </div> 
                                            </p>
                                        </div>
                                            
                                            
                                            <div class="card-footer" style="float: left;width: 100%;float: left;width: 100%;padding: 0;margin: 0 10px;">
                                                <a href="http://localhost:4000/crowdsale?addr=<?php echo $data['crowdsaleAddress']?>&networkID=1520415769934" class="btn btn-primary" style="display: block;margin: 0px 0 30px 50px;width: 60%;">Invest</a>
                                            </div>
                                            
                                        </div>
                                    </div>

<?php 
}
$j++;}  
}


 
?>
