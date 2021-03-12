<?php

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $cover_photo = $_POST['cover_photo'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $about = $_POST['about'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $service_product = $_POST['service_product'];
    if ($service_product == 'services') {
        $service_product = 'Сервиси';
    } else {
        $service_product = 'Продукти';
    }
    $pic1 = $_POST['pic1'];
    $text1 = $_POST['text1'];
    $pic2 = $_POST['pic2'];
    $text2 = $_POST['text2'];
    $pic3 = $_POST['pic3'];
    $text3 = $_POST['text3'];
    $company_info = $_POST['company_info'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $googleplus = $_POST['googleplus'];

    $sql = "INSERT INTO page (cover_photo,title,subtitle,about,phone,location,service_product, pic1, text1, pic2, text2, pic3, text3,company_info,linkedin,facebook,twitter,googleplus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $connect->prepare($sql);
    try {
        if ($stmt->execute([$cover_photo, $title, $subtitle, $about, $phone, $location, $service_product, $pic1, $text1, $pic2, $text2, $pic3, $text3, $company_info, $linkedin, $facebook, $twitter, $googleplus])) {
            $id = $connect->lastInsertId();
            header("Location: ../views/page.php?status=success&id=$id");
            die();
        } else {
            header("Location: ../views/page.php?status=error");
            die();
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }

    if ($_GET['status'] == 'success') {
        echo "<p class ='text-center' style='color:green; font-weight:bold;'>Successfully Registered</p>" . "<br>";
    } else {
        echo "<p class = 'text-center' style='color:red; font-weight:bold;'>Error, Try again!</p>" . "<br>";
    }
}