jQuery(document).ready(function ($) {
	

	
	$('div.dlov_loader1').append('<svg class="milly-ring" viewBox="25 25 50 50" stroke-width="2"><circle cx="50" cy="50" r="20" /></svg><style id="milly-preloader-style">.milly-ring{--milly-preloader-size:50px;--milly-preloader-speed:2s;height:var(--milly-preloader-size);width:var(--milly-preloader-size);vertical-align:middle;transform-origin:center;animation:rotate var(--milly-preloader-speed) linear infinite}.milly-ring circle{fill:none;stroke:#008BDB;stroke-dasharray:1,200;stroke-dashoffset:0;stroke-linecap:round;animation:stretch calc(var(--milly-preloader-speed) * 0.75) ease-in-out infinite}@keyframes rotate{100%{transform:rotate(360deg)}}@keyframes stretch{0%{stroke-dasharray:1,200;stroke-dashoffset:0}50%{stroke-dasharray:90,200;stroke-dashoffset:-35px}100%{stroke-dashoffset:-124px}}</style>');
	
	$('div.dlov_loader2').append('<div class="milly-waveform"><div class="milly-waveform__bar"></div><div class="milly-waveform__bar"></div><div class="milly-waveform__bar"></div><div class="milly-waveform__bar"></div></div><style id="milly-preloader-style">.milly-waveform{--milly-preloader-size:40px;--milly-preloader-speed:1s;--milly-preloader-line-weight:3.5px;display:flex;flex-flow:row nowrap;align-items:center;justify-content:space-between;width:var(--milly-preloader-size);height:calc(var(--milly-preloader-size) * 0.9)}.milly-waveform__bar{width:var(--milly-preloader-line-weight);height:100%;background-color:#008BDB;border-radius:2px}.milly-waveform__bar:nth-child(1){animation:grow var(--milly-preloader-speed) ease-in-out calc(var(--milly-preloader-speed) * -0.45) infinite}.milly-waveform__bar:nth-child(2){animation:grow var(--milly-preloader-speed) ease-in-out calc(var(--milly-preloader-speed) * -0.3) infinite}.milly-waveform__bar:nth-child(3){animation:grow var(--milly-preloader-speed) ease-in-out calc(var(--milly-preloader-speed) * -0.15) infinite}.milly-waveform__bar:nth-child(4){animation:grow var(--milly-preloader-speed) ease-in-out infinite}@keyframes grow{0%,100%{transform:scaleY(.3)}50%{transform:scaleY(1)}}</style>');
	
	$('div.dlov_loader3').append('<div class="milly-dot-pulse"><div class="milly-dot-pulse__dot"></div></div><style id="milly-preloader-style">.milly-dot-pulse{--milly-preloader-size:50px;--milly-preloader-speed:1.3s;position:relative;display:flex;align-items:center;justify-content:space-between;width:var(--milly-preloader-size);height:calc(var(--milly-preloader-size) * 0.27)}.milly-dot-pulse__dot,.milly-dot-pulse::before,.milly-dot-pulse::after{content:"";display:block;height:calc(var(--milly-preloader-size) * 0.18);width:calc(var(--milly-preloader-size) * 0.18);border-radius:50%;background-color:#008BDB;transform:scale(0)}.milly-dot-pulse::before{animation:pulse var(--milly-preloader-speed) ease-in-out infinite}.milly-dot-pulse__dot{animation:pulse var(--milly-preloader-speed) ease-in-out calc(var(--milly-preloader-speed) * 0.125) infinite both}.milly-dot-pulse::after{animation:pulse var(--milly-preloader-speed) ease-in-out calc(var(--milly-preloader-speed) * 0.25) infinite}@keyframes pulse{0%,100%{transform:scale(0)}50%{transform:scale(1.5)}}</style>');
		
	$('div.dlov_loader4').append('<div class="milly-ping"></div><style id="milly-preloader-style">.milly-ping{--milly-preloader-size:45px;--milly-preloader-speed:1.25s;position:relative;height:var(--milly-preloader-size);width:var(--milly-preloader-size)}.milly-ping::before,.milly-ping::after{content:"";position:absolute;top:0;left:0;height:100%;width:100%;border-radius:50%;background-color:#008BDB;animation:milly-pulse var(--milly-preloader-speed) linear infinite;transform:scale(0);opacity:0}.milly-ping::after{animation-delay:calc(var(--milly-preloader-speed) / -2)}@keyframes milly-pulse{0%{transform:scale(0);opacity:1}100%{transform:scale(1);opacity:0}}</style>');
			
	$('div.dlov_loader5').append('<div class="milly-jelly"></div><svg width="0" height="0" class="milly-jelly-maker"><defs><filter id="uib-jelly-ooze"><feGaussianBlur in="SourceGraphic" stdDeviation="6.25" result="blur" /><feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="ooze" /><feBlend in="SourceGraphic" in2="ooze" /></filter></defs></svg><style id="milly-preloader-style">.milly-jelly{--milly-preloader-size:50px;--milly-preloader-speed:.9s;position:relative;height:calc(var(--milly-preloader-size) / 2);width:var(--milly-preloader-size);filter:url("#uib-jelly-ooze");animation:milly-rotate calc(var(--milly-preloader-speed) * 2) linear infinite}.milly-jelly::before,.milly-jelly::after{content:"";position:absolute;top:0%;left:25%;width:50%;height:100%;background:#008BDB;border-radius:100%}.milly-jelly::before{animation:milly-shift-left var(--milly-preloader-speed) ease infinite}.milly-jelly::after{animation:milly-shift-right var(--milly-preloader-speed) ease infinite}.milly-jelly-maker{width:0;height:0;position:absolute}@keyframes milly-rotate{0%,49.999%,100%{transform:none}50%,99.999%{transform:rotate(90deg)}}@keyframes milly-shift-left{0%,100%{transform:translateX(0%)}50%{transform:scale(.65) translateX(-75%)}}@keyframes milly-shift-right{0%,100%{transform:translateX(0%)}50%{transform:scale(.65) translateX(75%)}}</style>');
	
	/* Preloader */
	var dlov_preloader  = $('#dlov_milly-preloader .et-epanel-box:first-of-type .et-box-content div.et_pb_yes_no_button');
	if ( $(dlov_preloader).hasClass('et_pb_on_state'))
	{	
	   $('#dlov_milly-preloader .et-epanel-box:nth-last-child(-n+3)').show();
	}else{
		$('#dlov_milly-preloader .et-epanel-box:nth-last-child(-n+3)').hide();
	}
	
	$(dlov_preloader).click(function(){
			if ( $(this).hasClass('et_pb_off_state'))
			{	
				   $('#dlov_milly-preloader .et-epanel-box:nth-last-child(-n+3)').show();
			}else{
				   $('#dlov_milly-preloader .et-epanel-box:nth-last-child(-n+3)').hide();
			}
	});
	
	
	
	
});