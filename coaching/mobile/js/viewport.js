(function()
{
	var sw = screen.width;
	var sh = screen.height;
	var tg = document.getElementById('viewport');
	if(sw < 321 || sh < 641)
	{
		tg.content =  tg.content.replace(/(initial-scale=)(1)/, '$1'+'.5');
	}
	else if(navigator.userAgent.match(/Android/))
	{
		tg.content =  tg.content.replace(/(initial-scale=)(1)/, '$1'+'.9');
	}
})();

//(function()
//{
//	var sw = screen.width;
//	var sh = screen.height;
//	if(sw < 321 || sh < 641)
//	{
//		var t = document.getElementById('viewport');
//		t.content = t.content.replace(/(initial-scale=)(1)/, '$1'+'.5');
//	}
//})();
