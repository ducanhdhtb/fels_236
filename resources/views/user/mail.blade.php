  <!DOCTYPE html>
  <html lang="en">
  <head>
   <meta charset="UTF-8">
   <title>Mail</title>
   <link rel="stylesheet" href="user_asset/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="user_asset/css/normalize.css"/>
   <script src="user_asset/js/jquery-2.2.2.js"></script>
   <script src="user_asset/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="user_asset/css/style.css" />
 </head>
 <body>
  <div class="row">
    <div class="container">
     <div class="col-md-9">
       <div class="table-responsive">
        <div class="col-md-12 text-center"><h2 style="color:pink;text-align:center">Order details</h2></div>
        <h4>Name:<span style="color:red">{{ $name }}</span> </h4>         
        <h4>Email: {{ $email }} </h4><br> 
        <h4>Telephone: {{ $phone }} </h4><br> 
        <h4>Address: <span style="color:red">{{ $address }}</span> </h4><br> 
        Avartar:
        <img style="width: 40px" src="uploads/avartar/{{ $avartar }}" alt="">        
        <h5>Date_order:<span style="color:red">{!! $date_order !!} </span></h5><br>         
        <table class="table" border="1px" border="collapse" style ="border-collapse: collapse;padding: 5px">
          <thead>
            <tr style="background: pink">
              <th width="100px" style="padding:10px">STT</th>
              <th width="100px" style="padding:10px">Image</th>
              <th width="100px" style="padding:10px">Order</th>  
              <th width="100px" style="padding:10px">Product</th>  
              <th width="100px" style="padding:10px">Quantity</th>  
              <th width="100px" style="padding:10px">Price</th>  
              <th width="100px" style="padding:10px">Total</th>  
            </tr>
          </thead>
          <tbody>
            @foreach($content as $item)
            <tr>
              <td  width="100px" style="padding:10px">1</td>
              <td><img width="40px" src="{{ $message->embed(public_path('uploads/products/images/'.$item->options->img)) }}"></td>
              <td width="100px" style="padding:10px">{{ $order_id }}</td>
              <td width="100px" style="padding:10px">{{ $item->name }}</td>
              <td width="100px" style="padding:10px">{{ $item->qty }}</td>
              <td width="100px" style="padding:10px">{{ $item->price }}</td>
              <td width="100px" style="padding:10px">{{ ($item->qty)*($item->price)." USD" }}</td>
            </tr>
            @endforeach
          </tbody>
          <tbody>
            <tr>
             <td colspan="6" align="center" width="70px" style="padding:10px">Total Money</td>
             <td width="100px" style="padding:10px"> $ {{ number_format($total)." USD" }} </td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>
</body>
</html>
