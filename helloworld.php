<html>
  <!-- [START csslink] -->
  <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
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
    echo htmlspecialchars("謝謝你！製作完成後將會收到通知。14-18日後會寄出 ()謝謝你！製作完成後將會收到通知。<br />14-18日後會寄出 (".
    $dateRngStr .")");

    ?>

    <!-- Trigger -->
    <button class="btn" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
        Copy to clipboard
    </button>
  </body>
</html>
