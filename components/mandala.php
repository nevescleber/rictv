<?php
// Array of images for the mandala
$mandalaImages = [
    'ric-tv.png',
    'ric-social.png',
    'record.png',
    'ric-tv-purple.png',
    'ric-ooh.png',
    'jp-fm.png',
    'top-view.png',
    'jp-news.png',
    'ric-com-br.png',
    'r7.png',
    'banda-b.png'
];

// Central image
$centralImage = 'grupo-ric.png';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandala RIC</title>
    <link rel="stylesheet" href="mandala-style.css">
</head>
<body>
    <div class="mandala-container">
        <!-- Central image -->
        <div class="central-image">
            <img src="images/<?php echo $centralImage; ?>" alt="Grupo RIC">
        </div>
        
        <!-- Mandala images -->
        <?php
        $totalImages = count($mandalaImages);
        for ($i = 0; $i < $totalImages; $i++) {
            // Calculate position angle
            $angle = ($i * (360 / $totalImages));
            $style = "transform: rotate({$angle}deg) translate(250px) rotate(-{$angle}deg);";
            
            echo "<div class='mandala-item' style='{$style}'>";
            echo "<img src='images/{$mandalaImages[$i]}' alt='Mandala Item " . ($i+1) . "'>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
