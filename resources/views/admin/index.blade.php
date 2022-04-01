@extends('admin.layouts.layout', ['title' => $title])

@section('content')

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Requests</h3>
                </div>
                <div class="card-body">
                    <requests-table></requests-table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">Footer</div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
