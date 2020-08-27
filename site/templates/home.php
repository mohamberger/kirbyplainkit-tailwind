<head>
<?= css('assets/css/main.css') ?>
</head>
<body class="bg-yellow-300">

    <h1 class="font-bold text-6xl text-center my-24 leading-tight"><?= $page->title() ?></h1>
    <?php

snippet('header');

foreach($pages->listed() as $section) {
  snippet($section->uid(), ['data' => $section]);
}

snippet('footer');

?>
</body>
