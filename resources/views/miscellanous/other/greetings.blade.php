@section('morning')
    <div class="fw-bold">
        <div>
            Good Morning,
        </div>
        <div>
            {{ $user->name }}!
        </div>
    </div>
@endsection

@section('afternoon')
    <div class="fw-bold">
        <div>
            Good Afternoon,
        </div>
        <div>
            {{ $user->name }}!
        </div>
    </div>
@endsection

@section('evening')
    <div class="fw-bold">
        <div>
            Good Evening,
        </div>
        <div>
            {{ $user->name }}!
        </div>
    </div>
@endsection
