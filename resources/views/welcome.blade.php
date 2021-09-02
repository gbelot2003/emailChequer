@extends('layouts.app')

@section('content')

  @if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
   <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif

  <form method="post" enctype="multipart/form-data" action="{{ url('/import') }}">
   {{ csrf_field() }}
   <div class="form-group">
    <table class="table">
     <tr>
      <td width="40%" align="right"><label>Select File for Upload</label></td>
      <td width="30">
       <input type="file" name="select_file" />
      </td>
      <td width="30%" align="left">
       <input type="submit" name="upload" class="btn btn-primary" value="Upload">
      </td>
     </tr>
     <tr>
      <td width="40%" align="right"></td>
      <td width="30"><span class="text-muted">.xls, .xslx</span></td>
      <td width="30%" align="left"></td>
     </tr>
    </table>
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
