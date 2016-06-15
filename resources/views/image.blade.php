@extends('templates/master')

@section('meta_additional')

@include('meta.opengraph', [
  'og_title' => 'MirrorSelfie',
  'og_description' => 'A messed up selfie on MirrorSelfie',
  'og_type' => 'article',
  'og_image' => route('metaimage', $image->id),
  'og_url' => Request::url(),
  'og_site' => 'MirrorSelfie',
])

@include('meta.twitter', [
  'tw_type' => 'photo',
  'tw_user' => 'slice_beans',
  'tw_creator' => 'slice_beans',
  'tw_title' => 'MirrorSelfie',
  'tw_description' => 'A messed up selfie on MirrorSelfie',
  'tw_image' => route('metaimage', $image->id),
])

@stop

@section('allcontent')
    <div class="container bs-docs-container">

      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <a href="{{ URL::previous() }}" class="btn btn-link">&lt; Back</a>
        </div>
      </div>

      <div class="row">
        
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <a href="{{ $image->link }}" target="_blank" class="thumbnail large">
            <span class="thumbnail-inner">
              <div class="half-image-left" style="background-image:url({{ $image->path }});"></div>
              <div class="half-image-right" style="background-image:url({{ $image->path }});"></div>
            </span>
          </a>
        </div>

        
      </div>

      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <a href="{{ Share::load('http://www.example.com', 'My example')->twitter() }}">Twitter</a>
        </div>
        </div>

    </div>


@endsection
