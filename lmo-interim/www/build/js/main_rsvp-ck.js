function overlayIt(e,t,n){$("body").prepend('<div class="bg_overlay" style="display:none; position:absolute; top:0; bottom:0; left:0; right:0; z-index:9998; background:url('+e+") no-repeat "+t+" "+n+'; opacity:.5; height:5000px"></div><a href="#" class="trigger" style="position:fixed; z-index:9999; display:block; text-indent:-9999px; width:50px; height:20px; background:#000;">Trigger</a>');$("a.trigger").click(function(){$(".bg_overlay").hasClass("showing")===!0?$(".bg_overlay").removeClass("showing").css("display","none"):$(".bg_overlay").addClass("showing").css("display","block");return!1})}function modalWindow(){var e=$(".bxslider li a"),t=$(window).height()-90;e.click(function(e){e.preventDefault();var n=$(this).parent().attr("id");$(".bxslider li."+n+" a").colorbox({width:980,height:t,onOpen:function(){$("body").addClass("cb")},onClosed:function(){$("body").removeClass("cb")}})})}function contactForm(){var e=$("ul.contacts li a"),t=$("button.form");e.click(function(t){t.preventDefault();e.removeClass("brush");$(this).addClass("brush");$("#contact .form-container.closed").slideDown(300,function(){$("html,body").animate({scrollTop:$("#select_contact").offset().top-90},300)});$(".thankyou").hide();setTimeout(function(){if($(".form-container.closed")){$(".form-container").addClass("open");$(".form-container").fadeIn("slow")}},400);var n=$(this).find("h6.name").attr("data-name");$("button.form span.name").text(n);$('input[name="to"]').val(n)});$("#contact-form").submit(function(e){})}function windowSize(){var e=$(window).height(),t=$(window).width(),n=new Array;n[0]=e;n[1]=t;return n}function assignHeightToSection(){var e=windowSize()}function formValidation(){var e=!0;$("#contact-form").validate({rules:{attending:{required:!0},first_name:{required:!0},last_name:{required:!0},email:{required:!0,email:!0},title:{required:!1},business_name:{required:!1}},messages:{attending:"",first_name:"Please enter your first name.",last_name:"Please enter your last name.",email:{required:"Please enter your email.",email:"Please a valid email."},title:"Please enter your title.",business_name:"Please enter your business name."}})}function _log(){typeof DEBUG!="undefined"&&DEBUG==1&&console.log(_log.caller.name,arguments)}var useAjax=!1,fileLink=!1;$(document).ready(function(){assignHeightToSection();modalWindow();contactForm();formValidation();var e=$(window).height()-90;$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")||location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");if(e.length){$("html,body").animate({scrollTop:e.offset().top-90},1e3);return!1}}})});$(window).scroll(function(){var e=$("header.default"),t=parseInt($(this).scrollTop()),n=$(window).scrollTop(),r=windowSize();n>r[0]-90?$("header").addClass("secondary"):$("header").removeClass("secondary").addClass("default")});(function(){var e,t=function(){},n=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"],r=n.length,i=window.console=window.console||{};while(r--){e=n[r];i[e]||(i[e]=t)}})();