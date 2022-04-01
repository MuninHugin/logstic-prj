@extends('admin.layouts.layout', ['title' => $title])

@section('content')

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <vars-table :vars="{{json_encode($varsarr)}}"></vars-table>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
