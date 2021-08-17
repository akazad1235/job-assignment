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
                    <th scope="col">Active</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>azad</td>
                        <td>hsoen</td>
                        <td>azad@gmail.com</td>
                        <td>azad@gmail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>azad</td>
                        <td>hsoen</td>
                        <td>azad@gmail.com</td>
                        <td>azad@gmail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>azad</td>
                        <td>hsoen</td>
                        <td>azad@gmail.com</td>
                        <td>azad@gmail.com</td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
