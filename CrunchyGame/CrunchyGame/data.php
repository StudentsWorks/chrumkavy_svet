<?php
include('session.php');
session_start();
$experimental=$_SESSION['ID'];
$sql = "SELECT id, username, nickname, level, xp, avatar FROM account WHERE id='$experimental'";
$result = $db->query($sql);
//premenn� pre profil a pracu s profilom
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id=$row["id"]; $meno=$row["username"]; $nickname=$row["nickname"]; $level=$row["level"]; $xp=$row["xp"]; $avatar=$row["avatar"];
    }
}
//premenn� levelovanie a XP
$sql = "SELECT level,xpreq,radnica,veza,hostinec,kostol,kasaren,hrad FROM levelstruct WHERE level='$level'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $xpreq=$row["xpreq"]; $radnica=$row["radnica"]; $veza=$row["veza"]; $hostinec=$row["hostinec"]; $kostol=$row["kostol"]; $kasaren=$row["kasaren"]; $hrad=$row["hrad"];
    }
}
$db->close();
?>