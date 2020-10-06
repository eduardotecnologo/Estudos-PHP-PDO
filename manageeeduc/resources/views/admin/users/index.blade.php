@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h3>Listagem de usuário</h3>
      {!!Button::success('Novo usuário')->asLinkTo(route('admin.users.create'))!!}
    </div>
    <div class="row">
      {!! Table::withContents($users->items())
        ->striped()
        ->callback('Ações', function($field,$model){
          $linkEdit = route('admin.users.edit',['user' => $model->id]);
          $linkShow = route('admin.users.show',['user' => $model->id]);
          return Button::link('Editar')->asLinkTo($linkEdit).'|'.Button::link('Ver')->asLinkTo($linkShow);
          // dd($model);
        })
      !!}
    </div>
    {{-- Paginação --}}
    {!! $users->links() !!}
  </div>
@endsection