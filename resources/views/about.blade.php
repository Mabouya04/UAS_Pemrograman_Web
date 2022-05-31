@extends('layouts.main')

@section('container')
        
        
            <table class="table table-striped table-dark ">
                
                <tr>
                    <td colspan="3">
                        <h3 class="text-white p-2">Website ini dibuat oleh :</h3>
                    </td>
                </tr>
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
    
            <ul class="list-group" style="width: 40%">
                <li class="list-group-item bg-dark text-white">Web ini dibangun dengan:</li>
                <li class="list-group-item">Laravel</li>
                <li class="list-group-item">Bootstrap</li>
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">MySQL</li>
            </ul>
@endsection
    