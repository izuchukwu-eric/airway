/* Blog Newletter form Submit */

// let pageUrl = location.pathname === "/setup-business/";
// if (pageUrl) {
//   let tag = document.createElement("p");
//    let text = document.createTextNode("Tutorix is the best e-learning platform");
//    tag.appendChild(text);
//    let element = document.getElementById("new");
//    element.appendChild(tag);
// }


function setup_bussiness_blog_newsletter_submit()
{
   var formValid = document.forms["setup_bussi_news-letterForm"].checkValidity();
   const queryString = window.location.search;
   const urlParams = new URLSearchParams(queryString);
   $("#utm_source").val(urlParams);
   const leadSource = location.pathname.substring(0,location.pathname.length-1).split("/")    [location.pathname.substring(0,location.pathname.length-1).split("/").length-1]
  $("#lead_source").val(leadSource);
  const today = new Date();
  const date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
  const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  const dateTime = date + ' ' + time;
    $("#timestamp").val(dateTime);
    var status=true;
    if($('#validation_type').val()=='custom')
    {
        var status = custom_valiadtion('setup_bussi_news-letterForm','form-control');
    }
    //alert(status);
    if (formValid) 
    {
        $("#setup_bussi_new-blog-submit").attr("disabled", true);
        // Submit Button Text Changed
        $("#setup_bussi_new-blog-submit").val("Please Wait");
        var $form = $("form#setup_bussi_news-letterForm"),
        url ="https://script.google.com/macros/s/AKfycbxvL7rPajZTgJnW0V6WRVxhB03S1zM1XgjhR1Js5wJDpOCsmi4EbIYevTfmFeV9bh45/exec";
          jQuery(".wpcf7-response-output").css("display","none");
          jQuery(".wpcf7-form-control").prop('required',true);
          jQuery($form).find("input[name=_wpcf7]").remove()
          jQuery($form).find("input[name=_wpcf7_version]").remove()
          jQuery($form).find("input[name=_wpcf7_locale]").remove()
          jQuery($form).find("input[name=_wpcf7_unit_tag]").remove()
          jQuery($form).find("input[name=_wpcf7_container_post]").remove()
          jQuery($form).find("input[name=_wpcf7_posted_data_hash]").remove()
          jQuery($form).find("input[name=validation_type]").remove()
          var jqxhr = $.ajax({
          url: url,
          method: "GET",
          dataType: "json",
          data: $("form#setup_bussi_news-letterForm").serializeObject(),
          success: function () {
              $("#setup_bussi_new-blog-submit").removeAttr("disabled");
              $("#setup_bussi_new-blog-submit").val("sign up");
              $("#success-msg").show();
              $("#success-msg").html(
                '<span aria-hidden="true" class="success-msg-close">×</span><p>Successfully Submitted</p>'
              );
               setTimeout(function () {
                  document.getElementById('success-msg').style.display = 'none';
                }, 3000);
              $('#name').val('');
              $('#email').val('');
              $('#blog_comment_input').val('');
          }
     });
    }
} 
/* Blog Newletter form Submit */
/* Header signup form Submit */

// make form button disable validation 
document.getElementById('signup-form').addEventListener('input', function(evt){
  evt.preventDefault();
	 const myForm = document.getElementById("signup-form");
        var form = evt.target;

        var formValid = myForm.checkValidity();
        var fullName = $('#name').val();
        var email = $('#email').val();
        var phoneNo = $('#phone').val();
        var nameRegex = /^[a-zA-Z]{1}[ \w\d]{1,}/;
        var phoneRegex = /^\d{10}$/;
        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var status = true;
	     if  (fullName.length == 0) {
            $(".hintfixError").text("Name Is required!");
            $('.hintfix').show();
                
            status = false
        }else if(!fullName.match(nameRegex)){
            $(".hintfixError").text("Please Enter Valid Name");
            $('.hintfix').show();
            status = false
        }
        else if (!phoneNo.match(phoneRegex)) {
            $(".hintfixError").text("Please enter a valid 10 digit phone number.");
            $('.hintfix').show();
            status = false
        }else if (!email.match(emailRegex)) {
            $(".hintfixError").text("Please enter a valid Email");
            $('.hintfix').show();
            status = false
        }        
       else{
            $(".hintfixError").text('');
            $(".hintfix").hide();
        }
	
  if (status === true) {
    document.getElementById('setupHeaderBtn').removeAttribute('disabled');
  }else if(status === false){
	  document.getElementById('setupHeaderBtn').setAttribute('disabled', '');
  }
  
})

function gtag_report_conversion(url) {
	var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-745783511/_kFRCLKfp7EDENeBz-MC',
      'event_callback': callback
  });
  return false;
}

function postData()
{
    var status=true;
    if($('#validation_type').val()=='custom')
    {
        var status = custom_valiadtion('signup-form','form-control');
    }
    if (status === true)
    {
		var formValid = document.forms["signup-form"].checkValidity();
		// For UTM URL
		let url = location.href.split("?");
		if (url[1]) {
		  let urlParams = url[1].split("&");
		  let params = [];
		  urlParams.forEach((param) => {
			let paramObj = {};
			paramObj.param = param.split("=")[0].toLowerCase();
			paramObj.value = param.split("=")[1];
			params.push(paramObj);
		  });
      const utmSource = params.find((key) => key.param === "utm_source");
		  if (utmSource) {
			$("#signup-form #00N0I00000K9vYk").val(utmSource.value);
		  } else {
			$("#signup-form #00N0I00000K9vYk").val("");
		  };
			 const adgroup_id = params.find((key) => key.param === "adgroup_id");
			  if (adgroup_id) {
			$("#signup-form #00N0I00000KAEc7").val(adgroup_id.value);
		  } else {
			$("#signup-form #00N0I00000KAEc7").val("");
		  };
			const utm_adset = params.find((key) => key.param === "utm_adset");
				  if (utm_adset) {
			$("#signup-form #00N0I00000KAEcR").val(utm_adset.value);
		  } else {
			$("#signup-form #00N0I00000KAEcR").val("");
		  };
			
			const utm_medium = params.find((key) => key.param === "utm_medium");
				  if (utm_medium) {
			$("#signup-form #00N0I00000KAEbx").val(utm_medium.value);
		  } else {
			$("#signup-form #00N0I00000KAEbx").val("");
		  };
			
					const utm_campaign = params.find((key) => key.param === "utm_campaign");
				  if (utm_campaign) {
			$("#signup-form #00N0I00000KAEc2").val(utm_campaign.value);
		  } else {
			$("#signup-form #00N0I00000KAEc2").val("");
		  };
			
						const campaign_id = params.find((key) => key.param === "campaign_id");
				  if (campaign_id) {
			$("#signup-form #00N0I00000KAEcC").val(campaign_id.value);
		  } else {
			$("#signup-form #00N0I00000KAEcC").val("");
		  };
		}
    var form = document.getElementById("signup-form").elements;
        $('#signup-form').find("input[name=validation_type]").remove()
        $('#signup-form').find("input[name=_wpcf7]").remove()
        $('#signup-form').find("input[name=_wpcf7_version]").remove()
        $('#signup-form').find("input[name=validation_type]").remove()
        $('#signup-form').find("input[name=_wpcf7_version]").remove()
        $('#signup-form').find("input[name=_wpcf7_locale]").remove()
        $('#signup-form').find("input[name=_wpcf7_unit_tag]").remove()
        $('#signup-form').find("input[name=_wpcf7_container_post]").remove()
        $('#signup-form').find("input[name=_wpcf7_posted_data_hash]").remove()
    var name = $('#name').val();
    name = name.trim().split(' ');
    const currentUrl = location.href;
    // For Complete URL
    $('#signup-form #00N0I00000K9Ebg').val(currentUrl);
  
    let firstName = "";
    let lastName = "";
    switch (name.length) {
      case name.length > 3:
        firstName = name[0] + " " + name[1];
        lastName = name[2];
        break;
      case 3:
        firstName = name[0] + " " + name[1];
        lastName = name[2];
        break;
      case 2:
        firstName = name[0];
        lastName = name[1];
        break;
      case 1:
        firstName = name[0];
        lastName = "-";
        break;
    }
    // Adding Name Hidden Field
    //document.forms[0].first_name.value = firstName;
    $('#signup-form #firstName').val(firstName);
    
    $('#signup-form #lastName').val(lastName);
    $("signup-form.setup-default-btn").prop('disabled', true);
   
    //var clientId;
    var formData = {
      firstName:  $('#signup-form #firstName').val(),
      lastName:  $('#signup-form #lastName').val(),
      companyName:  $('#signup-form #company').val(),
      email:  $('#signup-form #email').val(),
      mobileNumber:  $('#signup-form #phone').val(),
      //phone_no:  $('#signup-form #phone').val(),
      status: 'active',
      '00N0I00000KAEcR':  $("#signup-form #00N0I00000KAEcR").val(),
		'00N0I00000KAEc7':  $("#signup-form #00N0I00000KAEc7").val(),
		'00N0I00000KAEbx':  $("#signup-form #00N0I00000KAEbx").val(),
		'00N0I00000KAEc2':  $("#signup-form #00N0I00000KAEc2").val(),
		'00N0I00000KAEcC':  $("#signup-form #00N0I00000KAEcC").val(),
  
    };
    if(formValid)
    {
      var encodedStringFormData = btoa(JSON.stringify(formData));
      formData.webformId = '1429';
      formData.client_id = '526';
      formData.webform_type = 'self'
      formData.action = 'tl'
      $.ajax({
        type: 'POST',
        url: "https://stagingagldashboard.adv8.co" + '/webforms/save-Data/',
        data: formData
      }).done(function (res2) {
          console.log(formData);
        //var clientId = res.data.id;
        document.getElementById("signup-form").action = "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8";
        $('#signup-form #lead_source').val('SetUp Business Page Redirect');
        
        // $('#signup-form #retURL').val(`https://cl.delhivery.com/signup?preFill=${btoa(JSON.stringify(formData))}`);
        $('#signup-form #retURL').val(`https://ucp.delhivery.com/register?preFill=${btoa(JSON.stringify(formData))}`);
        //gtag_report_conversion(`https://ucp.delhivery.com/register?preFill=${btoa(JSON.stringify(formData))}`)
        document.getElementById("signup-form").method = "POST";
        $('#signup-form #00N0I00000K9Ebg').val(currentUrl);
        document.getElementById("signup-form").submit();
         
        }).fail(function (error) {
         document.getElementById("signup-form").action = "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8";
        
        $('#signup-form #retURL').val(`https://ucp.delhivery.com/register?preFill=${btoa(JSON.stringify(formData))}`);
        document.getElementById("signup-form").method = "POST";
        $('#signup-form #00N0I00000K9Ebg').val(currentUrl);
        document.getElementById("signup-form").submit();
        /*$('#signup-form').submit(function(e){
            $('#signup-form #retURL').val(`https://ucp.delhivery.com/register?action='tl'&preFill=${btoa(JSON.stringify(formData))}`);
            gtag_report_conversion(`https://ucp.delhivery.com/register??action='tl'preFill=${btoa(JSON.stringify(formData))}`)
        });*/
      
      })
   
    }
    }
  
}
/* Header signup form Submit */
/* Footer signup form Submit */
function postData2()
{
    var status = true;
    if($('#validation_type').val()=='custom')
    {
        var status= custom_valiadtion('signup-form-footer','form-control');
    }
    if(status==true)
    {
      var formValid = document.forms["signup-form-footer"].checkValidity();
      // For UTM URL
      let url = location.href.split("?");
      if (url[1]) {
      let urlParams = url[1].split("&");
      let params = [];
      urlParams.forEach((param) => {
        let paramObj = {};
        paramObj.param = param.split("=")[0].toLowerCase();
        paramObj.value = param.split("=")[1];
        params.push(paramObj);
      });
      const utmSource = params.find((key) => key.param === "utm_source");
		  if (utmSource) {
			$("#signup-form #00N0I00000K9vYk").val(utmSource.value);
		  } else {
			$("#signup-form #00N0I00000K9vYk").val("");
		  };
			 const adgroup_id = params.find((key) => key.param === "adgroup_id");
			  if (adgroup_id) {
			$("#signup-form #00N0I00000KAEc7").val(adgroup_id.value);
		  } else {
			$("#signup-form #00N0I00000KAEc7").val("");
		  };
			const utm_adset = params.find((key) => key.param === "utm_adset");
				  if (utm_adset) {
			$("#signup-form #00N0I00000KAEcR").val(utm_adset.value);
		  } else {
			$("#signup-form #00N0I00000KAEcR").val("");
		  };
			
			const utm_medium = params.find((key) => key.param === "utm_medium");
				  if (utm_medium) {
			$("#signup-form #00N0I00000KAEbx").val(utm_medium.value);
		  } else {
			$("#signup-form #00N0I00000KAEbx").val("");
		  };
			
					const utm_campaign = params.find((key) => key.param === "utm_campaign");
				  if (utm_campaign) {
			$("#signup-form #00N0I00000KAEc2").val(utm_campaign.value);
		  } else {
			$("#signup-form #00N0I00000KAEc2").val("");
		  };
			
						const campaign_id = params.find((key) => key.param === "campaign_id");
				  if (campaign_id) {
			$("#signup-form #00N0I00000KAEcC").val(campaign_id.value);
		  } else {
			$("#signup-form #00N0I00000KAEcC").val("");
		  };
    }
    
    var form = document.getElementById("signup-form-footer").elements;
    var name = $('#signup-form-footer #name').val();
    $('#signup-form-footer').find("input[name=validation_type]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7_version]").remove()
    $('#signup-form-footer').find("input[name=validation_type]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7_version]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7_locale]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7_unit_tag]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7_container_post]").remove()
    $('#signup-form-footer').find("input[name=_wpcf7_posted_data_hash]").remove()
    name = name.trim().split(' ');
    const currentUrl = location.href;
    // For Complete URL
    $('#signup-form-footer #00N0I00000K9Ebg-f').val(currentUrl);
  
    let firstName = "";
    let lastName = "";
    switch (name.length) {
      case name.length > 3:
        firstName = name[0] + " " + name[1];
        lastName = name[2];
        break;
      case 3:
        firstName = name[0] + " " + name[1];
        lastName = name[2];
        break;
      case 2:
        firstName = name[0];
        lastName = name[1];
        break;
      case 1:
        firstName = name[0];
        lastName = "-";
        break;
    }
    // Adding Name Hidden Field
    $('#signup-form-footer #firstName').val(firstName);
    
    $('#signup-form-footer #lastName').val(lastName);
   
    //var clientId;
    var formData = {
      firstName:  $('#signup-form-footer #firstName').val(),
      lastName:  $('#signup-form-footer #lastName').val(),
      companyName:  $('#signup-form-footer #company').val(),
      email:  $('#signup-form-footer #email').val(),
      mobileNumber:  $('#signup-form-footer #phone').val(),
      //phone_no:  $('#signup-form-footer #phone').val(),
      status: 'active',
      '00N0I00000KAEcR':  $("#signup-form #00N0I00000KAEcR").val(),
      '00N0I00000KAEc7':  $("#signup-form #00N0I00000KAEc7").val(),
      '00N0I00000KAEbx':  $("#signup-form #00N0I00000KAEbx").val(),
      '00N0I00000KAEc2':  $("#signup-form #00N0I00000KAEc2").val(),
      '00N0I00000KAEcC':  $("#signup-form #00N0I00000KAEcC").val(),
  
    };
    if(formValid)
    {
        var encodedStringFormData = btoa(JSON.stringify(formData));
        console.log(encodedStringFormData)
  
      formData.webformId = '1429';
      formData.client_id = '526';
      formData.webform_type = 'self'
      formData.action = 'tl'
      $.ajax({
        type: 'POST',
        url: "https://stagingagldashboard.adv8.co" + '/webforms/save-Data/',
        data: formData
      }).done(function (res2) {
          //var clientId = res.data.id;
          
        document.getElementById("signup-form-footer").action = "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8";
        $('#signup-form-footer #lead_source').val('SetUp Business Page Redirect');
        $('#signup-form-footer #retURL').val(`https://ucp.delhivery.com/register?preFill=${btoa(JSON.stringify(formData))}`);
        
        document.getElementById("signup-form-footer").method = "POST";
        $('#signup-form-footer #00N0I00000K9Ebg-f').val(currentUrl);
        $("#signup-form-footer #00N0I00000K9vYk-f").val("dlv_website");
        document.getElementById("signup-form-footer").submit();
        /*$('#signup-form-footer').submit(function(e){
            $('#signup-form-footer #retURL').val(`https://ucp.delhivery.com/register?action='tl'&preFill=${btoa(JSON.stringify(formData))}`);
            gtag_report_conversion(`https://ucp.delhivery.com/register??action='tl'preFill=${btoa(JSON.stringify(formData))}`)
        });*/
        
      }).fail(function (error) {
          
        document.getElementById("signup-form-footer").action = "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8";
        
        $('#signup-form-footer #retURL').val(`https://ucp.delhivery.com/register?preFill=${btoa(JSON.stringify(formData))}`);
        document.getElementById("signup-form-footer").method = "POST";
        $('#signup-form-footer #00N0I00000K9Ebg-f').val(currentUrl);
        $("#signup-form-footer #00N0I00000K9vYk-f").val("");
        document.getElementById("signup-form-footer").submit();

  
      })
    
        
    }
  }
   
}
/* Footer signup form Submit */
