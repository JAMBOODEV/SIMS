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





/* Slide Information */
(function($){
  $(function(){
    $("#info_splash div:gt(0)").hide();
    setInterval(function(){
        
        $("#info_splash div:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo("#info_splash");
        
        },3000);
    }); // end of document ready
})(jQuery);

/* Slide Kalender*/
// Call this from the developer console and you can control both instances
var calendars = {};

$(document).ready( function() {
    console.info(
        'Welcome to the CLNDR demo. Click around on the calendars and' +
        'the console will log different events that fire.');

    // Assuming you've got the appropriate language files,
    // clndr will respect whatever moment's language is set to.
    // moment.locale('ru');

    // Here's some magic to make sure the dates are happening this month.
    var thisMonth = moment().format('YYYY-MM');
    // Events to load into calendar
    var eventArray = [
        {
            title: 'Multi-Day Event',
            endDate: thisMonth + '-14',
            startDate: thisMonth + '-10'
        }, {
            endDate: thisMonth + '-23',
            startDate: thisMonth + '-21',
            title: 'Another Multi-Day Event'
        }, {
            date: thisMonth + '-27',
            title: 'Single Day Event'
        }
    ];

    // The order of the click handlers is predictable. Direct click action
    // callbacks come first: click, nextMonth, previousMonth, nextYear,
    // previousYear, nextInterval, previousInterval, or today. Then
    // onMonthChange (if the month changed), inIntervalChange if the interval
    // has changed, and finally onYearChange (if the year changed).
    calendars.clndr1 = $('.cal1').clndr({
        events: eventArray,
        clickEvents: {
            click: function (target) {
                console.log('Cal-1 clicked: ', target);
            },
            today: function () {
                console.log('Cal-1 today');
            },
            nextMonth: function () {
                console.log('Cal-1 next month');
            },
            previousMonth: function () {
                console.log('Cal-1 previous month');
            },
            onMonthChange: function () {
                console.log('Cal-1 month changed');
            },
            nextYear: function () {
                console.log('Cal-1 next year');
            },
            previousYear: function () {
                console.log('Cal-1 previous year');
            },
            onYearChange: function () {
                console.log('Cal-1 year changed');
            },
            nextInterval: function () {
                console.log('Cal-1 next interval');
            },
            previousInterval: function () {
                console.log('Cal-1 previous interval');
            },
            onIntervalChange: function () {
                console.log('Cal-1 interval changed');
            }
        },
        multiDayEvents: {
            singleDay: 'date',
            endDate: 'endDate',
            startDate: 'startDate'
        },
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: false
    });

    // Bind all clndrs to the left and right arrow keys
    $(document).keydown( function(e) {
        // Left arrow
        if (e.keyCode == 37) {
            calendars.clndr1.back();
            calendars.clndr2.back();
            calendars.clndr3.back();
        }

        // Right arrow
        if (e.keyCode == 39) {
            calendars.clndr1.forward();
            calendars.clndr2.forward();
            calendars.clndr3.forward();
        }
    });
});


var data = {
  datasets: [{
            label: 'Scatter Dataset',
            data: [{
                x: 1,
                y: 80
            }, {
                x: 2,
                y: 80
            }, {
                x: 3,
                y: 70
            }]
        }]
}
/*Statistik with chart.js*/
var cv = $("#statistik").get(0).getContext("2d");
    var myLineChart = new Chart(statistik, {
    type: 'line',
    data: data,
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        },
        pointHoverBackgroundColor: "rgba(75,192,220,1)",
    }
});

