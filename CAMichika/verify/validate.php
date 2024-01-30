<?php
// Replace this array with your actual user data or database query
$userData = [
    "CAM-66542477095" => [
        "name" => "Imam Baba Wakili",
        "status" => "Active",
        "team" => "Al'Ahly United",
        "phone" => "08067154540"
    ],
    "CAM-12468868875" => [
        "name" => "Daniel Joseph Chidiebere",
        "status" => "Active",
        "team" => "Lughu United",
        "phone" => "08135628188"
    ],
    "CAM-45994295593" => [
        "name" => "Abubakar Mohammed",
        "status" => "Active",
        "team" => "Lughu United",
        "phone" => "08061173860"
    ],
    "CAM-94979513267" => [
        "name" => "Hon. Moses. S Oaya",
        "status" => "Active",
        "team" => "Jigalambu United",
        "phone" => "08144544330"
    ],
    "CAM-91740222474" => [
        "name" => "Ahmed Tijjani S.",
        "status" => "Active",
        "team" => "Michika United",
        "phone" => "08030409164"
    ],
    "CAM-41728737518" => [
        "name" => "Mohammed Shaibu",
        "status" => "Active",
        "team" => "Al'Ahly United",
        "phone" => "09063973966"
    ],
    "CAM-72491704943" => [
        "name" => "Zamani Nashi",
        "status" => "Active",
        "team" => "Tudun Wada United",
        "phone" => "08030608812"
    ],
    "CAM-45953360140" => [
        "name" => "Jeremiah Bitrus",
        "status" => "Active",
        "team" => "Villegwa United",
        "phone" => "08163482579"
    ],
    "CAM-62544745492" => [
        "name" => "Yunana Garba",
        "status" => "Active",
        "team" => "Sina/Kamale United",
        "phone" => "09166639606"
    ],
    "CAM-41430651590" => [
        "name" => "Tizhe Tari",
        "status" => "Active",
        "team" => "Kuda Bulashafa Young Star",
        "phone" => "07035582255"
    ],
    "CAM-87119340003" => [
        "name" => "Sylvester Kwaji",
        "status" => "Active",
        "team" => "Tsandza FC",
        "phone" => "07066760689"
    ],
    "CAM-67379736992" => [
        "name" => "Emmanuel Joseph Watsilla",
        "status" => "Active",
        "team" => "Watsilla FC",
        "phone" => "07039599087"
    ],
    "CAM-46027605118" => [
        "name" => "Cletus Linus",
        "status" => "Active",
        "team" => "Kudzum United",
        "phone" => "08038636169"
    ],
    "CAM-20940152956" => [
        "name" => "Dauda Elijah ",
        "status" => "Active",
        "team" => "Yamwe United",
        "phone" => "08052444758"
    ],
    "CAM-35243038482" => [
        "name" => "Jonah John Dibana",
        "status" => "Active",
        "team" => "Scorpion of Watu",
        "phone" => "08065792079"
    ],
    // Add more user data as needed
];

$input = $_GET["input"];

// Check if the input matches a registration number
if (isset($userData[$input])) {
    $user = $userData[$input];
    $response = [
        "name" => $user["name"],
        "status" => $user["status"],
        "team" => $user["team"],
        "phone" => $user["phone"]
    ];
} else {
    // Check if the input matches a phone number
    $found = false;
    foreach ($userData as $user) {
        if ($user["phone"] === $input) {
            $found = true;
            $response = [
                "name" => $user["name"],
                "status" => $user["status"],
                "team" => $user["team"],
                "phone" => $user["phone"]
            ];
            break;
        }
    }

    if (!$found) {
        $response = ["name" => "", "status" => "User not found"];
    }
}

header("Content-Type: application/json");
echo json_encode($response);
?>
