<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/template.css" />
    <title>Agenda</title>

    <style>
        .calendar {
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php include "templates/header.php";?>
    <div class="calendar">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FParis&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZnIuZnJlbmNoI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZXE2OTNvOGo5OTZtc2NrZHN0bjl2aDNhazdkNGw5anVAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%2333B679&amp;color=%230B8043&amp;color=%238E24AA&amp;showTz=0&amp;showPrint=0&amp;mode=WEEK&amp;showTitle=0&amp;showTabs=1" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <?php include "templates/footer.html";?>
</body>
