@extends('Backend.layouts.master')

@section('title')
	الاحصائيات
@endsection

@section('css')

@endsection


@section('content')
<br><br><br>
اهلا  وسهلا  سيد  {{ Auth::user()->title }}
<br><br><br><br><br>

<!-- row -->
	<div class="row row-sm">
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden sales-card bg-primary-gradient">
				<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
					<div class="">
						<h6 class="mb-3 tx-12 text-white">الرقم القياسي</h6>
					</div>
					<div class="pb-0 mt-0">
						<div class="d-flex">
							<div class="">
								<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $top->user->name }}</h4>
							</div>
							<span class="float-right my-auto mr-auto">
								<span class="text-white op-7">{{ $top->total }}</span>
							</span>
						</div>
					</div>
				</div>
				<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden sales-card bg-danger-gradient">
				<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
					<div class="">
						<h6 class="mb-3 tx-12 text-white">اعلى نتيجه مع سالب</h6>
					</div>
					<div class="pb-0 mt-0">
						<div class="d-flex">
							<div class="">
								<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $top1->user->name  }}</h4>
							</div>
							<span class="float-right my-auto mr-auto">
								<span class="text-white op-7">{{ $top1->points }}</span>
							</span>
						</div>
					</div>
				</div>
				<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden sales-card bg-success-gradient">
				<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
					<div class="">
						<h6 class="mb-3 tx-12 text-white">ادنى نتيجه</h6>
					</div>
					<div class="pb-0 mt-0">
						<div class="d-flex">
							<div class="">
								<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $low->user->name }}</h4>
							</div>
							<span class="float-right my-auto mr-auto">
								<span class="text-white op-7">{{ $low->total }}</span>
							</span>
						</div>
					</div>
				</div>
				<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
			</div>
		</div>
		
	</div>
<!-- row closed -->

@endsection


@section('js')

@endsection