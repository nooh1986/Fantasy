<!-- Basic modal -->
<div class="modal" id="edit{{ $player->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل لاعب</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('Player.update' , 'test') }}" method="Post" autocomplete="off">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $player->id }}">

                    <div class="col">
                        <label>الإسم:</label>
                        <input type="text" name="name" value="{{ $player->name }}" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                        <label>اللقب:</label>
                        <input type="text" name="title" value="{{ $player->title }}" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                        <label>البريد الالكتروني:</label>
                        <input type="email" name="email" value="{{ $player->email }}" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                        <label>كلمه السر:</label>
                        <input type="password" name="password" value="{{ $player->name }}" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                        <label>الحاله:</label>
                        <select name="status" class="form-control">
                            <option value="1" {{$player->status == 1 ? 'selected':"" }}>مفعل</option>
                            <option value="0" {{$player->status == 0 ? 'selected':"" }}>غير مفعل</option>
                        </select>
                    </div>
                    <br>

                </div>

                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="submit">حفظ المعلومات</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Basic modal -->