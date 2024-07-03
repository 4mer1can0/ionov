<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    
        <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4; 
            margin: 0; 
            padding: 0; 
        } 
        .container { 
            width: 80%; 
            margin: auto; 


        } 

        header { 
            background:  #00406b; 
            color: white; 
            padding-top: 30px; 
            min-height: 70px; 
            border-bottom: #007dd1 5px solid;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 100%; 
        } 
        header a { 
            color: #ffffff; 
            text-decoration: none; 
            text-transform: uppercase; 
            font-size: 20px; 
        } /* текст шапки*/
        header ul { 
            padding: 0; 
            list-style: none; 
        } 
        header ul li { 
            float: left; 
            display: inline; 
            padding: 0 20px 0 20px; 
        } 
        header #branding { 
            float: left; 
        } 
        header #branding h1 { 
            margin: 0; 
        } 
        header nav { 
            float: right; 
            margin-top: 10px; 
        } /* ориентиация теста*/
        
        header a:hover { 
            color: #ffffff; 
            font-weight: bold; 
        } 

        footer {
            background:  #00406b;  
            padding: 20px 0;
            border-top: #007dd1 5px solid;
            position: fixed;
            bottom: 0;
            left: 0;
        width: 100%;
        z-index: 1000;
        }
 
        button { 
            background-color: #00406b; 
            border: none; 
            color: white; 
            padding: 10px 25px; 
            display: inline-block; 
            font-size: 17px; 
            margin: 20px 2px; 
            cursor: pointer; 
            border-radius: 4px; 
        } 
 
        button:hover { 
            background-color: #007dd1;
            transition: 0.5s; 
        } 



        .card {
            height: auto;
            width: auto;
            background-color: #ffffff;
            border: #4d3319 1px solid;
            border-radius: 4px;
            margin-top: 20px;
            padding: 10px 20px;
        }

        .container1 {
            width: 60%;
            height: auto;
            padding: 20px 20px 30px 20px;
            margin: 170px auto;

        }

        .content {
            display: flex;
            justify-content: space-between;
        }

        .item1 {
            width: 40%;
            margin-left: 20px;
        }

        .item2 {
            width: 80%;
            margin-top: 30px;
            margin-left: 20px;
        }

        .tem3 {
            width: 60%;
            margin-left: 20px;
            margin-top: 45px;
            text-align: center;
            align-items: center;
            font-size: 20px;
        }

 
    
    </style>
</head>
<body>
    <header>
    <div class="container"> 
            <div id="branding"> 
                <h1>Магазин одежды "Dubbler" </h1> 
            </div> 
            <nav> 
                <ul> 
                    <li><a href="">Главная</a></li> 
                    <li class="current"><a href="index.php">Каталог</a></li> 
                </ul> 
            </nav> 
        </div>
    </header>

    <div class="container1">
        <?php
            $host = '127.0.0.1';
            $database = 'magazin';
            $user = 'root';
            $password = '';

            $mysqli = new mysqli($host, $user, $password, $database);

            if ($mysqli->connect_error) {
                die("Ошибка подключения: " . $mysqli->connect_error);
            }

            $query = "SET NAMES utf8";
            $mysqli->query($query);

            $query = "SELECT * FROM products";
            $results = $mysqli->query($query);

            if ($results) {
                while ($row = $results->fetch_assoc()) {
                    echo '
                    <div class="card">
                        <div class="content">
                            <div class="item1">
                                <img style="width: 200px; height: 200px; border-radius: 15px; padding: 10px 0px;" src="'.$row["imgFile"].'">
                            </div>
                            <div class="item2">
                                <h3>'.$row["name"].'</h3><br>
                                <p style="margin-top: -20px; font-size: 20px;">'.$row["text"].'</p>
                            </div>
                            <div class="item3">
                                <button style="width: 100%; margin-top: 30px; font-size: 20px;">'.$row["amount"].' ₽</button>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo "Ошибка запроса: " . $mysqli->error;
            }

            $mysqli->close();
        ?>
        </div>

    </div>
    <footer>

    </footer>
</body>
</html>