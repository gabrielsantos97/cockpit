<html class="app-page-500-debug">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Internal Server Error</title>
    <style type="text/css">

    * { box-sizing: border-box; }

    html, body {background-color: #fafafa; }

    body {
        font-family: "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: normal;
        text-transform: normal;
        letter-spacing: normal;
        line-height: 1.4em;
        color:black;
        padding-top: 40px;
    }

    h1 { font-size:44px;letter-spacing: -2px;line-height: 1em;margin:0; }
    h2 { font-size:22px;font-weight:normal;color:#DA4453; }
    h3 { font-weight:bold;font-size:11pt}
    p  { margin-top: 5px 0px;}

    .wrapper{
        width: 95%;
        max-width: 940px;
        margin: 20px auto;
    }

    .content {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 30px 75px 0 rgba(10, 25, 41, 0.2);
        border-radius: 3px;
        margin-top: 40px;
    }

    .code {
        color: #fff;
        background-color: #000;
        padding: 10px;
        font-size: 12px;
        border-radius: 4px;
        margin-top: 20px;
    }

    .code ol { overflow-x: scroll; }

    .code li.selected {
        background: #333;
        color: yellow;
    }

    .version {
        margin-top: 10px;
        color: gray;
        font-size: 12px;
    }
    </style>
</head>
<body>

    <div class="wrapper">
        <h1>Oh no! Something went terribly wrong:</h1>
        <h2><?=nl2br($error['message']);?></h2>
    </div>
    <div class="wrapper content">

            <span><?=str_replace($this['docs_root'], '', $error['file']);?></span>

            <div class="code">
<pre><?php

    $file   = file($error['file']);
    $offset = 6;
    $line   = $error['line'] -1 ;
    $start  = isset($file[$line-1]) ? $line-1 : $line;
    $end    = $line + $offset;

    if ($start != $line) {

        $i = $offset;

        while (true) {
            if (isset($file[($start-1)])) $start -= 1;
            if ($line - $start > $offset) break;
        }
    }
?><ol start="<?=($start+1)?>"><?php

    for ($i=$start;$i<$line;$i++) {
        if (isset($file[$i])) {
            echo '<li>'.htmlentities($file[$i]).'</li>';
        }
    }

    echo '<li class="selected">'.htmlentities($file[$line]).'</li>';

    for ($i=$error['line'];$i<$end;$i++) {
        if (isset($file[$i])) {
            echo '<li>'.htmlentities($file[$i]).'</li>';
        }
    }
?></ol></pre>
            </div>

        <div class="version">
            System message generated by Cockpit debug
        </div>
    </div>
</body>
</html>