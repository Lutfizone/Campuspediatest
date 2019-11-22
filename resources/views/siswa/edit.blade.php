@extends('layouts.master')

@section('content')
            <h1> Edit Data Siswa </h1>
            @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
            @endif
        <div class="row">
            <div class="col-lg-12">
                <form action="/siswa/{{$siswa -> id}}/update" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name ="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama " value="{{$siswa-> nama}}">
                </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">No Hp</label>
                        <input name= "no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone" value="{{$siswa-> no_hp}}">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-Mail</label>
                    <input name = "email" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-Mail" value="{{$siswa-> email}}">
                </div>
                <button type="submit" class="btn btn-warning">Update</button>

                </form>
            </div>
            </div>
        </div>
         @endsection
         
          