@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">My Orders</h1>
                    </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <tr class="bg-info">
                    <th>product Name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>total</th>
                    <th>date</th>
                    <th>More details</th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->product_name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <span class="float-right mr-2">
                            <a href={{ route('singleProduct', $order->id) }}" style="color: #00bcd4">
                                <i class="fa fa-eye"></i>
                            </a>
                        </span>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection
