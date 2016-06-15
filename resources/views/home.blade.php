@extends('templates.master')


@section('meta_additional')

@include('meta.opengraph', [
  'og_title' => 'MirrorSelfie',
  'og_description' => 'All the selfies, messsed up',
  'og_type' => 'article',
  'og_image' => asset('assets/images/facebook.png'),
  'og_url' => route('home'),
  'og_site' => 'MirrorSelfie',
])

@include('meta.twitter', [
  'tw_type' => 'summary',
  'tw_user' => 'slice_beans',
  'tw_creator' => 'slice_beans',
  'tw_title' => 'MirrorSelfie',
  'tw_description' => 'All the selfies, messsed up',
  'tw_image' => asset('assets/images/facebook.png'),
])

@stop

@section('allcontent')

<div class="container bs-docs-container">

    <div class="row">
        <div class="col-xs-12">
            <h1>Most Recent</h1>
        </div>
    </div>

    <div class="row">
    
    @foreach ($images as $image)
        <div class="col-xs-6 col-md-3">
            <a href="{{ action('PageController@showSingle', ['id' => $image->id]) }}" class="thumbnail cf">
                <span class="thumbnail-inner">
                    <div class="half-image-left" style="background-image:url({{ $image->path }});"></div>
                    <div class="half-image-right" style="background-image:url({{ $image->path }});"></div>
                </span>
            </a>
        </div>
    @endforeach

    </div>
    
    <div class="row">
        <div class="col-xs-12">
            {{ $images->links() }}
        </div>
    </div>

</div>

@endsection
