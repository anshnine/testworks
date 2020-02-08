<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UserInfo</title>
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<div class="main">
    <div class="leftmenu">
        <div class="leftmenu_logo">
            <span>Добавить пользователя в базу данных</span>
        </div>

        <form action="add.php" method="post">
            <div class="block"><span class="description">Фамилия:</span> <span><input type="text"
                                                                                      class="inputinfo" name="surname"
                                                                                      id="surname"></span></div>
            <div class="block"><span class="description">Имя:</span> <span><input type="text" class="inputinfo"
                                                                                  name="name" id="name"></span>
            </div>
            <div class="block"><span class="description">Отчество:</span> <span><input type="text"
                                                                                       class="inputinfo"
                                                                                       name="second_name"
                                                                                       id="second_name"></span>
            </div>
            <div class="block"><span class="description">Возраст: </span> <span><input type="text"
                                                                                       class="inputinfo" name="age"
                                                                                       id="age"></span>
            </div>
            <div class="block"><span class="description">Пароль</span> <span><input type="password"
                                                                                    class="inputinfo" name="password"
                                                                                    id="password"></span>
            </div>
            <div class="block"><span class="description">Почта:</span> <span><input type="text"
                                                                                    class="inputinfo" name="email"
                                                                                    id="email"></span>
            </div>
            <div class="block"><span class="description">Телефон:</span> <span><input type="text"
                                                                                      class="inputinfo" name="phone"
                                                                                      id="phone"></span>
            </div>
            <button class="leftmenu_button" id="leftmenu_button" type="submit">Добавить</button>
        </form>

    </div>
    <div class="content">
        <div class="search">

            <span>Введите id пользователя </span>

            <form action="index.php" method="post">
                <div class="inputblock"><span class="content_search"><input type="text" class="inputsearch"
                                                                            name="search" id="search"></span>

                    <button class="searchbutton buttonheight">GO
                    </button>

                </div>
            </form>
        </div>
        <div class="userinfo">

            <table class="blueTable">
                <thead>
                <tr>
                    <th>id</th>
                    <th>surname</th>
                    <th>name</th>
                    <th>second name</th>
                    <th>age</th>
                    <th>password</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>action</th>
                </tr>
                </thead>

                <tbody>

                <?php

                // подключение к бд
                require_once("connectionbd/connection.php");

                // получаем id пользователя
                $search = $_POST['search'];

                // получаем запись из бд с заданным id
                $result = $mysqli->query("SELECT * FROM Users WHERE  id =$search");

                ?>

                <!--                /* выводим в таблицу данные из бд*/-->

                <?php while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <?php foreach ($row as $col_value) { ?>
                            <td><?php echo $col_value ?></td>
                        <?php } ?>
                        <td>
                            <form method="post" action="delete.php">
                                <button type="submit" name="id" value="<?= $row['id']; ?>" class="delbtn">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php }
                $mysqli->close();
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

