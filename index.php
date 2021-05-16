<?php

$xml = simpleXML_load_file('https://www.w3schools.com/xml/simple.xml');

// echo "<pre>";
// var_dump($xml);
// echo "</pre>";

?>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Calories</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($xml->food as $feed): ?>
        <tr>
            <td><?php echo $feed->name ?></td>
            <td><?php echo $feed->price ?></td>
            <td><?php echo $feed->description ?></td>
            <td><?php echo $feed->calories ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>