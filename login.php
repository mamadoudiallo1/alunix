<?php
            if(isset($_POST['submit']))
            {
                $kullanici=$_POST['user'];
                echo 'Merhaba'.$kullanici.'<br/>';
                $sifre=$_POST['pass'];
                echo 'Şifre'.$sifre.'<br/>';
             }
            
       ?>