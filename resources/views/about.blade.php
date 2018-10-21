@extends('layouts.app')
@section("styles")
  a.readMore:link{
  color:#FCB383;
}
a.readMore:hover{
  text-decoration:none;
  color:#F6721A ;
}
a h5:hover{
  color:white;
}
.mynews{
  background-color: #E8E5E3;
  padding:5px;
}
.mynews:hover{
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
}
@endsection
@section('content')
  <div class="container">

     <div class="">
         <div class="row">
             <div class="col-lg-4 col-sm-6 col-xs-12">
               <div class="border rounded mynews" style="">
                 <img src="images/saket.jpg" alt="Image"  class="img-fluid z-depth-4 rounded" width="100%" height="60px">
                 <h3>Saket Ozarkar</h3>
                 <p>D12A - 51</p>
               </div>
             </div>
             <div class="col-lg-4 col-sm-6 col-xs-12">
               <div class="border rounded mynews" style="">
                 <img src="images/seshadri.jpg" alt="Image"  class="img-fluid z-depth-4 rounded" width="100%">
                 <h3>Seshadri</h3>
                 <p>D12A - 67</p>
               </div>
             </div>
             <div class="col-lg-4 col-sm-6 col-xs-12">
               <div class="border rounded mynews" style="">
                 <img src="images/nitin.jpg" alt="Image"  class="img-fluid z-depth-4 rounded" width="100%">
                 <h3>Nitin Tejuja</h3>
                 <p>D12A - 70</p>
               </div>
             </div>
         </div>
         <br>


     </div>
   </div>

@endsection
