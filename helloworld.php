<html>
  <!-- [START csslink] -->
  <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>
  </head>
  <!-- [END csslink] -->
  <body>

<!-- Trigger -->
<button class="btn" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
    Copy to clipboard
</button>

    <?php

    $date1 = new DateTime("2017-01-15");
    $date2 = new DateTime("2017-01-15");

    ##### 得出 2015-05-12 往後 10 天的日期
    $date1->add(new DateInterval('P14D'));
    $date2->add(new DateInterval('P18D'));


    $dateRngStr = $date1->format('Y-m-d')."~".$date2->format('Y-m-d');
    echo htmlspecialchars("謝謝你！製作完成後將會收到通知。14-18日後會寄出 ()謝謝你！製作完成後將會收到通知。14-18日後會寄出 (". $dateRngStr .")");



    // [START formprocessing]
    if (array_key_exists('content', $_POST)) {
        echo "You wrote:<pre>\n";
        echo htmlspecialchars("謝謝你！製作完成後將會收到通知。14-18日後會寄出 ()謝謝你！製作完成後將會收到通知。14-18日後會寄出 (". $dateRngStr .")");
        echo "\n</pre>";
    }
    // [END formprocessing]
    ?>
    <form action="/sign" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>
