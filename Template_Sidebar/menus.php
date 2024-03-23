<?php
require_once 'tops.php';
require_once 'menus.php';

$ar_menus =
    [
        'Home' => 'home.php',
        'Produk' => 'produk.php',
        'Profile' => 'profil.php',
        'About' => 'about.php'



    ];
?>
<!-- Maaf bang masih gagal paham -->
<!-- Apa kita harus buat dokumen dengan nama itu? tapi apa isi kontennya -->


<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">Sidebar Praktikum Mandiri </h1>
    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
    <p>
        Make sure to keep all page content within the
        <code>#page-content-wrapper</code>
        . The top navbar is optional, and just for demonstration. Just create an element with the
        <code>#sidebarToggle</code>
        ID which will toggle the menu when clicked.
    </p>
</div>

<?php
require_once 'bottoms.php';
?>

<!-- Saya belum tau bang ini sudah benar atau belum, saya mencoba mengikuti -->