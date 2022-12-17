$(document).ready(function(){
	
	jQuery(".mobile-explained-body").slideUp(),
        jQuery(".mobile-article-list [data-id]").click(function () {
         jQuery(this).toggleClass("active"), $(this).siblings().removeClass("active"),                         jQuery(this).parent().siblings().children("a").removeClass("active");
            jQuery(this).attr("data-id");
            jQuery(".mobile-article-list a").siblings().next(".mobile-explained-body").slideUp(),
                jQuery(".mobile-article-list a").next(".mobile-explained-body").slideUp(),
                jQuery(".mobile-article-list a.active").siblings().next(".mobile-explained-body").slideUp(),
                jQuery(".mobile-article-list a.active").parent().siblings().children(".mobile-explained-body").slideUp(),
                jQuery(".mobile-article-list a.active").next(".mobile-explained-body").slideToggle();
        })
        $('#top-tabs a').click(function(){
            $('.top-tabs-wrapper div').removeClass('active');
            $(this).parent().addClass('active');
            var tagid = $(this).data('id');
			//alert(tagid);
		    $('.p_tab_content').removeClass('active').addClass('hide');
			$('#a'+tagid).trigger("click");
		    $('.mobile-cs-s').removeClass('active').addClass('hide');
            $('#'+tagid).addClass('active').removeClass('hide');
			$('#m'+tagid).addClass('active').removeClass('hide');
			
        });
	    $('.support-section .article-list a').click(function(){
            $('.support-section .article-list a').removeClass('active');
            $(this).addClass('active');
            var tagid = $(this).data('id');
            $('.explained-question-body').removeClass('active');
            $('#'+tagid).addClass('active');
        });
	
	
$("#menu-item-7549").click(function(event) {
    $(this).find('.sub-menu').toggle("fast");
    event.stopPropagation();
    $("#menu-item-672 .sub-menu").hide();
    $("#menu-item-7554 .sub-menu").hide();
}); 
    
$("#menu-item-672").click(function(event) {
    $(this).find('.sub-menu').toggle("fast");
    event.stopPropagation();
    $("#menu-item-7549 .sub-menu").hide();
    $("#menu-item-7554 .sub-menu").hide();
}); 
    
$("#menu-item-7554").click(function(event) {
    $(this).find('.sub-menu').toggle("fast");
    event.stopPropagation();
    $("#menu-item-7549 .sub-menu").hide();
    $("#menu-item-672 .sub-menu").hide();
}); 
$("#menu-item-2711").click(function(event) {
    $(this).find('.sub-menu').toggle("fast");
    event.stopPropagation();
    $("#menu-item-7549 .sub-menu").hide();
    $("#menu-item-672 .sub-menu").hide();
    $("#menu-item-7554 .sub-menu").hide();
}); 
$(document).on("click", function(event){
    var $trigger = $(".sub-menu");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".sub-menu").slideUp("fast");
        event.stopPropagation();
    }            
});
/* Mobile Menu Open */
$('.nav_icon').click(function(){
	$('#menu-header-menu, #menu-resources').addClass("open");
	$(".site-navigation ul.menu").addClass("open");
	$('.closebtn').show();   
	event.stopPropagation(); 
});
$('#menu-header-menu, #menu-resources').click(function(){  
	event.stopPropagation(); 
});
$('.closebtn').click(function(){
	$('#menu-header-menu, #menu-resources').removeClass("open");
	$(this).hide();
	$(".site-navigation ul.menu").removeClass("open");
});
	$('body').click(function() {
       $('#menu-header-menu, #menu-resources').removeClass("open");
		$('.closebtn').hide();
	});
}); 
/* Mobile Menu Open */
/* UTM */
/*function sendGaEvent(category, action, label) 
{
	const activecookie_policy5 = localStorage.getItem("cookie_policy");
	if (label == 'DLVsupportpageRaiseIssue') {
		const element = document.getElementById('support-form-id')
		element.scrollIntoView(true);
	}
	if (activecookie_policy5 == "true") {

		ga("send", {
			hitType: "event",
			eventCategory: category,
			eventAction: action,
			eventLabel: label
		});
		gtag('event', category, {
			'send_to': 'UA-27886886-9',
			'event_category': category,
			'event_label': label
		});

	}
}
window.sendGaEvent = sendGaEvent;
function gtag() { dataLayer.push(arguments); }*/
function openUrl(url, isNewTab) 
{
	if (isNewTab) {
		window.open(url, '_blank')
	} else {
		location.href = url
	}
}
$('#view_all_news').click(function()
							  {
	onNavigate('/news/','body', 'news_viewall_link', 'news_link', '','', event)
});
$('#know_more_partner').click(function()
							  {
	onNavigate('/partner/','body', 'partner_knowmore_link', 'partner_link', '','', event);
});
$('#menu-item-3435').click(function()
{
	onNavigate('https://direct.delhivery.com/','homepage', 'click', 'direct_delhivery_nav_btn','utm_source=dlv_website&amp;utm_medium=header_dd','',event, true);
});
$('#menu-item-741').click(function()
						  {
	onNavigate('/about/','header', '', 'top_navigation','','',event)
});
$('#menu-item-391').click(function()
						  {
	onNavigate('/partner/','header', '', 'top_navigation','','',event)
});
$('.custom-logo-link').click(function()
							 {
	onNavigate('/','', '', '','','', event)
});
$('#menu-item-688').click(function()
						  {
	//alert();
	onNavigate('/services/','header', 'services_link', 'top_navigation','','button=express_dropdown',event);
});
$('#menu-item-304').click(function()
						  {
onNavigate('/services/fulfilment/','header', 'fulfilment_link', 'top_navigation','','button=fulfilment_dropdown',event);
});
$('#menu-item-339').click(function()
						  {
	onNavigate('/services/freight/','header', 'freight_link', 'top_navigation','','button=freight_dropdown',event);
});
$('#menu-item-350').click(function()
						  {
	onNavigate('/services/cross-border/','header', 'cross-border_link', 'top_navigation','','button=xb_dropdown',event);
});
$('#menu-item-358').click(function()
						  {
	onNavigate('/services/e2e/','header', 'e2e_link', 'top_navigation','','button=e2e_dropdown',event);
});
$('#menu-item-3064').click(function()
						   {
	onNavigate('/news/','header', 'news_link', 'top_navigation', '','', event)
});
$('#menu-item-420').click(function()
						   {
	onNavigate('/blog/','header', 'blog_link', 'top_navigation', '','', event)
});
$('#menu-item-3434').click(function()
						   {
	onNavigate('/support/','header', '', 'top_navigation','','',event)
});

$('#menu-item-2947').click(function()
						   {
	// onNavigate('/setup-business/','header', 'top_navigation', 'businesses','utm_source=dlv_website&utm_medium=header_businesses_dropdown','button=setuplink_dropdown',event, true)
    onNavigate('https://ucp.delhivery.com/register/','header', 'top_navigation', 'businesses','utm_source=dlv_website&utm_medium=header_businesses_dropdown','button=setuplink_dropdown',event, true)
});
$('#menu-item-3436').click(function()
						   {
	onNavigate('https://direct.delhivery.com/','header', 'top_navigation', 'individuals','utm_source=dlv_website&utm_medium=header_individuals_dropdown','button=individuals_dropdown',event, true);
});
$('#know_more_service').click(function()
							  {
	onNavigate('/services/','body', 'services_knowmore_link', 'services_link', '','', event);
});
$('#menu-item-7569').click(function()
{
	onNavigate('setup-business/faqs/','setup', 'faqs_link', 'setup_top_navigation','','',event)
});

function getParameterByName(name, url) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

function onNavigate(url, category, action, label, utm = null, source = null, event, isNewTab = false) 
{
	//alert(url);
	if (event) {
		event.preventDefault();
	}
	
	sendGaEvent(category, action, label);
	const splittedUrl = location.href.split("?");
	if (splittedUrl.length > 1) {
		if (source) {
			if (getParameterByName('button', location.href)) {
				const splittedQueryParams = location.href.split('?')[1].split('&')
				const index = splittedQueryParams.findIndex(elem => elem.startsWith('button'))
				splittedQueryParams[index] = source
				openUrl(`${url}?${splittedQueryParams.join('&')}`.replace(/#/gim, ''), isNewTab);
				if(url.indexOf("?") > -1)
				{
					//alert('1');
					openUrl(`${url}&${splittedQueryParams.join('&')}`.replace(/#/gim, ''), isNewTab);
				}
				// location.href = ${url}?${splittedQueryParams.join('&')}.replace(/#/gim, '');
			} else {
				openUrl(`${url}?${splittedUrl[1]}&${source}`.replace(/#/gim, ''), isNewTab);
				if(url.indexOf("?") > -1)
				{
					//alert('2');
					openUrl(`${url}&${splittedUrl[1]}&${source}`.replace(/#/gim, ''), isNewTab);
				}
				// location.href = ${url}?${splittedUrl[1]}&${source}.replace(/#/gim, '');
			}
		} else {
			const splittedQueryParams = location.href.split('?')[1].split('&')
			const index = splittedQueryParams.findIndex(elem => elem.startsWith('button'))
			if (index >= 0) {
				splittedQueryParams.splice(index, 1)

			}
			if (splittedQueryParams.length) {
				openUrl(`${url}?${splittedQueryParams.join('&')}`.replace(/#/gim, ''), isNewTab);
				if(url.indexOf("?") > -1)
				{
					//alert('3');
					openUrl(`${url}&${splittedQueryParams.join('&')}`.replace(/#/gim, ''), isNewTab);
				}
				// location.href = ${url}?${splittedQueryParams.join('&')}.replace(/#/gim, '');

			} else {
				openUrl(url.replace(/#/gim, ''), isNewTab);
				// location.href = url.replace(/#/gim, '');
			}
		}
	} else {
		
		if (utm) {
			openUrl(`${url}?${utm}&${source}`.replace(/#/gim, ''), isNewTab);
			// location.href = ${url}?${utm}&${source}.replace(/#/gim, '');
		} else if (source) {
			openUrl(`${url}?${source}`.replace(/#/gim, ''), isNewTab);
			// location.href = ${url}?${source}.replace(/#/gim, '');
		} else {
			openUrl(url.replace(/#/gim, ''), isNewTab);
			// location.href = url.replace(/#/gim, '');
		}
	}
}
/* UTM */

function onContactFloater()
{
	$("#contact-Modal").modal("show");
}
/* keep track modal service modal hide */
window.onload = function()
{
	$("#trackModalForm").modal("hide");
	$("#shipdelhivey").modal("hide");

};
jQuery(document).ready(function($) {

	$(window).scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('.site-header').addClass('white-bg');
		} else {
			$('.site-header').removeClass('white-bg');
		}
	});

	var url = window.location.href;

	if(url.indexOf('?source=form_submit') != -1 ) {
		var splittedParts = url.split("?");

		// the first part of the array will be URL you will require
		var theURL = splittedParts[0];

		window.history.pushState('',url, theURL);
		$('#thanks-Modal').modal('show');
	}
	else if(url.indexOf('setup-business') != -1  || url.indexOf('setup-business-blogs') != -1) {

		$('.m-btn').hide();

	}
});
/* download */
function onDownloadButton() 
{
	const blogUrl = location.pathname.substring(0, location.pathname.length - 1).split("/")[location.pathname.substring(0, location.pathname.length - 1).split("/").length - 1]
	var link = document.createElement("a");
	
	if (blogUrl === "4-pronged-approach-to-ecommerce-warehousing-efficiency") 
	{
		//sendGaEvent('blog_approachtoecommerce', 'blog_download_btn', 'click');
		link.setAttribute('download', '4_pronged_approch_to_ecommerce.pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/4pronged.pdf`;
		document.body.appendChild(link);
	} 
	else if (blogUrl === "why-fast-food-restaurants-need-an-efficient-and-centralised-mailroom")
	{
		//sendGaEvent('blog_whyfastfood', 'blog_download_btn', 'click');
		link.setAttribute('download', 'why-fast-food-restaurants-need-an-efficient-and-centralised-mailroom.pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/why-fast-food.pdf`;
		document.body.appendChild(link);
	} 
	else if (blogUrl === "the-pharmaceutical-logistics-needs-a-new-and-improved-mailroom") 
	{
		//sendGaEvent('blog_phaemaceuticallogistics', 'blog_download_btn', 'click');
		link.setAttribute('download', 'the-pharmaceutical-logistics-needs-a-new-and-improved-mailroom.pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/pharamaceutical.pdf`;
		document.body.appendChild(link);
	} 
	else if (blogUrl === "address-disambiguation-for-seamless-e-commerce-delivery-even-under-special-circumstances") 
	{
		//sendGaEvent('blog_addressdisambiguation', 'blog_download_btn', 'click');
		link.setAttribute('download', 'address-disambiguation-for-seamless-e-commerce-delivery-even-under-special-circumstances.pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/address_disambiguation.pdf`;
		document.body.appendChild(link);
	} 
	else if (blogUrl === "6-things-banks-and-financial-institutions-want-from-their-logistics-partners") 
	{
		//sendGaEvent('blog_bankandfinancial', 'blog_download_btn', 'click');
		link.setAttribute('download', '6-things-banks-and-financial-institutions-want-from-their-logistics-partners.pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/6-things-banks-and-financial-institutions-want-from-their-logistics-partners-3.pdf`;
		document.body.appendChild(link);
	} 
	else if (blogUrl === "international-e-commerce-can-be-tricky-robust-global-logistics-can-help-with-that") 
	{
		//sendGaEvent('blog_internationalecommerce', 'blog_download_btn', 'click');
		link.setAttribute('download', 'international-e-commerce-can-be-tricky-robust-global-logistics-can-help-with-that .pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/international_e-commerce.pdf`;
		document.body.appendChild(link);
	} 
	else if (blogUrl === "demand-forecasting-how-good-global-shipping-services-can-transform-your-entire-supply-chain") 
	{
		//sendGaEvent('blog_demandforcasting', 'blog_download_btn', 'click');
		link.setAttribute('download', 'demand-forecasting-how-good-global-shipping-services-can-transform-your-entire-supply-chain.pdf');
		link.href = `${location.origin}/wp-content/uploads/2021/09/demand_forcasting.pdf`;
		document.body.appendChild(link);
    }


	link.click();
	link.remove();
}
/* download */

/*careers page*/
!(function (e) {
        var t = {};
        function n(o) {
            if (t[o]) return t[o].exports;
            var r = (t[o] = { i: o, l: !1, exports: {} });
            return e[o].call(r.exports, r, r.exports, n), (r.l = !0), r.exports;
        }
        (n.m = e),
            (n.c = t),
            (n.d = function (e, t, o) {
                n.o(e, t) || Object.defineProperty(e, t, { configurable: !1, enumerable: !0, get: o });
            }),
            (n.n = function (e) {
                var t =
                    e && e.__esModule
                        ? function () {
                            return e.default;
                        }
                        : function () {
                            return e;
                        };
                return n.d(t, "a", t), t;
            }),
            (n.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t);
            }),
            (n.p = "/"),
            n((n.s = 65));
    })({
        65: function (e, t, n) {
            e.exports = n(66);
        },
        66: function (e, t) {
            if (window.location.pathname == "/careers/") {
            $(document).ready(function () {
                var e = document.getElementById("myline"),
                    t = e.getTotalLength();
                (circle = document.getElementById("circle")),
                    (e.style.strokeDasharray = t),
                    (e.style.strokeDashoffset = t),
                    window.addEventListener("scroll", function () {
                        var n = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight),
                            o = t * n;
                        (e.style.strokeDashoffset = t - o + 10), (endPoint = e.getPointAtLength(o)), circle.setAttribute("cx", endPoint.x), circle.setAttribute("cy", endPoint.y);
                    });
            });
        }
    }
    });
	
/*careers page ends*/	

jQuery(document).ready(function($) { 
    var delay = 100; setTimeout(function() { 
    $('.elementor-element-256cf46 .elementor-tab-title').removeClass('elementor-active');
    $('.elementor-element-256cf46 .elementor-tab-content').css('display', 'none'); }, delay); 
}); 


//Floating button js*/
$(".closeImg").click(function(){
  $(".closeImg").toggleClass("active")
  $("#signup").toggle();
  $("#floatBtnWrapper").toggle();
  $("#essentials3").toggle();
});
	
$(".round-btn").click(function(){
	//alert();
  $(".round-btn").toggleClass("active");
  $("#floatBtnWrapper").toggle();
  $("#essentials3").toggle();
	 var $this = $(this);
   if ($this.hasClass("active")) {
      $this.html("+");
    } else {
      $this.html("×");
    }
  
});
    
$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();
    //document.getElementById('fixed').innerHTML = scrollDistance;
    if(scrollDistance>=100){
      $(".signFixSec").show()
      $("header").addClass("active")
      $(".logoSection img.logo1").hide()
      $(".logoSection img.logo2").show()
    }
    else{
    $(".signFixSec").hide()
    $("header").removeClass("active")
    $(".logoSection img.logo1").show()
      $(".logoSection img.logo2").hide()  
    }
}).scroll();

//Floagint button js ends  
	
$('.menu-item-2966').click(function() { 
	$(".modal_loader_div").attr("style", "display:none")
	$(".phintfix").attr("style", "display:none")
	$("#submit_otp").attr("style", "display:none")
	$("#get_otp").attr("style", "display:block")
	$(".track_modal_field").attr("style", "display:none")
	$(".otpModalForm-hintfix").attr("style", "display:none")
	$("#trackModalForm").modal("show");
	document.getElementById("popuptracktext").value = "";

});
$('#contact_modal').click(function() { 
	//jQuery(".phintfix").attr("style", "display:none")
	$("#contact-Modal").modal("show");
});        
$('#ourTeam').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
           dots:true,
         singleItem:true,
        pullDrag:false,
        mouseDrag:false,
        slideBy:1,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots:false,
            navText: [
                "<img src='/wp-content/uploads/2021/08/back-icon.png'>",
                "<img src='/wp-content/uploads/2021/08/next-icon.png'>",
            ],  
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
})      
        
$('#testimonial').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
       dots:true,
        dotsEach: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                dots:false,
        navText: [
            "<img src='/wp-content/uploads/2021/08/back-icon.png'>",
            "<img src='/wp-content/uploads/2021/08/next-icon.png'>",
        ],  
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
});       
$('#customer_stories').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
       dots:true,
        dotsEach: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
});  
$('#blog_sliders').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
                
            },
            1000: {
                items: 3
            }
        }
}) 


// !function (e) { var a = {}; function r(n) { if (a[n]) return a[n].exports; var i = a[n] = { i: n, l: !1, exports: {} }; return e[n].call(i.exports, i, i.exports, r), i.l = !0, i.exports } r.m = e, r.c = a, r.d = function (e, a, n) { r.o(e, a) || Object.defineProperty(e, a, { configurable: !1, enumerable: !0, get: n }) }, r.n = function (e) { var a = e && e.__esModule ? function () { return e.default } : function () { return e }; return r.d(a, "a", a), a }, r.o = function (e, a) { return Object.prototype.hasOwnProperty.call(e, a) }, r.p = "/", r(r.s = 53) }({ 53: function (e, a, r) { e.exports = r(54) }, 54: function (e, a) { $(document).ready(function () { $(".markershide").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("2300", !1, 800), $("#timeLineClient").animateNumbers("10000", !1, 800), $("#timeLineSeller").animateNumbers("600000", !1, 800), $("#timeLineProduct").animateNumbers("1500000", !1, 800) }, 1), window.timeLineAction = function (e, a) { $("#collapse" + a).on("show.bs.collapse", function () { switch (e) { case 2011: $(".markershide").hide(), $("#markers1").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("2", !1, 800), $("#timeLineClient").animateNumbers("5", !1, 800), $("#timeLineSeller").animateNumbers("20", !1, 800), $("#timeLineProduct").animateNumbers("500", !1, 800) }, 1); break; case 2012: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("31", !1, 800), $("#timeLineClient").animateNumbers("75", !1, 800), $("#timeLineSeller").animateNumbers("53", !1, 800), $("#timeLineProduct").animateNumbers("9000", !1, 800) }, 1); break; case 2013: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("130", !1, 800), $("#timeLineClient").animateNumbers("600", !1, 800), $("#timeLineSeller").animateNumbers("10000", !1, 800), $("#timeLineProduct").animateNumbers("40000", !1, 800) }, 1); break; case 2014: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("175", !1, 800), $("#timeLineClient").animateNumbers("800", !1, 800), $("#timeLineSeller").animateNumbers("25000", !1, 800), $("#timeLineProduct").animateNumbers("90000", !1, 800) }, 1); break; case 2015: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("350", !1, 800), $("#timeLineClient").animateNumbers("2000", !1, 800), $("#timeLineSeller").animateNumbers("100000", !1, 800), $("#timeLineProduct").animateNumbers("200000", !1, 800) }, 1); break; case 2016: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), $("#markers6").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("500", !1, 800), $("#timeLineClient").animateNumbers("3000", !1, 800), $("#timeLineSeller").animateNumbers("100000", !1, 800), $("#timeLineProduct").animateNumbers("320000", !1, 800) }, 1); break; case 2017: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), $("#markers6").fadeIn("slow"), $("#markers7").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("1200", !1, 800), $("#timeLineClient").animateNumbers("3000", !1, 800), $("#timeLineSeller").animateNumbers("150000", !1, 800), $("#timeLineProduct").animateNumbers("350000", !1, 800) }, 1); break; case 2018: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), $("#markers6").fadeIn("slow"), $("#markers7").fadeIn("slow"), $("#markers8").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("1700", !1, 800), $("#timeLineClient").animateNumbers("3500", !1, 800), $("#timeLineSeller").animateNumbers("150000", !1, 800), $("#timeLineProduct").animateNumbers("400000", !1, 800) }, 1); break; case 2019: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), $("#markers6").fadeIn("slow"), $("#markers7").fadeIn("slow"), $("#markers8").fadeIn("slow"), $("#markers9").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("2300", !1, 800), $("#timeLineClient").animateNumbers("10000", !1, 800), $("#timeLineSeller").animateNumbers("500000", !1, 800), $("#timeLineProduct").animateNumbers("1000000", !1, 800) }, 1); break; case 2020: default: $(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), $("#markers6").fadeIn("slow"), $("#markers7").fadeIn("slow"), $("#markers8").fadeIn("slow"), $("#markers9").fadeIn("slow"), $("#markers10").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("2300", !1, 800), $("#timeLineClient").animateNumbers("10000", !1, 800), $("#timeLineSeller").animateNumbers("500000", !1, 800), $("#timeLineProduct").animateNumbers("1000000", !1, 800) }, 1) } }), $(".in").length <= 1 && ($(".markershide").hide(), $("#markers1").fadeIn("slow"), $("#markers2").fadeIn("slow"), $("#markers3").fadeIn("slow"), $("#markers4").fadeIn("slow"), $("#markers5").fadeIn("slow"), $("#markers6").fadeIn("slow"), $("#markers7").fadeIn("slow"), $("#markers8").fadeIn("slow"), $("#markers9").fadeIn("slow"), $("#markers10").fadeIn("slow"), window.setTimeout(function () { $("#timeLineCity").animateNumbers("2300", !1, 800), $("#timeLineClient").animateNumbers("10000", !1, 800), $("#timeLineSeller").animateNumbers("600000", !1, 800), $("#timeLineProduct").animateNumbers("1500000", !1, 800) }, 1)) } }), $.fn.animateNumbers = function (e, a, r, n) { return this.each(function () { var i = $(this), m = parseInt(i.text().replace(/,/g, "")); a = void 0 === a || a, $({ value: m }).animate({ value: e }, { duration: void 0 == r ? 200 : r, easing: void 0 == n ? "swing" : n, step: function () { i.text(Math.floor(this.value)), a && i.text(i.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")) }, complete: function () { parseInt(i.text()) !== e && (i.text(e), a && i.text(i.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))) } }) }) } } });//
//
//
!(function (e) {
    var a = {};
    function r(n) {
        if (a[n]) return a[n].exports;
        var i = (a[n] = { i: n, l: !1, exports: {} });
        return e[n].call(i.exports, i, i.exports, r), (i.l = !0), i.exports;
    }
    (r.m = e),
        (r.c = a),
        (r.d = function (e, a, n) {
            r.o(e, a) || Object.defineProperty(e, a, { configurable: !1, enumerable: !0, get: n });
        }),
        (r.n = function (e) {
            var a =
                e && e.__esModule
                    ? function () {
                          return e.default;
                      }
                    : function () {
                          return e;
                      };
            return r.d(a, "a", a), a;
        }),
        (r.o = function (e, a) {
            return Object.prototype.hasOwnProperty.call(e, a);
        }),
        (r.p = "/"),
        r((r.s = 53));
})({
    53: function (e, a, r) {
        e.exports = r(54);
    },
    54: function (e, a) {
        $(document).ready(function () {
            $(".markershide").fadeIn("slow"),
                window.setTimeout(function () {
                   $('#timeLineCity').animateNumbers('2825', false, 800); $("#timeLineClient").animateNumbers("17000", !1, 800), $("#timeLineSeller").animateNumbers("760000", !1, 800), $("#timeLineProduct").animateNumbers("1500000", !1, 800);
                }, 1),
                 window.timeLineAction = function (year, id) {
        $("#collapse" + id).on("show.bs.collapse", function () {
            switch (year) {
                case 2011:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('2', false, 800);
                        $('#timeLineClient').animateNumbers('5', false, 800);
                        $('#timeLineSeller').animateNumbers('20', false, 800);
                        $('#timeLineProduct').animateNumbers('500', false, 800);
                    }, 1);

                    break;
                case 2012:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('31', false, 800);
                        $('#timeLineClient').animateNumbers('75', false, 800);
                        $('#timeLineSeller').animateNumbers('53', false, 800);
                        $('#timeLineProduct').animateNumbers('9000', false, 800);
                    }, 1);

                    break;
                case 2013:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('130', false, 800);
                        $('#timeLineClient').animateNumbers('600', false, 800);
                        $('#timeLineSeller').animateNumbers('10000', false, 800);
                        $('#timeLineProduct').animateNumbers('40000', false, 800);
                    }, 1);

                    break;
                case 2014:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('175', false, 800);
                        $('#timeLineClient').animateNumbers('800', false, 800);
                        $('#timeLineSeller').animateNumbers('25000', false, 800);
                        $('#timeLineProduct').animateNumbers('90000', false, 800);
                    }, 1);
                    break;
                case 2015:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('350', false, 800);
                        $('#timeLineClient').animateNumbers('2000', false, 800);
                        $('#timeLineSeller').animateNumbers('100000', false, 800);
                        $('#timeLineProduct').animateNumbers('200000', false, 800);
                    }, 1);
                    break;
                case 2016:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('500', false, 800);
                        $('#timeLineClient').animateNumbers('3000', false, 800);
                        $('#timeLineSeller').animateNumbers('100000', false, 800);
                        $('#timeLineProduct').animateNumbers('320000', false, 800);
                    }, 1);
                    break;
                case 2017:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    $("#markers7").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('1200', false, 800);
                        $('#timeLineClient').animateNumbers('3000', false, 800);
                        $('#timeLineSeller').animateNumbers('150000', false, 800);
                        $('#timeLineProduct').animateNumbers('350000', false, 800);
                    }, 1);
                    break;
                case 2018:
                    $(".cls-2 .cls-002").show();
                    $(".markershide").hide();
                    $(".cls-002").fadeIn('slow');
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    $("#markers7").fadeIn('slow');
                    $("#markers8").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('1700', false, 800);
                        $('#timeLineClient').animateNumbers('3500', false, 800);
                        $('#timeLineSeller').animateNumbers('150000', false, 800);
                        $('#timeLineProduct').animateNumbers('400000', false, 800);
                    }, 1);
                    break;
                case 2019:
                    $(".cls-2 .cls-002").hide();
                    $(".cls-002").hide();
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    $("#markers7").fadeIn('slow');
                    $("#markers8").fadeIn('slow');
                    $("#markers9").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('2300', false, 800);
                        $('#timeLineClient').animateNumbers('10000', false, 800);
                        $('#timeLineSeller').animateNumbers('500000', false, 800);
                        $('#timeLineProduct').animateNumbers('1000000', false, 800);
                    }, 1);
                    break;
                case 2020:
                    $(".markershide").hide();
                    $(".cls-2 .cls-002").hide();
                    $(".cls-002").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    $("#markers7").fadeIn('slow');
                    $("#markers8").fadeIn('slow');
                    $("#markers9").fadeIn('slow');
                    $("#markers10").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('2300', false, 800);
                        $('#timeLineClient').animateNumbers('10000', false, 800);
                        $('#timeLineSeller').animateNumbers('500000', false, 800);
                        $('#timeLineProduct').animateNumbers('1000000', false, 800);
                    }, 1);
                    break;
                case 2021:
                    $(".markershide").hide();
                    $(".cls-2 .cls-002").hide();
                    $(".cls-002").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    $("#markers7").fadeIn('slow');
                    $("#markers8").fadeIn('slow');
                    $("#markers9").fadeIn('slow');
                    $("#markers10").fadeIn('slow');
                    $("#markers11").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('2800', false, 800);
                        $('#timeLineClient').animateNumbers('15000', false, 800);
                        $('#timeLineSeller').animateNumbers('760000', false, 800);
                        $('#timeLineProduct').animateNumbers('1500000', false, 800);
                    }, 1);
                    break;
                default:
                    $(".markershide").hide();
                    $("#markers1").fadeIn('slow');
                    $("#markers2").fadeIn('slow');
                    $("#markers3").fadeIn('slow');
                    $("#markers4").fadeIn('slow');
                    $("#markers5").fadeIn('slow');
                    $("#markers6").fadeIn('slow');
                    $("#markers7").fadeIn('slow');
                    $("#markers8").fadeIn('slow');
                    $("#markers9").fadeIn('slow');
                    $("#markers10").fadeIn('slow');
                    window.setTimeout(function () {
                        $('#timeLineCity').animateNumbers('2800', false, 800);
                        $('#timeLineClient').animateNumbers('15000', false, 800);
                        $('#timeLineSeller').animateNumbers('760000', false, 800);
                        $('#timeLineProduct').animateNumbers('1500000', false, 800);
                    }, 1);
                    break;
            }
        });

        if ($('.in').length <= 1) {
            $(".markershide").hide();
            $("#markers1").fadeIn('slow');
            $("#markers2").fadeIn('slow');
            $("#markers3").fadeIn('slow');
            $("#markers4").fadeIn('slow');
            $("#markers5").fadeIn('slow');
            $("#markers6").fadeIn('slow');
            $("#markers7").fadeIn('slow');
            $("#markers8").fadeIn('slow');
            $("#markers9").fadeIn('slow');
            $("#markers10").fadeIn('slow');
            $("#markers11").fadeIn('slow');
            window.setTimeout(function () {
                $('#timeLineCity').animateNumbers('2800', false, 800);
                $('#timeLineClient').animateNumbers('15000', false, 800);
                $('#timeLineSeller').animateNumbers('760000', false, 800);
                $('#timeLineProduct').animateNumbers('1500000', false, 800);
            }, 1);
        }
    };
        }),
            ($.fn.animateNumbers = function (e, a, r, n) {
                return this.each(function () {
                    var i = $(this),
                        m = parseInt(i.text().replace(/,/g, ""));
                    (a = void 0 === a || a),
                        $({ value: m }).animate(
                            { value: e },
                            {
                                duration: void 0 == r ? 200 : r,
                                easing: void 0 == n ? "swing" : n,
                                step: function () {
                                    i.text(Math.floor(this.value)), a && i.text(i.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                },
                                complete: function () {
                                    parseInt(i.text()) !== e && (i.text(e), a && i.text(i.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")));
                                },
                            }
                        );
                });
            });
    },
});
  
//
$(".faqAcc h2").click(function () {
                    if (1 == $(this).hasClass("active")) return $(".faqAcc h2").removeClass("active"), $(this).next().slideUp(), !1;
                    $(".faqAcc .faqContent").slideUp(), $(".faqAcc h2").removeClass("active"), $(this).addClass("active"), $(this).next().slideDown();
});

/* Delhivery package count */
// function get_count_delhivery_packets()
// {
//       $.ajax({
// 			type: "GET",
// 			url: 'https://dlv-web-api.delhivery.com/v3/shipment-count'
// 		})
// 			.done(function (response) {
// 			var counter = response.data
// 			setInterval(function () {
// 				random = Math.floor(Math.random()*9)
// 				counter = counter+random ;
// 				testCase =  counter.toString();

// 				let convert = ([...x]) => {
// 					let i = 1, j=1,subStrings = [];

// 					while (x.length) {
// 						subStrings.push(x.splice(0, i).join(""));
// 						if(j > 0)
// 						{
// 							i=3;
// 						}
// 						j += 1;
// 					}

// 					return subStrings.join(",")
// 				}

// 				let result = convert(testCase);
// 				//console.log(result);
// 				jQuery('#counter').html(result);
// 			},600)
// 		});


// 		setInterval(function () {
// 			get_count_delhivery_packets();

// 		}, 900000) // call API in 15 min inteval
// }
/* Delhivery package count */

$(document).ready(function(){
	var cookie_policy = localStorage.getItem("cookie_policy");
	//alert (cookie_policy);
	if(cookie_policy=='true' || cookie_policy=='false')
	{
		$('#cookieDiv').hide();
	}
	else
	{
		$('#cookieDiv').show();
	}
});
function openFaq(currid, question_id){
	 // alert("#mobile-explained-body-"+question_id);
	  jQuery('#support-search-input').val("");
	  jQuery("#support-results-container").hide();
	  $('#top-tabs [data-id="'+currid+'"]').trigger("click");
	  $('#top-tabs [data-id="'+currid+'"]').addClass("active");
	  $('.article-list [data-id="'+question_id+'"]').trigger("click");
	  $('.mobile-article-list [data-id="'+question_id+'"]').trigger("click");
	  //$('#mobile-article-list-a-'+question_id+'').trigger("click");
	  $('#mobile-article-list-a-'+question_id+'').addClass("active");
	  $("#mobile-explained-body-"+question_id).css("display", "block");
	  $('#mobile-explained-body-'+question_id+'').slideToggle();

	}


//js for investment 
//
//
//
//

    $(document).ready(function(){
   
            $('.boardMemberCarousel').owlCarousel({
      items:3,
      margin:25,
      slideSpeed : 300,
      slideBy:1,
      mouseDrag:true,
      nav: false,
      autoplay: false, 
      dots: true,
      loop: false,
      singleItem:true,
      //responsiveRefreshRate: 2000,    
      responsive : {
        0:{
          items:1,
          dots: true,
          margin: 15,
        },
        340:{
          items: 1,
          margin: 15,
        },
        767:{
          items:2,
          dots: true,
        },
        980:{
          items:2,
          margin:20,
        },
        1200:{
          items:4,
          margin: 20,
          dots: true,
        },
      }      
  });
  
$('.csrCard').owlCarousel({
  items:3,
  margin:30,
  slideSpeed : 300,
  slideBy:1,
  mouseDrag:true,
  nav: false,
  autoplay: false, 
  dots: true,
  loop: false,
  singleItem:true,
  //responsiveRefreshRate: 2000,    
  responsive : {
    0:{
      items:1,
      dots: true,
      margin: 0,
    },
    340:{
      items: 1,
      margin: 20,
    },
    767:{
      items:1,
      dots: true,
    },
    980:{
      items:3,
      margin: 20,
      dots: true,
    },
    1200:{
      items:3,
      margin: 30,
      dots: true,
    },
  }    
});
   
window.reportsBtnClick = function () {
    $("#fillingsBtn").removeClass('active');
    $("#reportsBtn").addClass('active');
    $('#reportTable').show();
    $('#filingTable').hide();
    $("#materialBtn").removeClass('active');
    $('#materialCreditors').hide();
}
window.fillingsBtnClick = function () {
    $("#fillingsBtn").addClass('active');
    $("#reportsBtn").removeClass('active');
    $('#reportTable').hide();
    $('#filingTable').show();
    $("#materialBtn").removeClass('active');
    $('#materialCreditors').hide();
}

window.materialClick = function () {
    $("#materialBtn").addClass('active');
    $('#materialCreditors').show();
    $("#reportsBtn").removeClass('active');
    $('#reportTable').hide();
    $("#fillingsBtn").removeClass('active');
    $('#filingTable').hide();
}

window.boardMembersBtnClick = function () {
    $("#boardMembersBtn").addClass('active');
    $("#boardmembers").show();
    $("#policiessBtn").removeClass('active');
    $("#policesTable").hide();
    $("#committeeBtn").removeClass('active');
    $("#committeeSec").hide();
    $("#othersBtn").removeClass('active');
    $("#othersTable").hide();

}
window.policiessBtnClick = function () {
    $("#boardMembersBtn").removeClass('active');
    $("#boardmembers").hide();
    $("#policiessBtn").addClass('active');
    $("#policesTable").show();
    $("#committeeBtn").removeClass('active');
    $("#committeeSec").hide();
    $("#othersBtn").removeClass('active');
    $("#othersTable").hide();

}
window.committeeBtnClick = function () {
    $("#boardMembersBtn").removeClass('active');
    $("#boardmembers").hide();
    $("#policiessBtn").removeClass('active');
    $("#policesTable").hide();
    $("#committeeBtn").addClass('active');
    $("#committeeSec").show();
    $("#othersBtn").removeClass('active');
    $("#othersTable").hide();

}

window.othersBtnClick = function () {
    $("#boardMembersBtn").removeClass('active');
    $("#boardmembers").hide();
    $("#policiessBtn").removeClass('active');
    $("#policesTable").hide();
    $("#committeeBtn").removeClass('active');
    $("#committeeSec").hide();
    $("#othersBtn").addClass('active');
    $("#othersTable").show();
}
	

    window.scrollToDiv = function (id) {
        document.getElementById(id).scrollIntoView({
            behavior: "smooth",
            block: "end",
            inline: "nearest",

        });
        $('#mySidenav').hide();
    }
	
		
});


window.scrollToForm = function (){
    if(location.pathname.includes('/support/')){
document.getElementsByClassName('site-header')[0].classList.add('white-bg')
window.scrollTo(0, 1184);


}

}


window.dataLayer = window.dataLayer || [];
function sendGaEvent(category, action, label) 
{
	const activecookie_policy5 = localStorage.getItem("cookie_policy");
	if (label == 'DLVsupportpageRaiseIssue') {
		const element = document.getElementById('support-form-id')
		element.scrollIntoView(true);
	}
	if (activecookie_policy5 == "true") {

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
       (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NW38VW2');
		ga("send", {
			hitType: "event",
			eventCategory: category,
			eventAction: action,
			eventLabel: label
		});
		gtag('event', category, {
			'send_to': 'UA-27886886-9',
			'event_category': category,
			'event_label': label
		});

	}
}
window.sendGaEvent = sendGaEvent;
function gtag() { dataLayer.push(arguments); }




function getCookie(name) {
  const mappedName = `${name}=`;
  const cookies = document.cookie.split(';');
  for (let i = 0; i < cookies.length; i++) {
    let cookie = cookies[i];
    while (cookie.charAt(0) == ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(mappedName) == 0) {
      return cookie.substring(mappedName.length, cookie.length);
    }
  }
  return '';
}
window.declineCookie = function () {
  localStorage.setItem("cookie_policy", "false");
  jQuery(function($) {
  $("#cookieDiv").hide();
  })
  sendGaEvent("cookie_panel", "decline_link", "decline_cookie");
  localStorage.removeItem("_gatValue");
  localStorage.removeItem("_gidValue");
  localStorage.removeItem("_gaValue");
  localStorage.removeItem("HSID");
  localStorage.removeItem("SAPISID")
  localStorage.removeItem("UserMatchHistory")
  localStorage.removeItem("lang")
  localStorage.removeItem("bscookie")
  localStorage.removeItem("bcookie")
  localStorage.removeItem("_fbp")
  localStorage.removeItem("lidc")
  localStorage.removeItem("li_sugr")
  localStorage.removeItem("_gcl_au")
};
window.acceptCookie = function () {
  localStorage.setItem("cookie_policy", "true");
  jQuery(function($) {
  $("#cookieDiv").hide();
  })
  location.reload();
  const _gatValue = localStorage.getItem("_gatValue")
  const _gidValue = localStorage.getItem("_gidValue")
  const _gaValue = localStorage.getItem("_gaValue")
  const HSID = localStorage.getItem("HSID")
  const SAPISID = localStorage.getItem("SAPISID")
  const UserMatchHistory = localStorage.getItem("UserMatchHistory")
  const lang = localStorage.getItem("lang")
  const bscookie = localStorage.getItem("bscookie")
  const bcookie = localStorage.getItem("bcookie")
  const _fbp = localStorage.getItem("_fbp")
  const lidc = localStorage.getItem("lidc")
  const li_sugr = localStorage.getItem("li_sugr")
  const _gcl_au = localStorage.getItem("_gcl_au")
  setCookie("_gat", _gatValue)
  setCookie("_gid", _gidValue)
  setCookie("_ga", _gaValue)
  setCookie("HSID", HSID)
  setCookie("SAPISID", SAPISID)
  setCookie("UserMatchHistory", UserMatchHistory)
  setCookie("lang", lang)
  setCookie("bscookie", bscookie)
  setCookie("bcookie", bcookie)
  setCookie("_fbp", _fbp)
  setCookie("lidc", lidc)
  setCookie("li_sugr", li_sugr)
  setCookie("_gcl_au", _gcl_au)
  sendGaEvent("cookie_panel", "accept_link", "accept_cookie");
  localStorage.removeItem("_gatValue");
  localStorage.removeItem("_gidValue");
  localStorage.removeItem("_gaValue");
  localStorage.removeItem("HSID");
  localStorage.removeItem("SAPISID")
  localStorage.removeItem("UserMatchHistory")
  localStorage.removeItem("lang")
  localStorage.removeItem("bscookie")
  localStorage.removeItem("bcookie")
  localStorage.removeItem("_fbp")
  localStorage.removeItem("lidc")
  localStorage.removeItem("li_sugr")
  localStorage.removeItem("_gcl_au")
 
};

function deleteCookie(cname) {
  document.cookie = cname + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  document.cookie = cname + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;domain=.delhivery.com";
  document.cookie = cname + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;domain=.freshworks.com";
  document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;domain=sub.freshworks.com';
  document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;domain=sub.delhivery-track.delhivery.com';
  document.cookie = cname + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT; domain=.delhivery-track.delhivery.com";
  document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;domain=.delhivery-track.delhivery.com';
  document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;domain=.delhivery.com';
}

function setCookie(name, value, expDays) {
  const date = new Date();
  let cookie = `${name}=${value};`;
  if (expDays) {
    date.setTime(date.getTime() + expDays * 24 * 60 * 60 * 1000);
    cookie += `expires=${date.toUTCString()};path=/;`;
  }
  document.cookie = cookie;
}

function postCorssBorderData (event) {
    event.preventDefault();
  
  var form = event.target;
  var name = form.name.value.trim()
            .split(" ");;
  const currentUrl = location.href;
  let m_first_name = "";
  let m_last_name = "";
  switch (name.length) {
    case name.length > 3:
    m_first_name = name[0] + " " + name[1];
      m_last_name = name[2];
      break;
    case 3:
    m_first_name = name[0] + " " + name[1];
      m_last_name = name[2];
      break;
    case 2:
    m_first_name = name[0];
      m_last_name = name[1];
      break;
    case 1:
    m_first_name = name[0];
      m_last_name = "-";
      break;
  }
  // Adding Name Hidden Field
  form.first_name.value = m_first_name;
  form.last_name.value = m_last_name;
    form.button.disabled = true;
    let primaryService = document.getElementById("00N28000007hHkY").value
    
    if(document.getElementById("b2b").checked && document.getElementById("export").checked){
        primaryService = "Export express"
        }
        else if (document.getElementById("b2b").checked && document.getElementById("import").checked) {
        primaryService = "Import express"
        }
        else if (document.getElementById("b2c").checked) {
        primaryService = "Express shipping"
        };
  var formData = {
    first_name: form.m_first_name.value,
    last_name: form.m_last_name.value,
    company: form.company.value,
    email: form.email.value,
    phone: form.phone.value,
    retURL: "http://delhivery.com",
    oid: "00D280000014lh0",
    lead_source: "XB-lead" ,
    submit: "Submit",
    "00N28000007hHkY": primaryService,
    '00N0I00000K9vYk': "XB-lead"
  };
    var request = $.ajax({
        type: 'POST',
        url: "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8",
        data: formData,
      });
      
      request.done(function(msg) {
     console.log(msg)
      });
      
      request.fail(function(jqXHR, textStatus) {
        $(".hintfixError").text("Something went wrong, Please try again.");
      });

  
  
  }