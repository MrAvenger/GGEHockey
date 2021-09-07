<!doctype html>
<html lang="ru">
<link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/jquery.countdown.css"> -->
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/jQuery.countdownTimer.css">
<style>
ul#example {
    list-style: none;
    margin: 50px 0;
    padding: 0;
    display: block;
    text-align: center;
    color: white;
}

ul#example li {
    display: inline-block;
}

ul#example li span {
    font-size: 80px;
    font-weight: 300;
    line-height: 80px;
}

ul#example li.seperator {
    font-size: 80px;
    line-height: 70px;
    vertical-align: top;
}

ul#example li p {
    color: #a7abb1;
    font-size: 25px;
}
</style>

<body style="background-color: #000000;">

    <!-- <div class="container-fluid">
       
        <ul id="example">
        <h4 class="text-center text-light">До начала трансляции</h4>
            <li><span class="days">00</span>
                <p class="days_text">Дней</p>
            </li>
            <li class="seperator">:</li>
            <li><span class="hours">00</span>
                <p class="hours_text">Часов</p>
            </li>
            <li class="seperator">:</li>
            <li><span class="minutes">00</span>
                <p class="minutes_text">Минут</p>
            </li>
            <li class="seperator">:</li>
            <li><span class="seconds">00</span>
                <p class="seconds_text">Секунд</p>
            </li>
        </ul>
    </div> -->
    <div class="container-fluid">
        <div class="ratio ratio-16x9">
            <iframe class="responsive-iframe" src="https://play.boomstream.com/zJQfUgI4" frameborder="0" scrolling="no"
                allowfullscreen></iframe>
        </div>

    </div>
    <script src="<?php echo base_url()?>/assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/js/jQuery.countdownTimer.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jQuery.countdownTimer-ru.js"></script>
    <!-- <script src="<?php echo base_url()?>/assets/js/tz_date.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.countdown.js"></script> -->
    <script src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script class="source" type="text/javascript">
    // var nextYear = moment.tz("2021-07-10 10:00", "Europe/Moscow");
    // $(function(){
	//     $("#example").countdowntimer({
    //         hours : 2‚
 	// 	seconds : 10‚
 	// 	size : "lg"
	//     });
	//   });
    // $('#clock').countdown(nextYear.toDate(), function(event) {
    // $(this).html(event.strftime('%D days %H:%M:%S'));
    // });
    // var now = new Date().getTime();
    // $('#example').countdown({
    //     timeZone:-6,
    //     date: '07/10/2021 10:00:00',
    //     day: 'День',
    //     days: 'Дней',
    //     hour: 'Час',
    //     hours: 'Часов',
    //     minute: 'Минут',
    //     minutes: 'Минут',
    //     second: 'Секунд',
    //     seconds: 'Секунд',
    // }, function() {
    //     alert('Трансляция начинается!');
    // });
    </script>
</body>

</html>