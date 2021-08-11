<?php
  $pictures = array(
    'Su padre',
    'Con su padre y su madre',
    'A los 6 años',
    'Despedida 1º año Taller Payseé',
    'Concurso Banco Hipotecario Estudio Arq. Muñoz del Campo',
    'Concurso Banco Hipotecario Estudio Arq. Muñoz del Campo',
    'Despedida de soltero',
    'Con su esposa Lea Verdesio',
    'Con su esposa Lea Verdesio',
    'En Milán con su esposa Lea y el pintor Vicente Martin',
    'En Milán',
    'En Punta del Este con Carmen Helena Pares, Arq. González Almeida, María Luisa Torrens, Vicente Martín y Lea Verdesio',
    'En su estudio de Regidor',
    'Con Arq. Alfredo Nebel',
    'En Buenos Aires con Vicente Martin y Arq. Barañano',
    'En Bs.As. con Vicente Martin y Federico Brill',
    'Con Arq. Raúl Sichero',
    'Con Arq. Miguel Amato y Arq. Raúl Sichero',
  );
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="display-2 text-center mb-4">
        <?php echo TRANSLATIONS['personal_header'] ?>
      </h2>
    </div>
    <?php foreach ($pictures as $index => $picture): ?>
      <?php $index++; if ($index < 10) { $index = '0'.$index; } ?>
      <div class="col-12 col-lg-6 col-xl-4 mb-4">
        <a class="card h-100" href="#">
          <img src="<?php echoImgPath('/gallery/personal/Personal_big_'.$index.'.jpg') ?>" aria-labelledby="personal-title-<?php echo $index ?>" class="img-fluid card-img-top">
          <div class="card-body d-flex align-items-end">
            <h3 id="personal-title-<?php echo $index ?>" class="card-title">
              <?php echo $picture ?>
            </h3>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
