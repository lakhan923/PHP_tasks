<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    // Get user's gender and age from the form
    $gender = $_POST["gender"];
    $age = $_POST["age"];

    // Tarkista, että ikä on kelvollinen (0-110 vuotta)
    if ($age < 0 || $age > 110) 
    {
        echo "Virheellinen ikä. Anna kelvollinen ikä välillä 0-110 vuotta.";
    } else 
    {
        // Määritä sopiva tervehdys iän ja sukupuolen perusteella
        if ($age < 13) 
        {
            echo "Mitä poitsu!";
        } elseif ($age >= 14 && $age <= 25) 
        {
            echo "Mitä " . ($gender === "male" ? "nuorimies" : "nuorinainen") . ".";
        } elseif ($age >= 26 && $age <= 56) 
        {
            echo "Olet " . ($gender === "male" ? "mies parhaassa iässä" : "nainen parhaassa iässä") . ".";
        } elseif ($age >= 70) 
        {
            echo "Olet jo eläkeiässä.";
        } else {
            echo "Invalid age range";
        }
    }
}
