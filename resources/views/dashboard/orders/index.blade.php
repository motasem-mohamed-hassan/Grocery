@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Orders</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>user id</th>
                    <th>name</th>
                    <th>address</th>
                    <th>city</th>
                    <th>address type</th>
                    <th>phone</th>
                    <th>total</th>
                    <th>date</th>
                    <th>More details</th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->full_name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->city }}</td>
                    <td>{{ $order->address_type }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->created_at }}</td>
                    <form action="{{ route('admin.order.approved', $order->id) }}" method="POST">
                        @csrf

                        @if($order->status == null)
                            <td><button name="status" value="Approved" type="submit" class="btn btn-block btn-info">Approve</button></td>
                        @elseif($order->status == 'Approved')
                            <td><button name="status" value="On delivery" type="submit" class="btn btn-block btn-warning">On delivery</button></td>
                        @elseif($order->status == 'On delivery')
                            <td><button name="status" value="Deliveried" type="submit" class="btn btn-block btn-success">Deliveried</button></td>
                        @elseif($order->status == 'Deliveried')
                            <td><div class="bg-success color-palette"><span>Deliveried</span></div></td>
                        @endif
                    </form>
                </tr>
                @endforeach
            </table>
        </div>
    </section>




@endsection
