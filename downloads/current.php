<?PHP

if (isset($_GET['windows'])) {
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/downloads/FahMon-2.3.99.3-Installer.exe");
exit();
}

if (isset($_GET['windowszip'])) {
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/downloads/FahMon_2.3.99.3.zip");
exit();
}

if (isset($_GET['linux'])) {
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/downloads/FahMon-2.3.99.3.tar.bz2");
exit();
}

if (isset($_GET['mac'])) {
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/downloads/FahMon-2.3.2b-OSX.zip");
exit();
}

?>
