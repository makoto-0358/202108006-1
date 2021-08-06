@extends('layouts.default')
<style>

</style>

@section('content')
@if(count($errors)>0)
<ul>
  @foreach($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<div class="create">
  <h2>Todo List</h2>
  <form action="todo/create" method="post">
  @csrf
    <input type="text" name="coontent">
    <input type="button" value="追加">
  </form>
<div>
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->created_at}}</td>
    <td>{{$item->content}}</td>
    <td><a href="">更新</a></td>
    <td><a href="">削除</a></td>
  </tr>
  @endforeach
</table>
</div>
@endsection