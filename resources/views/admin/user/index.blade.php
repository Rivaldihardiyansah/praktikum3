@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="d-flex ml-3">
                        <a href="add_user" class="btn btn-primary">Create Post</a>
                    </div>

                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Left</button>
                    <button type="button" class="btn btn-secondary">Middle</button>
                    <button type="button" class="btn btn-secondary">Right</button>
                  </div>
                    </div>
                </div>
                </div>
                </div>


                <div class="card-body">
                  <div class="table-responsive">
                        <table class="table">
                            <thead class="text-black">
                                <th scope="col">No </th>
                                <th scope="col">Nik </th>
                                <th scope="col">Nama Lengkap </th>
                                <th scope="col">Gender </th>
                                <th scope="col">addres</th>
                                <th scope="col">phone</th>
                                <th scope="col">Photo</th>
                                <th scope="col">email</th>
                                <th scope="col">Aksi</th>


                            </thead>
                            <tbody>
                                <?php $i = 0;?>

                                @foreach ( $users as $u)

                                <?php $i++ ;?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td> {{ $u->nik }} </td>
                                    <td> {{ $u->name }} </td>
                                    <td> {{ $u->gender }} </td>
                                    <td >{{ $u->addres }}</td>
                                    <td >{{ $u->phone }}</td>
                                    <td><img src="{{ $u->photo }}" style="max-height: 50px" alt="" class="img-thumbnail"></td>
                                    <td >{{ $u->email }}</td>
                                    <td><form method="POST" action="{{ route('destroy-siswa',$u->id) }}">

                                    <td>
                                    <form method="" action="">
                            <a button type="button" class="btn btn-primary" href="{{ route('show-user',$u->id) }}">Read</button></a>
                                <a button type="button" class="btn btn-warning" href="{{ route('edit_user',$u->id) }}">Edit</button></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>


                            </form>
                                    </td>
                                </tr>

                            </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
