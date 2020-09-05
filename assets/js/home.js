// JavaScript source code
$(document).ready(function () {     
    //
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        //defaultDate: '2014-06-12',
        defaultView: 'agendaWeek',
        editable: false,
        events: [
            {
                title: 'All Day Event',
                start: '2014-06-01'
            }
        ]
    });
    //
    $('.date1').datetimepicker({
        "allowInputToggle": true,
        "format": "MM/DD/YYYY",
    });
    $('.date2').datetimepicker({
        "allowInputToggle": true,
        "format": "MM/DD/YYYY",
    });
});
