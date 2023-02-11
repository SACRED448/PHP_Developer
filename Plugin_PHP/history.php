<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles.css">
    <title>История введённых данных</title>
</head>
<body>
<h1>История введённых данных:</h1>

<script>
    function clearPage () { //Очиска истории, но только в реалтайме
        const div = document.querySelector('div');
        const parent = div.parentNode;
        parent.removeChild(div);
    }
</script>

<input value = "Очистить историю" class="button_remove" onclick="clearPage()" type="button">

</body>