<?php
    session_start();
    require_once "koneksi2.php";
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        //ambil data
        $user = (isset($_POST['username'])) ? $_POST['username'] : "";
        $pass = (isset($_POST['password'])) ? $_POST['password'] : "";
        
        //validasi
        $errCount =0;
        if ($user == "" || $pass ==""){
            set_message("Kolom Inputan Username dan Password tidak boleh kosong");
            $errCount +=1;
        }

            //cek login
            if ($errCount == 0){
                $pass = md5($pass);
                $SQL = "SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'";
                } 
                else
                {
                    set_message("Gagal Login! Coba Lagi .");
                }

            }
        else{
            
        }
    ?>
