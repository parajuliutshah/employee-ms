@extends('dashboard.layout')
@section('main')
@push('styles')
    <link rel="stylesheet" href="{{asset('calender/css/style.css')}}">
@endpush

{{-- main section --}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Attendence</h2>
            </div>
        </div>
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @if (\Session::has('success'))
          <div class="alert alert-success">
              <ul>
                  <li>{!! \Session::get('success') !!}</li>
              </ul>
          </div>
         @endif

        <form action="{{route('attendence.store')}}" method="POST" >
          @csrf
            <div class="row g-3">
                <div class="col-sm-4">
                  <input type="date" name="date" value ="{{Carbon\Carbon::today()->format('Y-m-d')}}" class="form-control" placeholder="City" aria-label="City">
                </div>
                <div class="col-sm">
                  <input type="time" name="log_in_time" class="form-control" value="{{Carbon\Carbon::now()->format('H:i')}}" placeholder="State" aria-label="State">
                </div>
                <div class="col-sm">
                  <input type="time" name="log_out_time" class="form-control" value="{{Carbon\Carbon::now()->addHours(8)->format('H:i')}}" placeholder="Zip" aria-label="Zip">
                </div>
              <button class="btn btn-primary rounded" type="submit"> Submit</button>

              </div>
        </form>
        <br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Log In </th>
                <th scope="col">Log Out</th>
                <th scope="col">Total Time Worked</th>

              </tr>
            </thead>
            <tbody>
              @foreach($data as $attendence)
                <tr>
                  <td>{{$attendence['id']}}</td>
                  <td>{{$attendence['date']}}</td>
                  <td>{{\Carbon\Carbon::parse($attendence['log_in_time'])->format('g:i A')}}</td>
                  <td>{{\Carbon\Carbon::parse($attendence['log_out_time'])->format('g:i A')}}</td>
                  <td>{{\Carbon\Carbon::parse($attendence['log_in_time'])->diffInHours(\Carbon\Carbon::parse($attendence['log_out_time']))}} hrs</td>
                </tr>
              @endforeach
            </tbody>
          </table>

    </div>
</section>

@push('scripts')
<script src="{{asset('calender/js/jquery.min.js')}}"></script>
<script src="{{asset('calender/js/popper.js')}}"></script>
<script src="{{asset('calender/js/bootstrap.min.js')}}"></script>
<script src="{{asset('calender/js/main.js')}}"></script>

@endpush

@endsection

