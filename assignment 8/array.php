<?php
$gces_Staffs =
    [
        "academics" =>

        [
            [
                "name" => "subash",
                "address" => "Pokhara,Chhorepatan",
                "phoneno" => ["98469456**", "9863376***"],
                "subject" => ["html", "Css", "js"]
            ],
            [
                "name" => "harry",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"],
                "subject" => ["C", "C++", "Java"]
            ]
        ],
        "nonacademics " =>
        [
            [
                "name" => "elon ",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"]
            ],
            [
                "name" => "nabin",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"]
            ]
        ]




    ];

    echo "Default <br><pre> ";
// print_r($gces_Staffs);

   echo  "</pre>";
    array_multisort($gces_Staffs);

echo "Default <br><pre> ";
// print_r($gces_Staffs);

echo  "</pre>";



$person = [
    [
        "name" => "abraham ",
        "roll" => "1",
    ],
    [
        "name" => "bruce",
        "roll" => "2",
    ],
    [
        "name" => "abhisek",
        "roll" => "3",
    ]
    ];

sort($person);
var_dump($person)
?>