timerID = 0;

function sChipHelp(divID,x,y,mID) //チップヘルプを表示する関数 
{
	var setX = 201;
	var setY = 2;
	var offX = offY = 0; //初期値
	if (document.layers) chipOBJ = document.layers[divID]; //NN4対応
	if (document.all) chipOBJ = document.all[divID].style; //IE4対応
	if (document.getElementById) //DOM対応
	{
		chipOBJ = AD_findObj(divID);
	}
	
	//MacIE Only
	if ((navigator.appVersion.indexOf("MSIE") != -1) && (navigator.appVersion.indexOf('Mac') != -1))
	{
		setY = -14;
	}
	
	//IE6用 MACも
	if(document.all){
		mID2=AD_findObj(mID);
		offX = moveXbySlicePos (setX, mID2);
		offY = moveYbySlicePos (setY, mID2);
	}
	//NN7 or NN6 or
	else if(document.getElementById){
		mID2=AD_findObj(mID);
		offX = mID2.x + setX;
		offY = mID2.y + setY;
	}
	
	chipOBJ.style.visibility = "visible"; //チップヘルプ表示
	chipOBJ.style.left = offX + 'px';
	chipOBJ.style.top = offY + 'px';
} 

function hChipHelp(divID) //チップヘルプを非表示にする関数
{
	if (document.layers) chipOBJ = document.layers[divID];
	if (document.all) chipOBJ = document.all[divID].style;
	if (document.getElementById) chipOBJ = document.getElementById(divID).style;
	chipOBJ.visibility = "hidden"; //チップヘルプ非表示	
	clearTimeout(timerID); //タイマーを解除 
}

function moveXbySlicePos (x, img) { 
	if (!document.layers) {
		var onWindows = navigator.platform ? navigator.platform == "Win32" : false;
		var macIE45 = document.all && !onWindows && getExplorerVersion() == 4.5;
		var par = img;
		var lastOffset = 0;
		while(par){
			if( par.leftMargin && ! onWindows ) x += parseInt(par.leftMargin);
			if( (par.offsetLeft != lastOffset) && par.offsetLeft ) x += parseInt(par.offsetLeft);
			if( par.offsetLeft != 0 ) lastOffset = par.offsetLeft;
			par = macIE45 ? par.parentElement : par.offsetParent;
		}
	} else if (img.x) x += img.x;
	return x;
}

function moveYbySlicePos (y, img) {
	if(!document.layers) {
		var onWindows = navigator.platform ? navigator.platform == "Win32" : false;
		var macIE45 = document.all && !onWindows && getExplorerVersion() == 4.5;
		var par = img;
		var lastOffset = 0;
		while(par){
			if( par.topMargin && !onWindows ) y += parseInt(par.topMargin);
			if( (par.offsetTop != lastOffset) && par.offsetTop ) y += parseInt(par.offsetTop);
			if( par.offsetTop != 0 ) lastOffset = par.offsetTop;
			par = macIE45 ? par.parentElement : par.offsetParent;
		}		
	} else if (img.y >= 0) y += img.y;
	return y;
}

function AD_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=AD_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function getExplorerVersion() {
	var ieVers = parseFloat(navigator.appVersion);
	if( navigator.appName != 'Microsoft Internet Explorer' ) return ieVers;
	var tempVers = navigator.appVersion;
	var i = tempVers.indexOf( 'MSIE ' );
	if( i >= 0 ) {
		tempVers = tempVers.substring( i+5 );
		ieVers = parseFloat( tempVers ); 
	}
	return ieVers;
}
