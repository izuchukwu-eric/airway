/* Consellation form Submit */
function formData() 
{
    var formValid = document.forms["cpp-form"].checkValidity();
    var email = $('#email').val();
    var phoneNo = $('#phoneNo').val();
    var  phoneRegex = /^\d{10}$/;
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var seconds = d.getSeconds();
    document.getElementById("timestamp").value = `${month}/${date}/${year} ${hours}:${mins}:${seconds}`
    if (!phoneNo.match(phoneRegex)) {
      $(".hintfixError").text("Please enter a valid 10 digit phone number.");
      $('.hintfix').show();
    } else if (!email.match(emailRegex)) {
      $(".hintfixError").text("Please enter a valid email.");
      $('.hintfix').show();
    } else  {
      $(".hintfixError").text('');
      $(".hintfix").hide();
    } 
    if(formValid)
    { 
        document.getElementById('loader_div').style.display = 'block';
        var $form = $('form#cpp-form'),
        url = 'https://script.google.com/macros/s/AKfycbyq0Tjdxqd_jg64a9z1eYLdsVKVy8T33dFYRNSLyE54x6JArHstkWwz/exec'

       jQuery(".wpcf7-response-output").css("display","none");
       jQuery(".wpcf7-form-control").prop('required',true);
       jQuery($form).find("input[name=_wpcf7]").remove()
       jQuery($form).find("input[name=_wpcf7_version]").remove()
       jQuery($form).find("input[name=_wpcf7_locale]").remove()
       jQuery($form).find("input[name=_wpcf7_unit_tag]").remove()
       jQuery($form).find("input[name=_wpcf7_container_post]").remove()
       jQuery($form).find("input[name=_wpcf7_posted_data_hash]").remove()
       jQuery($form).find("input[name=validation_type]").remove()
       console.log($form.serializeObject());
       var jqxhr = $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        data: $form.serializeObject(),
        success: function () {
        //document.getElementById('loading').style.display = 'none';
        document.getElementById('loader_div').style.display = 'none';
        document.getElementById('successMsg').style.display = 'block';
        setTimeout(function () {
          document.getElementById('successMsg').style.display = 'none';
        }, 3000);
        $('#cpp-form')[0].reset();
        document.getElementById('cpp-form').reset();

        }
       })
     }   
          
}
/* Consellation form Submit */
/* LMA form Submit */
function lmaFormData() 
{
            var formValid = document.forms["lma-form"].checkValidity();
            var form = $('form#lma-form');
            var phone_no = $('#phone_no').val();
            var phoneRegex = /^\d{10}$/;
            var d = new Date();
            var date = d.getDate();
            var month = d.getMonth() + 1;
            var year = d.getFullYear();
            var hours = d.getHours();
            var mins = d.getMinutes();
            var seconds = d.getSeconds();
            document.getElementById("timestamp").value = `${month}/${date}/${year} ${hours}:${mins}:${seconds}`
      
      
          if (!phone_no.match(phoneRegex)) {
              $(".hintfixError").text("Please enter a valid 10 digit phone number.");
              $('.hintfix').show();
            } else  {
              $(".hintfixError").text('');
              $(".hintfix").hide();
          } 
       if(formValid)
       { 
            var $form = $('form#lma-form'),
            url = 'https://script.google.com/macros/s/AKfycbyasUc7otfvnBNY2ShVPXjMOhIU5CYcBHSHGCiW6TQ6YtcALJo2ScnmNQ/exec'
              jQuery(".wpcf7-response-output").css("display","none");
              jQuery(".wpcf7-form-control").prop('required',true);
              jQuery($form).find("input[name=_wpcf7]").remove()
              jQuery($form).find("input[name=_wpcf7_version]").remove()
              jQuery($form).find("input[name=_wpcf7_locale]").remove()
              jQuery($form).find("input[name=_wpcf7_unit_tag]").remove()
              jQuery($form).find("input[name=_wpcf7_container_post]").remove()
              jQuery($form).find("input[name=_wpcf7_posted_data_hash]").remove()
              jQuery($form).find("input[name=validation_type]").remove()
              console.log($form.serializeObject());
              document.getElementById('loader_div').style.display = 'block';
              var jqxhr = $.ajax({
              url: url,
              method: "GET",
              dataType: "json",
              data: $form.serializeObject(),
              success: function () {
              document.getElementById('loader_div').style.display = 'none';
              document.getElementById('successMsg').style.display = 'block';
              setTimeout(function () {
              document.getElementById('successMsg').style.display = 'none';
              }, 3000);
              $('#lma-form')[0].reset();
              //document.getElementById('lma-form').reset();
            
            }
           })
      } 
} 
/* LMA form Submit */
/* Franchisee form Submit */
function franchiseeFormData() 
{
    var formValid = document.forms["franchisee-form"].checkValidity();
    var form = $('form#franchisee-form');
    var email = $('#emailID').val();
    var phoneNo = $('#Mobile_Num').val();
    var  phoneRegex = /^\d{10}$/;
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var seconds = d.getSeconds();
    document.getElementById("timestamp").value = `${month}/${date}/${year} ${hours}:${mins}:${seconds}`
    if (!phoneNo.match(phoneRegex)) {
      $(".hintfixError").text("Please enter a valid 10 digit phone number.");
      $('.hintfix').show();
    } else if (!email.match(emailRegex)) {
      $(".hintfixError").text("Please enter a valid email.");
      $('.hintfix').show();
    } else  {
      $(".hintfixError").text('');
      $(".hintfix").hide();
    } 
    if(formValid)
    { 
        document.getElementById('loader_div').style.display = 'block';
        var $form = $('form#franchisee-form'),
        url = 'https://script.google.com/macros/s/AKfycbzBnYRBOzVjcyW7GYaOmV7vJesO17UBLMXzyNESvtpI8GIM8mJuIwoL/exec'
        jQuery(".wpcf7-response-output").css("display","none");
        jQuery(".wpcf7-form-control").prop('required',true);
        jQuery($form).find("input[name=_wpcf7]").remove()
        jQuery($form).find("input[name=_wpcf7_version]").remove()
        jQuery($form).find("input[name=_wpcf7_locale]").remove()
        jQuery($form).find("input[name=_wpcf7_unit_tag]").remove()
        jQuery($form).find("input[name=_wpcf7_container_post]").remove()
        jQuery($form).find("input[name=_wpcf7_posted_data_hash]").remove()
        jQuery($form).find("input[name=validation_type]").remove()
        //console.log($form.serializeObject());
        var jqxhr = $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        data: $form.serializeObject(),
        success: function () {
        //document.getElementById('loading').style.display = 'none';
        document.getElementById('loader_div').style.display = 'none';
        document.getElementById('successMsg').style.display = 'block';
        setTimeout(function () {
          document.getElementById('successMsg').style.display = 'none';
        }, 3000);

        $('#franchisee-form')[0].reset();

        }
       })
  } 
      
} 
/* Franchisee form Submit */
$.fn.serializeObject = function()
{
   var o = {};
   var a = this.serializeArray();
   $.each(a, function() {
       if (o[this.name]) {
           if (!o[this.name].push) {
               o[this.name] = [o[this.name]];
           }
           o[this.name].push(this.value || '');
       } else {
           o[this.name] = this.value || '';
       }
   });
   return o;
};

/* Blog Newletter form Submit */
function blog_newsletter_submit()
{
  var formValid = document.forms["news-letterForm"].checkValidity();
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  $("#utm_source").val(urlParams);
  const leadSource = location.pathname.substring(0,location.pathname.length-1).split("/")[location.pathname.substring(0,location.pathname.length-1).split("/").length-1]
  $("#lead_source").val(leadSource);
  const today = new Date();
  const date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
  const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  const dateTime = date + ' ' + time;
    $("#timestamp").val(dateTime);
    var status=true;
    if($('#validation_type').val()=='custom')
    {
        var status = custom_valiadtion('news-letterForm','form-control');
    }
    //alert(status);
    if (formValid) 
    {
        $("#new-blog-submit").attr("disabled", true);
        // Submit Button Text Changed
        $("#new-blog-submit").val("Please Wait");
        var $form = $("form#news-letterForm"),
        url ="https://script.google.com/macros/s/AKfycbz2hMEwip-fjVBesFDs6MICMhihi6FRUcAzaU15w21HziM1H_LR/exec";
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
          data: $("form#news-letterForm").serializeObject(),
          success: function () {
              $("#new-blog-submit").removeAttr("disabled");
              $("#new-blog-submit").val("sign up");
              /*$("#success-msg").html(
                '<div class="alert-success alert blog-alert" id="success_div"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>Successfully Submitted</p></div>'
              );*/
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

function hideShow(data,data_id)
{
	//alert(data+data_id)
	if(data_id=='Current_Business')
	{
		if(data=='Other')
		{
			$( "#currentBussinessDiv").css( "display", "block" );
		}
		else
		{
			$( "#currentBussinessDiv").css( "display", "none" );
		}   
	}
	else if(data_id=='Current_Office')
	{
		if(data=='Other')
		{
			$( "#currentOfficeDiv").css( "display", "block" );
		}
		else
		{
			$( "#currentOfficeDiv").css( "display", "none" );
		}
	}
	else if(data_id=='Current_Infrastructure')
	{
		if(data=='Other')
		{
			$( "#infrastructureDiv").css( "display", "block" );
		}
		else
		{
			$( "#infrastructureDiv").css( "display", "none" );
		}       
	}
	else if(data_id=='Area_Coverage')
	{
		if(data=='Other')
		{
			$( "#areaCoverageDiv").css( "display", "block" );
		}
		else
		{
			$( "#areaCoverageDiv").css( "display", "none" );
		}       
	}
	else if(data_id=='Preferred_Association')
	{
		if(data=='Other')
		{
			$( "#preferredDiv").css( "display", "block" );  
		}
		else
		{
			$( "#preferredDiv").css( "display", "none" );
		}   
	}
}

function custom_valiadtion(formid,formfiledclass)
{
        //alert('#'+formid + " ."+formfiledclass);
        var regex = /^\d{10}$/;
        var namePattern = /[a - zA - Z0 - 9]{ 1, }/;
        var status = true;
        var has_errors = [] ;
        var i=0;
        $('#'+formid + " ."+formfiledclass).each(function()
        {
            var nameofvariable = this.name;
            if(nameofvariable.indexOf('email')!== -1 || nameofvariable.indexOf('Email')!== -1)  
            {
                var email = this.value
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if(this.value == '' || this.value === undefined || atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= this.value.length)
                {
                        //document.getElementById(this.id).focus();
                        var sd = this.placeholder 
                        $("#error_"+this.id).html("Please enter valid "+sd);
                        $("#error_"+this.id).attr('style', 'display:block;');
                        has_errors[i] = 'yes';
                }

                else 
                {
                    //document.getElementById(this.id).focus();
                    $("#error_"+this.id).html('');
                    $("#error_"+this.id).attr('style', 'display:none;');
                    has_errors[i] = 'no';

                }
            }
            else if(nameofvariable.indexOf('phone')!== -1 || nameofvariable.indexOf('mobile')!== -1 || nameofvariable.indexOf('Mobile')!== -1 || nameofvariable.indexOf('Phone')!== -1)
            {
                if(!this.value.match(regex))
                {
                         //document.getElementById(this.id).focus();
                         var sd = this.placeholder 
                         $("#error_"+this.id).html("Please enter valid "+sd);
                         $("#error_"+this.id).attr('style', 'display:block;');
                         has_errors[i] = 'yes';

                }

               else 
               {
                //document.getElementById(this.id).focus();
                $("#error_"+this.id).html('');
                $("#error_"+this.id).attr('style', 'display:none;');
                has_errors[i] = 'no';  

               }
            }
            else
            {
                if(this.value=='')
                {
                         //document.getElementById(this.id).focus();
                         var sd = this.placeholder 
                         //alert(sd);
                         if(typeof sd==='undefined')
                         {

                           $("#error_"+this.id).html("Please select any value");
                           $("#error_"+this.id).attr('style', 'display:block;'); 
                           has_errors[i] = 'yes';
                         }
                         else
                         {
                              $("#error_"+this.id).html("Please enter valid "+sd);
                              $("#error_"+this.id).attr('style', 'display:block;');
                              has_errors[i] = 'yes';
                         }


                }

              else {
                $("#error_"+this.id).html('');
                $("#error_"+this.id).attr('style', 'display:none;');
                has_errors[i] = 'no';
                }
            }
            i++;
       })
        //console.log(has_errors)
            if( $.inArray( 'yes', has_errors ) !== -1 ) 
            {
                status=false;
            }
            else{
                status=true;
            }
        //console.log(status)
        return status;
}
    
$("#salesforceSubmit").on('click', function (e) 
{
        e.preventDefault();
        if($('#validation_type').val()=='custom')
        {
            var status = custom_valiadtion('salesforce-form','form-control');
        }
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
                  //alert(utmSource.value);
                  if (utmSource) {
                    $("#salesforce-form #00N0I00000K9vYk").val(utmSource.value);
                  } else {
                    $("#salesforce-form #00N0I00000K9vYk").val("");
                  }
                }
            var name = $('#salesforce-form #salesforceName').val();
            name = name.trim().split(' ');
            const currentUrl = location.href;
            var res = currentUrl.split("/");
            var leadSrc = res[(res.length)-2];
            var ret_url = window.location.href;
            ret_url = ret_url+'?source=form_submit';
            //alert(ret_url);
            $('#salesforce-form #retURL').val(ret_url)
            if(leadSrc=='services')
            {
                var lead_source = 'Service-Express';
            }
            else if(leadSrc=='freight')
            {
                var lead_source = 'Service-Freight';
            }
            else if(leadSrc=='fulfilment')
            {
                var lead_source = 'Service-Fulfillment';
            }
            else if(leadSrc=='cross-border')
            {
                var lead_source = 'Service-Crossborder';
            }
            else if(leadSrc=='e2e')
            {
                var lead_source = 'Service-E2E';
            }
            else if(leadSrc=='international-parcel-services')
            {
                var lead_source = 'Footer-Int-parcel';
            }
            else if(leadSrc=='domestic-parcel-services')
            {
                var lead_source = 'Footer-Dom-parcel';
            }
            else if(leadSrc=='import-export-courier-services')
            {
                var lead_source = 'Footer-Imex-courier';
            }
            else if(leadSrc=='ftl-freight')
            {
                var lead_source = 'Footer-FTL';
            }
            else if(leadSrc=='ptl-freight')
            {
                var lead_source = 'Footer-PTL';
            }
            else if(leadSrc=='supply-chain-logistics')
            {
                var lead_source = 'Footer-Supply-chain';
            }
            else if(leadSrc=='ecommerce-logistics-services')
            {
                var lead_source = 'Footer-Ecom';
            }
            else if(leadSrc=='4-pronged-approach-to-ecommerce-warehousing-efficiency')
            {
                var lead_source = 'Fulfilment_blog';
            }
            else if(leadSrc=='4-pronged-approach-to-ecommerce-warehousing-efficiency')
            {
                var lead_source = 'Fulfilment_blog';
            }
            else if(leadSrc=='demand-forecasting-how-good-global-shipping-services-can-transform-your-entire-supply-chain' ||          leadSrc=='international-e-commerce-can-be-tricky-robust-global-logistics-can-help-with-that')
            {
                var lead_source = 'Cross-border_blog';
            }
            else if(leadSrc=='6-things-banks-and-financial-institutions-want-from-their-logistics-partners' || leadSrc=='address-disambiguation-for-seamless-e-commerce-delivery-even-under-special-circumstances' || leadSrc=='the-pharmaceutical-logistics-needs-a-new-and-improved-mailroom' || leadSrc=='6-things-banks-and-financial-institutions-want-from-their-logistics-partners')
            {
                var lead_source = 'Express_blog';
            }
            // For Complete URL
            $('#salesforce-form #00N0I00000K9Ebg').val(currentUrl);
            $('#salesforce-form #leadSource').val(lead_source);
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
            $('#salesforce-form #firstName').val(firstName);
            $('#salesforce-form #lastName').val(lastName);
            //$('#salesforce-form').find("input[name=validation_type]").remove()
            $('#salesforce-form').find("input[name=_wpcf7]").remove()
            $('#salesforce-form').find("input[name=_wpcf7_version]").remove()
            //$('#salesforce-form').find("input[name=validation_type]").remove()
            $('#salesforce-form').find("input[name=_wpcf7_version]").remove()
            $('#salesforce-form').find("input[name=_wpcf7_locale]").remove()
            $('#salesforce-form').find("input[name=_wpcf7_unit_tag]").remove()
            $('#salesforce-form').find("input[name=_wpcf7_container_post]").remove()
            $('#salesforce-form').find("input[name=_wpcf7_posted_data_hash]").remove()
          if (status === true) {
			  //alert();
			  $('#salesforce-form').find("input[name=validation_type]").remove()
              $("#salesforce-form").submit();
             
          }
}); 

function postlogisticsData(){
  var formValid = document.forms["isps_learn"].checkValidity();
  
    if($('#validation_type').val()=='custom')
    {
        var status = custom_valiadtion('isps_learn','form-control');
    }
   
    if (formValid) 
    {
		 document.getElementById("isps_learn").action = "https://docs.google.com/forms/u/2/d/e/1FAIpQLScoKDcmT8nyaif1imzroa79SxtMl5iD0QexEhjhPYO1VwuSdw/formResponse";
		
		$('#isps_learn').find("input[name=validation_type]").remove()
		$('#isps_learn').find("input[name=_wpcf7]").remove()
		$('#isps_learn').find("input[name=_wpcf7_version]").remove()
		$('#isps_learn').find("input[name=validation_type]").remove()
		$('#isps_learn').find("input[name=_wpcf7_version]").remove()
		$('#isps_learn').find("input[name=_wpcf7_locale]").remove()
		$('#isps_learn').find("input[name=_wpcf7_unit_tag]").remove()
		$('#isps_learn').find("input[name=_wpcf7_container_post]").remove()
		$('#isps_learn').find("input[name=_wpcf7_posted_data_hash]").remove()
		$("#isps_learn").submit();
	}
}