<fieldset>
  <legend>Galerie d'images</legend>

  <div class="columns">
    <div class="column">
      {!! Form::selectGroup(
          'choiceCategory',
          'Galerie',
          $categories,
          $entity->choiceCategory,
          ['id' => 'choiceCategory', 'onchange' => 'javascript:galleryChoiceByCategory();']
      ) !!}
    </div>
    <div class="is-divider-vertical" data-content="OU"></div>
    <div class="column">
      {!! Form::inputGroup('new_title', 'Titre image', $entity->new_title) !!}

      {!! Form::selectGroup('new_category', 'Catégorie', $categories, $entity->new_category) !!}

      {!! Form::fileGroup('file', 'Nouvelle image', ['accept' => 'image/gif, image/png, image/jpeg']) !!}
    </div>
    @if ($galleryImage != null)
      <div class="is-divider-vertical"></div>
      <div class="column">
        {!! Form::textGroup(
            HTML::img($entity->getGallery('thumb')).'<br><b>'
            .$galleryImage->title.'</b><br>Copyright : '.$galleryImage->copyright,
            "Image d'illustration"
        ) !!}
      </div>
    @endif
  </div>

  <div id="gallery_image"></div>

  @include('admin.base.tmpl.form_gallery_image')
</fieldset>
