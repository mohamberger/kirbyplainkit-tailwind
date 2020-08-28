<div class="container mx-auto my-16">
  <hr class="h-8">
  <div class="flex justify-between">
    <h2 class="text-2xl font-bold"><?= $part->headline(); ?></h2>
    <ul class="flex flex-wrap w-2/3 justify-end">
      <?php foreach ($part->logos()->toFiles() as $logo): ?>
      <li><?php if($logo->link()->length() > 0): ?><a href="<?= $logo->link() ?>" target="_blank"><?php endif; ?><img class="h-16 mx-8 mb-16" src="<?= $logo->url() ?>" alt="<?= $logo->alt() ?>"></a></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>