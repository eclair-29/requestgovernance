@extends('layouts.app')

@section('content')
<div class="container py-3">
  <div class="row">
    <div class="col d-flex justify-content-end mb-3">
      <button class="btn btn-outline-success">Make Request</button>
    </div>
  </div>
  <div class="row">
    <div class="col-9">
      <div class="card">
        <div class="card-header">
          Pending requests for approval
        </div>
        <div class="card-body">
          @unless (count($requests) == 0)

          <table class="table table-bordered">
            <thead class="text-center">
              <tr>
                <th class="align-middle" scope="col">TICKET #</th>
                <th class="align-middle" scope="col">REQUESTOR</th>
                <th class="align-middle" scope="col">APPLICATION TYPE</th>
                <th class="align-middle" scope="col">REQUEST TYPE</th>
                <th class="align-middle" scope="col">CURRENT APPROVER</th>
                <th class="align-middle" scope="col">STATUS</th>
                <th class="align-middle" scope="col">LAST UPDATED DATE</th>
              </tr>
            </thead>
            @foreach ($requests as $request)
            <tbody>
              <tr>
                <td class="align-middle">
                  <a href="/requests/{{$request->id}}">
                    {{ $request->ticket_id }}
                  </a>
                </td>
                <td class="align-middle">{{ $request->user_id }}</td>
                <td class="align-middle">{{ $request->application_type_id }}</td>
                <td class="align-middle">{{ $request->request_type_id }}</td>
                <td class="align-middle">{{ $request->approver_id }}</td>
                <td class="align-middle">{{ $request->status_id }}</td>
                <td class="align-middle">{{ $request->updated_at }}</td>
              </tr>
            </tbody>
            @endforeach
          </table>

          @else
          <p>No requests found</p>
          @endunless
        </div>
      </div>
    </div>

    @recentlogs
    @slot('col')
    col-3
    @endslot
    Recent Logs
    @endrecentlogs
  </div>
</div>
@endsection