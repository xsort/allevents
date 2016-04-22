@extends('admin.body')
@section('title', $title)
@section('centerbox')

    <div class="page-header">
        <h1> {{ $title }} <small><i class="ace-icon fa fa-angle-double-right"></i> {{ $desc }} </small> </h1>
    </div>

    @include('admin.partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <a class="btn  btn-success" href="{{ URL::to('admin/' . $model . '/create') }}">
                <i class="ace-icon fa fa-plus-square-o  bigger-120"></i>
                Создать
            </a>

            @yield('listbuttons')

            <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
            <div class="table-header"> {{ $desc }} </div>

            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
                    </th>
                    @foreach($fields as $field)
                    <th align="center">{{ $field }}</th>
                    @endforeach
                    <th align="center"><i class="ace-icon fa fa-eye-slash bigger-130"></i></th>
                    <th align="center"><i class="menu-icon fa fa-cogs"></i> </th>
                </tr>
                </thead>
                <tbody bgcolor="white">
                @foreach($data as $d)
                    <tr class="">
                        <td class="center">
                            <label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
                        </td>
                        <td align="right">
                            {{ $d->id }}
                        </td>
                        <td align="left">
                            <a title="Редактирование" href="{{ URL::to('admin/'.$model.'/'.$d->id.'/edit') }}">{{ $d->name }}</a>
                        </td>
                        <td align="left">
                            /{{ $d->slug }}
                        </td>
                        <td align="center">
                            {{ $d->created_at }}
                        </td>
                        <td align="center">
                            <div class="action-buttons">
                                <a href="javascript:void(0);" class="{{ $d->enabled ? 'visible' : 'unvisible' }}" cid="{{ $d->id }}">
                                    @if($d->enabled)<span style="visibility:hidden">1</span>@else<span style="visibility:hidden">0</span>@endif<i class="ace-icon fa fa-eye bigger-130"></i>
                                </a>
                            </div>
                        </td>
                        <td align="center">
                            <div class="action-buttons">
                                <a href="{{ URL::to('admin/'.$model.'/'.$d->id.'/edit') }}" class="yellow">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>
                                <a href="javascript:void(0);" class="deleterecord red" cid="{{ $d->id }}">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
@endsection

@include('admin.partials.datatable-init')