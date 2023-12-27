<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/common.php'?>
<?php include 'noticeboard_include/list_noticeboard.php'?>
<header>
<style>

  #calendar {
    /*max-width: 1100px;*/
    margin: 0 auto;
  }
  .fc-event{
    background-color:green;
    color:white;
  }
</style>
</header>
<?php include 'templates/navbar.php' ?>
<script src="js/index.global.js"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: '100%',
      expandRows: true,
      slotMinTime: '08:00',
      slotMaxTime: '20:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'dayGridMonth',
      //initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        <?php foreach($result_list_notice_board as $row):?>
          {
          title: '<?php echo escape($row['noticeboard_headline']);?>',
          start: '<?php echo escape($row['noticeboard_from_date']);?>T<?php echo escape($row['noticeboard_from_time']);?>:00',
          end: '<?php echo escape($row['noticeboard_to_date']);?>T<?php echo escape($row['noticeboard_to_time']);?>:00'
          },
        <?php endforeach?>
      ]
    });

    calendar.render();
  });

</script>
    <!--Container Main start-->
    <div class="height-100">
        <h4>Calendar</h4>
        <div id='calendar'></div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<script src="js/calendar.js"></script>
<?php include 'templates/dashboard_footer.php' ?>