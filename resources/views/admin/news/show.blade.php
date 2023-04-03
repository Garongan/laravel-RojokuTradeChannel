@extends('admin.layout.admin_main')
@section('content')
    <!-- single news container -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/admin/news" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.875 19.3l-6.6-6.6q-.15-.15-.213-.325T4 12q0-.2.063-.375t.212-.325l6.6-6.6q.275-.275.688-.287t.712.287q.3.275.313.688T12.3 6.1L7.4 11h11.175q.425 0 .713.288t.287.712q0 .425-.287.713t-.713.287H7.4l4.9 4.9q.275.275.288.7t-.288.7q-.275.3-.7.3t-.725-.3Z"/></svg>
                    Back to Produk List
                </a>
                <form action="/admin/news/{{ $news->slug }}/edit" method="get" class="d-inline">
                    @csrf
                    <button class="btn bg-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v4h-2V9h-5V4H6v16h6v2H6Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4.3 4.3H14v-3.175l4.3-4.3Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275t.7.275l1.775 1.775q.275.275.275.7t-.275.7l-1.45 1.45Z"/></svg>
                        Edit
                    </button>
                </form>
                <form action="/admin/news/{{ $news->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this news?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1l1.4 1.4ZM7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM7 6v13V6Z"/></svg>
                        Delete
                    </button>
                </form>
            </div>
            <div class="col-12 mt-5">
                <!-- berita -->
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('/storage/'.$news->image) }}" alt="{{ $news->role }}">
                    <h4 class="text-muted mb-3">{{ $news->role }} {{ $news->created_at->diffForHumans() }}</h4>
                    <h1 class="text-uppercase mb-4">
                        {{ $news->title }}
                    </h1>

                    <p style="white-space: pre-wrap;">{{ $news->desc }}</p>
                </div>
                <!-- Blog Detail End -->
                <!-- /berita -->
            </div>
        </div>
    </div>
</section>
<!-- /single news container -->
@endsection