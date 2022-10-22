<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MVC APP</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<section class="min-h-[100vh] flex">
  <section class="min-w-[300px] h-100 bg-base-100">
    <!--  -->
  </section>
  <section class="w-full h-100 bg-[#F7F8FC]">
    <?= view('layout/_navbar') ?>
    <main role="main" class="w-full">
      <?= $this->renderSection('main') ?>
    </main>
  </section>
</section>



</body>
</html>
