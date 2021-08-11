<!--Horizontal-main -->
<div class="sticky">
    <div class="horizontal-main hor-menu clearfix side-header">
        <div class="horizontal-mainwrapper container clearfix">
            <!--Nav-->
            <nav class="horizontalMenu clearfix">
                <ul class="horizontalMenu-list">

                    @can('اللاعبين')
                        <li aria-haspopup="true"><a href="{{ route('Player.index') }}" class=""><i class="si si-people"> اللاعبين</i></a></li>
                    @endcan


                    @can('الصلاحيات')
                        <li aria-haspopup="true"><a href="{{ route('Role.index') }}" class=""><i class="si si-settings"> الصلاحيات</i></a></li>    
                    @endcan


                    @can('إضافه نتائج الفنتازيا')
                        <li aria-haspopup="true"><a href="{{ route('Result.index') }}" class=""><i class="si si-book-open"> تسجيل نتائج الفنتازيا</i></a></li>
                    @endcan
                   

                    @can('الاحصائيات')
                        <li aria-haspopup="true"><a href="{{ route('dashboard') }}" class=""><i class="si si-chart"> الإحصائيات</i></a></li>
                    @endcan


                    @can('نتائج المراحل ')
                        <li aria-haspopup="true"><a href="{{ route('Formula.index') }}" class=""><i class="si si-calendar"> نتائج مراحل الفورمولا </i></a></li>
                    @endcan

                    
                    @can('الترتيب العام')
                        <li aria-haspopup="true"><a href="{{ route('Ranking') }}" class=""><i class="si si-trophy"> الترتيب العام </i></a></li>
                    @endcan

                   <li aria-haspopup="true"><a href="{{ route('Formula.create') }}" class=""><i class="si si-list"> سجل الربعيات</i></a></li>
                    


                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
<!--Horizontal-main -->