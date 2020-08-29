<div class="container mx-auto my-16">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-32">
    <div class="col-span-1">
      <h2 class="text-6xl leading-tight font-black mb-8"><?= $part->headline(); ?></h2>
      <p><?= $part->text() ?></p>
    </div>
    <div class="col-span-2 grid grid-cols-2 md:grid-cols-3 gap-16">
      <?php $img = $part->gallery()->toFiles() ?>
      <div class="flex flex-col justify-end"><img class="" src="<?= $img->nth(0)->url() ?>" alt="<?= $img->alt() ?>">
      </div>
      <div class="flex flex-col justify-start"><img class="" src="<?= $img->nth(1)->url() ?>" alt="<?= $img->alt() ?>">
      </div>
      <div class="col-span-2 md:col-span-1 flex flex-col justify-center"><img class="" src="<?= $img->nth(2)->url() ?>" alt="<?= $img->alt() ?>">
      </div>
    </div>
  </div>
</div>