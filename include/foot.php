<div class="modal fade my-order-modal" id="trackModalForm" tabindex="-1" role="dialog" aria-labelledby="ShipOrderModal" aria-hidden="true"  data-keyboard="false" data-backdrop="static">
            <div class="track-order-modal">
            <div class="track-order-header">
                <h2>Track Order</h2>
                <i><img src="wp-content/uploads/2021/07/track.png" alt="contact-form"
                        class="has-retina contact-form-img"></i>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="GET" name="tracking">

        
            <div class="track-order-form">
            <div class="track-radio-btn-wrapper">
  <label class="radio-container checked" id="mobileRadio" for=pwaybillId>Tracking ID

                        </label> 
                        
                       <div class="phintfix" style="display: none;"></div></div></div> <div class="control-bx"><input type="text" class="track-order-input-field ptracktext" name="tracking" placeholder="Tracking Id" required></div>
               <div class="form-group track_modal_field" style="display:none;"> 
               <div class="otpModalForm-hintfix" style="display:none;"><span class="msg red-color otpModalForm-hintfixError"></span></div>
    
        
     
        </div>
                <div class="modal-btn-bx track-modal-btn-bx">
                 <button type="button" data-dismiss="modal" aria-label="Close" data-target="#packageTrack" class="dismiss-btn" id="dismiss">dismiss</button>
                <div id="get_otp" style="display:block">
                <button type="submit" class="dismiss-btn getotp-btn pradius">
                <div id="modal_loader_div" class="" style="display: none;"></div> Track
                
                </button>
                </div>
           
              </div>
              </form>
        </div>
    </div>
<style></style>
<footer id="site-footer" class="site-footer" role="contentinfo">
		
	  <footer>
        <div class="page-container">
            <div class="dlv-container">
                <div class="clearfix">
                    <div class="col-lg-3 col-xs-12 col-sm-12">
                        <a href="index.php" class="footer-logo"> <img
                                src="images/logo.png" alt="footer-logo"
                                class="img-responsive" style="width: 210px;" onclick="onNavigate('index.html','', '', '','','', event);" > </a>
                        <p class="footer-txt-1 color-8181811">ISO 9001: 2015, ISO 27001: 2013 Certified Company</p>
                        <p class="footer-txt color-818181">CIN: U63090DL2011PLC221234</p>
                        
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 col-sm-12 nopadding-mob">
                        <div class="clearfix">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cmn-links">
                                    <h5 class="red-color">Company</h5>
                                    <ul>
                                        <li>
                                            <a href="about.php" onclick="onNavigate('about.php','footer', 'about_link', 'view_about_link', '','', event);">About us</a>
                                        </li>
										 
                                        <li> <a href="express.php" onclick="onNavigate('express.php','footer', 'solutions_link', 'view_solutions_link', '','', event);">Services</a>
                                        </li>
                                        <li> <a href="partner.php" onclick="onNavigate('partner.php','footer', 'partner_link', 'view_partner_link', '','', event);">Partner</a>
                                        </li>
                                      
<!--                                         <li> <a
                                                href="/blog/" onclick="onNavigate('/blog/','footer','blog_link', 'view_blog_link', '','', event);">Blog</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cmn-links">
                                    <h5 class="red-color">Get in touch</h5>
                                    <ul>
                                        <li> <a href="support.php" onclick="onNavigate('support.php','footer', 'contact_link', 'view_contact_link', '','', event);">Support</a>
                                        </li>
                                       
                                        <li> <a href="partner.php" target="_blank" onclick="onNavigate('partner.php','footer', 'ship_link', 'view_ship_link', '','', event);">Start
                                                Shipping</a></li>
                                                <li> <a href="support.php#support-form"  onclick="scrollToForm()">Raise a Query</a>
                                    </ul>
                                </div>
                            </div>
<!--                             <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="cmn-links">
                                    <h5 class="red-color">More from <?php echo "$site_name3";?></h5>
                                    <ul>
                                        <li> <a href="https://www.<?php echo "$site_name3";?>.com/services/international-parcel-services/">International
                                                Parcel Services</a>
                                        </li>
                                        <li> <a href="https://www.<?php echo "$site_name3";?>.com/services/domestic-parcel-services/">Domestic Courier Services</a>
                                        </li>
                                        <li> <a href="https://www.<?php echo "$site_name3";?>.com/services/import-export-courier-services/">Import-Export Courier Services</a></li>
                                    </ul>
                                </div>
                            </div> -->
<!--                             <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="cmn-links">
                                    <h5 class="red-color">Quick Links</h5>
                                    <ul>
										   <li> <a href="/services/domestic-parcel-services/"
                                                onclick="onNavigate('/services/domestic-parcel-services/','footer', 'domestic-parcel-link', 'view_domestic-parcel-link', '','', event);" >Domestic Courier Services</a>
                                        </li>
                                        <li> <a href="/services/ftl-freight/"
                                               onclick="onNavigate('/services/ftl-freight/','footer', 'ftl-link', 'view_ftl-link', '','', event);" >Full-Truckload
                                                Services</a>
                                        </li>
                                        <li> <a href="/services/ptl-freight/"  onclick="onNavigate('/services/ptl-freight/','footer', 'ptl-link', 'view_ptl-link', '','', event);">Partial-Truckload
                                                Services</a>
                                        </li>
                                        <li> <a href="/services/supply-chain-logistics/"
                                              onclick="onNavigate('/services/supply-chain-logistics/','footer', 'supply-chain-link', 'view_supply-chain-link', '','', event);">Supply
                                                Chain Logistics</a>
                                        </li>
                                        <li> <a href="/services/ecommerce-logistics-services/"
                                                 onclick="onNavigate('/services/ecommerce-logistics-services/','footer', 'ecommerce-logistics-link', 'view_ecommerce-logistics-link', '','', event);">Ecommerce
                                                Logistics Services</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="col-md-8 col-sm-4 col-xs-12">
                                <div class="cmn-links">
                                    <h5 class="red-color">Information Security Policy</h5>
                                    <p><?php echo "$site_name3";?> is committed to safeguarding the confidentiality, integrity and
                                        availability of all
                                        physical and electronic information assets of the organization. We ensure that
                                        the
                                        regulatory, operational and contractual requirements are fulfilled.</p>
                                </div>
                                <div class="cmn-links">
                                    <h5 class="red-color">Disclaimer</h5>
                                    <p>Operational metrics listed are as of June 30, 2021</p>
                                </div>
                            </div>
						
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="gray-bg footer-bottom padding-10">
		
		<!--Floating button-->
		
		<div id="mainClassOpen" class="signFixSec">
        <div class="btn-group-sm" id="mini-fab"> 
			</div>		<!-- <a data-toggle="modal" style="bottom: 162px;" class="cmn-floating-btns" id="signup"
            onclick="onDownloadButton();"> Signup </a>-->
			
</div>
		
		
<!-- 		<div class="signFixSec" style="display: block;"> <a href="https://cl.delhivery.com/#/signup/?utm_source=sme_website&amp;utm_medium=signup_floater_button" id="new-blog-contact" target="_blank" onclick="sendGaEvent('setup', 'click', 'sign_up');"> SIGN UP <img src="/wp-content/uploads/2021/12/signup.svg"></a><div class="closeImg"></div></div> -->
		
		
		
		<!--Floating button ends-->
		
		
        <div class="dlv-container">
            <div class="bottom">
                <div class="col-md-2 col-sm-12">
                    <p class="footer-txt copyright">© <?php echo "$site_name3";?> Limited</p>
                </div>
                <div class="col-md-7 col-sm-12">
                    <p class="text-center footer-txt footer-links"> <a href="terms.php"> Terms
                            &amp;
                            Conditions</a> | <a target="" href="privacy.php"
                         onclick="onNavigate('privacy.php','', '', '', '','', event);">Privacy
                            Policy</a> | <a target="" href="cookie.php" onclick="onNavigate('cookie.php','', '', '', '','', event);"

>Cookie
                            Policy</a> | 
                            <!-- <a target="_blank" href="/wp-content/uploads/2021/11/csrpolicy.pdf"
                            onclick="onNavigate('/wp-content/uploads/2021/11/csrpolicy.pdf','', '', '', '','', event, true);">CSR
                            Policy</a> 
                            |  -->
                          </p>
                </div>
                <div class="clearfix social-icon-new social-icons col-md-3 col-sm-12">
                    <!-- <a target="_blank" href="" class="youtube-icon" onclick="sendGaEvent('footer', 'youtube_icon', 'social_link');"></a> -->
                    <a target="_blank" href="" class="youtube-icon"
                        onclick="onNavigate('','footer', 'youtube_icon', 'social_link', '','', event);"></a>
                    <!-- <a target="_blank" href="" class="twitter-icon" onclick="sendGaEvent('footer', 'twitter_icon', 'social_link');"></a> -->
                    <a target="_blank" href="" class="twitter-icon"
                        onclick="onNavigate('','footer', 'twitter_icon', 'social_link', '','', event);"></a>
                    <!-- <a target="_blank" href="" class="linkedin-icon" onclick="sendGaEvent('footer', 'linkedin_icon', 'social_link');"></a> -->
                    <a target="_blank" href="" class="linkedin-icon"
                        onclick="onNavigate('','footer', 'linkedin_icon', 'social_link', '','', event);"></a>
                    <!-- <a target="_blank" href="" class="git-icon" onclick="sendGaEvent('footer', 'instagram_icon', 'social_link');"></a> -->
                    <a target="_blank" href="" class="git-icon"
                        onclick="onNavigate('','footer', 'instagram_icon', 'social_link', '','', event);"></a>
                    <!-- <a target="_blank" href="" class="fb-icon" onclick="sendGaEvent('footer', 'facebook_icon', 'social_link');"></a> -->
                    <a target="_blank" href="" class="fb-icon"
                        onclick="onNavigate('','footer', 'facebook_icon', 'social_link', '','', event);"></a>
                </div>
            </div>
        </div>
    </footer>
	<!--<script src="/wp-includes/js/jquery/jquery.min.js?ver=3.5.1"></script>-->
	<script>
	/*$(document).ready(function(){
		alert();
    $(window).scroll(function(){
		alert();
    if ($(this).scrollTop() > 50) {
       $('.site-header').addClass('white-bg');
    } else {
       $('.site-header').removeClass('white-bg');
    }
    });
								
});*/
    </script>
								
								
    
            <link rel="stylesheet"
                  href="wp-content/themes/hello-elementor/css/owl.carousel.min.css" />
            <link rel="stylesheet" href="wp-content/themes/hello-elementor/css/bootstrap.min.css" />
            <script src="wp-content/themes/hello-elementor/js/jquery-3.6.0.min.js"></script>
            <!--<script src="<?//=get_template_directory_uri();?>/js/jquery.min.js"></script>-->
            <script src="wp-content/themes/hello-elementor/js/bootstrap.min.js"></script>
            <script src="wp-content/themes/hello-elementor/js/owl.carousel.min.js"></script>
            <script src="wp-content/themes/hello-elementor/js/custom.js"></script>
            <script src="wp-content/themes/hello-elementor/js/track.js"></script>
            <script src="wp-content/themes/hello-elementor/js/form.js"></script>
            <script src="wp-content/themes/hello-elementor/js/setup_business_form.js"></script>
            
    <script type="text/javascript" >

    /*Support Page Js */
    $(".verify-waybill").show();
    $(".verify-mobile-number").hide();
    $(".enter-mobile-otp").hide();
    $(".raise-issue").hide();
    $(".verify-mobile-number .hintfix").hide();
    $(".enter-mobile-otp .hintfix").hide();

    $("#support-check-wbn").click(function(event) {
    var base_url = 'https://dlv-api.delhivery.com/';
        $("#support_wbn_loader_div").show();
        var wbnInput = '#waybill-support-id';
        var wbn = $(wbnInput)
            .val()
            .trim()
            .replace(/\n/g, ",")
            .replace(/\r/g, ",")
            .replace(/[, ]+/g, ",");
        var t_wbn = 'waybillId';

        var validText = true;
        var regex = new RegExp(
            "^S?[0-9]{11,40}$|^[A-Z]{2}d{9,38}[A-Z]{2}$|^d{15, 40}$|^[A-Z]{2}[0-9]{9, 38}[A-Z]{2}$"
        );
        var valid = regex.test(wbn);
        if (!valid) {
            validText = false;
        }
        if (!validText) {
            $("#support_wbn_loader_div").hide();
            $(".verify-waybill hintfix").show();
            $(".waybillHintfixSupportErrorMob").text(
                "Please enter a valid AWB Number"
            );
        } else {
            var data = queryParamNewAPI(t_wbn) + "=" + wbn;

            window.track_form_url = escapeHTML(
                base_url + "/v3/track?" + data,
                true
            );

            // Calling Track API
               jQuery.ajax({
                         type: "GET",
                         url: base_url + "/v3/track?" + data,
                         dataType: 'json'
                        
                        }).done(function (trackResp) 
                        { 
           
                    localStorage.setItem("currentWaybill", wbn);
                    $(".verify-waybill hintfix").hide();
                    $(".waybillHintfixSupportErrorMob").text("");
                    checkWaybill(trackResp);
               if (this.readyState == 4) {
                
                var data = xhttp.response ? JSON.parse(xhttp.response) : {};
                if (this.status == 200 || this.status === 400) {
                    // return defered.resolve(data);
                    return data;
                }else if(this.status === 429){
                    data["code"] = 429;

                }else if (searchCount === 0 && this.status === 0) {
                    searchCount = 1;
                    var xhttp_retry = new XMLHttpRequest();
                    xhttp_retry.onreadystatechange = function() {
                        if (this.readyState == 4) {
                            var data = xhttp_retry.response ?
                                JSON.parse(xhttp_retry.response) : {};
                            if (this.status == 200) {

                            } else {
                                data["lrnum"] = requestData["lrnum"];
                                data["code"] = 404;
                            }
                        }
                    };
                    xhttp_retry.open("404-not-found/index.html", url, true);
                    xhttp_retry.send();
                } else {
                    data["lrnum"] = requestData["lrnum"];
                    data["code"] = 404;
                    return defered.resolve(data);

                }
            }
                },
                function(error) {
				   if(!"#success-msg"){
					      $(".verify-waybill hintfix").show();
                    $(".waybillHintfixSupportErrorMob").text(
                        "Something went wrong. Please try again."
                    );
					  }
                
                }
            );
        }
    });
    function checkWaybill(data) {
        var shipmentsData = data && data.data && data.data.length ? data.data : [{}];
        var shipmentDetails = shipmentsData[0];
        var trackErrMessages = [
            "Could not find this order with us. Please check the waybill/order ID entered.",
            "Package details are not visible after 1 week of delivery."
        ];
        localStorage.setItem("currentWaybillDetails", JSON.stringify(shipmentsData[0]));
        if (Object.keys(shipmentDetails).length) {
            $(".verify-waybill").hide();
            $(".verify-mobile-number").show();
            $(".enter-mobile-otp").hide();
        } else {
            var errMessage = trackErrMessages[0];
            if (data.message.toLowerCase().indexOf("package details are not visible") > 0) {
                errMessage = trackErrMessages[1];
            }
            $("#support_wbn_loader_div").hide();
            $(".verify-waybill hintfix").show();
            $(".waybillHintfixSupportErrorMob").text(errMessage);
        }
    }
    window.queryParamNewAPI = function(queryP) {

        var query = queryP
        switch (queryP) {
            case 'waybillId':
                query = 'wbn'
                break;
            case 'orderId':
                query = 'ref_id'
                break;
            default:
                query = queryP;
        }
        return query
    }
      function escapeHTML(s, forAttribute) {
        return s.replace(forAttribute ? /[&<>'"]/g : /[&<>]/g, function(c) {
            return ESC_MAP[c];
        });
    }





    $("#support-send-mobile").click(function(event) {
        $(".verify-mobile-number .hintfix").hide();
        var mobileInput = '#mobile-support-id';

        var phone = $(mobileInput)
            .val()
            .trim()
            .replace(/\n/g, ",")
            .replace(/\r/g, ",")
            .replace(/[, ]+/g, ",");
        const regex = new RegExp("^[6-9]{1}\\d{9}$");
        if (!regex.test(phone)) {
            $(".verify-mobile-number .hintfix").show();
            $(".verify-mobile-number .hintfixSupportErrorMob").text('Please enter a valid Mobile Number');
        } else {
            $("#support_send_mobile_loader_div").show();
            generateSupportOtp(phone);
        }
    });
    function generateSupportOtp(mobile) {
    var base_url = "https://dlv-api.delhivery.com";
    
        const url = escapeHTML(
            `${base_url}` + `/client-profile` + `/otp/generate/+91${mobile}`,
            true
        );
    

        $.ajax({
                type: "GET",
                url: url
            })
            .done(function(response) {
                // Stop Loader
                $("#support_send_mobile_loader_div").hide();
                // Save Mobile Number in local storage
                localStorage.setItem("currentUserSupportMobile", mobile);
                $("#otpFormText").text(`OTP Sent on +91 ${mobile}`);
                $(".verify-waybill").hide();
                $(".verify-mobile-number").hide();
                $(".enter-mobile-otp").show();
                $(".raise-issue").hide();
                $(".hintfixRendSupportErrorMob").text("");
                $(".verify-mobile-number .hintfixSupportErrorMob").text("");
                // sendGaEvent("OTP_Popup_MobileLogin", "OTP_Popup_MobileLogin", "OTP_Popup_MobileLogin");

                $("#success-msg").html(
                    '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>OTP Sent</p></div>'
                );
                setTimeout(function() {
                    $('.issue-close-button').click();
                }, 15000);
                waitForResendSupport();
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                $(".loader_div").hide(); // trackModal
                $("#support_send_mobile_loader_div").hide();
                $(".verify-mobile-number .hintfix").show();
                $(".verify-mobile-number .hintfixSupportErrorMob").text('');
                var response = JSON.parse(jqXHR.responseText);
                if (response && response['message']) {
                    $(".verify-mobile-number .hintfixSupportErrorMob").text(response['message']);
                    $(".verify-mobile-number .hintfixSupportErrorMob").show();
                }
            });
    }

  $("#support-send-otp").click(function(event) {
    var base_url = 'https://dlv-api.delhivery.com';
   
        $("#support_send_otploader_div").show();
        const mobile = localStorage.getItem("currentUserSupportMobile");
        $("#support-send-otp").attr("disabled", "disabled");
        var otp = $("#otp-support-id").val().trim();
        const url = escapeHTML(
             `${base_url}` + `/client-profile/` + `/otp/verify/+91${mobile}?otp=${otp}`,
            true
        );
        if (otp.length == 6) {
            $.ajax({
                    type: "GET",
                    url: url
                })
                .done(function(response) {
                    // Stop Loader
                    $("#support_send_otploader_div").hide();
                    $("#support-send-otp").removeAttr("disabled");
                    localStorage.removeItem("currentUserSupportMobile");
                    // Save Data in Local Storage
                    localStorage.setItem(
                        "authData",
                        JSON.stringify({
                            Authorization: response["response"]["token"],
                            mobile: mobile
                        })
                    );

                    let wbn = localStorage.getItem("currentWaybill");
                    $(".enter-mobile-otp .hintfix").text("");
                    checkValidWaybill(wbn);
                })
                .fail(function() {
                    $(".otptext").val("");
                    $("#support-send-otp").removeAttr("disabled");
                    $(".enter-mobile-otp .hintfix").text("Please enter valid otp!");
                    $(".enter-mobile-otp .hintfix").show();
                    $("#support_send_otploader_div").hide();
                });
        } else {
            $("#otp-support-id").val("");
            $(".enter-mobile-otp .hintfix").text("Please enter valid otp!");
            $(".enter-mobile-otp .hintfix").show();
            $("#support-send-otp").removeAttr("disabled");
            $("#support_send_otploader_div").hide();
        }
    });
    function checkValidWaybill(wbn) {
    var base_url = 'https://dlv-api.delhivery.com/';
        var authData = JSON.parse(localStorage.getItem('authData'));
        var authToken = authData['Authorization'];
        $.ajax({
                type: "GET",
                url: base_url + "/client-orders/" + "/validate/wbn/" + wbn,
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${authToken}`
                }
            })
            .done(function(response) {
                if (!response['success']) {
                    $(".verify-waybill").show();
                    $(".verify-mobile-number").hide();
                    $(".enter-mobile-otp").hide();
                    $(".raise-issue").hide();
                    $("#success-msg").html(
                        '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>The waybill/AWB number you have entered is not associated with your mobile number.</p></div>'
                    );
                    setTimeout(function() {
                        $('.issue-close-button').click();
                    }, 15000);

                } else {
                    getSupportContent(authToken)
                    $(".verify-waybill").hide();
                    $(".verify-mobile-number").hide();
                    $(".enter-mobile-otp").hide();
                    $(".raise-issue").show();
                }
            })
            .fail(function(error) {
                // sendGaEvent("DLVsupportpage", "DLVsupportpage_raiseissue_waybillnotassociatedwithuser", "DLVsupportpage");
                $(".verify-waybill").show();
                $(".verify-mobile-number").hide();
                $(".enter-mobile-otp").hide();
                $(".raise-issue").hide();
                $("#support_wbn_loader_div").hide();
                $("#success-msg").html(
                    '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>The waybill/AWB number you have entered is not associated with your mobile number.</p></div>'
                );
                setTimeout(function() {
                    $('.issue-close-button').click();
                }, 15000);
            });
    }
    function getSupportContent(authToken) {
    var base_url = 'https://dlv-api.delhivery.com/';
        $("#support_send_otploader_div").show();
        let shipmentsData = JSON.parse(localStorage.getItem("currentWaybillDetails"));
        let issueCateogoriesArr = [];
        $.ajax({
                type: "GET",
                url: base_url + "/client-orders" + "/ticket/create/" + shipmentsData['awb'],
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${authToken}`
                }
            })
            .done(function(response) {
                $("#support_send_otploader_div").hide();
                var issueData = response['data'];
                issueCateogoriesArr = issueData['options']
                localStorage.setItem("currentSupportDetails", JSON.stringify(issueCateogoriesArr));
                if (issueCateogoriesArr.length > 0) {
                    var issueCat = JSON.parse(localStorage.getItem("currentSupportDetails"));
                    $('#support_issue_cat').show();
                    var $mySelect = $('#support_issue_cat_dropdown');
                    $mySelect.find('option').not(':first').remove();
                    $('#support_issue_sub_cat_dropdown').find('option').not(':first').remove();
                    $.each(issueCat, function(key, value) {
                        var $option = $("<option/>", {
                            value: key,
                            text: value.option
                        });
                        $mySelect.append($option);
                    });

                    $('#support_issue_info').hide();
                    $('#support_issue_desc').hide();
                    $("#support_wbn_loader_div").hide();
                    $(".verify-waybill").hide();
                    $(".raise-issue").show();
                } else {
                    $("#support_send_otploader_div").hide();
                    localStorage.setItem("currentSupportDetails", JSON.stringify(issueCateogoriesArr));
                    $('#support_issue_info').show();
                    document.getElementById('support_issue_info_label').innerHTML = 'We request you to please try again in some time';
                    $('#support_issue_cat').hide();
                    $('#support_issue_desc').hide();
                    $("#support_wbn_loader_div").hide();
                    $(".raise-issue").show();
                }
            })
            .fail(function(error) {
                $("#support_send_otploader_div").hide();
                $('#support_issue_info').show();
                document.getElementById('support_issue_info_label').innerHTML = 'We request you to please try again in some time';
                $('#support_issue_cat').hide();
                $('#support_issue_desc').hide();
                $("#support_wbn_loader_div").hide();
                $(".verify-waybill").hide();
                $(".raise-issue").show();
            });

    }


    function waitForResendSupport() {
    let downloadTimer;
         if (downloadTimer) {
            clearInterval(downloadTimer);
            downloadTimer = null;
        }
   
        $("#otpSupportFormResendButton").hide();
        $("#waitingSupportResend").show()

        let timeleft = 60;
         downloadTimer = setInterval(function() {
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
                downloadTimer = null;
                $("#waitingSupportResend").hide();
                $("#otpSupportFormResendButton").show();
                $('#waitingSupportResend').html('')
            } else {
                document.getElementById("waitingSupportResend").innerHTML = ' ' + timeleft + 's left to resend OTP';
            }
            timeleft -= 1;
        }, 1000);
    }

  $('#support_issue_sub_cat_dropdown').change(function(){
    $("#desc_issue").val("");
    $("#error_issue_sub_cat_issue").html("");
    $("#error_issue_sub_cat_issue").attr("style", "display:none;");
    var allIssues = JSON.parse(localStorage.getItem("currentSupportDetails"));
    var support_issue_cat_value = $("#support_issue_cat_dropdown").val();
    var support_issue__sub_cat_value = $(this).val();
    if (support_issue__sub_cat_value === 'select_issue_sub_category') {
      $('#support_issue_desc').hide();
    }else{
      if ( allIssues[support_issue_cat_value]['sub_options'][support_issue__sub_cat_value]['sub_option_text_box']){
        $('#support_issue_desc').show();
        $('#desc_issue').attr("placeholder", allIssues[support_issue_cat_value]['sub_options'][support_issue__sub_cat_value]['sub_option_desc'])
      }else{
        $('#support_issue_desc').hide();
      }
    }
  })

  $("#support-raise-issue").click(function () {
    var base_url = 'https://dlv-api.delhivery.com/';
    var status = true;
    var allIssues = JSON.parse(localStorage.getItem("currentSupportDetails"));
    var tracking_issue = localStorage.getItem("currentWaybill");
    var support_issue_cat_value_index = $("#support_issue_cat_dropdown").val();
    var support_issue_sub_cat_value_index = $("#support_issue_sub_cat_dropdown").val();
    var sub_cat_object ;
    var support_issue_cat_value;
    var support_issue_sub_cat_value;
    var name_issue = $("#name_issue").val().trim();
    var email_issue = $("#email_issue").val().trim();
    if(support_issue_cat_value_index !== 'select_issue_category'){
      support_issue_cat_value = allIssues[support_issue_cat_value_index]['option'];
      if(allIssues[support_issue_cat_value_index]['sub_options'] != null && support_issue_sub_cat_value_index != 'select_issue_sub_category' ){
        sub_cat_object = allIssues[support_issue_cat_value_index]['sub_options'][support_issue_sub_cat_value_index]
        support_issue_sub_cat_value = sub_cat_object['sub_option'];
      }
    }
    var desc_issue = $('#desc_issue').val().trim();

    var atpos = email_issue.indexOf("@");
    var dotpos = email_issue.lastIndexOf(".");

    if (
      email_issue === "" ||
      email_issue === undefined ||
      atpos < 1 ||
      dotpos < atpos + 2 ||
      dotpos + 2 >= email_issue.length
    ) {
      $("#error_email_issue").html("Please enter a valid email.");
      status = false;
      $("#error_email_issue").removeAttr("style");
    } else {
      $("#error_email_issue").html("");
      $("#error_email_issue").attr("style", "display:none;");
    }
    if (support_issue_cat_value === "" || support_issue_cat_value === undefined) {
      $("#error_issue_cat_issue").html("Please select a valid issue category.");
      status = false;
      $("#error_issue_cat_issue").removeAttr("style");
    } else {
      $("#error_issue_cat_issue").html("");
      $("#error_issue_cat_issue").attr("style", "display:none;");
    }

    if (name_issue === "" || name_issue === undefined) {
      $("#error_name_issue").html("Please enter a valid name.");
      status = false;
      $("#error_name_issue").removeAttr("style");
    } else {
      $("#error_name_issue").html("");
      $("#error_name_issue").attr("style", "display:none;");
    }
     
    if (support_issue_cat_value_index === 'select_issue_category' || support_issue_cat_value_index === undefined ){
      $("#error_issue_cat_issue").html("Please select a valid issue category.");
      status = false;
      $("#error_issue_cat_issue").removeAttr("style");
    }else{
      if (allIssues[support_issue_cat_value_index]['sub_options'] && 
      (support_issue_sub_cat_value_index == 'select_issue_sub_category' || support_issue_sub_cat_value === "" || support_issue_sub_cat_value === undefined)) {
        $("#error_issue_sub_cat_issue").html("Please select a valid issue sub category.");
        status = false;
        $("#error_issue_sub_cat_issue").removeAttr("style");
      } else {
        $("#error_issue_sub_cat_issue").html("");
        $("#error_issue_sub_cat_issue").attr("style", "display:none;");
      }

      if (allIssues[support_issue_cat_value_index]['option_text_box'] && desc_issue === "") {
        $("#error_desc_issue").html("Please enter a valid description.");
        status = false;
        $("#error_desc_issue").removeAttr("style");
      } else if(allIssues[support_issue_cat_value_index]['sub_options'] && 
      allIssues[support_issue_cat_value_index]['sub_options'][support_issue_sub_cat_value_index]['sub_option_text_box'] && desc_issue === "") {
        $("#error_desc_issue").html("Please enter a valid description.");
        status = false;
        $("#error_desc_issue").removeAttr("style");
      } else {
        $("#error_desc_issue").html("");
        $("#error_desc_issue").attr("style", "display:none;");
      }
    }
    if (tracking_issue === "" || tracking_issue === undefined) {
      $("#error_tracking_issue").html("Please enter a valid tracking id.");
      status = false;
      $("#error_tracking_issue").removeAttr("style");
    } else {
      $("#error_tracking_issue").html("");
      $("#error_tracking_issue").attr("style", "display:none;");
    }

    if (status === true) {
      $("#support_raise_issue_loader_div").show();
      var authData = JSON.parse(localStorage.getItem('authData'));
      var authToken = authData['Authorization'];
      var phone = authData['mobile'];
      let phonenumber = phone.startsWith('+91')
      ? phone.slice(3, phone.length)
      : phone;

      const payload = {
        reference_id: tracking_issue,
        reference_type: 'Package',
        source: 'DLV Web',
        option: support_issue_cat_value || '',
        sub_option: support_issue_sub_cat_value || '',
        name: name_issue,
        email: email_issue,
        phone: phonenumber,
        description: desc_issue
      };
      $.ajax({
        type: "POST",
        url: base_url+"/client-orders" + "/ticket/create",
        headers: {
          "Content-Type": "application/json",
          "Authorization": `Bearer ${authToken}`
        },
        data: JSON.stringify(payload)
      })
        .done(function (response) {
 		 createResponse = response['data'];
		  if(response['data'].is_duplicate === true && response['data']['duplicate_message']){
			$('#exampleModalCenter').modal('show');
			  var ticketNum = response['data']['ticket_id'];
			     $("#supportTicketNo").html( 'Complaint reference number :' + ' ' + ticketNum  );
			  const modalDuplicateMsg = response['data']['duplicate_message']
			  $("#duplicateMsg").html( modalDuplicateMsg)
			   console.log('desc_issue',desc_issue);
			  document.getElementById('modal_description').value = desc_issue
			 
 
		  
		  }
            var res_message = (response['data'] && response['data']['template_message']) ? response['data']['template_message'] : response['data']['duplicate_message'];
          $("#support_raise_issue_loader_div").hide();
          $('#support_issue_cat').hide();
          $('#support_issue_sub_cat').hide();
          $("#success-msg").html(
            '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+ res_message +'</div>'
          );
          setTimeout(function () {
            $('.issue-close-button').click();
          }, 150000);

          $("#email_issue").val("");
          $("#subject_issue").val("");
          $("#support_issue_dropdown").val("");
          $("#support_issue_cat_dropdown").val("");
          $("#support_issue_sub_cat_dropdown").val("");
          $("#tracking_issue").val("");
          $("#desc_issue").val("");
          $("#name_issue").val("");

          document.getElementById("waybill-support-id").value = null;
          document.getElementById("mobile-support-id").value = null;
          document.getElementById("otp-support-id").value = null;

          $(".verify-waybill").show();
          $(".verify-mobile-number").hide();
          $(".enter-mobile-otp").hide();
          $(".raise-issue").hide();
        //   localStorage.removeItem("currentWaybill");
          localStorage.removeItem("currentWaybillDetails");
          localStorage.removeItem("currentSupportDetails");
        })
        .fail(function (error) {
          $("#support_raise_issue_loader_div").show();
        });
    }
  });

  window.commentUpdate = function () {
    var wbnInput = localStorage.getItem("currentWaybill");
			    var base_url = 'https://dlv-api.delhivery.com/';
			var authData = JSON.parse(localStorage.getItem('authData'));
			 var authToken = authData['Authorization'];
			var modal_desc_issue = $('#modal_description').val().trim();
			     const commentPayload = {
        ticket_id: createResponse['ticket_id'],
        comment: modal_desc_issue,
        wbn: wbnInput,
      };
		 $.ajax({
        type: "PUT",
        url: base_url+"/client-orders" + "/ticket/addcomment",
        headers: {
          "Content-Type": "application/json",
          "Authorization": `Bearer ${authToken}`
        },
        data: JSON.stringify(commentPayload)
      })
        .done(function (response) {
			  $('#exampleModalCenter').modal('hide');
			  var res_message = response['message']; 
			     $("#success-msg").html(
            '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+ res_message +'</div>'
          );
          localStorage.removeItem("currentWaybill");
			  
			 }
		)};

    // On Resend Support Otp button click
    $("#otpSupportFormResendButton").click(function(event) {
        
    var base_url = 'https://dlv-api.delhivery.com/';
        $("#otp_loader_div").show();
        const mobile = localStorage.getItem("currentUserSupportMobile");
        const url = escapeHTML(
             `${base_url}`+"/client-profile" + `/otp/resend/+91${mobile}`,
            true
        );
       
        $.ajax({
                type: "GET",
                url: url
            })
            .done(function(response) {
                // Stop Loader
                $("#loader_div").hide();
                $("#success-msg").html(
                    '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>OTP Sent</p></div>'
                );
                setTimeout(function() {
                    $('.issue-close-button').click();
                }, 15000);
                waitForResendSupport();
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                // Stop Loader
                $("#loader_div").hide();
                var response = JSON.parse(jqXHR.responseText);
                if (response && response['message']) {
                    $(".verify-mobile-number .hintfixRendSupportErrorMob").text(response['message']);
                    $(".otpModalForm-hintfix").show();
                    $(".loader_div").hide();
                }
            });
    });


  $("#support_issue_cat_dropdown").change(function () {
    $("#desc_issue").val("");
    $("#error_issue_cat_issue").html("");
    $("#error_issue_cat_issue").attr("style", "display:none;");
    var issueSubCat = JSON.parse(localStorage.getItem("currentSupportDetails"));
    var support_issue_cat_value = $(this).val();
    if (support_issue_cat_value === 'select_issue_category') {
      $('#support_issue_sub_cat').hide();
      $('#support_issue_desc').hide();
    } else {
      if (issueSubCat[support_issue_cat_value]['sub_options'] != null){
        $('#support_issue_sub_cat').show();
        $('#support_issue_desc').hide();
            var $mySelect = $('#support_issue_sub_cat_dropdown');
            $mySelect.find('option').not(':first').remove();
            $.each(issueSubCat[support_issue_cat_value]['sub_options'], function (key, value) {
              var $option = $("<option/>", {
                value: key,
                text: value.sub_option
              });
              $mySelect.append($option);
            });
      }else{
        $('#support_issue_sub_cat').hide();
        $('#support_issue_desc').hide();
      }
      if ( issueSubCat[support_issue_cat_value]['option_text_box']){
        $('#support_issue_desc').show();
        $('#desc_issue').attr("placeholder", issueSubCat[support_issue_cat_value]['option_desc'])
      }
    }
  });
  /*Support Page Js */
  
        jQuery('.radius').click(function() 
        {
            var placeholder_value =jQuery('.tracktext').attr('placeholder') 
            var lrn_reg =new RegExp("^[0-9A-Z]{9}$");
            var mob_reg = new RegExp("^[6-9]{1}\\d{9}$");
            jQuery("#loader_div").show();
            var trackid_regex = new RegExp("^S?[0-9]{11,40}$|^[A-Z]{2}d{9,38}[A-Z]{2}$|^d{15, 40}$|^[A-Z]{2}[0-9]{9, 38}[A-Z]{2}$|^DL[0-9]{9}CN$");
            if(placeholder_value == 'Mobile Number')
            {
                if(jQuery('.tracktext').val()=='')
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                    return false;
                }
                else if(!mob_reg.test(jQuery('.tracktext').val()))
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                    return false;
                }
                else
                {
                   
                    var phone_number = jQuery('.tracktext').val();
                    var base_url='https://dlv-api.delhivery.com'+"/client-profile/otp/generate/+91";
                    var login_url = base_url+ phone_number;

                        jQuery.ajax({
                         type: "GET",
                         url: login_url,
                         dataType: 'json',
                         error: function (e) {
                          jQuery(".hintfix").attr("style", "display:block")
                          jQuery(".hintfix").html('<span class="msg hintfixErrorMob"style="color:red;">'+e.responseJSON.message+'</span>');
                          if(e.responseJSON.message=='undefined')
                          {
                            jQuery(".hintfix").attr("style", "display:block")
                            jQuery(".hintfix").html('<span class="msg hintfixErrorMob"style="color:red;">There is some server error,Please try again</span>');
                          }
            
                        }
                        
                        }).done(function (res) 
                        { 
                            if(res==null)
                            {
                                 jQuery(".hintfix").attr("style", "display:block")
                                 jQuery(".hintfix").html('<span class="msg hintfixErrorMob"style="color:red;">Something went wrong, please try again after some time.</span>');
                                 jQuery("#loader_div").hide();
                            }
                            else
                            {
                            jQuery("#loader_div").hide();
                            
                            if(res.success)
                            {
                                $(".otpModalForm-hintfixError").hide();
                                $("#otp-Modal").modal("show");
                            }
                            else{
                                 jQuery(".hintfix").attr("style", "display:block")
                                 jQuery(".hintfix").html('<span class="msg hintfixErrorMob"style="color:red;">'+res.message+'</span>');
                            }
                            jQuery("#loader_div").hide();
                            
                        
                        // Save Mobile Number in local storage
                        localStorage.setItem("currentUserMobile", phone_number);
                        jQuery("#otpFormText").text(`OTP SENT on +91 ${phone_number}`);
                        
          
                        jQuery("#success-msg").html(
                          '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>OTP Sent</p></div>'
                        );
                       
                        setTimeout(function () {
                          jQuery('.issue-close-button').click();
                        }, 15000);
                        waitForResend();
                    }
                      })
                      .fail(function (jqXHR, textStatus, errorThrown) {
                        jQuery("#loader_div").hide(); // trackModal
                        jQuery("#support_send_mobile_loader_div").hide();
                        jQuery(".verify-mobile-number .hintfix").show();
                        jQuery(".verify-mobile-number .hintfixSupportErrorMob").text('');
                        var response = JSON.parse(jqXHR.responseText);
                        if (response && response['message']) {
                          $(".verify-mobile-number .hintfixSupportErrorMob").text(response['message']);
                          $(".verify-mobile-number .hintfixSupportErrorMob").show();
                        }
         
                      }
                    );
                }
                
            }
            else if(placeholder_value == 'Tracking ID')
            {
                var via = "tracking_number"
                
                if(jQuery('.tracktext').val()=='')
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                    return false;
                }
                else if(!trackid_regex.test(jQuery('.tracktext').val()))
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                    return false;
                }
                
                else
                {
                var tracking_value = jQuery('.tracktext').val();
                    var base_url= 'https://dlv-api.delhivery.com'+'/v3/track?';
                    var track_url = base_url+'wbn='+tracking_value;
					
                    var jqxhr = jQuery.ajax({
          					url: track_url,
          					method: "GET",
          					dataType: "json",
          					success: function (response) {
                            
                            var shipmentsData = response;
                            var shipmentsDetails = shipmentsData && shipmentsData.data && shipmentsData.data.length ? shipmentsData.data : [{}];
                            if (shipmentsDetails.length == 1) {
                                renderSingleSearchHtml(shipmentsData,0);
                            } 
                            /*else {
                                multipleSingleSearchHtml(shipmentsDetails);
                            } */            
                        }
                    });
                }
                
            }
            else if(placeholder_value == 'Order ID / Ref ID')
            {
                var via = "order_number"
                if(jQuery('.tracktext').val()=='')
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                    return false;
                }
                
                else
                {
               		 var valid = new RegExp("^[a-zA-Z0-9_]*$");
					var orderId = jQuery('.tracktext').val();
					var order_id = valid.test(orderId);
					   if(order_id === true){
						       var base_url= 'https://dlv-api.delhivery.com'+'/v3/track?';
                    var track_url = base_url+'ref_id='+orderId;

                    jQuery.ajax({
                        url: track_url, // this will point to admin-ajax.php
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            var shipmentsData = response;
                            var shipmentsDetails = shipmentsData && shipmentsData.data && shipmentsData.data.length ? shipmentsData.data : [{}];
                            //alert(shipmentsDetails);
                            if (shipmentsDetails.length == 1) {
                                renderSingleSearchHtml(shipmentsData,0);
                            } 
                            else {
                                multipleSingleSearchHtml(shipmentsDetails);
                            } 
                        }
                    });
					   }else{
						   jQuery(".hintfix").attr("style", "display:block")
    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
					   }
                
                }
                
            }
            else if(placeholder_value == 'LRN Number')
            {
                var via = "lrn_number"
                if(jQuery('.tracktext').val()=='' )
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                    return false;
                }
                else if(!lrn_reg.test(jQuery('.tracktext').val()))
                {
                    jQuery("#loader_div").hide();
                    jQuery(".hintfix").attr("style", "display:block")
                    jQuery(".hintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>'); 
                    return false;
                }
                else
                {
                var lrn_num = jQuery('.tracktext').val();
                    var base_url= 'https://btob.api.delhivery.com'+'/v2/track/';
                    var track_url = base_url+lrn_num;
                   
                    jQuery.ajax({
                        url: track_url, // this will point to admin-ajax.php
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            var data = response;
							var lrn = data.lrnum ? data.lrnum : "NA";
							
							var url = "/track/lr/" + lrn;
							location.href = url;
                                    
                        },
						error: function(response) {
							var lrn ='NA'
							renderSingleLRSearchHtml(lrn);
						}
						
                    });
                }
                
            }

                
        });
        jQuery('.pradius').click(function() 
        {
            var placeholder_value =jQuery('.ptracktext').attr('placeholder') 
            var lrn_reg =new RegExp("^[0-9A-Z]{9}$");
            var mob_reg = new RegExp("^[6-9]{1}\\d{9}$");
            jQuery("#modal_loader_div").show();
            var trackid_regex = new RegExp("^S?[0-9]{11,40}$|^[A-Z]{2}d{9,38}[A-Z]{2}$|^d{15, 40}$|^[A-Z]{2}[0-9]{9, 38}[A-Z]{2}$|^DL[0-9]{9}CN$");
            if(placeholder_value == 'Mobile Number')
            {
                if(jQuery('.ptracktext').val()=='')
                {
                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                }
                else if(!mob_reg.test(jQuery('.ptracktext').val()))
                {
                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                }
                else
                {
                    jQuery("#modal_loader_div").show();
                    jQuery(".pradius").attr("disabled", "disabled");
                    
                    var phone_number = jQuery('.ptracktext').val();
                    var base_url='https://dlv-api.delhivery.com'+"/client-profile/otp/generate/+91";
                    var login_url = base_url+ phone_number;

                        $.ajax({
                         type: "GET",
                         url: login_url,
                         dataType: 'json',
                         error: function (e) {
                          jQuery(".phintfix").attr("style", "display:block")
                          jQuery(".phintfix").html('<span class="msg hintfixErrorMob"style="color:red;">'+e.responseJSON.message+'</span>');
                          if(e.responseJSON.message=='undefined')
                          {
                            jQuery(".phintfix").attr("style", "display:block")
                            jQuery(".phintfix").html('<span class="msg hintfixErrorMob"style="color:red;">There is some server error,Please try again</span>');
                          }
                         
                        }
                         
                        }).done(function (response) 
                          { 
                            if(response==null)
                            {
                                jQuery("#modal_loader_div").hide();
                                jQuery(".pradius").removeAttr("disabled");
                                jQuery(".phintfix").attr("style", "display:block")
                                jQuery(".phintfix").html('<span class="msg hintfixErrorMob"style="color:red;">Something went wrong, please try again after some time.</span>');
                            }
                            else{
                                jQuery("#modal_loader_div").hide();
                                jQuery(".pradius").removeAttr("disabled");
                                if(response.success)
                                { 
                                  jQuery(".track_modal_field").attr("style", "display:block")
                                  jQuery("#get_otp").attr("style", "display:none")
                                  jQuery("#submit_otp").attr("style", "display:block")
                                  //jQuery("#otp-Modal").modal("show");
                                  waitForResendSupport();
                                }
                                else{
                                     jQuery(".phintfix").attr("style", "display:block")
                                     jQuery(".phintfix").html('<span class="msg hintfixErrorMob"style="color:red;">'+response.message+'</span>');
                                    if(response.message=='undefined')
                                    {
                                        jQuery(".phintfix").html('<span class="msg hintfixErrorMob"style="color:red;">There is some server error,Please try again</span>');
                                    }
                                }

                            // Save Mobile Number in local storage
                           localStorage.setItem("currentUserMobile", phone_number);
                           jQuery("#otpFormText").text(`OTP SENT on +91 ${phone_number}`);


                            jQuery("#success-msg").html(
                              '<div class="alert-msg alert" id="success_div"><button type="button" class="close issue-close-button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>OTP Sent</p></div>'
                            );
                            setTimeout(function () {
                              jQuery('.issue-close-button').click();
                            }, 15000);
                            waitForResendSupport();
                        }
                          })
                       
                      .fail(function (jqXHR, textStatus, errorThrown) {
                        jQuery(".pradius").removeAttr("disabled");
                        jQuery("#modal_loader_div").hide(); // trackModal
                        jQuery("#support_send_mobile_loader_div").hide();
                        jQuery(".verify-mobile-number .hintfix").show();
                        jQuery(".verify-mobile-number .hintfixSupportErrorMob").text('');
                        var response = JSON.parse(jqXHR.responseText);
                        if (response && response['message']) {
                          $(".verify-mobile-number .hintfixSupportErrorMob").text(response['message']);
                          $(".verify-mobile-number .hintfixSupportErrorMob").show();
                        }
         
                      }
                    );
                }
                
            }
            else if(placeholder_value == 'Tracking ID')
            {
                var via = "tracking_number"
                
                if(jQuery('.ptracktext').val()=='')
                {
                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                }
                else if(!trackid_regex.test(jQuery('.ptracktext').val()))
                {
                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');    
                }
                
                else
                {
                   $("#trackModalForm").modal("hide");
                   var tracking_id = jQuery('.ptracktext').val();
                    var base_url= 'https://dlv-api.delhivery.com'+'/v3/track?';
                    var track_url = base_url+'wbn='+tracking_id;

                    jQuery.ajax({
                        url: track_url, // this will point to admin-ajax.php
                        type: 'GET',
                        
                        dataType: 'json',
                        success: function (response) {
                            //jQuery("#trackModalForm").modal("hide");
                            var shipmentsData = response;
                            var shipmentsDetails = shipmentsData && shipmentsData.data && shipmentsData.data.length ? shipmentsData.data : [{}];
                            if (shipmentsDetails.length == 1) {
                                renderSingleSearchHtml(shipmentsData,1);
                            } 
                            /*else {
                                multipleSingleSearchHtml(shipmentsDetails);
                            } */            
                        }
                    });
                }
                
            }
            else if(placeholder_value == 'Order ID / Ref ID')
            {
                var via = "order_number"
                if(jQuery('.ptracktext').val()=='')
                {

                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                }
                
                else
                {
                $("#trackModalForm").modal("hide");
                var order_id = jQuery('.ptracktext').val();
                    var base_url= 'https://dlv-api.delhivery.com'+'/v3/track?';
                    var track_url = base_url+'ref_id='+order_id;

                    jQuery.ajax({
                        url: track_url, // this will point to admin-ajax.php
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            //jQuery("#trackModalForm").modal("hide");
                            var shipmentsData = response;
                            var shipmentsDetails = shipmentsData && shipmentsData.data && shipmentsData.data.length ? shipmentsData.data : [{}];
                            //alert(shipmentsDetails);
                            if (shipmentsDetails.length == 1) {
                                renderSingleSearchHtml(shipmentsData,1);
                            } 
                            else {
                                multipleSingleSearchHtml(shipmentsDetails);
                            } 
                        }
                    });
                }
                
            }
            else if(placeholder_value == 'LRN Number')
            {
                var via = "lrn_number"
                if(jQuery('.ptracktext').val()=='' )
                {
                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');
                }
                else if(!lrn_reg.test(jQuery('.ptracktext').val()))
                {
                    jQuery("#modal_loader_div").hide();
                    jQuery(".phintfix").attr("style", "display:block")
                    jQuery(".phintfix").html('<span class="msg hintfixErrorMob" style="color:red;">Please enter a valid '+ placeholder_value+'</span>');    
                }
                else
                {
                $("#trackModalForm").modal("hide");
                var lrn_num = jQuery('.ptracktext').val();
                var base_url= 'https://btob.api.delhivery.com'+'/v2/track/';
			          var track_url = base_url+lrn_num;
                    jQuery.ajax({
                        url: track_url, // this will point to admin-ajax.php
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
								var data = response;
								var lrn = data.lrnum ? data.lrnum : "NA";

								var url = "/track/lr/" + lrn;
								location.href = url;

							},
							error: function(response) {
								var lrn ='NA'
							    renderSingleLRSearchHtml(lrn);
							}
                    });
                }
                
            }

                
        });
        
        jQuery("#potpFormLoginButton").click(function (event) 
        { 
          $("#submit_otp #modal_loader_div").show();
          const mobile = localStorage.getItem("currentUserMobile");
          jQuery("#potpFormLoginButton").attr("disabled", "disabled");
          var otp = jQuery(".track-order-otp-field").val().trim();
          var api_base_url =  'https://dlv-api.delhivery.com/';
          var site_url = '';
          const url = api_base_url+'/client-profile/otp/verify/+91'+mobile+'?otp='+otp;
           
          if (otp.length == 6) {
            $.ajax({
              type: "GET",
              url: url
            })
              .done(function (response) {
                // Stop Loader
                
                $("#submit_otp #modal_loader_div").hide();
                jQuery("#potpFormLoginButton").removeAttr("disabled");
                
                // Save Data in Local Storage
                localStorage.setItem("profile", true);
                localStorage.setItem(
                  "authData",
                  JSON.stringify({
                    Authorization: response["response"]["token"],
                    mobile: mobile
                  })
                );
                // Redirect to shipping page
                window.location.href = site_url+"/track/shipping-details";
              })
              .fail(function (response) {
                jQuery(".otptext").val("");
                jQuery("#potpFormLoginButton").removeAttr("disabled");
                jQuery(".otpModalForm-hintfixError").show();
                if (response.status == 500 ) {
                    jQuery(".otpModalForm-hintfixError").text("Internal Server Error!");    
                }
                else{
                    jQuery(".otpModalForm-hintfixError").text("Invalid OTP");
                }
                
                jQuery(".otpModalForm-hintfix").show();
                //jQuery("#otp_loader_div").hide();
                $("#submit_otp #modal_loader_div").hide();
              });
          } else {
            jQuery(".otptext").val("");
            jQuery(".otpModalForm-hintfixError").show();
            jQuery(".otpModalForm-hintfixError").text("Invalid OTP");
            jQuery(".otpModalForm-hintfix").show();
            jQuery("#potpFormLoginButton").removeAttr("disabled");
            $("#submit_otp #modal_loader_div").hide();
          }
        });
        function verifyOTPCommon()
        {
          jQuery("#otp_loader_div").show();
          const mobile = localStorage.getItem("currentUserMobile");
          jQuery("#otpFormLoginButton").attr("disabled", "disabled");
          var otp = jQuery(".otptext").val().trim();
          var api_base_url =  'https://dlv-api.delhivery.com/';
          var site_url =  '';
          const url = api_base_url+'/client-profile/otp/verify/+91'+mobile+'?otp='+otp;
           
          if (otp.length == 6) {
            $.ajax({
              type: "GET",
              url: url
            })
              .done(function (response) {
                // Stop Loader
                jQuery("#otp_loader_div").hide();
                jQuery("#otpFormLoginButton").removeAttr("disabled");
                
                // Save Data in Local Storage
                localStorage.setItem("profile", true);
                localStorage.setItem(
                  "authData",
                  JSON.stringify({
                    Authorization: response["response"]["token"],
                    mobile: mobile
                  })
                );
                // Redirect to shipping page
                location.href = site_url+"/track/shipping-details";
              })
              .fail(function (response) {
                jQuery(".otptext").val("");
                jQuery("#otpFormLoginButton").removeAttr("disabled");
                jQuery(".otpModalForm-hintfixError").show();
                if (response.status == 500) {
                    jQuery(".otpModalForm-hintfixError").text("Internal Server Error!");    
                }
                else{
                    jQuery(".otpModalForm-hintfixError").text("Please enters valid otp!");
                }
                
                jQuery(".otpModalForm-hintfix").show();
                jQuery("#otp_loader_div").hide();
               // jQuery("#loader_div").hide(); // trackModal
              });
          } else {
            jQuery(".otptext").val("");
            jQuery(".otpModalForm-hintfixError").show();
            jQuery(".otpModalForm-hintfixError").text("Please enter valid otp!");
            jQuery(".otpModalForm-hintfix").show();
            jQuery("#otpFormLoginButton").removeAttr("disabled");
            jQuery("#otp_loader_div").hide();
          }
        }

window.renderSingleLRSearchHtml =function (shipmentsData) 
{
		  
  var shipmentDetails = shipmentsData;
  var num_box = 'NA';
  if(jQuery('.tracktext').val()=='')
  {
	var placeholder_value =jQuery('.ptracktext').attr('placeholder');
	var tracking_value = jQuery('.ptracktext').val();
  }
  else
  {
	var placeholder_value =jQuery('.tracktext').attr('placeholder');
	var tracking_value = jQuery('.tracktext').val();
  }
  var site_url = '';

  var trackErrMessages = [
	"COULD NOT FIND THIS ORDER WITH US. PLEASE CHECK THE LR NUMBER ENTERED.",
	
  ];
  var errMessage = trackErrMessages[0];

 
   if (shipmentDetails='NA') 
   {
	$("#ordercount").html("");
	$("#packageTrackModalBody").html("");
	$("#loader_div").hide();
	$("#ship-order-Modal").modal("show");
	$("#packageTrackModalBody").append(
		  '<div class="row tracking-content track-space">' +
		  '<div class="col-sm-5">' +
		  '<div class="row">' +
		  '<div class="col-sm-6 col-xs-4 nopadding-rht"><p><span>LR Number</span></p></div>' +
		  '<div class="col-sm-6 col-xs-8"><p>' +
		  tracking_value +
		  "</p></div>" +
		  '<div class="clear"></div>' +
		  '<div class="col-sm-6 col-xs-4 nopadding-rht"><p><span>Number Of Boxes</span></p></div>' +
		  '<div class="col-sm-6 col-xs-8"><p>' +
		  num_box +
		  "</p></div>" +
		  "</div>" +
		  "</div>" +
		  '<div class="tracker-status tracking-space col-sm-7">' +
		  '<div class="row cmn-tracker-content">' +
		  '<div class="col-sm-3 col-xs-3">' +
		  "</div>" +
		  '<div class="col-sm-7 col-xs-7">' +
		  '<p class="uppercase">' +
		  errMessage +
		  "</p>" +
		  "</div>" +
		  '<div class="col-sm-2 col-xs-2">' +
		  "</div>" +
		  "</div>" +
		  "</div>" +
		  "</div>"
		);
	} 
	else 
	{
		if (shipmentDetails.isInternational) {
		  window.location.replace(`https://international-track.delhivery.com/#/trackdetail/${wbn}`)
		} else {
		  var url = site_url+'/track/package/'+wbn
		  //var url = "/track/#/package/" + wbn;
		  location.href = url;
		}
	}
}
       
window.renderSingleSearchHtml =function (shipmentsData,status) 
{
    var data = shipmentsData && shipmentsData.data && shipmentsData.data.length ? shipmentsData.data : [{}];
    var shipmentDetails = data[0];
    var site_url = '';
    if(jQuery('.tracktext').val()=='' || status==1)
    {
      var placeholder_value =jQuery('.ptracktext').attr('placeholder');
      var tracking_value = jQuery('.ptracktext').val();
    }
    else
    {
      var placeholder_value =jQuery('.tracktext').attr('placeholder');
      var tracking_value = jQuery('.tracktext').val();
    }
   
    if(placeholder_value=='Tracking ID')
    {
      var oid_err= 'NA';
      var wbn_err= tracking_value;
    }
    else if(placeholder_value=='Order ID / Ref ID')
    {
      var oid_err= tracking_value;
      var wbn_err= 'NA';
    }
    var oid = shipmentDetails.referenceNo ? shipmentDetails.referenceNo : oid_err
    var wbn = shipmentDetails.awb ? shipmentDetails.awb : wbn_err;
    //alert(wbn);
    var trackErrMessages = [
      "Could not find this order with us. Please check the waybill/order ID entered.",
      "Package details are not visible after 1 week of delivery.",
      "Too many requests from your IP address, please try again after 5 minutes"
    ];
    var errMessage = trackErrMessages[0];
    
    if (shipmentsData.message.toLowerCase().indexOf("package details are not visible") > 0) {
      errMessage = trackErrMessages[1];
    }
    if (shipmentsData.message.toLowerCase().indexOf("too many requests from your ip") > 0) {
      if (reattempt_count == 0) {
        reattempt_count = 1;
        // Calling Track API
        makeRequest(window.track_form_url).then(
          function (trackResp) {
            successHandler(trackResp);
          },
          function (error) {
          }
        );
      } else {
        reattempt_count = 0;
        errMessage = trackErrMessages[2];
      }
    }

     if (!shipmentDetails || !shipmentDetails.hqStatus) 
     {
      $("#ordercount").html("");
      $("#packageTrackModalBody").html("");
      $("#loader_div").hide();
      $("#ship-order-Modal").modal("show");
      $("#packageTrackModalBody").append(
            '<div class="row tracking-content track-space">' +
            '<div class="col-sm-5">' +
            '<div class="row">' +
            '<div class="col-sm-5 col-xs-4 nopadding-rht"><p><span>Tracking ID</span></p></div>' +
            '<div class="col-sm-7 col-xs-8"><p>' +
            wbn +
            "</p></div>" +
            '<div class="clear"></div>' +
            '<div class="col-sm-5 col-xs-4 nopadding-rht"><p><span>Order ID</span></p></div>' +
            '<div class="col-sm-7 col-xs-8"><p>' +
            oid +
            "</p></div>" +
            "</div>" +
            "</div>" +
            '<div class="tracker-status tracking-space col-sm-7">' +
            '<div class="row cmn-tracker-content">' +
            '<div class="col-sm-3 col-xs-3">' +
            "</div>" +
            '<div class="col-sm-7 col-xs-7">' +
            '<p class="uppercase">' +
            errMessage +
            "</p>" +
            "</div>" +
            '<div class="col-sm-2 col-xs-2">' +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>"
          );
      } 
      else 
      {
          if (shipmentDetails.isInternational) {
            var international_track_url = 'https://international-track.delhivery.com/#/trackdetail/';
            window.location.replace(international_track_url+wbn)
          } else {
            var url = site_url+'/track/package/'+wbn
            //var url = "/track/#/package/" + wbn;
            location.href = url;
          }
      }
}

window.multipleSingleSearchHtml = function (packageDetails) 
{
      //var site_url = window.location.origin;
      //var site_url = 'https://www.delhivery.com'
      var site_url = '';
      $("#ordercount").html("");
      $("#packageTrackModalBody").html("");
      $("#loader_div").hide();
      $("#ship-order-Modal").modal("show");
      
      var j = 0;
      var packageCount = 0;
      var packageConstant = {};
      var oid, wbn, packageStatus, packageConstant, statusMap, statusDate;

      for (i in packageDetails) 
      {
        j = j + 1;
        oid = packageDetails[i].referenceNo
          ? packageDetails[i].referenceNo
          : "NA";
        wbn = packageDetails[i].awb ? packageDetails[i].awb : "NA";
        packageStatus = packageDetails[i].hqStatus;
        
        if (packageStatus.indexOf("Unknown package") == 0) 
        {
          $("#packageTrackModalBody").append(
            '<div class="row tracking-content track-space">' +
            '<div class="col-sm-7">' +
            '<div class="row">' +
            '<div class="col-sm-4 col-xs-4 nopadding-rht"><p><span>Tracking ID</span></p></div>' +
            '<div class="col-sm-8 col-xs-8"><p>' +
            wbn +
            "</p></div>" +
            '<div class="clear"></div>' +
            '<div class="col-sm-4 col-xs-4 nopadding-rht"><p><span>Order ID</span></p></div>' +
            '<div class="col-sm-8 col-xs-8"><p>' +
            oid +
            "</p></div>" +
            "</div>" +
            "</div>" +
            '<div class="tracker-status tracking-space col-sm-5">' +
            '<div class="row cmn-tracker-content">' +
            '<div class="col-sm-3 col-xs-3">' +
            "</div>" +
            '<div class="col-sm-7 col-xs-7">' +
            '<p class="uppercase">' +
            errMessage +
            "</p>" +
            "</div>" +
            '<div class="col-sm-2 col-xs-2">' +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>"
          );
  
          jQuery(".warning").show("slow");
        } 
        else 
        {
          // statusDate = parseDate(packageStatus.statusDateTime);
          var estimatedDate = packageDetails[i].estimatedDate || '1970-01-01T23:59:59';
          var slotFromTime = packageDetails[i].slot.from;
          var slotDate = packageDetails[i].slot.date;
          var statusDate = compareEstiamtedSlotDate(estimatedDate, slotDate);
          let currentDate = new Date(new Date().setHours(0, 0, 0, 0));
          if (currentDate.getTime() > new Date(statusDate).getTime()) {
            currentDate = new Date(
              currentDate.setDate(currentDate.getDate() + 1)
            );
            statusDate = parseTrackDate(
              String(new Date(currentDate))
            );
          } else {
            statusDate = `${statusDate}, ${parseTime(slotFromTime)}`
          }
          var packageConstant = getPackageConstants(
            packageDetails[i].flow,
            packageDetails[i].flowDirection
          );
          
          var scanObjectMap = [];
          //var statusMap = packageConstant.scanObjectMap[packageDetails[i].status.status];
          packageCount += 1;
          
          var vieworderlink = site_url+"/track/#/package/" + wbn;
          console.log(packageDetails);
          var packg_status = packageDetails[i].status.status;
            //alert(packg_status);
          if(packg_status=='CANCELLED')
          {
               //alert('hi');
                var packg_img = '404-not-found/index.html';
          }
          else if(packg_status=='REACHED_DEST_CITY')
          {
                  var packg_img = '404-not-found/index.html';
          }
          else if(packg_status=='WAITING_PICKUP')
          {
                  var packg_img = '404-not-found/index.html';
          }
          else if(packg_status=='OUT_DELIVERY')
          {
                  var packg_img = '404-not-found/index.html';
          }
          else if(packg_status=='NOT_PICKED')
          {
                  var packg_img = '404-not-found/index.html';
          }
        //alert(packg_img);
          jQuery("#packageTrackModalBody").append(
            '<div class="row tracking-content track-space">' +
            '<a href="' +
            vieworderlink +
            '" target="_blank">' +
            '<div class="col-sm-7">' +
            '<div class="row">' +
            '<div class="col-sm-4 col-xs-4 nopadding-rht"><p><span>Tracking ID</span></p></div>' +
            '<div class="col-sm-8 col-xs-8"><p>' +
            wbn +
            "</p></div>" +
            '<div class="clear"></div>' +
            '<div class="col-sm-4 col-xs-4 nopadding-rht"><p><span>Order ID</span></p></div>' +
            '<div class="col-sm-8 col-xs-8"><p>' +
            oid +
            "</p></div>" +
            "</div>" +
            "</div>" +
            '<div class="tracker-status tracking-space col-sm-5">' +
            '<div class="row cmn-tracker-content">' +
            '<div class="col-sm-3 col-xs-3">' +
            '<img src="' +
            site_url +
            "/" +
            'wp-content/uploads/2021/12/' +packg_img +
            '" alt="' +
            packageDetails[i].status.status +
            '" class="img-responsive center-block" />' +
            "</div>" +
            '<div class="col-sm-7 col-xs-7">' +
            '<p class="uppercase"><span>' +
            packageDetails[i].status.status +
            "</span></p>" +
            '<p class="uppercase expected-dt">' +
            packageDetails[i].status.status +
            " <span>" +
            statusDate +
            "</span></p>" +
            "</div>" +
            '<div class="col-sm-2 col-xs-2">' +
            '<img src="' +
            site_url +
            '/wp-content/uploads/2021/12/search.png" class="img-responsive center-block searchicon">' +
            "</div>" +
            "</div>" +
            "</div>" +
            "</a>" +
            "</div>"
          );
        }

      }

      $("#ordercount").html("(" + packageCount + ")");
}


    function get_blog_cat_name()
    {
        ajaxurl = 'https://www.delhivery.com/wp-admin/admin-ajax.php'; // get ajaxurl
                        
        var data = {
            'action': 'get_blog_cat_name', // your action name 
            'data' : window.location.href
        };

        jQuery.ajax({
            url: ajaxurl, // this will point to admin-ajax.php
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (response) {
                if(response!=null)
                    {
                        var response = response.replace("&amp;", "&");
                    }
                
                $('#news-letterForm #sub_category').val(response);
                
            }
            });
    }
   
    function popupResendOTPCommonFunction()
    {
            $("#submit_otp #modal_loader_div").show();
            //$("#loader_div").show(); // trackModal
            const mobile = localStorage.getItem("currentUserMobile");
            $("#otpFormLoginButton").attr("disabled", "disabled");
            var api_base_url =  'https://dlv-api.delhivery.com/';
           
            const url =  api_base_url+'/client-profile/otp/resend/+91'+ mobile;
                  
                 
                  $.ajax({
                    type: "GET",
                    url: url,
                  })
                    .done(function (response) {
                      if(response.success)
                      {
                        // Stop Loader
                        //$("#otp_loader_div").hide();
                        $('.otpModalForm-hintfixError').show();
                        $("#submit_otp #modal_loader_div").hide(); // trackModal
                        $("#otpFormLoginButton").removeAttr("disabled");
                        waitForResendSupport();
                      }
                     
                     
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                      // Stop Loader
                      //$("#otp_loader_div").hide();
                      $("#submit_otp #modal_loader_div").hide(); // trackModal
                      $("#otpFormLoginButton").removeAttr("disabled");
                      // waitForResend();
                      var response = JSON.parse(jqXHR.responseText);
                      if (response && response['message']) {
                        $(".otpModalForm-hintfixError").text(response['message']);
                        $(".otpModalForm-hintfix").show();
                        $(".trackmodalform-otp-hintfixError").text(response['message']); // TrackModal
                        $(".otpModalForm-otp-hintfix").show();
                        $("#submit_otp #modal_loader_div").hide();
                      }
                      
                    });
               
    }  
    function resendOTPCommonFunction()
    {
            //$("#otp_loader_div").show();
            $("#otp_loader_div").show();
            const mobile = localStorage.getItem("currentUserMobile");
            $("#otpFormLoginButton").attr("disabled", "disabled");
            var api_base_url =  'https://dlv-api.delhivery.com/';
           
            const url =  api_base_url+'/client-profile/otp/resend/+91'+ mobile;
                  
                 
                  $.ajax({
                    type: "GET",
                    url: url,
                  })
                    .done(function (response) {
                      if(response.success)
                      {
                        // Stop Loader
                        
                        $('.otpModalForm-hintfixError').show();
                        $("#otp_loader_div").hide();
                        $("#otpFormLoginButton").removeAttr("disabled");
                        waitForResend();
                      }
                      else{
                          
                      }
                     
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                      // Stop Loader
                      $("#otp_loader_div").hide();
                      $(".otpModalForm clearfix #loader_div").hide(); // trackModal
                      $("#otpFormLoginButton").removeAttr("disabled");
                      // waitForResend();
                      var response = JSON.parse(jqXHR.responseText);
                      if (response && response['message']) {
                        $(".otpModalForm-hintfixError").text(response['message']);
                        $(".otpModalForm-hintfix").show();
                        $(".trackmodalform-otp-hintfixError").text(response['message']); // TrackModal
                        $(".otpModalForm-otp-hintfix").show();
                        $("#otp_loader_div").hide();
                      }
                      
                    });
               
    }  
  
    $('#support-search-input').keyup(function(){ 
        var searchField = $(this).val();
        ajaxurl = 'https://www.delhivery.com/wp-admin/admin-ajax.php'; // get ajaxurl
         
         var data = {
             'action': 'support_ques_srch', // your action name 
                 
         };
        jQuery.ajax({
            type: "GET",
            url: ajaxurl,
            data:data
        }).done(function (response) 
        {       var jdata = JSON.parse(response);
                if(searchField === '')  {
                    $('#support-results-container').html('');
                    return;
                }
                var regex = new RegExp(searchField, "i");
                var count = 1;
                var output ='';
              
                  $.each(jdata, function(key, val){
                    if (val.questions.search(regex) != -1)  {
                        
                    output +='<li onclick="openFaq('+"'"+val.category_id+"','"+val.question_id +
                        "'"+')">';
                     output += '<a href="javascript:void(0)" onclick="openFaq('+"'"+val.category_id+"','"+val.question_id +
                        "'"+')" data-id="'+val.category_id+'">'+val.questions+'</a></li>'
                      count++;
                    }
                   else{
                        output += '';
                    }
                    
                  });
                  if(output=='')
                  {
                     output +='<li>No results found</li>';
                  }
                 
                  $("#support-results-container").show();
                  $('#support-results-container').html(output);
                  
                  
    });
    
});  

  
    
</script>
<link rel='stylesheet' id='e-animations-css'  href='wp-content/plugins/elementor/assets/lib/animations/animations.minb045.css?ver=3.4.8' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/www.delhivery.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/index5697.js?ver=5.5.3' id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.minb045.js?ver=3.4.8' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.minb045.js?ver=3.4.8' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.minb045.js?ver=3.4.8' id='share-link-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.8","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/www.delhivery.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":186,"title":"","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.minb045.js?ver=3.4.8' id='elementor-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-modules.minb045.js?ver=3.4.8' id='preloaded-modules-js'></script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?67738';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"25",
      "marginBottom":"30",
      "marginRight":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Chatbox",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"<?php echo "$site_link123";?>/images/favicon.png",
      "welcomeText":"Hi there!\nClick below to contiune a chat with our support team!",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"<?php echo"$phone123";?>"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</body>

<!-- Mirrored from www.delhivery.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 05:40:49 GMT -->
</html>
