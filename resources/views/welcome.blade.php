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
            <button>Send</button>
        </div>
      </div>
    </div>
  </form>
@stop
