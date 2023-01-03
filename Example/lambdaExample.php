<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$works = [
    [
        'startdate' => 2022,
        'work' => 'GPM'
    ],
    [
        'startdate' => 2021,
        'work' => 'GPM'
    ],
    [
        'startdate' => 2011,
        'work' => 'RT'
    ],
    [
        'startdate' => 2003,
        'work' => 'DELTA'
    ]
];



function pr($array)
{
    echo '<pre>'; 
    foreach ($array as $filter)
        {
            print_r($filter);
        }
    echo '</pre>'; 
}

// function pr($str)
// {
//     echo '<pre>'; 
//     print_r($str);
//     echo '</pre>'; 
// }

function filterBy($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item)
    {
        if ($fn($item))
        {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
};

$somefilters = filterBy ($works, function ($item) {
    return $item['work'] != "DELTA"; // for example
    //return $item['startdate'] == 2022; // for example
}
);

pr($somefilters);

?>
    
</body>
</html>

