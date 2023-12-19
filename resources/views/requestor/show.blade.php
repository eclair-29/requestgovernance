@extends('layouts.app')

@section('content')
<div class="container py-3">
  <div class="row">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          Request details
        </div>
        <div class="card-body">
          <p>details for ID: {{ $requestId }}</p>
        </div>
      </div>
    </div>

    @recentlogs
    @slot('col')
    col-4
    @endslot
    Recent Logs
    @endrecentlogs
  </div>
</div>
@endsection