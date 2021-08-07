<!-- Basic modal -->
<div class="modal" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">إضافه لاعب</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('Player.store') }}" method="Post" autocomplete="off">
                @csrf

                <div class="modal-body">

                    <div class="col">
                        <label>الإسم:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                        <label>اللقب:</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                        <label>البريد الالكتروني:</label>
                        <input type="email" name="email" class="form-control" autocomplete="off">
                    </div>
                    <br>

                    <div class="col">
                        <label>كلمه السر:</label>
                        <input type="password" name="password" class="form-control" autocomplete="off">
                    </div>
                    <br>

                    <div class="col">
                        <label>الصلاحيات:</label>
                        <select name="roles" class="form-control SlectBox">
                            <option value="" selected disabled>------</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
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