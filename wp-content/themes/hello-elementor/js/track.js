jQuery('.trackradio').click(function() {
	jQuery("input[name='radio']:checked").each(function() {
		var idVal = jQuery(this).val();
		var place_holder = jQuery.trim(jQuery("label[for='"+idVal+"']").text());
		var button_text ='<div id="loader_div" class=""></div>Track';
		if(place_holder=='Mobile Number')
		{
			button_text = '<div id="loader_div" class="" ></div>Get OTP & Track';

		}

		else if(place_holder=='LTL Shipment (LRN)')
		{
			place_holder = 'LRN Number';

		}
        $(".tracktext").val("");
		jQuery('.tracktext').attr("placeholder", place_holder);
		jQuery(".radius").html(button_text);
		var placeholder_value =jQuery('.tracktext').attr('placeholder') ;
		jQuery(".hintfix").attr("style", "display:none")
                    
	});
});

jQuery('.ptrackradio').click(function() {
            
	jQuery("input[name='pradio']:checked").each(function() 
    {
		var idVal = 'p'+jQuery(this).val();
		var place_holder = jQuery.trim(jQuery("label[for='"+idVal+"']").text());
		var button_text ='<div id="loader_div" class=""></div>Track';
		if(place_holder=='Mobile Number')
		{
			button_text = '<div id="loader_div" class="" ></div>Get OTP & Track';
		}
		else if(place_holder=='LTL Shipment (LRN)')
		{
			place_holder = 'LRN Number';
		}
		$("#popuptracktext").val("");
		jQuery('.ptracktext').attr("placeholder", place_holder);
		jQuery(".pradius").html(button_text);
		var placeholder_value =jQuery('.ptracktext').attr('placeholder') ;
		jQuery(".phintfix").attr("style", "display:none")

	});
});

jQuery("#otpFormResendButton").click(function (event) {
            resendOTPCommonFunction();
});
jQuery("#potpFormResendButton").click(function (event) {
	popupResendOTPCommonFunction();
});
jQuery("#otpFormLoginButton").click(function (event) {
	event.preventDefault();
	verifyOTPCommon()
});
var downloadTimer;
function waitForResend(showWaitingResend) {
	clearInterval(downloadTimer);
	jQuery("#otpFormResendButton").hide();
	jQuery("#waitingResend").hide();
	jQuery("#waitingResend").css('padding-top', '20px');
	// Track Modal
	jQuery('.trackmodalform #otpFormResendButton').hide();
	if(!showWaitingResend){
		jQuery('.trackmodalform #waitingResend').show();
	}
    var timeleft = 60;
        downloadTimer = setInterval(function () {
		if (timeleft <= 0) {
			clearInterval(downloadTimer);
			jQuery("#waitingResend").hide();
			jQuery("#otpFormResendButton").show();
			jQuery('#waitingResend').html('')
			//Track Modal
			jQuery('.trackmodalform #waitingResend').hide();
			jQuery('.trackmodalform #otpFormResendButton').show();
			jQuery('.trackmodalform #waitingResend').html('')
			
		}

		else {
            jQuery("#waitingResend").show();
			var waitingText = ' ' + timeleft + 's left to resend OTP';
		    document.getElementById("waitingResend").innerHTML = waitingText;
			jQuery('.trackmodalform #waitingResend').html(waitingText)
			
			
		}
		timeleft -= 1;
        }, 1000);

}
function waitForResendSupport() 
{
	clearInterval(downloadTimer);
	jQuery(".track_modal_field#potpFormResendButton").hide();
	var timeleft = 60;
	downloadTimer = setInterval(function () {
		if (timeleft >=0){

			jQuery(".track_modal_field #potpFormResendButton").hide();
			jQuery(".track_modal_field #pwaitingResend").show();
			document.getElementById("pwaitingResend").innerHTML = ' ' + timeleft + 's left to resend OTP';
		}
		else {
			clearInterval(downloadTimer);
			jQuery(".track_modal_field #potpFormResendButton").show();
			jQuery(".track_modal_field #pwaitingResend").hide()
		} 
		timeleft -= 1;
	}, 1000);
}

jQuery('#close_mdl').click(function() 
{ 
	
	jQuery("#waitingResend").hide();
	clearInterval(downloadTimer);
	
});
jQuery('#dismiss').click(function() 
{ 
	jQuery(".track_modal_field #pwaitingResend").hide()
	clearInterval(downloadTimer);
	
});

window.AvoidSpace = function (event) {
	var k = event ? event.which : window.event.keyCode;
	if (k == 32) return false;
};
window.remove_err_msg = function () 
{
	jQuery(".hintfix").attr("style", "display:none")
	jQuery(".phintfix").attr("style", "display:none")

};

function parseTrackDate(date) {
      let months = [
        'Jan',
        'Feb',
        'March',
        'April',
        'May',
        'June',
        'July',
        'Aug',
        'Sept',
        'Oct',
        'Nov',
        'Dec'
      ];
      let dateObj = new Date(date + '+05:30');
      let scanDate =
        dateObj.getDate() +
        ' ' +
        months[dateObj.getMonth()] +
        ' ' +
        dateObj.getFullYear();
      if (dateObj.getHours() >= 0 && dateObj.getHours() < 12) {
        scanDate += ', ' + 'Morning';
      } else if (dateObj.getHours() >= 12 && dateObj.getHours() < 16) {
        scanDate += ', ' + 'Afternoon';
      } else {
        scanDate += ', ' + 'Evening';
      }
      return scanDate;
    }
window.compareEstiamtedSlotDate = function(estimatedDate, slotDate) {
      let months = [
        'Jan',
        'Feb',
        'March',
        'April',
        'May',
        'June',
        'July',
        'Aug',
        'Sept',
        'Oct',
        'Nov',
        'Dec'
      ];
      let estimatedDateObj = new Date(estimatedDate + '+05:30');
      let scanDate = '';
  
      if (slotDate) {
        let dateString = slotDate; // dd/mm/yyyy format
        let dateParts = dateString.split("/");
        // month is 0-based, that's why we need dataParts[1] - 1
        let slotDateObject = new Date(+dateParts[2], dateParts[1] - 1, +dateParts[0]);
        if (estimatedDateObj.getTime() > slotDateObject.getTime()) {
          scanDate =
            estimatedDateObj.getDate() +
            ' ' +
            months[estimatedDateObj.getMonth()] +
            ' ' +
            estimatedDateObj.getFullYear();
        } else if (estimatedDateObj.getTime() < slotDateObject.getTime()) {
          scanDate =
            slotDateObject.getDate() +
            ' ' +
            months[slotDateObject.getMonth()] +
            ' ' +
            slotDateObject.getFullYear();
        }
      } else {
        scanDate =
          estimatedDateObj.getDate() +
          ' ' +
          months[estimatedDateObj.getMonth()] +
          ' ' +
          estimatedDateObj.getFullYear();
      }
      return scanDate;
}
window.parseTime = function (fromTime) {
      if (!fromTime) return "Morning";
      let time = fromTime.slice(0, 2);
      hours = parseInt(time, 10);
      if (hours < 12) {
        return "Morning";
      } else if (hours == 12 || hours < 16) {
        return "Afternoon";
      } else {
        return "Evening";
      }
}
window.parseDate = function(date) {
      var dateOptions = {
        day: "numeric",
        month: "short",
        year: "numeric"
      };
      var timeOptions = {
        hour: "numeric"
      };
      var visibleDate = new Date(date).toLocaleDateString("en-GB", dateOptions);
      var hours = new Date(date).toLocaleTimeString("en-GB", timeOptions);
      hours = parseInt(hours, 10);
      if (hours < 12) {
        return visibleDate + ", " + "Morning";
      } else if (hours == 12 || hours < 16) {
        return visibleDate + ", " + "Afternoon";
      } else {
        return visibleDate + ", " + "Evening";
      }
}
window.renderSingleLRSummary = function (shipmentDetails) 
{
		var lrn = shipmentDetails.lrnum ? shipmentDetails.lrnum : "NA";
		var url = 'https://www.delhivery.com/track/lr/'+lrn
		location.href = url;
}
function getPackageConstants(packageType, packageFlow) {
      var packageConstants = {};
      SCAN_OBJECTS_MAP = [];
      packageConstants.flowType = "FORWARD_PARTIAL";
      if (packageType == "FORWARD" && packageFlow == "ONWARD") {
        packageConstants.flowType = "FORWARD_PARTIAL";
      } else if (packageType == "FORWARD" && packageFlow == "RETURN") {
        packageConstants.flowType = "FORWARD_COMPLETE";
      } else if (packageType == "REVERSE") {
        packageConstants.flowType = "REVERSE";
      } else if (packageType == "REPLACEMENT") {
        packageConstants.flowType = "REPLACEMENT";
      } else if (packageType == "CASH") {
        packageConstants.flowType = "CASH";
      } else if (packageType == "LRN") {
        packageConstants.flowType = "LRN";
      }
      packageConstants.scanObjectMap = packageConstants.flowType;
      //console.log(packageConstants);
      return packageConstants;
}
jQuery(document).ready(function($) {
	// get_count_delhivery_packets();
	get_blog_cat_name();
	
});

var input1 = document.getElementById("popuptracktext");
    input1.addEventListener("keyup", function(event) {
	  if (event.keyCode === 13) {
	   event.preventDefault();
	   $(".pradius").click();
	   
	  }
});
var input3 = document.getElementById("track_text");
if(input3!=null)
{
		input3.addEventListener("keyup", function(event) {
		if (event.keyCode === 13) 
		{   
		   event.preventDefault();
		   $("#radiusid").click();
		}
	  
       });
}
    

 


 