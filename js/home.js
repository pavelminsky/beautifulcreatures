// JavaScript Document
var homeEntered = false;
var homeEnterTL;
var homeExitTL;
var homeBg;
var homeMenuOpenTL;
var homeMenuIsOpen = false;

// --  MAIN LEVEL CONTROLS ----------------------------------------

function home_prepare()
{
	trace('prepare home');
	$(window).resize(homeResizeHandle);
	homeBg = $("#homeBg");
	homeBg.disableSelection();
	var sectionId = 'home';

	//add the html data that was loaded into DOM structure
	var sectionContent = document.getElementById('contentShell');	
	if (sectionLoader_returnSectionOBJ(sectionId).htmlData != null)
		sectionContent.innerHTML = sectionLoader_returnSectionOBJ(sectionId).htmlData;
	
	homeExitTL = new TimelineMax({ paused: true, onComplete: stepComplete, onReverseComplete: stepComplete });
	homeExitTL.insert(TweenLite.fromTo($("#homeNamesShell"), .5, { css: {alpha: 1, top: 0}, ease: Expo.easeIn }, { css: {alpha: 0, marginTop: -70} }), 1.05);
	
	homeExitTL.addCallback(menuClose, .15);
	homeExitTL.insert(TweenLite.fromTo($("#releaseDate"), .5, { css: {alpha: 1, marginBottom: 0}, ease: Expo.easeIn }, { css: {alpha: .0, marginBottom: -10} }), .9);
	homeExitTL.insert(TweenLite.fromTo($("#homeBg"), .5, { css: {autoAlpha: 1}, ease: Linear.easeNone }, { css: {autoAlpha: 0} }), 1);
	homeExitTL.insert(TweenLite.fromTo($("#homeLogo"), .5, { css: {autoAlpha: 1}, ease: Linear.easeNone }, { css: {autoAlpha: 0} }), 1);
	homeExitTL.timeScale(1.2);
	
	// the entry animation
	var homeEnterDelay = .9;
	homeEnterTL = new TimelineMax({ paused: true, immediateRender: true, onComplete: homeOnEntered, onReverseComplete: stepComplete });
	homeEnterTL.insert(TweenLite.fromTo($("#homeBg"), .9, { css: {autoAlpha: 0}, ease: Linear.easeNone, immediateRender: true }, { css: {autoAlpha: 1} }), 0);
	homeEnterTL.insert(TweenLite.fromTo($("#homeLogo"), .9, { css: {autoAlpha: 0}, ease: Linear.easeNone, immediateRender: true }, { css: {autoAlpha: 1} }), 0);
	
	homeEnterTL.insert(TweenLite.from($("#homeName1"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), .2+homeEnterDelay);
	homeEnterTL.insert(TweenLite.from($("#homeName2"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), .4+homeEnterDelay);
	homeEnterTL.insert(TweenLite.from($("#homeName3"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), .6+homeEnterDelay);
	homeEnterTL.insert(TweenLite.from($("#homeName4"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), .8+homeEnterDelay);
	homeEnterTL.insert(TweenLite.from($("#homeName5"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), 1+homeEnterDelay);
	homeEnterTL.addCallback(menuOpen, .86+homeEnterDelay);
	homeEnterTL.insert(TweenLite.fromTo($("#homeName7"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), 1.2+homeEnterDelay);
	homeEnterTL.insert(TweenLite.fromTo($("#homeName6"), 1, { css: {alpha: .0, top: -70}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, top: 0}, ease: Expo.easeOut }), 1.4+homeEnterDelay);	
	homeEnterTL.insert(TweenLite.fromTo($("#releaseDate"), 1, { css: {alpha: .0, marginBottom: -10}, ease: Expo.easeOut, immediateRender: true }, { css: {alpha: 1, marginBottom: 0}}), .86+homeEnterDelay);
	
	$("#homeTrailerBtn").mouseover(function(e) {
		TweenLite.to($("#homeTrailerArrow1"), .3, {css: { marginLeft: 6 } });
		TweenLite.to($("#homeTrailerArrow2"), .3, {css: { marginRight: 4 } });
	}).mouseout(function(e) {
		TweenLite.to($("#homeTrailerArrow1"), .2, {css: { marginLeft: 0 } });	
		TweenLite.to($("#homeTrailerArrow2"), .2, {css: { marginRight: 0 } });		
	});
	
		
	if (navigator.appVersion.indexOf("Win")!=-1)
	{
		$(".gradBold").css({ "font-family": "grad-sc-osf" });
	}
		
	stepComplete();	
}

function homeOnEntered()
{
	changing = false;
}

function home_close()
{
	
	var homeObj = document.getElementById('home');
	document.getElementById('contentShell').removeChild(homeObj);

	stepComplete();	
}

function home_hide()
{
	homeEntered = false;
	/*if (homeMenuIsOpen)
	{
		homeMenuIsOpen = false;
		homeMenuOpenTL.reverse();
	}*/
	homeExitTL.restart();
}

function home_show()
{
	homeEntered = true;
	homeResizeHandle();
	homeEnterTL.restart();		
}


function homeResizeHandle (e)
{
	if (!homeEntered)
		return;
	//var windowW = Math.max(1250, Math.min($("#main").width(), 1600));
	var windowW = $("#main").width();
	var bgVisW = windowW - 200;
	bgScale = bgVisW / 1400;
	var bgW = bgScale * 1600;
	var bgH = bgScale * 894;
	var bgC = 200+bgW * .5;
	if (bgH > $("#main").height()-50)
	{
		bgH = $("#main").height()-50;
		bgW = bgH * 1600/894;
		bgScale = bgW/1400;
	}
	var scale = bgW/1600;
	var homeR = Math.max(0, (windowW - 100 - bgW) * .5);
	$("#homeBg").css({ width: bgW, height: bgH, right: homeR });
	$("#homeBgShell").css({ width: bgW, height: bgH, right: homeR });
//	$("#homeMenu").css({ left: Math.max(0, ($("#main").width()-bgW) * .38)});
	var logoT = bgH*.63;
	var logoH = Math.min(bgScale* 351*2, $("#main").height() - logoT) - 70;
	var logoW = 468 * logoH/351;
	$("#homeLogo").css({ left: 180+(windowW-180-logoW)*.5, top: logoT, width: logoW, height: logoH});
	$("#releaseDate").css({ left: 180+(windowW-180)*.5 });
	var nameScale = scale * 1.48;
	if (!simplify)
	{
		
		TweenLite.set($("#homeNames"), { css: { scale: nameScale *.5, transformOrigin: "left top", marginLeft: -994*.5 * scale, left: 50+(windowW - 50)*.5 + "px" } });
		$("#homeNames").css({ "-webkit-transform-style": "flat"});
	}
	else
	{
		TweenLite.set($("#homeName1"), { css: { width: nameScale * 154, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeName2"), { css: { width: nameScale * 119, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeName3"), { css: { width: nameScale * 85, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeName4"), { css: { width: nameScale * 80, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeName5"), { css: { width: nameScale * 101, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeName6"), { css: { width: nameScale * 154, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeName7"), { css: { width: nameScale * 88, height: nameScale * 57, transformOrigin: "left top" } });
		TweenLite.set($("#homeNames"), { css: { marginLeft: -1386*.5 * bgScale, left: 100+(windowW - 100)*.5 + "px" } });
	}
}