<a href="{{ route($page . '.edit', $d->id) }}"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0)"><i onclick="deletedata('{{ $d->id }}')" class="fa fa-trash"></i></a>
<form action="{{ route($page . '.destroy', $d->id) }}" method="post" id="delme-{{ $d->id }}">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>

<script>
    function deletedata(id) {
        if (confirm('Are you sure want to delete?')) {
            $('#delme-' + id).submit();
            console.log(id);
        }
        return false;
    }
</script>
