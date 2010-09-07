/** ------------------------------------------------
	^_^ i love jquery
	Filename: 	admin/admin_style/js/jquery.kleeja.js
	package:	Kleeja  copyright(c)2007-2010 		URL: http://www.kleeja.com
	-------------------------------------------------
	$Id: jquery.kleeja.js 1537 2010-07-23 01:39:34Z ALTAR3Q $
	-------------------------------------------------
**/

 /** Tooltip plugin * powered by jQuery (http://www.jquery.com)  **/
 (function($){$.fn.tipsy=function(options){options=$.extend({},$.fn.tipsy.defaults,options);return this.each(function(){var opts=$.fn.tipsy.elementOptions(this,options);$(this).hover(function(){$.data(this,'cancel.tipsy',true);var tip=$.data(this,'active.tipsy');if(!tip){tip=$('<div class="tipsy"><div class="tipsy-inner"/></div>');tip.css({position:'absolute',zIndex:100000});$.data(this,'active.tipsy',tip)}if($(this).attr('title')||typeof($(this).attr('original-title'))!='string'){$(this).attr('original-title',$(this).attr('title')||'').removeAttr('title')}var title;if(typeof opts.title=='string'){title=$(this).attr(opts.title=='title'?'original-title':opts.title)}else if(typeof opts.title=='function'){title=opts.title.call(this)}tip.find('.tipsy-inner')[opts.html?'html':'text'](title||opts.fallback);var pos=$.extend({},$(this).offset(),{width:this.offsetWidth,height:this.offsetHeight});tip.get(0).className='tipsy';tip.remove().css({top:0,left:0,visibility:'hidden',display:'block'}).appendTo(document.body);var actualWidth=tip[0].offsetWidth,actualHeight=tip[0].offsetHeight;var gravity=(typeof opts.gravity=='function')?opts.gravity.call(this):opts.gravity;switch(gravity.charAt(0)){case'n':tip.css({top:pos.top+pos.height,left:pos.left+pos.width/2-actualWidth/2}).addClass('tipsy-north');break;case's':tip.css({top:pos.top-actualHeight,left:pos.left+pos.width/2-actualWidth/2}).addClass('tipsy-south');break;case'e':tip.css({top:pos.top+pos.height/2-actualHeight/2,left:pos.left-actualWidth}).addClass('tipsy-east');break;case'w':tip.css({top:pos.top+pos.height/2-actualHeight/2,left:pos.left+pos.width}).addClass('tipsy-west');break}if(opts.fade){tip.css({opacity:0,display:'block',visibility:'visible'}).animate({opacity:0.8})}else{tip.css({visibility:'visible'})}},function(){$.data(this,'cancel.tipsy',false);var self=this;setTimeout(function(){if($.data(this,'cancel.tipsy'))return;var tip=$.data(self,'active.tipsy');if(opts.fade){tip.stop().fadeOut(function(){$(this).remove()})}else{tip.remove()}},100)})})};$.fn.tipsy.elementOptions=function(ele,options){return $.metadata?$.extend({},options,$(ele).metadata()):options};$.fn.tipsy.defaults={fade:false,fallback:'',gravity:'e',html:false,title:'title'};$.fn.tipsy.autoNS=function(){return $(this).offset().top>($(document).scrollTop()+$(window).height()/2)?'s':'n'};$.fn.tipsy.autoWE=function(){return $(this).offset().left>($(document).scrollLeft()+$(window).width()/2)?'e':'w'}})(jQuery);

 /** TinyTips Plugin * powered by jQuery (http://www.jquery.com)  **/
 (function($){$.fn.tinyTips=function(supCont){var tipFrame='<div class="tinyTip"><div class="content"></div><div class="bottom">&nbsp;</div></div>';var animSpeed=100;var tinyTip;var tText;$(this).hover(function(){$('body').append(tipFrame);tinyTip=$('div.tinyTip');tinyTip.hide();if(supCont==='title'){var tipCont=$(this).attr('title')}else if(supCont!=='title'){var tipCont=supCont}$('.tinyTip .content').html(tipCont);tText=$(this).attr('title');$(this).attr('title','');var yOffset=tinyTip.height()+10;var xOffset=(((tinyTip.width()-10)/2))-($(this).width()/2);var pos=$(this).offset();var nPos=pos;nPos.top=pos.top-yOffset;nPos.left=pos.left-xOffset;tinyTip.css('position','absolute').css('z-index','1000');tinyTip.css(nPos).fadeIn(animSpeed)},function(){$(this).attr('title',tText);$('div.tinyTip').fadeOut(animSpeed,function(){$(this).remove()})})}})(jQuery);

 /** jQuery custom checkboxes * @author Khavilo Dmitry  **/
 (function($){var i=function(e){if(!e)var e=window.event;e.cancelBubble=true;if(e.stopPropagation)e.stopPropagation()};$.fn.checkbox=function(f){try{document.execCommand('BackgroundImageCache',false,true)}catch(e){}var g={cls:'jquery-checkbox',empty:PATH_SPACER};g=$.extend(g,f||{});var h=function(a){var b=a.checked;var c=a.disabled;var d=$(a);if(a.stateInterval)clearInterval(a.stateInterval);a.stateInterval=setInterval(function(){if(a.disabled!=c)d.trigger((c=!!a.disabled)?'disable':'enable');if(a.checked!=b)d.trigger((b=!!a.checked)?'check':'uncheck')},10);return d};return this.each(function(){var a=this;var b=h(a);if(a.wrapper)a.wrapper.remove();a.wrapper=$('<span class="'+g.cls+'"><span class="mark"><img src="'+g.empty+'" /></span></span>');a.wrapperInner=a.wrapper.children('span:eq(0)');a.wrapper.hover(function(e){a.wrapperInner.addClass(g.cls+'-hover');i(e)},function(e){a.wrapperInner.removeClass(g.cls+'-hover');i(e)});b.css({position:'absolute',zIndex:-1,visibility:'hidden'}).after(a.wrapper);var c=false;if(b.attr('id')){c=$('label[for='+b.attr('id')+']');if(!c.length)c=false}if(!c){c=b.closest?b.closest('label'):b.parents('label:eq(0)');if(!c.length)c=false}if(c){c.hover(function(e){a.wrapper.trigger('mouseover',[e])},function(e){a.wrapper.trigger('mouseout',[e])});c.click(function(e){b.trigger('click',[e]);i(e);return false})}a.wrapper.click(function(e){b.trigger('click',[e]);i(e);return false});b.click(function(e){i(e)});b.bind('disable',function(){a.wrapperInner.addClass(g.cls+'-disabled')}).bind('enable',function(){a.wrapperInner.removeClass(g.cls+'-disabled')});b.bind('check',function(){a.wrapper.addClass(g.cls+'-checked')}).bind('uncheck',function(){a.wrapper.removeClass(g.cls+'-checked')});$('img',a.wrapper).bind('dragstart',function(){return false}).bind('mousedown',function(){return false});if(window.getSelection)a.wrapper.css('MozUserSelect','none');if(a.checked)a.wrapper.addClass(g.cls+'-checked');if(a.disabled)a.wrapperInner.addClass(g.cls+'-disabled')})}})(jQuery);

 /** Pulse plugin for jQuery @author James Padolsey  **/
 jQuery.fn.pulse=function(prop,speed,times,easing,callback){if(isNaN(times)){callback=easing;easing=times;times=1}var optall=jQuery.speed(speed,easing,callback),queue=optall.queue!==false,largest=0;for(var p in prop){largest=Math.max(prop[p].length,largest)}optall.times=optall.times||times;return this[queue?'queue':'each'](function(){var counts={},opt=jQuery.extend({},optall),self=jQuery(this);pulse();function pulse(){var propsSingle={},doAnimate=false;for(var p in prop){counts[p]=counts[p]||{runs:0,cur:-1};if(counts[p].cur<prop[p].length-1){++counts[p].cur}else{counts[p].cur=0;++counts[p].runs}if(prop[p].length===largest){doAnimate=opt.times>counts[p].runs}propsSingle[p]=prop[p][counts[p].cur]}opt.complete=pulse;opt.queue=false;if(doAnimate){self.animate(propsSingle,opt)}else{optall.complete.call(self[0])}}})};

 /** jQuery lightBox plugin (http://leandrovieira.com/projects/jquery/lightbox/)  **/
 eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(6($){$.2N.3g=6(4){4=23.2H({2B:\'#34\',2g:0.8,1d:F,1M:\'18/5-33-Y.16\',1v:\'18/5-1u-2Q.16\',1E:\'18/5-1u-2L.16\',1W:\'18/5-1u-2I.16\',19:\'18/5-2F.16\',1f:10,2A:3d,2s:\'1j\',2o:\'32\',2j:\'c\',2f:\'p\',2d:\'n\',h:[],9:0},4);f I=N;6 20(){1X(N,I);u F}6 1X(1e,I){$(\'1U, 1S, 1R\').l({\'1Q\':\'2E\'});1O();4.h.B=0;4.9=0;7(I.B==1){4.h.1J(v 1m(1e.17(\'J\'),1e.17(\'2v\')))}j{36(f i=0;i<I.B;i++){4.h.1J(v 1m(I[i].17(\'J\'),I[i].17(\'2v\')))}}2n(4.h[4.9][0]!=1e.17(\'J\')){4.9++}D()}6 1O(){$(\'m\').31(\'<e g="q-13"></e><e g="q-5"><e g="5-s-b-w"><e g="5-s-b"><1w g="5-b"><e 2V="" g="5-k"><a J="#" g="5-k-V"></a><a J="#" g="5-k-X"></a></e><e g="5-Y"><a J="#" g="5-Y-29"><1w W="\'+4.1M+\'"></a></e></e></e><e g="5-s-b-T-w"><e g="5-s-b-T"><e g="5-b-A"><1i g="5-b-A-1t"></1i><1i g="5-b-A-1g"></1i></e><e g="5-1s"><a J="#" g="5-1s-22"><1w W="\'+4.1W+\'"></a></e></e></e></e>\');f z=1D();$(\'#q-13\').l({2K:4.2B,2J:4.2g,S:z[0],P:z[1]}).1V();f R=1p();$(\'#q-5\').l({1T:R[1]+(z[3]/10),1c:R[0]}).E();$(\'#q-13,#q-5\').C(6(){1a()});$(\'#5-Y-29,#5-1s-22\').C(6(){1a();u F});$(G).2G(6(){f z=1D();$(\'#q-13\').l({S:z[0],P:z[1]});f R=1p();$(\'#q-5\').l({1T:R[1]+(z[3]/10),1c:R[0]})})}6 D(){$(\'#5-Y\').E();7(4.1d){$(\'#5-b,#5-s-b-T-w,#5-b-A-1g\').1b()}j{$(\'#5-b,#5-k,#5-k-V,#5-k-X,#5-s-b-T-w,#5-b-A-1g\').1b()}f Q=v 1j();Q.1P=6(){$(\'#5-b\').2D(\'W\',4.h[4.9][0]);1N(Q.S,Q.P);Q.1P=6(){}};Q.W=4.h[4.9][0]};6 1N(1o,1r){f 1L=$(\'#5-s-b-w\').S();f 1K=$(\'#5-s-b-w\').P();f 1n=(1o+(4.1f*2));f 1y=(1r+(4.1f*2));f 1I=1L-1n;f 2z=1K-1y;$(\'#5-s-b-w\').3f({S:1n,P:1y},4.2A,6(){2y()});7((1I==0)&&(2z==0)){7($.3e.3c){1H(3b)}j{1H(3a)}}$(\'#5-s-b-T-w\').l({S:1o});$(\'#5-k-V,#5-k-X\').l({P:1r+(4.1f*2)})};6 2y(){$(\'#5-Y\').1b();$(\'#5-b\').1V(6(){2u();2t()});2r()};6 2u(){$(\'#5-s-b-T-w\').38(\'35\');$(\'#5-b-A-1t\').1b();7(4.h[4.9][1]){$(\'#5-b-A-1t\').2p(4.h[4.9][1]).E()}7(4.h.B>1){$(\'#5-b-A-1g\').2p(4.2s+\' \'+(4.9+1)+\' \'+4.2o+\' \'+4.h.B).E()}}6 2t(){$(\'#5-k\').E();$(\'#5-k-V,#5-k-X\').l({\'K\':\'1C M(\'+4.19+\') L-O\'});7(4.9!=0){7(4.1d){$(\'#5-k-V\').l({\'K\':\'M(\'+4.1v+\') 1c 15% L-O\'}).11().1k(\'C\',6(){4.9=4.9-1;D();u F})}j{$(\'#5-k-V\').11().2m(6(){$(N).l({\'K\':\'M(\'+4.1v+\') 1c 15% L-O\'})},6(){$(N).l({\'K\':\'1C M(\'+4.19+\') L-O\'})}).E().1k(\'C\',6(){4.9=4.9-1;D();u F})}}7(4.9!=(4.h.B-1)){7(4.1d){$(\'#5-k-X\').l({\'K\':\'M(\'+4.1E+\') 2l 15% L-O\'}).11().1k(\'C\',6(){4.9=4.9+1;D();u F})}j{$(\'#5-k-X\').11().2m(6(){$(N).l({\'K\':\'M(\'+4.1E+\') 2l 15% L-O\'})},6(){$(N).l({\'K\':\'1C M(\'+4.19+\') L-O\'})}).E().1k(\'C\',6(){4.9=4.9+1;D();u F})}}2k()}6 2k(){$(d).30(6(12){2i(12)})}6 1G(){$(d).11()}6 2i(12){7(12==2h){U=2Z.2e;1x=27}j{U=12.2e;1x=12.2Y}14=2X.2W(U).2U();7((14==4.2j)||(14==\'x\')||(U==1x)){1a()}7((14==4.2f)||(U==37)){7(4.9!=0){4.9=4.9-1;D();1G()}}7((14==4.2d)||(U==39)){7(4.9!=(4.h.B-1)){4.9=4.9+1;D();1G()}}}6 2r(){7((4.h.B-1)>4.9){2c=v 1j();2c.W=4.h[4.9+1][0]}7(4.9>0){2b=v 1j();2b.W=4.h[4.9-1][0]}}6 1a(){$(\'#q-5\').2a();$(\'#q-13\').2T(6(){$(\'#q-13\').2a()});$(\'1U, 1S, 1R\').l({\'1Q\':\'2S\'})}6 1D(){f o,r;7(G.1h&&G.28){o=G.26+G.2R;r=G.1h+G.28}j 7(d.m.25>d.m.24){o=d.m.2P;r=d.m.25}j{o=d.m.2O;r=d.m.24}f y,H;7(Z.1h){7(d.t.1l){y=d.t.1l}j{y=Z.26}H=Z.1h}j 7(d.t&&d.t.1A){y=d.t.1l;H=d.t.1A}j 7(d.m){y=d.m.1l;H=d.m.1A}7(r<H){1z=H}j{1z=r}7(o<y){1B=o}j{1B=y}21=v 1m(1B,1z,y,H);u 21};6 1p(){f o,r;7(Z.1Z){r=Z.1Z;o=Z.2M}j 7(d.t&&d.t.1F){r=d.t.1F;o=d.t.1Y}j 7(d.m){r=d.m.1F;o=d.m.1Y}2q=v 1m(o,r);u 2q};6 1H(2C){f 2x=v 2w();1q=2h;3h{f 1q=v 2w()}2n(1q-2x<2C)};u N.11(\'C\').C(20)}})(23);',62,204,'||||settings|lightbox|function|if||activeImage||image||document|div|var|id|imageArray||else|nav|css|body||xScroll||jquery|yScroll|container|documentElement|return|new|box||windowWidth|arrPageSizes|details|length|click|_set_image_to_view|show|false|window|windowHeight|jQueryMatchedObj|href|background|no|url|this|repeat|height|objImagePreloader|arrPageScroll|width|data|keycode|btnPrev|src|btnNext|loading|self||unbind|objEvent|overlay|key||gif|getAttribute|images|imageBlank|_finish|hide|left|fixedNavigation|objClicked|containerBorderSize|currentNumber|innerHeight|span|Image|bind|clientWidth|Array|intWidth|intImageWidth|___getPageScroll|curDate|intImageHeight|secNav|caption|btn|imageBtnPrev|img|escapeKey|intHeight|pageHeight|clientHeight|pageWidth|transparent|___getPageSize|imageBtnNext|scrollTop|_disable_keyboard_navigation|___pause|intDiffW|push|intCurrentHeight|intCurrentWidth|imageLoading|_resize_container_image_box|_set_interface|onload|visibility|select|object|top|embed|fadeIn|imageBtnClose|_start|scrollLeft|pageYOffset|_initialize|arrayPageSize|btnClose|jQuery|offsetHeight|scrollHeight|innerWidth||scrollMaxY|link|remove|objPrev|objNext|keyToNext|keyCode|keyToPrev|overlayOpacity|null|_keyboard_action|keyToClose|_enable_keyboard_navigation|right|hover|while|txtOf|html|arrayPageScroll|_preload_neighbor_images|txtImage|_set_navigation|_show_image_data|title|Date|date|_show_image|intDiffH|containerResizeSpeed|overlayBgColor|ms|attr|hidden|blank|resize|extend|close|opacity|backgroundColor|next|pageXOffset|fn|offsetWidth|scrollWidth|prev|scrollMaxX|visible|fadeOut|toLowerCase|style|fromCharCode|String|DOM_VK_ESCAPE|event|keydown|append|of|ico|000|fast|for||slideDown||100|250|msie|400|browser|animate|lightBox|do'.split('|'),0,{}))

 /** Kleeja Uploader - acp javascript  **/
 function change_color(obj,id,c,c2){c=(c==null)?'ored':c;c2=(c==null)?'osilver':c2;var ii=document.getElementById(id);if(obj.checked){ii.setAttribute("class",c);ii.setAttribute("className",c)}else{ii.setAttribute("class",c2);ii.setAttribute("className",c2)}}function checkAll(form,id,_do_c_,c,c2){for(var i=0;i<form.elements.length;i++){if(form.elements[i].getAttribute("rel")!=id)continue;if(form.elements[i].checked){uncheckAll(form,id,_do_c_,c,c2);break}form.elements[i].checked=true;change_color(form.elements[i],_do_c_+'['+form.elements[i].value+']',c,c2)}}function uncheckAll(form,id,_do_c_,c,c2){for(var i=0;i<form.elements.length;i++){if(form.elements[i].getAttribute("rel")!=id)continue;form.elements[i].checked=false;change_color(form.elements[i],_do_c_+'['+form.elements[i].value+']',c,c2)}}function change_color_exts(id){eval('var ii = document.getElementById("su['+id+']");');eval('var g_obj = document.getElementById("gal_'+id+'");');eval('var u_obj = document.getElementById("ual_'+id+'");');if(g_obj.checked&&u_obj.checked){ii.setAttribute("class",'o_all');ii.setAttribute("className",'o_all')}else if(g_obj.checked){ii.setAttribute("class",'o_g');ii.setAttribute("className",'o_g')}else if(u_obj.checked){ii.setAttribute("class",'o_u');ii.setAttribute("className",'o_u')}else{ii.setAttribute("class",'');ii.setAttribute("className",'')}}function checkAll_exts(form,id,_do_c_){for(var i=0;i<form.elements.length;i++){if(form.elements[i].getAttribute("rel")!=id)continue;if(form.elements[i].checked){uncheckAll_exts(form,id,_do_c_);break}form.elements[i].checked=true;change_color_exts(form.elements[i].value)}}function uncheckAll_exts(form,id,_do_c_){for(var i=0;i<form.elements.length;i++){if(form.elements[i].getAttribute("rel")!=id)continue;form.elements[i].checked=false;change_color_exts(form.elements[i].value)}}

/** Kleeja Uploader - admin start  **/
if(go_to == 'start')
{
	$(document).ready( function (){
			var keys = '';
			var last_key = 0;
			$(document).bind('keyup', function (gevent){
				var key_code = gevent == null ? event.which : gevent.keyCode;
				keys += key_code == 49 && keys == '' ? '1' : '';
				keys += key_code == 57 && keys == '1' && last_key == 49 ? '9' : '';
				keys += key_code == 56 && keys == '19' && last_key == 57 ? '8' : '';
				keys += key_code == 55 && keys == '198' && last_key == 56 ? '7' : '';
				keys = keys.length > 0 && ',49,57,56,55,'.indexOf(',' + key_code + ',') == -1 ? '' : keys;
				if(keys == '1987')
				{
					window.location = './?cp=r_repair&' + GET_FORM_KEY_GLOBAL + '&third_august_1987=SaaninaBorn'
					keys = '';
				}
				last_key = key_code;
			});
	});
}
