@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Nova kategorija</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naziv:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>


                    <button type="submit" class="btn btn-primary-outline">Dodajte kategoriju</button>
                </form>
            </div>
        </div>
    </div>
@endsection
