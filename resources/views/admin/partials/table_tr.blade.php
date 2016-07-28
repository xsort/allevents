<tr class="">

    <td class="center">
        <input name="{{ $table }}[]" value="{{ $id }}" type="hidden"/>
        {{ $id }}
    </td>

    <td>
        <a href="admin/{{ $table }}/{{ $id }}/edit" class="modalbox" title="Редактирование: {{ $name }}"> {{ $name }}</a>
    </td>

    <td class="hidden-480"><!-- доп. информация --></td>

    <td class="hidden-480 center">{{ $date }}</td>

    <td class="center">
        <div class="action-buttons">
            <a href="javascript:void(0);" class="{{ $enabled ? 'visible' : 'unvisible' }}" data-id="{{ $id }}" data-model="{{ $table }}">
                <i class="ace-icon fa fa-eye bigger-130"></i>
            </a>
        </div>
    </td>

    <td class="center">
        <div class="hidden-sm hidden-xs btn-group">

            <a href="admin/{{ $table }}/{{ $id }}/edit" class="btn btn-xs btn-info modalbox" title="Редактирование: {{ $name }}">
                <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>

            <a class="btn btn-xs btn-danger ajaxdelete" data-id="{{ $id }}" data-model="{{ $table }}">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </a>

        </div>

        <!--
        <div class="hidden-md hidden-lg">
            <div class="inline pos-rel">
                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                </button>

                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                    <li>
                        <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        -->
    </td>
</tr>