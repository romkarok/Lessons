<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            max-width: 1080px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .flex {
            display: flex;
        }

        .list {
            max-width: 40%;
            margin: 30px auto;
            list-style: none;
            padding-left: 0;
            border: 1px #f5f5f5 solid;
        }

        .list li {
            padding: 10px;
        }

        .list li span {
            width: 50%;
        }

        .list li:nth-child(even) {
            text-align: right;
            background-color: #f5f5f5;
        }

        .list li:nth-child(odd) {
        }
    </style>
</head>
<body class="container">
<h1>City game</h1>
<form class="flex" action="form.php" method="POST">
    <label>
        Введите город
        <input type="text" name="City" class="input" minlength="1" placeholder="Kharkov">
    </label>
    <button class="button" name="submit_button" type="submit">
        Send
    </button>
</form>
<ol class="list">
  <?php
  include 'city.php';
  $b = new Cities();
  $b->add_city_to_list();
  $a = new Cities();
  $a->get_city_list();
  ?>

</ol>
</body>
</html>