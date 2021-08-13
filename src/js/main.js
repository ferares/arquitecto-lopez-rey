$(document).ready(function() {
  $('.js-project').on('click', function(event) {
    event.preventDefault();
    var $modal = $('.js-projects-modal');
    var title = $(event.currentTarget).data('project-title');
    var prefix = $(event.currentTarget).data('project-prefix');
    $.ajax({
      type: 'POST',
      dataType: 'html',
      url: '/',
      data: {
        action: 'project-carousel',
        prefix: prefix,
       },
      success: (res) => {
        $modal.find('.modal-body').html(res);
        $modal.find('.modal-title').html(title);
        $modal.modal('show');
      },
    });
  });

  $('.js-personal-photo').on('click', function(event) {
    event.preventDefault();
    var $modal = $('.js-personal-modal');
    var index = $(event.currentTarget).data('personal-index');
    $('.js-personal-modal-carousel').carousel(index);
    $modal.modal('show');
  });

  $('.js-modal-fullscreen').on('click', function() {
    $('.js-modal .modal-dialog').toggleClass('modal-fullscreen');
  });
});
