<head>
<?= css('assets/css/main.css') ?>
</head>

<body class="bg-black text-white">

    <h1 class="font-bold text-6xl text-center mt-24 leading-tight"><?= $page->title() ?></h1>
    <p><?= $page->first_name() ?></p>
    <p><?= $page->last_name() ?></p>
    <p><?= $page->profession() ?></p>
    <p><?= $page->birthday() ?></p>

    <?= $page->portrait()->toFile()->resize(50)->url();?>

    <?php if ($file = $page->files()->first()): ?>
    <img src="<?= $file->url() ?>" alt="">
    <?php endif ?>


    <?php foreach ($page->children()->listed() as $part) : ?>
    <section class="<?= $part->intendedTemplate() ?>">
      <?php snippet($part->intendedTemplate(), compact('part')) ?>
    </section>
  <?php endforeach ?>


</body>
  
