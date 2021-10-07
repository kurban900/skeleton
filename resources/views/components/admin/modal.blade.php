<div class="modal fade" id="{{$id}}" tabindex="-1" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{!! $title !!}</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $body !!}
            </div>
            <div class="modal-footer d-flex">
                {!! $footer !!}
            </div>
        </div>
    </div>
</div>
