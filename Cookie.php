<?php

/*- Oturumlar ve Çerezler: Oturumların ve çerezlerin kullanımını gösteren bir PHP betiği geliştirin:
 - Kullanıcının adını birden fazla sayfada saklamak ve görüntülemek için oturumları kullanın.
 - Kullanıcının tercih ettiği temayı (açık/koyu) hatırlayan ve bunu sonraki ziyaretlerde uygulayan bir çerez uygulayın.*/


session_start();

$_SESSION['kullanici adi'] = "Salih";

$kullanici = $_SESSION['kullanici adi'] = "Salih";

echo "Kullanıcı Bilgileri" . $kullanici;

session_destroy();



setcookie("temamodu", "KaranlıkTema",  time() +30 * 24 * 60 * 60);

$Karanlikmod = $_COOKIE['temamodu'] == "true";

if($Karanlikmod)
{
    echo "Karanlık tema aktif olsun";
}
else
{
    echo "Aydınlık tema açık kalsın";
} 

?>