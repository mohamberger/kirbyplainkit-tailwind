<section id="hero" class="bg-blue-100 flex justify-center py-8">
  <div class="container mx-auto text-center">
    <h1 class="text-2xl font-black uppercase"><?= $data->title() ?></h1>
    <p><?= $data->text()->kirbytext() ?></p>
    <div class="m-8">
    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent"href="<?= $data->url1() ?>"><?= $data->urltext1() ?></a>
    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent"href="<?= $data->url2() ?>"><?= $data->urltext2() ?></a>
    </div>
  </div>
</section>