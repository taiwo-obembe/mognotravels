@extends('Layout.master');
@section('title')<title>Travels Guide | Dashboard </title>@endsection
    <!--*******************
        Preloader end
    ********************-->
    @section('content')

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card bg-primary">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M30.25 5.75H28.5V2.25C28.5 1.78587 28.3156 1.34075 27.9874 1.01256C27.6593 0.684374 27.2141 0.5 26.75 0.5C26.2859 0.5 25.8407 0.684374 25.5126 1.01256C25.1844 1.34075 25 1.78587 25 2.25V5.75H11V2.25C11 1.78587 10.8156 1.34075 10.4874 1.01256C10.1592 0.684374 9.71413 0.5 9.25 0.5C8.78587 0.5 8.34075 0.684374 8.01256 1.01256C7.68437 1.34075 7.5 1.78587 7.5 2.25V5.75H5.75C4.35761 5.75 3.02226 6.30312 2.03769 7.28769C1.05312 8.27226 0.5 9.60761 0.5 11V12.75H35.5V11C35.5 9.60761 34.9469 8.27226 33.9623 7.28769C32.9777 6.30312 31.6424 5.75 30.25 5.75Z" fill="white"/>
											<path d="M0.5 30.25C0.5 31.6424 1.05312 32.9777 2.03769 33.9623C3.02226 34.9469 4.35761 35.5 5.75 35.5H30.25C31.6424 35.5 32.9777 34.9469 33.9623 33.9623C34.9469 32.9777 35.5 31.6424 35.5 30.25V16.25H0.5V30.25Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Tours</p>
										<span class="fs-48 text-white font-w600">{{ $travels }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card bg-info">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<i class="fas fa-tags"></i>
									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Tags</p>
										<span class="fs-48 text-white font-w600">75</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card bg-success">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M15.1811 22.0083C15.065 21.9063 14.7968 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4868 0.0410156 21.001 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9384 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.554 24.0553 28.5232 24.3626C35.7277 26.641 40.9507 32.0853 41.8276 38.538C41.9483 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50672 41.9591 3.14818 41.9591C2.2787 41.9591 1.4518 41.5824 0.881242 40.9263C0.31068 40.2701 0.0523763 39.3989 0.172318 38.5437C1.05145 32.0851 6.27444 26.641 13.4777 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1811 22.0083Z" fill="white"/>
										</svg>

									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Profile Viewed</p>
										<span class="fs-48 text-white font-w600">45</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card bg-secondary">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M40.614 9.36994C40.443 8.22658 39.8679 7.18234 38.9932 6.4265C38.1184 5.67067 37.0018 5.25328 35.8457 5.25H6.1543C4.99822 5.25328 3.88159 5.67067 3.00681 6.4265C2.13203 7.18234 1.55701 8.22658 1.38599 9.36994L21 22.0618L40.614 9.36994Z" fill="white"/>
											<path d="M21.7127 24.7274C21.5003 24.8647 21.2529 24.9378 21 24.9378C20.7471 24.9378 20.4997 24.8647 20.2873 24.7274L1.3125 12.4503V31.9081C1.31389 33.1918 1.82445 34.4225 2.73217 35.3302C3.63988 36.238 4.87061 36.7485 6.15431 36.7499H35.8457C37.1294 36.7485 38.3601 36.238 39.2678 35.3302C40.1755 34.4225 40.6861 33.1918 40.6875 31.9081V12.449L21.7127 24.7274Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Unread Message</p>
										<span class="fs-48 text-white font-w600">93</span>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
            </div>
        </div>
    @endsection


