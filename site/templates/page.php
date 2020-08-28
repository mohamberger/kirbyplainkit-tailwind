<head>
  <?= css('assets/css/main.css') ?>
</head>

<body class="bg-black text-white">
  <?php foreach ($page->children()->listed() as $part) : ?>
  <section class="<?= $part->intendedTemplate() ?>">
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
  </section>
  <?php endforeach ?>
</body>
</body>
