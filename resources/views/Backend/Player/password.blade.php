<!-- Basic modal -->
<div class="modal" id="password{{ $player->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل كلمه السر</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('update') }}" method="Post" autocomplete="off">
                @csrf

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $player->id }}">
                    
                    <div class="col">
                        <label> كلمه السر الجديده:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <br>
    
                </div>

                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="submit">حفظ</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Basic modal -->