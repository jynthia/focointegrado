$(document).ready(function(){"use strict";var e=$("body");$(function(){$(".preloader").fadeOut(),$("#side-menu").metisMenu()}),$(".open-close").on("click",function(){e.toggleClass("show-sidebar").toggleClass("hide-sidebar"),$(".sidebar-head .open-close i").toggleClass("ti-menu")}),$(function(){var a=function(){var a=60,i=window.innerWidth>0?window.innerWidth:this.screen.width,n=(window.innerHeight>0?window.innerHeight:this.screen.height)-1;768>i?($("div.navbar-collapse").addClass("collapse"),a=100):$("div.navbar-collapse").removeClass("collapse"),1170>i?(e.addClass("content-wrapper"),$(".sidebar-nav, .slimScrollDiv").css("overflow-x","visible").parent().css("overflow","visible")):e.removeClass("content-wrapper"),1>(n-=a)&&(n=1),n>a&&$("#page-wrapper").css("min-height",n+"px")},i=window.location,n=$("ul.nav a").filter(function(){return this.href===i||0===i.href.indexOf(this.href)}).addClass("active").parent().parent().addClass("in").parent();n.is("li")&&n.addClass("active"),$(window).ready(a),$(window).bind("resize",a)}),$(function(){$('[data-toggle="tooltip"]').tooltip()}),$(function(){$('[data-toggle="popover"]').popover()}),$(".list-task li label").on("click",function(){$(this).toggleClass("task-done")}),$(".settings_box a").on("click",function(){$("ul.theme_color").toggleClass("theme_block")}),$(".collapseble").on("click",function(){$(".collapseblebox").fadeToggle(350)}),$(".slimscrollright").slimScroll({height:"100%",position:"right",size:"5px",color:"#dcdcdc"}),$(".slimscrollsidebar").slimScroll({height:"100%",position:"right",size:"6px",color:"rgba(0,0,0,0.3)"}),$(".chat-list").slimScroll({height:"100%",position:"right",size:"0px",color:"#dcdcdc"}),e.trigger("resize"),$(".visited li a").on("click",function(e){$(".visited li").removeClass("active");var a=$(this).parent();a.hasClass("active")||a.addClass("active"),e.preventDefault()}),$("#to-recover").on("click",function(){$("#loginform").slideUp(),$("#recoverform").fadeIn()}),$(".navbar-toggle").on("click",function(){$(".navbar-toggle i").toggleClass("ti-menu").addClass("ti-close")})}),$(document).ready(function(){"use strict";new Chartist.Line("#cms-treino",{labels:["12/03","11/03","10/03","09/03","08/03","07/03","04/03","02/03"],series:[[5,2,7,4,5,3,5,4]]},{top:0,low:1,showPoint:!0,fullWidth:!0,plugins:[Chartist.plugins.tooltip()],axisY:{labelInterpolationFnc:function(e){return e/1}},showArea:!0}),$(".counter").counterUp({delay:100,time:1200});var e,a=function(){$("#sparklinedash").sparkline([0,5,6,10,9,12,4,9],{type:"bar",height:"30",barWidth:"4",resize:!0,barSpacing:"5",barColor:"#7ace4c"}),$("#sparklinedash2").sparkline([0,5,6,10,9,12,4,9],{type:"bar",height:"30",barWidth:"4",resize:!0,barSpacing:"5",barColor:"#7460ee"}),$("#sparklinedash3").sparkline([0,5,6,10,9,12,4,9],{type:"bar",height:"30",barWidth:"4",resize:!0,barSpacing:"5",barColor:"#11a0f8"}),$("#sparklinedash4").sparkline([0,5,6,10,9,12,4,9],{type:"bar",height:"30",barWidth:"4",resize:!0,barSpacing:"5",barColor:"#f33155"})};$(window).on("resize",function(i){clearTimeout(e),e=setTimeout(a,500)}),a()}),$(document).ready(function(){$("#add-semana").click(function(e){e.preventDefault();var a=$("#adicionaPlan").find("input[name^='data[semana]']").length;12===a&&alert("Máximo de 12 semanas!");var i="<div class='semana'>"+('<label for="data[semana]['+a+']">Semana '+(a+1)+"</label> ")+('<input type="text" name="data[semana]['+a+']" id="data[semana]['+a+']" />')+'<button class="remove-semana">Remover</button></div>';$("#adicionaPlan").find("#add-semana").before(i)})}),$(document).on("click",".remove-semana",function(e){e.preventDefault(),$(this).parents(".semana").remove(),$("#adicionaPLan").find("label[for^='data[semana]']").each(function(){$(this).html("Semana "+($(this).parents(".semana").index()+1))})});
