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
                    <th scope="col">Fee</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Active</th>
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
                        <td>&#2547;{{$item->fee}}</td>
                        <td>{{$item->phone}}</td>
                        <td>Edit | delete</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
{{--            <nav aria-label="...">--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item disabled">--}}
{{--                        <a class="page-link" href="#" tabindex="-1">{{$data->perPage()}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">{{$data->items(1)}}</a></li>--}}
{{--                    <li class="page-item active">--}}
{{--                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#">{{$data->nextPageUrl()}}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            {{$data->links()}}--}}

        </div>


    </div>

@endsection


