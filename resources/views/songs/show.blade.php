@extends('layouts.app')

@section('title', 'Song Lyrics | Create')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Add Song Lyrics
                </div>

                <div class="card-body">                

                    @foreach($songs as $song)
                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Song Title</label>
                        <div class="col-md-6">
                            <div class="font-weight-bold">{{ $song->title }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Artist</label>
                        <div class="col-md-6">
                            <div class="font-weight-bold">{{ $song->artist }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Lyrics</label>
                        <div class="col-md-6">
                            <div class="font-weight-bold">{{ $song->lyrics }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="/songs" class="btn btn-info btn-block">Back</a>
                        </div>
                    </div>

                    @endforeach

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
