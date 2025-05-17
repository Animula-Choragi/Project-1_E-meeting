<?php

$result = $conn->query("SELECT * FROM meetings");
$events = [];

while ($row = $result->fetch_assoc()) {
  $events[] = [
    'title' => $row['title'],
    'start' => $row['start_date'],
    'end' => $row['end_date'],
    'url' => 'meeting_detail.php?id=' . $row['id']
  ];
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
  <style>

    :root {
      /* event */
      --fc-event-bg-color: #456789;
      --fc-event-border-color: #456789;
      --fc-event-text-color: #fff;

      --fc-today-bg-color: #D6E0DB;
      --fc-border-color: #E0E0D0;

      /* headertoolbar  */
      --fc-button-text-color: white; 
      --fc-button-bg-color: #2c3e50;
      --fc-button-border-color: #2c3e50;
      --fc-button-hover-bg-color: #1e2b37;
      --fc-button-hover-border-color: #1a252f;
      --fc-button-active-bg-color: #1a252f;
      --fc-button-active-border-color: #151e27;
    }

    section {
      padding: 30px;
      justify-content: center;
      align-items: center;
    }

    section h2 {
      text-align: center;
      font-family: "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
    }

    #calendar {
      font-family: arial, sans-serif;
      margin: 20px;
    }

    thead tr{
      /* background-color: #86A397; */
      background-color: #2a5d84;
      color: #FFFFFF;
    }

    tbody {
      color: #000;
      background-color: #FFFFFF;
    }

    a.fc-event, a.fc-event:hover  {
      color: #456789;
    }
  
  </style>

  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.min.js"></script>

  <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'Asia/Jakarta',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
        events: <?= json_encode($events) ?>
      });

      calendar.render();
    });

  </script>
</head>
<body>
  <section>
   <h2>Calendar e-Meeting</h2> <br /> <br />

    <div id="calendar"></div>
  </section>

</body>
</html>