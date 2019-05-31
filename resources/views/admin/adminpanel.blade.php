@extends('layouts.admin')

@section('panel_content')
  <main role="main" class="col-12 px-4 bg-light">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Главная</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <form action="javascript:void(0)" class="d-none">
          @csrf
        </form>
      </div>
    </div>
  </main>
@endsection
