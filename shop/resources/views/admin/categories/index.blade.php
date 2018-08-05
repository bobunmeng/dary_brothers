@extends('layouts.app')

@section('content')
    @include('vendor.modal.delete')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-table"></i> Bordered table</h3>
                    Add <i>.table-bordered</i> for borders on all sides of the table and cells.
                    <a href="{!! route('admin.categories.create') !!}">
                        New
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-xl table-bordered table-hover" data-toggle="dataTable"
                           data-form="deleteForm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $index => $category)
                            <tr>
                                <th scope="row">{!! $loop->iteration !!}</th>
                                <td>{!! $category->name !!}</td>
                                <td>{!! str_limit($category->description,50) !!}</td>
                                <td>{!! status($category->status) !!}</td>
                                <td>
                                    <div class='btn-group'>
                                        <a href="{!! route('admin.categories.edit', $category->id) !!}"
                                           class='btn btn-primary'
                                        >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        {!! Form::open(['route' => ['admin.categories.destroy', $category->id], 'method' => 'delete', 'class' => 'confirm']) !!}
                                        {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger confirm']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $categories->render() !!}
                </div>
            </div><!-- end card-->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
      $(document).ready(function () {
        $('button.confirm').on('click', function (e) {
          e.preventDefault();
          var self = $(this);
          swal({
            title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true
          })
            .then((willDelete) => {
              if (willDelete) {
                self.parents('.confirm').submit();
                return
              }
              swal('Your imaginary file is safe!');
            });
        });
      });
    </script>
@endsection
