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
                    
                    <form method="POST" action="/songs">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Song Title</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="title" placeholder="Song title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Artist</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="artist" placeholder="Artist">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Lyrics</label>
                            <div class="col-md-6">
                                <textarea class="form-control" placeholder="Lyrics here.." name="lyrics"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-success btn-block">
                                    Add Song
                                </button>
                            </div>
                        </div>

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
