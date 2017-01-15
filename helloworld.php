<html>
  <!-- [START csslink] -->
  <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
    <link rel="apple-touch-icon" href="https://instagram.fhkg1-1.fna.fbcdn.net/t51.2885-19/s320x320/12724935_1037070149698001_2086130098_a.jpg" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>
    <script>
        new Clipboard('.btn');
    </script>

  </head>
  <!-- [END csslink] -->
  <body>
    <?php

    $date1 = new DateTime("2017-01-15");
    $date2 = new DateTime("2017-01-15");

    $date1->add(new DateInterval('P14D'));
    $date2->add(new DateInterval('P18D'));

    $dateRngStr = $date1->format('Y-m-d')." 至 ".$date2->format('Y-m-d');
    $msg = "謝謝你！製作完成後將會收到通知。<br />14-18日後會寄出 (". $dateRngStr .")";

    echo $msg;
    ?>
        <br />

        <textarea id="bar">
        <?php echo $msg; ?>
        </textarea>

        <!-- Trigger -->
        <button class="btn" data-clipboard-action="cut" data-clipboard-target="#bar">
         Cut to clipboard
        </button>
    </body>
</html>
