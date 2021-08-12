@foreach ($metatags as $meta)
<meta name="{{ $meta->meta_name }}" content="{!! strip_tags($meta->meta_content) !!}" />
@endforeach
