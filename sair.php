<?
session_start();
unset(
$_SESSION['IdMembro'],
$_SESSION['Login'],
$_SESSION['NomeLog'],
$_SESSION['Snome']
);
header("LOCATION: index.php");
?>
<script type="text/javascript">window.location.href="index.php"</script>