@extends('layouts.master')

@section('content')
    	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4>Your shopping cart contains:
					<span>{{ $itemsCount }} Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
                                <th>Product</th>
                                <th>Product Name</th>
								<th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($items as $row)
                                <tr class="rem productRow{{ $row->id }}">
                                    <td class="invert">{{ $loop->iteration }}</td>
                                    <td class="invert-image">
                                        <a href="single2.html">
                                            <img src="{{ $row->attributes['image'] }}" style="width: 150px" class="img-responsive">
                                        </a>
                                    </td>
                                    <td class="invert">{{ $row->name }}</td>
                                    <td class="invert">${{ $row->price }}</td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus" product_id="{{ $row->id }}">&nbsp;</div>
                                                <div class="entry value">
                                                    <span>{{ $row->quantity }}</span>
                                                </div>
                                                <div class="entry value-plus" product_id="{{ $row->id }}">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="priceSum{{ $row->id }} invert">${{ $row->getPriceSum() }}</td>
                                    <td class="invert">
                                        <button class="deleteItemFromCart btn btn-outline-danger" product_id="{{ $row->id }}">Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
								<th>Total</th>
                                <th></th>
                                <th></th>
								<th></th>
                                <th></th>
                                <th id="total">{{ $total }}</th>
								<th></th>
							</tr>
                        </tfoot>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
                    <h4>Add a new Details</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<form action="{{ route('makeOrder') }}" method="POST" class="creditly-card-form agileinfo_form">
                        @csrf
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="full_name" placeholder="Full Name">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" name="phone" >
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Address" name="address" >
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Town/City" name="city">
									</div>
									<div class="controls">
										<select class="option-w3ls" name="address_type">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
                                </div>
                                    <button type="submit" class="submit check_out">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

@endsection


@section('scripts')
    	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
            var product_id = $(this).attr('product_id');
            var divUpd = $(this).parent().find('.value');

            $.ajax({
                type: "get",
                url: "{{ route('quantityPlus') }}",
                data: {'id' : product_id},

                success: function (response) {
                    if(response.status == true){
                        var newVal = parseInt(divUpd.text(), 10) + 1;
                        divUpd.text(newVal);

                        $("#total").text(response.total);
                        $(".priceSum"+response.id).text('$'+response.priceSum);

                    }

                }
            });

		});

		$('.value-minus').on('click', function () {
            var product_id = $(this).attr('product_id');
			var divUpd = $(this).parent().find('.value');

            $.ajax({
                type: "get",
                url: "{{ route('quantityMinus') }}",
                data: {'id' : product_id},

                success: function (response) {
                    if(response.status == true){
                        var	newVal = parseInt(divUpd.text(), 10) - 1;
			            if (newVal >= 1) divUpd.text(newVal);

                        $("#total").text(response.total);
                        $(".priceSum"+response.id).text('$'+response.priceSum);
                    }
                }
            });


		});


        $(document).on('click', '.deleteItemFromCart', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id');

            $.ajax({
                type: "delete",
                url: "{{ route('deleteItemFromCart') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id'    : product_id
                },

                success: function (response) {
                    if(response.status == true){
                        $('.productRow'+response.id).remove();
                        toastr.success(response.msg);

                        $("#total").text(response.total);
                    }

                }
            });

        })
	</script>
	<!--quantity-->
@endsection

