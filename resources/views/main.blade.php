<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Тест</title>
    <link rel="stylesheet" href="/css/app.css" />
    <script type="text/javascript" src="/js/script.js">
    </script>
</head>
<body>
    <div id="main">
        <form name="form" action="{{route('response')}}" method="post">
          @csrf
            <input onclick="this.value='+79'"  name="number" id="number"
            placeholder="+7 ___ ___ ____" title="+7-9xx-xxx-xx-xx"
            onkeyup="this.value = this.value.replace(/[^\d]/g,'');"
            required maxlength="11" pattern="79\d{9}"/>
            <br /> <br />
            <input id="button" type="submit" value="Отправить заявку"/>
        </form>
    </div>
</body>
</html>
