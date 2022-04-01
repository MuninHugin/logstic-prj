@extends('admin.layouts.layout', ['title' => $title])

@section('content')

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <freight-charges-table :vars="{{json_encode($varsarr)}}"></freight-charges-table>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
