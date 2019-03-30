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

 $(document).ready(function(){
     $("#add-semana").click(function(e){
         e.preventDefault();
         var numberOfSemanas = $("#adicionaPlan").find("input[name^='data[semana]']").length;
         numberOfSemanas === 12 ? alert('Máximo de 12 semanas!') : '';
         var label = '<label for="data[semana][' + numberOfSemanas + ']">Semana ' + (numberOfSemanas + 1) + '</label> ';
         var input = '<input type="text" name="data[semana][' + numberOfSemanas + ']" id="data[semana][' + numberOfSemanas + ']" />';
         var removeButton = '<button class="remove-semana">Remover</button>';
         var html = "<div class='semana'>" + label + input + removeButton + "</div>";
         $("#adicionaPlan").find("#add-semana").before(html);
     });
 });

 $(document).on("click", ".remove-semana",function(e){
     e.preventDefault();
     $(this).parents(".semana").remove();
     //update labels
     $("#adicionaPLan").find("label[for^='data[semana]']").each(function(){
         $(this).html("Semana " + ($(this).parents('.semana').index() + 1));
     });
 });
