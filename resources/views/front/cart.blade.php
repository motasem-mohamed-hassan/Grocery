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
					<span>3 Products</span>
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
                                <tr class="rem">
                                    <td class="invert">{{ $loop->iteration }}</td>
                                    <td class="invert-image">
                                        <a href="single2.html">
                                            <img src="{{ $row->attributes['image'] }}" alt=" " class="img-responsive">
                                        </a>
                                    </td>
                                    <td class="invert">{{ $row->name }}</td>
                                    <td class="invert">${{ $row->price }}</td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">&nbsp;</div>
                                                <div class="entry value">
                                                    <span>{{ $row->quantity }}</span>
                                                </div>
                                                <div class="entry value-plus active">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">${{ $row->getPriceSum() }}</td>
                                    <td class="invert">
                                        <form method="POST" action="{{ route('remove', $row->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-outline-danger" value="Remove">
                                        </form>
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
                                <th>{{ $total }}</th>
								<th></th>
							</tr>
                        </tfoot>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Add a new Details</h4>
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
