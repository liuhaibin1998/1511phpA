<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>日历控件Calendar</title>
<link rel="stylesheet" type="text/css" href="http://localhost/laravel-master/public/css/GooCalendar.css"/>
<script  type="text/javascript" src="http://localhost/laravel-master/public/js/jquery-1.3.2.min.js"></script>
<script  type="text/javascript" src="http://localhost/laravel-master/public/js/GooFunc.js"></script>
<script  type="text/javascript" src="http://localhost/laravel-master/public/js/GooCalendar.js"></script>
<script type="text/javascript">
var property2={
	divId:"demo2",//日历控件最外层DIV的ID
	needTime:true,//是否需要显示精确到秒的时间选择器，即输出时间中是否需要精确到小时：分：秒 默认为FALSE可不填
	yearRange:[1970,2030],//可选年份的范围,数组第一个为开始年份，第二个为结束年份,如[1970,2030],可不填
	week:['日','一','二','三','四','五','六'],//数组，设定了周日至周六的显示格式,可不填
	month:['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],//数组，设定了12个月份的显示格式,可不填
	format:"yyyy-MM-dd hh:mm:ss"
	/*设定日期的输出格式,可不填*/
};
//var property={
//	divId:"demo",
//	needTime:true,
//	fixid:"fff"
//	/*决定了日历的显示方式，默认不填时为点击INPUT后出现，但如果填了此项，日历控件将始终显示在一个id为其值（如"fff"）的DIV中（且此DIV必须存在）*/
//};
$(document).ready(function(){
//	canva1=$.createGooCalendar("calen",property);
	canva2=$.createGooCalendar("calen2",property2);
	//canva2.setDate({year:2008,month:11,day:22,hour:14,minute:52,second:45});
});
</script>
<body>
<br/>
<!--<input type="text" value="" id="calen"/>
<input type="text" value="" onKeyUp="value=value.replace(/\D{2}[0-2][0-3]/g,'')"/>
--><input type="text" value="" id="calen2"/>

<!--<div id="fff" style="width:600px; height:400px;"></div>-->
</body>
</html>
