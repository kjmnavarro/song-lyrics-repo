@extends('layouts.app')

@section('title', 'Song Lyrics | Edit')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Edit Song Lyrics
                    <a href="/songs" class="btn btn-info">Back</a>
                </div>

                <div class="card-body">
                    @foreach($songs as $song)
                    <form method="POST" action="/songs/{{ $song->id }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Song Title</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="title" value="{{ $song->title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Artist</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="artist" value="{{ $song->artist }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Lyrics</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="lyrics">{{ $song->lyrics }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Update Song
                                </button>
                            </div>
                        </div>
                        @endforeach

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready( function () {
        $('#songtable').DataTable();
    } );
</script>
@endsection
