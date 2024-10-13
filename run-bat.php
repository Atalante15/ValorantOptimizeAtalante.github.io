<?php
// Hata ayıklama için PHP hatalarını gösterecek ayarlar
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Bat dosyasının tam yolunu belirtin
$batFilePath = 'C:\\Program Files\\Atalante Optimize\\Valo\\AtalanteValo.bat';

// Bat dosyasının var olup olmadığını kontrol edin
if (file_exists($batFilePath)) {
    // Bat dosyasını çalıştır ve çıktıyı oku
    $output = [];
    $return_var = 0;
    
    // Popen ile bat dosyasını başlat
    $handle = popen("start cmd /c \"$batFilePath\"", "r");
    
 
} else {
    echo "BAT dosyası bulunamadı: $batFilePath";
}
?>
