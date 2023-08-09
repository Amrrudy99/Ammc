@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.aboutUs.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.about-uss.update", $about_uss->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row justify-contnet-between">
                <div class="form-group col-3">
                    <label class="required" for="site_name">{{ trans('cruds.aboutUs.fields.site_name') }}</label>
                    <input class="form-control {{ $errors->has('site_name') ? 'is-invalid' : '' }}" type="text" name="site_name" id="site_name" value="{{ old('site_name', $about_uss->site_name) }}" required>
                    @if($errors->has('site_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('site_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.site_name_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label class="required" for="name">{{ trans('cruds.aboutUs.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $about_uss->name) }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.name_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="president_description">{{ trans('cruds.aboutUs.fields.president_description') }}</label>
                    <input class="form-control {{ $errors->has('president_description') ? 'is-invalid' : '' }}" type="text" name="president_description" id="president_description" value="{{ old('president_description', $about_uss->president_description) }}">
                    @if($errors->has('president_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('president_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.president_description_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="link">{{ trans('cruds.aboutUs.fields.link') }}</label>
                    <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link" value="{{ old('link', $about_uss->link) }}">
                    @if($errors->has('link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('link') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.link_helper') }}</span>
                </div>
            </div>

            <div class="row justify-contnet-between">
                <div class="form-group col-3">
                    <label for="description">{{ trans('cruds.aboutUs.fields.description') }}</label>
                    <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $about_uss->description) }}">
                    @if($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.description_helper') }}</span>
                </div>
                <div class="form-group col-4">
                    <label for="location">{{ trans('cruds.aboutUs.fields.location') }}</label>
                    <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', $about_uss->location) }}">
                    @if($errors->has('location'))
                        <div class="invalid-feedback">
                            {{ $errors->first('location') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.location_helper') }}</span>
                </div>
                
                <div class="form-group col-3">
                    <label for="address">{{ trans('cruds.aboutUs.fields.address') }}</label>
                    <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $about_uss->address) }}">
                    @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.address_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="phone_number">{{ trans('cruds.aboutUs.fields.phone_number') }}</label>
                    <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $about_uss->phone_number) }}">
                    @if($errors->has('phone_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone_number') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.phone_number_helper') }}</span>
                </div>
            </div>
            <div class="row justify-contnet-between">
                <div class="form-group col-3">
                    <label for="email">{{ trans('cruds.aboutUs.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $about_uss->email) }}">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.email_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="author_seo">{{ trans('cruds.aboutUs.fields.author_seo') }}</label>
                    <input class="form-control {{ $errors->has('author_seo') ? 'is-invalid' : '' }}" type="text" name="author_seo" id="author_seo" value="{{ old('author_seo', $about_uss->author_seo) }}">
                    @if($errors->has('author_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.author_seo_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="sitemap_link_seo">{{ trans('cruds.aboutUs.fields.sitemap_link_seo') }}</label>
                    <input class="form-control {{ $errors->has('sitemap_link_seo') ? 'is-invalid' : '' }}" type="text" name="sitemap_link_seo" id="sitemap_link_seo" value="{{ old('sitemap_link_seo', $about_uss->sitemap_link_seo) }}">
                    @if($errors->has('sitemap_link_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sitemap_link_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.sitemap_link_seo_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="keywords_seo">{{ trans('cruds.aboutUs.fields.keywords_seo') }}</label>
                    <textarea class="form-control {{ $errors->has('keywords_seo') ? 'is-invalid' : '' }}" name="keywords_seo" id="keywords_seo">{{ old('keywords_seo', $about_uss->keywords_seo) }}</textarea>
                    @if($errors->has('keywords_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('keywords_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.keywords_seo_helper') }}</span>
                </div>
            </div>
            <div class="row justify-contnet-between">
                <div class="form-group col-4">
                    <label for="description_seo">{{ trans('cruds.aboutUs.fields.description_seo') }}</label>
                    <textarea class="form-control {{ $errors->has('description_seo') ? 'is-invalid' : '' }}" name="description_seo" id="description_seo">{{ old('description_seo', $about_uss->description_seo) }}</textarea>
                    @if($errors->has('description_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.description_seo_helper') }}</span>
                </div>
                <div class="form-group col-4">
                    <label for="gallery">{{ trans('cruds.aboutUs.fields.gallery') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('gallery') ? 'is-invalid' : '' }}" id="gallery-dropzone">
                    </div>
                    @if($errors->has('gallery'))
                        <div class="invalid-feedback">
                            {{ $errors->first('gallery') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.gallery_helper') }}</span>
                </div>
                <div class="form-group col-3">
                    <label for="aboutus_image">{{ trans('cruds.aboutUs.fields.aboutus_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('aboutus_image') ? 'is-invalid' : '' }}" id="aboutus_image-dropzone">
                    </div>
                    @if($errors->has('aboutus_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('aboutus_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutUs.fields.aboutus_image_helper') }}</span>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <button class="btn btn-danger col-4" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.aboutusImageDropzone = {
    url: '{{ route('admin.about-uss.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="aboutus_image"]').remove()
      $('form').append('<input type="hidden" name="aboutus_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="aboutus_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($about_uss) && $about_uss->aboutus_image)
      var file = {!! json_encode($about_uss->aboutus_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="aboutus_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    var uploadedGalleryMap = {}
Dropzone.options.galleryDropzone = {
    url: '{{ route('admin.about-uss.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
      uploadedGalleryMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedGalleryMap[file.name]
      }
      $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($about_uss) && $about_uss->gallery)
      var files = {!! json_encode($about_uss->gallery) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
@endsection