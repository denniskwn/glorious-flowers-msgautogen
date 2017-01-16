<html>

  <head>
    <title>Msg Gen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
    <link rel="apple-touch-icon" href="https://instagram.fhkg1-1.fna.fbcdn.net/t51.2885-19/s320x320/12724935_1037070149698001_2086130098_a.jpg" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>
  </head>

  <body>
  <h1>After-paid Message Generator</h1>
    <?php
    //$date1 = new DateTime("2017-01-15");
    //$date2 = new DateTime("2017-01-15");

date_default_timezone_set('Asia/Hong_Kong');
    $date1 = new DateTime();
    $date2 = new DateTime();

    $date1->add(new DateInterval('P14D'));
    $date2->add(new DateInterval('P18D'));

    $dateRngStr = $date1->format('Y-m-d')." 至 ".$date2->format('Y-m-d');
    $msg = "謝謝你！製作完成後將會收到通知。14-18日後會寄出 (即". $dateRngStr .")";

    echo $msg;
    ?>
        <br />

        <textarea id="bar"><?php echo $msg; ?></textarea>

        <!-- Trigger -->
        <button class="btn" data-clipboard-action="cut" data-clipboard-target="#bar">
         Cut to clipboard
        </button>

        <script>
            new Clipboard('.btn');
        </script>
    </body>
</html>
