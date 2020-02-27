 @extends('layout')

 @section('content')
 <div class="container">
   <div class="card">
     <div class="card-header">
       <h3>Фермочка для овечек</h3>
       <h5 class="ml-5 day">День <span id="timers">X</span></h5>
     </div>
     <div class="d-flex ml-5 mt-3">
       <div class="col-6">
         <h4>Загон 1</h4>Количество: <span id="zagonText1">3</span>
       </div>
       <div class="col-6">
         <h4>Загон 2</h4>Количество: <span id="zagonText2">2</span>
       </div>
     </div>
     <div class="card-body d-flex">
       <div class="col-6 scrollspy">
         <p id="zagon1"></p>
       </div>
       <div class="col-6 scrollspy">
         <p id="zagon2"></p>
       </div>
     </div>
     <div class="d-flex ml-5">
       <div class="col-6">
         <h4>Загон 3</h4>Количество: <span id="zagonText3">2</span>
       </div>
       <div class="col-6">
         <h4>Загон 4</h4>Количество: <span id="zagonText4">3</span>
       </div>
     </div>
     <div class="card-body d-flex">
       <div class="col-6 scrollspy">
         <p id="zagon3"></p>
       </div>
       <div class="col-6 scrollspy">
         <p id="zagon4"></p>
         <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
       </div>
     </div>
     <div class="card-body mx-auto">
       <button type="button" class="btn btn-primary"><a href="/report">Получить отчет</a></button>
     </div>
   </div>
 </div>
 </div>
 </div>
 @endsection