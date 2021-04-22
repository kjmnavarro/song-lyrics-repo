@extends('layouts.app')

@section('title', 'Song Lyrics | Home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Welcome {{ ucfirst(Auth::user()->username) }} -- <small>View all your songs here.</small>
                    <div class="text-right">
                        <a href="/songs/create" class="btn btn-success btn-sm">Add Song Lyrics</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="songtable" class="display" style="width: 100%;">
                       
                        <thead>
                            <tr>
                                <th>Song Title</th>
                                <th>Artist</th>
                                <th>Lyrics</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($songs as $song)
                            <tr>
                                <td>{{ $song->title }}</td>
                                <td>{{ $song->artist }}</td>
                                <td>{{ $song->lyrics }}</td>
                                <td>
                                    <a href="/songs/{{ $song->id }}" class="btn btn-primary btn-block">View</a>
                                    <a href="/songs/{{ $song->id }}/edit" class="btn btn-warning btn-block">Edit</a>
                                    <form method="POST" action="/songs/{{ $song->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

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
