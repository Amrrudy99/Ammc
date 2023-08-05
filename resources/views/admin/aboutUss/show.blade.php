@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutUs.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutUs->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.site_name') }}
                        </th>
                        <td>
                            {{ $aboutUs->site_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.name') }}
                        </th>
                        <td>
                            {{ $aboutUs->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.president_description') }}
                        </th>
                        <td>
                            {{ $aboutUs->president_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.link') }}
                        </th>
                        <td>
                            {{ $aboutUs->link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.description') }}
                        </th>
                        <td>
                            {{ $aboutUs->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.aboutus_image') }}
                        </th>
                        <td>
                            @if($aboutUs->aboutus_image)
                                <a href="{{ $aboutUs->aboutus_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->aboutus_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.address') }}
                        </th>
                        <td>
                            {{ $aboutUs->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $aboutUs->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.email') }}
                        </th>
                        <td>
                            {{ $aboutUs->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.author_seo') }}
                        </th>
                        <td>
                            {{ $aboutUs->author_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.sitemap_link_seo') }}
                        </th>
                        <td>
                            {{ $aboutUs->sitemap_link_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.keywords_seo') }}
                        </th>
                        <td>
                            {{ $aboutUs->keywords_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.description_seo') }}
                        </th>
                        <td>
                            {{ $aboutUs->description_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.gallery') }}
                        </th>
                        <td>
                            @foreach($aboutUs->gallery as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.location') }}
                        </th>
                        <td>
                            {{ $aboutUs->location }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection