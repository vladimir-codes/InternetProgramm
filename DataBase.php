<?php
class DataBase
    {
        private $link;
        public function __construct($host, $login, $password, $db)
        {
            $this->link = mysqli_connect($host, $login, $password, $db);
            if (mysqli_connect_errno()) {
                printf("Не удалось подключиться: %s\n", mysqli_connect_error());
            }
            else
            {
                printf("Успешное подключение");
            }
        }
        public function Query(string $QueryText)
        {
            $result = mysqli_query($this->link, $QueryText);
            if (!$result) {
                $message  = 'Неверный запрос: ' . mysqli_error($this->link) . "\n";
                $message .= 'Запрос целиком: ' . $QueryText;
                die($message);
            }
            else if(mysqli_fetch_assoc($result)==null)      
                return "Запрос успешно выполнен"; else return mysqli_fetch_all($result);
        }
        public function CloseConnection()
        {
            if (mysqli_connect()) mysqli_close($this->link);
        }
    }

