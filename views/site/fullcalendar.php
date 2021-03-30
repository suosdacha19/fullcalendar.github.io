<?php



?>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <link href='assets/lib/main.css' rel='stylesheet' />
        <script src='assets/lib/main.js'></script>
        <script language="JavaScript">
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    selectable: true,
                    selectMirror: true,
                    dateClick: function() {
                        alert('Un dia fue seleccionado!');
                    }
                });
                calendar.render();
            });
        </script>
    </head>
    <body>
        <div id='calendar'></div>
    </body>
</html>