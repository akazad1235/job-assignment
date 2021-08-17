@extends('admin.components.app')
@section('content')
    <div class="w-100 content">
       <div class="welcome border-bottom">
           <h4>Search Member</h4>
       </div>
        <div class="member-list">
            <form method="POST" action="{{route('DataSearch')}}">
                @csrf
                <input type="date" name="form"> Form
                <input type="date" name="to">To
                <input type="text" name="keyword">keyword
                <button type="submit" class="btn btn-info">Search</button>

            </form>

        </div>

    </div>
@endsection
