 @extends('layout')

 @section('content')
 <div class="container">
   <a href="/" class="return">Назад</a>
   <div class="card">
     <div class="card-header text-center">
       <h2 class="mx-auto">Отчёт</h2>
     </div>
     <table class="table">
       <thead>
         <tr>
           <th scope="col">Общее количество овечек </th>
           <th scope="col">Количество убитых овечек</th>
           <th scope="col">Количество живых овечек</th>
           <th scope="col">Номер самого населённого загона</th>
           <th scope="col">Номер самого менее населённого загона</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>{{ $data['sum'] }}</td>
           <td>{{ $data['deleted'] }}</td>
           <td>{{ $data['added'] }}</td>
           <td>{{ $data['maxName'] }}</td>
           <td>{{ $data['minName'] }}</td>
         </tr>
       </tbody>
     </table>
   </div>
   <div class="mx-auto mt-5 text-center">
     <button type="button" class="btn btn-primary"><a href="/report">За весь период</a></button>
     <form action="{{ action('ReportController@quarter') }}" method="POST" class="form" role="form">
       <select name="filter_col1" id="form-control">
         @foreach ($data['days'] as $id)
         <option>{{$id}}</option>
         @endforeach
       </select>
       <select name="filter_col2" id="form-control">
         @foreach ($data['days'] as $id)
         <option>{{$id}}</option>
         @endforeach
       </select>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <button type="submit" class="btn btn-info d-flex mx-auto mt-3">За определенный период</button>
     </form>





   </div>
 </div>
 </div>
 </div>
 @endsection