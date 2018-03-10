

function getsubscribe()
{
	//toastr["success"](result.responseMessage);
	 var email=$('#suscribeemail').val(); 
	 if(email!='')
	 {
	 	 $.post("apis/apis.php",{
	 		q:"subscribe",
	 		email:email
		  },
		  function(data){
		  	dat=data.split('^');
		 // alert(data);
		 // console.log('success');
		  swal(dat[1]);
		//  window.location.reload();
		  $('#suscribeemail').val('');
		  }
		); 
	 }else{
	 	swal('Please enter e-mail address');
	 	return false;
	 }
    
   
}

function contactus()
{
	var email=$('#conemail').val();
	var name=$('#conname').val();
	var subject=$('#consubject').val();
	var message=$('#conmessage').val();
	

	if ($('#concheck').is(":checked") && email!='' && name!='' && subject!='' && message!='')
	{
		   $.post("apis/apis.php",{
		 	q:"contactus",
		 	email:email,
		 	name:name,
			subject:subject,
			message:message
		  },
		  function(data){
		  dat=data.split('^');
		  swal(dat[1]);
		 $('#conmessage').val('');
		 $('#consubject').val('');
		 $('#conname').val('');
		 $('#conemail').val('');
		  }
		); 
	}else{
		swal("Please fill all fields!!!");
		return false;
	}

   
   
}

function getalltokens(count)
{
	$('#tokensdetail').html('<img src ="assets/orange_circles.gif" style="    height: 55%;width: 20%;margin-left: 40%;"/>');
    
    $.post("apis/apis.php",
      {
	 	q:"getalltokens",
	 	count:count
	  },
	  function(data)
	  {
	 // alert(data);
	 $('#tokensdetail').html(data);
	 if(count=='All')
	 {
	 	$('#seemore').hide();
	 }
	 else
	 {
	 	$('#seemore').show();
	 }

	  }
	); 
   
}


$(".selectdata1").on('change',function()
{
	 var value1=$("#exampleSelect1").val();
		// alert(value1);


    
    $.post("apis/apis.php",
      {
	 	q:"getoption",
	 	type:value1
	  },
	  function(data)
	  {
	 // alert(data);
	 $('#sort').html(data);

	  }
	); 
   

})



$(".selectdata").on('change',function()
{
	 var value1=$("#exampleSelect1").val();
	 var value2=$("#exampleSelect2").val();
	 var value3=$("#sort").val();
	 //alert(value1+value3);

	$('#tokensdetail').html('<img src ="assets/orange_circles.gif" style="    height: 55%;width: 20%;margin-left: 40%;"/>');
    
    $.post("apis/apis.php",
      {
	 	q:"gettokensbysort",
	 	sorttype:value3
	  },
	  function(data)
	  {
	 // alert(data);
	 $('#tokensdetail').html(data);

	  }
	); 
   

})


function gettokens(count)
{
	$('#tokensdetail').html('<img src ="assets/orange_circles.gif" style="    height: 55%;width: 20%;margin-left: 40%;"/>');
    
    $.post("apis/apis.php",
      {
	 	q:"gettokensbysort",
	 	sorttype:count
	  },
	  function(data)
	  {
	 // alert(data);
	 $('#tokensdetail').html(data);
	 if(count=='All')
	 {
	 	$('#seemore').hide();
	 }
	 else
	 {
	 	$('#seemore').show();
	 }

	  }
	); 
   
}
