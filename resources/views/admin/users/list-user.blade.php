@extends('admin.body')
@section('title', $title)
@section('centerbox')
    <div class="page-header">
        <h1> {{ $title }} <small><i class="ace-icon fa fa-angle-double-right"></i> {{ $desc }} </small> </h1>
    </div>

    @include('admin.partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <a class="btn btn-success @if(isset($modalbox) && $modalbox) modalbox @endif" href="{{ URL::to('admin/users/create') }}">
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
                    <th align="center">ID</th>
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
                        <?php $i = 0; ?>
                        @foreach($fields as $key => $field)
                            <?php $i++; ?>
                            @if($i == 1)
                                <td align="left">
                                    <a title="Редактирование" href="{{ URL::to('admin/users/'.$d->id.'/edit') }}"
                                       class="@if(isset($modalbox) && $modalbox) modalbox @endif">{{ $d->$key }}</a>
                                </td>
                                @continue
                            @endif
                            <td align="center">
                                {{ $d->$key }}
                            </td>
                        @endforeach
                        <td align="center">
                            <div class="action-buttons">
                                <a href="javascript:void(0);" class="{{ $d->enabled ? 'visible' : 'unvisible' }}" data-id="{{ $d->id }}" data-model="{{ $model }}">
                                    <i class="ace-icon fa fa-eye bigger-130"></i>
                                </a>
                            </div>
                        </td>
                        <td align="center">
                            <div class="action-buttons">
                                <a href="{{ URL::to('admin/'.$model.'/'.$d->id.'/edit') }}" class="yellow @if(isset($modalbox) && $modalbox) modalbox @endif"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
                                {{ Form::open(array('url' => 'admin/' . $model . '/' . $d->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::button('<i class="ace-icon fa fa-trash-o bigger-130"></i>', ['type' => 'submit', 'class' => 'red deletebutton']) }}
                                {{ Form::close() }}
                            </div>
                        </td>
                    </tr>
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