@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Felhasználónév: {{ Auth::user()->name }} <br>
                        Utolsó belépés ideje: {{ Auth::user()->lastLogin }} <br>
                        Szerepkörök:
                        @foreach (DB::table('role_user')
                                ->where('user_id',Auth::user()->id)
                                ->join('roles','roles.id','=','role_user.role_id')
                                ->get()
                                as $role)
                            {{$role->description}}@if (!$loop->last), @endif
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
