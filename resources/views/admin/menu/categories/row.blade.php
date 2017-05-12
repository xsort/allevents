<tr class="">
    <td class="center">
        <label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
    </td>
    <td align="right">
        {{ $d->id }}
    </td>
    <td align="left">
        <a title="Редактирование" href="{{ URL::to('admin/menucategories/'.$d->id.'/edit') }}">
            @if($d->parent_id != 0) ------ @endif
            {{ $d->name }}
        </a>
    </td>
    <td align="center">
        <div class="action-buttons">
            <a href="javascript:void(0);" class="{{ $d->enabled ? 'visible' : 'unvisible' }}" data-id="{{ $d->id }}" data-model="menucategories">
                <i class="ace-icon fa fa-eye bigger-130"></i>
            </a>
        </div>
    </td>
    <td align="center">
        <div class="action-buttons">
            <a href="{{ URL::to('admin/menucategories/'.$d->id.'/edit') }}" class="yellow"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
            {{ Form::open(array('url' => 'admin/menucategories/' . $d->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::button('<i class="ace-icon fa fa-trash-o bigger-130"></i>', ['type' => 'submit', 'class' => 'red deletebutton']) }}
            {{ Form::close() }}
        </div>
    </td>
</tr>

@foreach($d->children as $child)
    @include('admin.menu.categories.row', ['d' => $child])
@endforeach