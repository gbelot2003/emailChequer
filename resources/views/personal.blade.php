@extends('layouts.app')

@section('content')

<form method="post" action="/sendEmail">
    @csrf
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="medium-12 cell">
            <label>Email
              <input type="email" name="email" placeholder="email">
            </label>
          </div>
        <div class="medium-12 cell">
          <label>Name
            <input type="text" name="name" placeholder="Name">
          </label>
        </div>
        <div class="medium-12 cell">
          <label>Body
            <textarea name="body" rows="5"></textarea>
          </label>
        </div>
        <div class="medium-12 cell">
            <button class="success button">Send</button>
        </div>
      </div>
    </div>
  </form>

  <table class="medium-12 cell">
    <thead>
        <th>Email</th>
        <th>eid</th>
        <th>Status</th>
        <th>Send</th>
        <th>Last Update</th>
    </thead>
    <tbody>
        @foreach ($data as $row)
          <tr>
              <td>{{ $row->email }}</td>
              <td>{{ $row->eid }}</td>
                  @if ($row->status == 0)
                      <td>
                          <div class="callout primary">
                              Unopen
                          </div>
                      </td>
                  @else
                      <td>
                          <div class="callout secundary">
                              opened
                          </div>

                      </td>
                  @endif
              <td>{{ $row->created_at->diffForHumans() }}</td>
              <td>{{ $row->updated_at->diffForHumans() }}</td>
          </tr>
        @endforeach
    </tbody>
</table>
@stop
