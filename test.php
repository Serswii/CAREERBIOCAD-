<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <script src="js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src='js/html5shiv.js'></script>
    <![endif]-->
</head>
<body class="bg-white body-bg">
    <div class="container">
        <div class="row">
            <div class="block">
                <div class="first-block">
                    <div class="block-left">
                        <div class="search">
                            <div class="info-search font-text">Enter inventory number, guid or bims id</div>
                            <form action="" class="search-form" method="post">
                                <input type="search" placeholder="A-001234" name="search-input" class="font-text input-search input-text">
                                <button type="submit" name="search" class="but-search"><span class="but-search-text">Search</span></button>
                            </form>
                        </div>
                        <div class="product">
                            <div class="product-img"><img src="img/product-img.png" alt="Product"></div>
                            <div class="product-text"><span>Аналитические весы OHAUS Adventurer АХ324 (B715976163)</span>
                            </div>
                        </div>
                        <div class="month">
                            <form action="" class="month-form" method="post">
                                <select class="month-num font-text select--right">
                                    <?php for ($i = 1; $i <= 12; $i++) {
                                        echo ' <option>' . $i . ' month</option>';
                                    } ?>
                                </select>
                                <div class="radio">
                                    <input name="action" id="calibration" type="radio" value="calibration">
                                    <label for="calibration" class="label-radio input-text font-text">Calibration</label>
                                    <input name="action" id="measuring" type="radio" value="measuring">
                                    <label for="measuring" class="label-radio input-text font-text">Measuring</label>
                                    <input name="action" id="using" type="radio" value="using">
                                    <label for="using" class="label-radio input-text font-text">Using</label>
                                </div>
                                <button type="submit" class="but-month" name="month"><span>Generate report</span></button>

                            </form>
                        </div>
                    </div>
                    <div class="block-info">
                        <div class="product-info">
                            <div class="bg-block-info">
                                <p class="product-info-text">Тип оборудования: <span class="bg-text">Весы</span></p>
                                <p class="product-info-text">Статус: <span class="bg-text">Готов к работе</span></p>
                                <p class="product-info-text">Изготовитель: <span class="bg-text">Ohaus</span></p>
                                <p class="product-info-text">Модель: <span class="bg-text">AX-123</span></p>
                                <p class="product-info-text">Ответственное подразделение (ремонт): <span class="bg-text">Группа обслуживания лабораторного оборудования</span></p>
                                <p class="product-info-text">Эксплуатирующее подразделение: <span class="bg-text">Химико-аналитическая лаборатория 2.0</span></p>
                                <p class="product-info-text">МОЛ: <span class="bg-text">Иванов Иван Иванович</span></p>
                                <p class="product-info-text">Территория: <span class="bg-text">г. Санкт-Петербург (Нойдорф)</span></p>
                                <p class="product-info-text">Серийный номер: <span class="bg-text">B715976163</span></p>
                                <p class="product-info-text">GUID: <span class="bg-text-blue">508b2a71-662e-4983-ae0c-3cb0c1cd21c5</span></p>
                                <p class="product-info-text">Bims ID: <span class="bg-text-blue">49db8db1-585f-4b9e-bbf0-8a59698edc8b</span></p>
                                <p class="product-info-text">Tam: <span class="bg-text-blue">А-001234</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-block">
                    <div class="block-table">
                        <div class="table-list">
                            <h1 class="font-text title-table">Calibration report</h1>
                            <table>
                                <thead>
                                    <tr class="table-header">
                                        <th class="data">Data</th>
                                        <th class="used">Used buffer solutions</th>
                                        <th class="slope">Slope, % Norm 95-105</th>
                                        <th class="offset">Offset, mV Norm ±(0-20)</th>
                                        <th class="user">User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-body">
                                        <td class="data">04.10.19 10:23</td>
                                        <td class="used">В1: № 2000460789536: pH 1.09 В2: № 2000460789536: pH 2.00 В3: № 2000460789536: pH 4.01 В4: № 2000460789536: pH 7.00 В5: № 2000460789536: pH 9.21
                                        </td>
                                        <td class="slope">98.7 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="offset">-0.3 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="user">Иванов Генадий Петрович</td>
                                    </tr>
                                    <tr class="table-body">
                                        <td class="data">04.10.19 10:23</td>
                                        <td class="used">В1: № 2000460789536: pH 1.09 В2: № 2000460789536: pH 2.00 В3: № 2000460789536: pH 4.01 В4: № 2000460789536: pH 7.00 В5: № 2000460789536: pH 9.21
                                        </td>
                                        <td class="slope">98.7 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="offset">-0.3 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="user">Петров Иван Генадьевич</td>
                                    </tr>
                                    <tr class="table-body">
                                        <td class="data">04.10.19 10:23</td>
                                        <td class="used">В1: № 2000460789536: pH 1.09 В2: № 2000460789536: pH 2.00 В3: № 2000460789536: pH 4.01 В4: № 2000460789536: pH 7.00 В5: № 2000460789536: pH 9.21
                                        </td>
                                        <td class="slope">98.7 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="offset">-0.3 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="user">Петров Генадий Иванович</td>
                                    </tr>
                                    <tr class="table-body">
                                        <td class="data">04.10.19 10:23</td>
                                        <td class="used">В1: № 2000460789536: pH 1.09 В2: № 2000460789536: pH 2.00 В3: № 2000460789536: pH 4.01 В4: № 2000460789536: pH 7.00 В5: № 2000460789536: pH 9.21
                                        </td>
                                        <td class="slope">90.1 <img src="img/error.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="offset">-0.5 <img src="img/success.png" width="16" height="16" alt="Success">
                                        </td>
                                        <td class="user">Генадьев Иван Петрович</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
