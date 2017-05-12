@extends('admin.body')
@section('title', 'Категории продуции')
@section('centerbox')
    <div class="page-header">
        <h1>Категории продуции <small><i class="ace-icon fa fa-angle-double-right"></i> список категорий продуции  </small> </h1>
    </div>

    @include('admin.partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <a class="btn btn-success" href="{{ URL::to('admin/menucategories/create') }}">
                <i class="ace-icon fa fa-plus-square-o  bigger-120"></i>
                Создать
            </a>

            <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
            <div class="table-header"> список категорий продуции </div>

            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
                    </th>
                    <th align="center">ID</th>
                    <th align="center">Название</th>
                    <th align="center"><i class="ace-icon fa fa-eye-slash bigger-130"></i></th>
                    <th align="center"><i class="menu-icon fa fa-cogs"></i> </th>
                </tr>
                </thead>
                <tbody bgcolor="white">
                @foreach($data as $d)
                    @include('admin.menu.categories.row')
                @endforeach
                </tbody>
            </table>
        </div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
@endsection

@section('styles')
    {{HTML::style('ace/assets/css/dataTables.responsive.css')}}
@endsection

@section('scripts')

    @include('admin.partials.datatable-init')

    @include('admin.partials.visibility')

@append