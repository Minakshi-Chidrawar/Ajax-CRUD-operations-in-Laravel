<div class="col-md-3 col-md-offset-1">
    <div class="table-responsive text-center">
        <table class="table table-borderless" id="table">
            @foreach($data as $item)
                <tr class="item{{$item->id}}">
                <!-- <td>{{$item->id}}</td> -->
                    <td>{{$item->name}}</td>
                    <td>
                        <button class="delete-modal btn btn-danger"
                                data-id="{{$item->id}}" data-name="{{$item->name}}">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>