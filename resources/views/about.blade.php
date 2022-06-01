@extends('layouts.main')

@section('container')
        <h3 class="text-white">Website ini dibuat oleh :</h3>
            <table class="table tabel-stripped table-dark border">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                </tr>
                @foreach($data as $d)
                <tr>
                    @foreach($d as $key => $value)
                            <td>{{$value}}</td>    
                    @endforeach
                </tr>
                @endforeach
            </table>
    
        <div class="m-3">
            <ul class="list-group" style="width: 40%">
                <li class="list-group-item bg-dark text-white">Web ini dibangun dengan:</li>
                <li class="list-group-item">Laravel</li>
                <li class="list-group-item">Bootstrap</li>
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">MySQL</li>
            </ul>
        </div>
@endsection
    