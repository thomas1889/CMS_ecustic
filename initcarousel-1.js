jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initcarousel-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    if ( typeof html5Lightbox === "undefined" )
    {
        html5Lightbox = jQuery("").html5lightbox({
            skinsfoldername:"",
            jsfolder:jsFolder,
            barheight:64,
            showtitle:true,
            showdescription:false,
            shownavigation:false,
            thumbwidth:80,
            thumbheight:60,
            thumbtopmargin:12,
            thumbbottommargin:8,
            titlebottomcss:'{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}',
            descriptionbottomcss:'{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}'
        });
    }
    jQuery("#amazingcarousel-1").amazingcarousel({
        jsfolder:jsFolder,
        width:170,
        height:150,
        skinsfoldername:"",
        arrowhideonmouseleave:1000,
        itembottomshadowimagetop:100,
        donotcrop:true,
        /* start my tryouts*/
        slideinterval:5000,
        transitiononfirstslide:false,
        /* ends my tryouts*/
        navheight:16,
        random:false,
        showhoveroverlay:true,
        height:150,
        arrowheight:175,
        itembackgroundimagewidth:100,
        skin:"Simplicity",
        responsive:true,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        navstyle:"none",
        enabletouchswipe:true,
        scrollitems:1,
        arrowstyle:"always",
        bottomshadowimagetop:95,
        lightboxshowtitle:true,
        hoveroverlayimage:"mas.png",
        itembottomshadowimage:"itembottomshadow-100-100-5.png",
        lightboxshowdescription:false,
        width:170,
        showitembottomshadow:false,
        showhoveroverlayalways:false,
        navimage:"bullet-16-16-0.png",
        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",
        lightboxshownavigation:false,
        showitembackgroundimage:false,
        itembackgroundimage:"",
        backgroundimagewidth:110,
        playvideoimagepos:"center",
        circular:true,
        arrowimage:"arrows-32-32-1.png",
        showbottomshadow:false,
        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",
        supportiframe:false,
        transitioneasing:"easeInOutExpo",
        itembackgroundimagetop:0,
        showbackgroundimage:false,
        lightboxbarheight:64,
        showplayvideo:true,
        spacing:0,
        backgroundimagetop:-40,
        lightboxthumbwidth:80,
        scrollmode:"page",
        navdirection:"horizontal",
        itembottomshadowimagewidth:100,
        backgroundimage:"",
        autoplay:true,
        arrowwidth:175,
        transparent:true,
        navmode:"page",
        lightboxthumbtopmargin:12,
        interval:3000,
        lightboxthumbbottommargin:8,
        lightboxthumbheight:60,
        navspacing:8,
        pauseonmouseover:true,
        imagefillcolor:"FFFFFF",
        playvideoimage:"playvideo-64-64-0.png",
        visibleitems:3,
        navswitchonmouseover:false,
        direction:"horizontal",
        usescreenquery:false,
        bottomshadowimagewidth:110,
        screenquery:{
	mobile: {
		screenwidth: 600,
		visibleitems: 1
	}
},
        navwidth:16,
        loop:0,
        transitionduration:1000
    });
});