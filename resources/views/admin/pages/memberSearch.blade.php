@extends('admin.components.app')
@section('content')
    <div class="w-100 content">
       <div class="welcome border-bottom">
           <h4>Search Member</h4>
       </div>
        <div class="member-list">
            <form method="POST" action="{{route('DataSearch')}}">
                @csrf
                Form <input type="date" name="form">
                To <input type="date" name="to">
                keyword <input type="text" name="keyword" placeholder="search key name/email">
                <button type="submit" >Search</button>

            </form>

        </div>

    </div>
@endsection
