<div class="row">
   <div class="col-md-8">
      <div class="card">
         <div class="card-header bg-white">
            <div class="row ">
               <div class="col-md-6"><h2 class="font-weight-bold">Products List</h2></div>
               <div class="col-md-6"><input wire:model="search" type="text" class="form-control" placeholder="Search Products..."></div>
            </div>
         </div>
         
         <div class="card-body">
            <div class="row">
               @forelse($products as $product)
                  <div class="col-md-3 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <img src="{{ asset('storage/images/'.$product->image) }}" alt="product" style="object-fit: contain;width:100%;height:125px">
                        </div>
                        <div class="card-footer bg-white" style="padding-bottom:5px">
                           <h6 class="text-center font-weight-bold">{{$product->name}}</h6>
                           <h6 class="text-center font-weight-bold" style="color:grey">Rp {{number_format($product->price,2,',','.')}}</h6>
                           <button wire:click="addItem({{$product->id}})" class="btn btn-primary btn-sm btn-block"><i class="fas fa-cart-plus fa-2x"></i></button>
                        </div>
                     </div>
                  </div>
               @empty
               <div class="col-sm-12 mt-5">
                  <h3 class="text-center font-weight-bold text-primary">No Products Found</h3>
               </div>
               @endforelse
            </div>
            <div style="display:flex;justify-content:center">
               {{$products->links()}}
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4">
      <div class="card">
         <div class="card-header bg-white">
         <h2 class="font-weight-bold">Cart</h2>
         </div>
         <div class="card-body">
<<<<<<< HEAD
               <h2 class="font-weight-bold">Cart</h2>
=======
>>>>>>> a61ab30... Commit kedua banyak
               <table class="table table-sm table-bordered table-hovered">
                  <thead>
                     <tr>
                        <th class="font-weight-bold">No</th>
                        <th class="font-weight-bold">Name</th>
                        <th class="font-weight-bold">Qty</th>
                        <th class="font-weight-bold">Price</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($carts as $index=>$cart)
                        <tr>
                           <td>{{$index + 1}}</td>
                           <td>{{$cart['name']}}</td>
                           <td>{{$cart['qty']}}
                           <a href="#" wire:click="increaseItem('{{$cart['rowId']}}')" class="font-weight-bold text-secondary" style="font-size:20px">+</a>
                           <a href="#" wire:click="decreaseItem('{{$cart['rowId']}}')" class="font-weight-bold text-secondary" style="font-size:20px">-</a>
                           <a href="#" wire:click="removeItem('{{$cart['rowId']}}')" class="font-weight-bold text-danger" style="font-size:20px">x</a>
                           </td>
                           <td>{{$cart['price']}}</td>
                           <td>
                              {{$index + 1}}
                              <br>
                              <i class="fa fa-trash" wire:click="removeItem('{{$cart['rowId']}}')" style="font-size:13px;cursor:pointer;color:red"></i>
                           </td>
                           <td>
                              {{$cart['name']}}
                              <br>
                              Rp {{number_format($cart['pricesingle'],2,',','.')}}
                           </td>
                           <td>
                              <button class="btn btn-primary btn-sm" style="padding:7px 10px" wire:click="increaseItem('{{$cart['rowId']}}')"><i class="fa fa-plus"></i></button>
                                 {{$cart['qty']}}
                              <button class="btn btn-info btn-sm" style="padding:7px 10px" wire:click="decreaseItem('{{$cart['rowId']}}')"><i class="fa fa-minus"></i></button>
                           </td>
                           <td>Rp {{number_format($cart['price'],2,',','.')}}</td>
                        </tr>
                     @empty
                        <td colspan="4"><h6 class="text-center">Empty Cart</h6></td>
                     @endforelse
                  </tbody>
               </table>
               <p class="text-danger font-weight-bold">
               @if(session()->has('error'))
                  {{session('error')}}
               @endif
               </p>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <h4 class="font-weight-bold">Cart Summary</h4>
               <h5 class="font-weight-bold">Sub Total: Rp {{number_format($summary['sub_total'],2,',','.')}}</h5>
               <h5 class="font-weight-bold">Tax: Rp {{number_format($summary['pajak'],2,',','.')}}</h5>
               <h5 class="font-weight-bold">Total: Rp {{number_format($summary['total'],2,',','.')}}</h5>
               <div class="row">
                  <div class="col-sm-6">
                     <button wire:click="enableTax" class="btn btn-info btn-block btn-sm">Add Tax</button>
                  </div>
                  <div class="col-sm-6">
                     <button wire:click="disableTax" class="btn btn-danger btn-block btn-sm">Remove Tax</button>
                  </div>
               </div>
               <div class="mt-4">
                  <button class="btn btn-primary btn-block">Save Transaction</button>
               </div>
            </div>
         </div>
      </div>
</div>
