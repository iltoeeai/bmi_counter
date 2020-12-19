<?php
if ($_POST['submit']) {
    $mass = $_POST['mass'];
    $height = $_POST['height'];
    function bmi($mass, $height)
    {
        $bmi = $mass / ($height * $height);
        return $bmi;
    }
    $bmi = bmi($mass, $height);
    if ($bmi <= 18.5) {
        $output = "Under Weight";
        $image = 'img/feather.jpg';
    } else if ($bmi > 18.5 and $bmi <= 24.9) {
        $output = "Normal Weight";
        $image = 'img/thumbup.jpg';
    } else if ($bmi > 24.9 and $bmi <= 29.9) {
        $output = "Over Weight";
        $image = 'img/elephant.jpg';
    } else if ($bmi > 30.0) {
        $output = "OBESE";
        $image = 'img/obese.jpg';
    }
}
?>