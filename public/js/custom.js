$(function() {
    $('.button-collapse').sideNav();
    $('.modal-trigger').leanModal();
    $('.collapsible').collapsible();



    $("input[name='slide-name']").click(function() {
     if ($("#slide-radio-1").is(":checked")) {
       $("#slide-div-1").show();
       $("#slide-div-2").hide();
       $("#slide-div-3").hide();
     }
     if ($("#slide-radio-2").is(":checked")) {
       $("#slide-div-1").hide();
       $("#slide-div-2").show();
       $("#slide-div-3").hide();
     }
     if ($("#slide-radio-3").is(":checked")) {
       $("#slide-div-1").hide();
       $("#slide-div-2").hide();
       $("#slide-div-3").show();
     }
   });
});



    // tinymce.init({
    //     selector: "textarea",
    //     toolbar_items_size: 'small',
    //     theme: "modern",
    //     menubar:false
        

    // });
    


/* Slide Information */
(function($){
  $(function(){
    $("#info_splash div:gt(0)").hide();
    setInterval(function(){
        
        $("#info_splash div:first")
            .slideUp(1000)
            .next()
            .slideDown(1000,function(){
                easing: 'swing'
            })
            .end()
            .appendTo("#info_splash");
        
        },3000);
    }); // end of document ready
})(jQuery);

/* Slide Kalender*/
// Call this from the developer console and you can control both instances
// 
var clndr = {};

$(document).ready( function() {

  // PARDON ME while I do a little magic to keep these events relevant for the rest of time...
  var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');
  var thisMonth = moment().format('YYYY-MM');
  
  var eventArray = [
        {
            endDate: thisMonth + '-29',
            startDate: thisMonth + '-27',
            eventColor: '#ccc',
            title: 'Multi-Day Event',
            link: 'a'
        }, {
            endDate: thisMonth + '-23',
            startDate: thisMonth + '-21',
            eventColor: '#ccc',
            title: 'Another Multi-Day Event',
            link: 'b'
        }, {
            date: thisMonth + '-27',
            eventColor: '#ccc',
            title: 'Single Day Event',
            link: 'c'
        }
    ];

 /* var events = [
    { date: currentMonth + '-' + '10', title: 'Persian Kitten Auction', location: 'https://www.google.com' },
    { date: currentMonth + '-' + '19', title: 'Cat Frisbee', location: 'Jefferson Park' },
    { date: currentMonth + '-' + '23', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
    { date: nextMonth + '-' + '07',    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
  ];*/


  clndr = $('#mini-clndr').clndr({
    template: $('#mini-clndr-template').html(),
    daysOfTheWeek: ['M', 'S', 'S', 'R', 'K', 'J', 'S'],
    events: eventArray,
    forceSixRows: true,
    clickEvents: {
      click: function(target) {
        console.log(target.events);
        if(target.events.length) {
          var daysContainer = $('#mini-clndr').find('.days-container');
          daysContainer.toggleClass('show-events', true);
          $('#mini-clndr').find('.x-button').click( function() {
            daysContainer.toggleClass('show-events', false);
          });
        }
      }
    },
    multiDayEvents: {
            singleDay: 'date',
            endDate: 'endDate',
            startDate: 'startDate'
        },
    adjacentDaysChangeMonth: true,
    forceSixRows: true
  });

});


/*
 *===Chart Google
 *
*/

$(function(){
  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', ''],
          ['SMT1',  60],
          ['SMT2',  100],
          ['MST3',  60],
          ['MST3',  50],
          ['MST3',  0],
          ['2016',  80]
        ]);

        var options = {
          title: 'Nilai',
          hAxis: {title: 'Semester',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
});


$(function() {
    var luas = $('.step-slider').width();
    var m = $('.step-slider .step-slider-item');
    var active = $('.step-slider-item.active');
   
    var pembagian = ( luas/m.length);
       
    $('.step-slider-item').css({'width':pembagian,'opacity': 1 });
    $('.off-learning').html('of '+ m.length);
    $('.now-learning').html(active.length);
    
    
    $('.value-lesson').click(function() {
        $($this).next().toggle('slow');

    });
    
    $('.active.custom-next').click(function(){
        var s = $('.step-slider-item.active');
        $('.now-learning').html(s.length+1);
    });
    
    
    
});

