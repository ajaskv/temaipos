@if(!session('business.enable_price_tax')) 
  @php
    $default = 0;
    $class = 'hide';
  @endphp
@else
  @php
    $default = null;
    $class = '';
  @endphp
@endif
<div class="row">
	<div class="col-sm-12">
		
		<div class="box box-solid">
			<div class="box-header">
	            <h3 class="box-title">Stock Information :</h3>
	        </div>
			<div class="box-body">
				<div class="row">
                   
<div class="table-responsive">
    <table class="table table-condensed  add-product-price-table table-condensed {{$class}}">
        <tr>
          <th>Location</th>
          <th>Quantity Remaining</th>
          <th>Unit Cost (Before Tax)</th>
        
            <th>Subtotal (Before Tax)</th>
        
        </tr>
        <script> 
        var locations = []
        </script>
        @forelse($locations as $key => $value)	
        <tr>
          <td>
            <div class="col-sm-6">
                {{$value->name}} ({{$value->location_id}})
              {{-- {!! Form::label('single_dpp', trans('product.exc_of_tax') . ':*') !!}

              {!! Form::text('single_dpp', $default, ['class' => 'form-control input-sm dpp input_number', 'placeholder' => __('product.exc_of_tax'), 'required']); !!} --}}
            </div>

            <div class="col-sm-6">
             
            </div>
          </td>

          <td> 
            {!! Form::text('quantity_remaining-'.$value->id, $default, ['class' => 'form-control input-sm quantity_remaining input_number','id'=>"stock-quantity-".$value->id   ]); !!}
            {{-- {!! Form::text('profit_percent', @num_format($profit_percent), ['class' => 'form-control input-sm input_number', 'id' => 'profit_percent', 'required']); !!} --}}
          </td>

          <td id="stock-unit-price">
            <input type="text" class="form-control input-sm" name="stock-unit-price-{{$value->id}}" id="stock-unit-price-{{$value->id}}" disabled>
          </td>
         <td id="sub-total">
          <input type="text" class="form-control input-sm" name="stock-unit-subtotal-{{$value->id}}" id="stock-unit-subtotal-{{$value->id}}" disabled>
         </td>
        </tr>
        <script> 
           locations.push('{{$value->id}}')
          </script>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td>Total Amount :</td>
            <td> <input type="text" class="form-control input-sm" name="stock-total-amount" id="total-stock-amount" disabled></td>
            
        </tr>
    </table>

</div>



				</div>


			</div>
		</div> <!--box end-->
		
	</div>
</div>