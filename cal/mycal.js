/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function() {


    /* initialize the external events
     -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* initialize the calendar
     -----------------------------------------------------------------*/

    $('#calendar').fullCalendar({
        header: {
            left: '',
            center: 'title',
            right: 'prev,next'
        },


        weekends: false,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        },
        dayClick: function(date, allDay, jsEvent, view) {
            var eo = {
                title: 'C',
                allDay: true,
                start: date
            }
            $('#calendar').fullCalendar('renderEvent', eo, true);
        },

        eventSources: [
            {
                url: 'https://www.google.com/calendar/feeds/2gbj1in54n5qblravii82qhti4%40group.calendar.google.com/public/basic',
                className: 'eclipselink-event'
            },
                       {
                url: 'http://www.google.com/calendar/feeds/gchs7nm4nvpm837469ddj9tjlk%40group.calendar.google.com/public/basic',
                className: 'planning-event'
            },
                       {
                url: 'http://www.google.com/calendar/feeds/fhqvmfmj74mveaq07gi6n1npqg%40group.calendar.google.com/public/basic',
                className: 'rt-event'
            }
 
        ]

    });


});

