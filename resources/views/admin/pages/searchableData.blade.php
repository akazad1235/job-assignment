@extends('admin.components.app')
@section('content')
    <div class="w-100 content">
        <div class="welcome border-bottom">
            <h4>welcome to our Dashboard</h4>
        </div>
        <div class="member-list">
            <table class="table table-bordered mb-5">
                <thead>
                <tr class="table-success">
                    <th scope="col">No</th>
                    <th scope="col">name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Fee</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=1
                @endphp
                @foreach($data as $item)
                    <tr>
                        <th >{{$i++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>&#2547;{{$item->fee}}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <h4 class="float-right mr-3">Total:{{$fee}}Taka</h4>



        </div>


    </div>

@endsection


