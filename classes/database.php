<?php

    class Database {
        private $server_name = 'localhost';
        private $username = 'root';
        private $password = 'root';
        private $db_name = 'the_company';
        protected $conn;

        public function __construct(){
            // クラス内の $conn(protected) に mysqliのインスタンスを作成。
            $this -> conn = new mysqli($this -> server_name, $this -> username, $this -> password, $this -> db_name);

            // $this->conn をインスタンス化したからエラーを確認できる。(インスタンス内のエラーが入ったプロパティを確認している。)
            if($this -> conn -> connect_error){
                die('Unable to connect to database ' . $this -> db_name . ':' . $this -> conn -> connect_error);
            }
        }
    }