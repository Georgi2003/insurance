$(document).ready(function(){
	$("#monthStat").hide();
	$("#personStat").hide();
	$("#statisticsTable").hide();

  $("#statisticsTable").click(function(){
    $("#statistics").show();
    $("#monthStat").hide();
    $("#personStat").hide();
    $("input").show();
    $("#statisticsTable").hide();
    $(".dropbtn").show();
  });

  $("#monthStatistics").click(function(){
    $("#monthStat").show();
    $("#personStat").hide();
    $("#statistics").hide();
    $("input").hide();
    $(".dropbtn").hide();
    $("#statisticsTable").show();
  });

  $("#personStatistics").click(function(){
  	$("#monthStat").hide();
    $("#personStat").show();
    $("#statistics").hide();
    $("input").hide();
    $(".dropbtn").hide();
    $("#statisticsTable").show();
  });
});