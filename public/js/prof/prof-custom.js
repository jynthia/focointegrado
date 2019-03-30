$(document).ready(function(){"use strict";var e=$("body");$(function(){$(".preloader").fadeOut(),$("#side-menu").metisMenu()}),$(".open-close").on("click",function(){e.toggleClass("show-sidebar").toggleClass("hide-sidebar"),$(".sidebar-head .open-close i").toggleClass("ti-menu")}),$(function(){var i=function(){var i=60,o=window.innerWidth>0?window.innerWidth:this.screen.width,l=(window.innerHeight>0?window.innerHeight:this.screen.height)-1;768>o?($("div.navbar-collapse").addClass("collapse"),i=100):$("div.navbar-collapse").removeClass("collapse"),1170>o?(e.addClass("content-wrapper"),$(".sidebar-nav, .slimScrollDiv").css("overflow-x","visible").parent().css("overflow","visible")):e.removeClass("content-wrapper"),l-=i,1>l&&(l=1),l>i&&$("#page-wrapper").css("min-height",l+"px")},o=window.location,l=$("ul.nav a").filter(function(){return this.href===o||0===o.href.indexOf(this.href)}).addClass("active").parent().parent().addClass("in").parent();l.is("li")&&l.addClass("active"),$(window).ready(i),$(window).bind("resize",i)}),$(function(){$('[data-toggle="tooltip"]').tooltip()}),$(function(){$('[data-toggle="popover"]').popover()}),$(".list-task li label").on("click",function(){$(this).toggleClass("task-done")}),$(".settings_box a").on("click",function(){$("ul.theme_color").toggleClass("theme_block")}),$(".collapseble").on("click",function(){$(".collapseblebox").fadeToggle(350)}),$(".slimscrollright").slimScroll({height:"100%",position:"right",size:"5px",color:"#dcdcdc"}),$(".slimscrollsidebar").slimScroll({height:"100%",position:"right",size:"6px",color:"rgba(0,0,0,0.3)"}),$(".chat-list").slimScroll({height:"100%",position:"right",size:"0px",color:"#dcdcdc"}),e.trigger("resize"),$(".visited li a").on("click",function(e){$(".visited li").removeClass("active");var i=$(this).parent();i.hasClass("active")||i.addClass("active"),e.preventDefault()}),$("#to-recover").on("click",function(){$("#loginform").slideUp(),$("#recoverform").fadeIn()}),$(".navbar-toggle").on("click",function(){$(".navbar-toggle i").toggleClass("ti-menu").addClass("ti-close")})});
 $(document).ready(function () {
     "use strict";



     //ct-visits
     new Chartist.Line('#cms-treino', {
         labels: ['12/03', '11/03', '10/03', '09/03', '08/03', '07/03', '04/03', '02/03'],
         series: [
    [5, 2, 7, 4, 5, 3, 5, 4]
  ]
     }, {
         top: 0,
         low: 1,
         showPoint: true,
         fullWidth: true,
         plugins: [
    Chartist.plugins.tooltip()
  ],
         axisY: {
             labelInterpolationFnc: function (value) {
                 return (value / 1);
             }
         },
         showArea: true
     });
     // counter
     $(".counter").counterUp({
         delay: 100,
         time: 1200
     });

     var sparklineLogin = function () {
         $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#7ace4c'
         });
         $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#7460ee'
         });
         $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#11a0f8'
         });
         $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
             type: 'bar',
             height: '30',
             barWidth: '4',
             resize: true,
             barSpacing: '5',
             barColor: '#f33155'
         });
     }
     var sparkResize;
     $(window).on("resize", function (e) {
         clearTimeout(sparkResize);
         sparkResize = setTimeout(sparklineLogin, 500);
     });
     sparklineLogin();
 });
