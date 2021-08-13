<ul class="projects-list list-unstyled">
  <?php foreach ($projects as $prefix => $project): ?>
    <li id="project-<?php echo $prefix ?>" class="project mb-4">
      <a class="card shadow-sm text-decoration-none text-reset js-project" href="#" data-project-prefix="<?php echo $prefix ?>" data-project-title="<?php echo "$project[name] ($project[location])" ?>">
        <img src="<?php echoImgPath('/gallery/'.$prefix.'_small_01.jpg') ?>" aria-labelledby="project-title-<?php echo $prefix ?>" class="img-fluid card-img-top project__img">
        <div class="card-body text-center">
          <h3 id="project-title-<?php echo $prefix ?>" class="card-title project__name h6">
            <?php echo $project['name'] ?>
          </h3>
          <p class="card-text project__location">
            (<?php echo $project['location'] ?>)
          </p>
        </div>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<div class="modal fade js-modal js-projects-modal" id="projects-modal" tabindex="-1" aria-labelledby="projects-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="projects-modal-title">
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo TRANSLATIONS['close'] ?>">
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary js-modal-fullscreen">
          <span class="modal__fullscreen modal__fullscreen--enlarge">
            <?php echo TRANSLATIONS['enlarge'] ?>
          </span>
          <span class="modal__fullscreen modal__fullscreen--reduce">
            <?php echo TRANSLATIONS['reduce'] ?>
          </span>
        </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <?php echo TRANSLATIONS['close'] ?>
        </button>
      </div>
    </div>
  </div>
</div>
