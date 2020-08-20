<?php  
 $connect = mysqli_connect("localhost", "root", "", "Neptune"); 
 
 if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

 $query ="SELECT type,category,recipient,amount, date  FROM Expenses";  
 $result = $connect->query($query); 

 ?>  
 <!DOCTYPE html>  
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Neptune | Report</title>
		<meta name="description" content="Multi column form examples" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- begin:: data table -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>-->
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
        <!-- end:: data table--> 
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="Neptune/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="Neptune/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="Neptune/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="Neptune/assets/media/logos/neptune-logo.png" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="Neptune/dashboard.php">
				<img alt="Logo" src="Neptune/assets/media/logos/neptune-logo.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
					<!--begin::Primary-->
					<div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
						<!--begin::Brand-->
						<div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
							<!--begin::Logo-->
							<a href="Neptune/dashboard.php">
								<img alt="Logo" src="Neptune/assets/media/logos/neptune-logo.png" class="max-h-35px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Brand-->
						<!--begin::Nav Wrapper-->
						<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">
							<!--begin::Nav-->
							<ul class="nav flex-column" role="tablist">
								<!--begin::Item-->
								<li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Dashboard">
									<a href="Neptune/dashboard.php" class="nav-link btn btn-icon btn-clean btn-lg " data-toggle="tab" data-target="#kt_aside_tab_1" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Insert">
									<a href="Neptune/insert.php" class="nav-link btn btn-icon btn-clean btn-lg">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
											<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg> -->
											<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAD/0lEQVRIie2US2xUVRjHf9+986BMB2ciDaUUFRR5JRUzdwIUiSCVUBNdaIyJb03EoAsDwcjCBNwYSDAaF8SwwaBBhcQFany00IhQQubemk7SoCsIldJQpowdOrczc+ccF3Rqmc4VQkx00f/uu9/jd77/ybkwrWn939R4onNZ44nOZX55x3E29/T0POCXN24XLKYcFlMO++WVUk1KqS7Hcdb+q2AEAUy0ln+oimutO2zbfnpq+ySl0+l4oVBI1JoQi8UWFw1j1t6RK62n3PyanFZxgBAytiQUTr8ejXc9GK4bHh4ePquUcg3DeFFr/cJ4e1lE3kgkEvtrglOp1DoR6aqGBoNBmpub2Tpwno6RbM3VYmaAr+65n6g7RiaT8XNgj2VZO+AWra6vryc95k5AGwJBPr17EUcXLuXh+lkAZMse+64MEo1GEfF1/x3btrffMjgYDPJ7IT8Rt8+Kk5xZz73hGeyce9fE99OjOQzDwDRNv1HHPc/bDxCoSlwA9lRXe563rFgoLgXuA0jnc9lRN/+baIgCz0Tj80taiymi8/l8v2mav3qe1wKsmTTmUF1d3SvLly8vQtUdV6u7u7uutbXVBZh3pvNO5cl5oB5AC98EDP3uH6va0rV6U6nULhHZOR5+kEgk3hYRXcn7Wu04znPhcHhrJb64si2jhVeB6yfWPF4uS2/jqWPdc7s7N/mM0cAOy7K2T4b6gm3bfktrfVApFZr8fbB1wxEMtQLha8ADEFiNlu+bTh07gN41Mc8wjCLwvGVZU65uClhrLbZt7wU+8jvUpdWPnr3UuuEpwzQWgLwPjIyv9nLj6bXbKnWFQuFDy7IO+Tjx9x339fWFXNc9ADw7kRTpDIVCqVgstuLj7NACrbUERPSbsYZzlZqT7rX4tqGBVQANZiD/3byFP2cyGcfzvGtVrC8sy7pQCQIAvb29kbGxsSNAe5UDbVrrtkgkwo8D5xjySgjw2pzmJfHA9QexMRIhlBmkqBQ5pWZGIpH2bDbb7nkeVbPOcP3VQMXOUqm0RWt9A7SiUqmEUoqVkSjjlrL78kVy5TKe1nw+fJmiUgAsCM8AoBpaSwEAy7L22rZtArurC7TW5HI5tsxu5HguS14pvv1zmB9GrmIARa3HNxC2zJ6D67qUy+Wbgm94x47jbNZa7wNMABH5TCl1MBwOR6LR6OIuN9/0SS7zWL9XWjS5r8E0Lz45846Ol6Kxs6Ojo/2u6w5Vg8LhsNPS0nK1JhgglUo9ISJfAnVa6/eSyeSu6pr5J39q8sT8BRHRIo8Mrl5//qYrVmnKk0kmk0eB9cAVv6b+hzYOAC5a528HWhMMYFnWGaXUOqDft9E0Nhmm4ffHmta0/jv9BXBdovo9Xz8fAAAAAElFTkSuQmCC">
											<!--end::Svg Icon-->
										</span>
									</a>
								</li>
								<!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Report">
                                    <a href="Neptune/report.php" class="nav-link btn btn-icon btn-clean btn-lg active">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAADIElEQVRIie2V32sTWRTHv+feSZOwLlZR0cy0IvRJwR+goEm6OEnA3cCqfVDBF5/ER/E/6D+giK/ii4IIPilu0W0m2W6TaVlX6T7ow65WqZmIYP1RkDSZmXt8Wqm2M5nUvOn3be499/uZe86ZOcC3JgraGKj+nlIkjzCwtaMJ80JyoX3+SbHY+ipwyh7fQ5BnmfiS5vU962SiZPsMM7Yn37dOdwNfJqNWujI0NhYHMxmT4wcN++76sPjUpPWrXqvs1mvW1aGxsXgUhlhpkVm4T4rFVsq2Tggk/qmnf37TycjJmDOAuNBcG78cBb4iGAA2VipriPFqbnj4bSeT1cADwTKBDST4dSSixHxq4t5AN/BAcDdqpPM2xeSuVLV8eKBW2qcUS2aeaPbHrwed0XoBBgAnXbgDZhqsVvtjAMCY9eEO9wbMTKlpKw8lfiCoIWbxnwC7dVeMwzQ9EPEc8Kkn9Fop8NOKnGrDtpO6XT7Vtyj/bmRyt1jRv41s7rb7wftTj/PJwcnJdd3cITJYoXnUceavPTfNd0vXXx069MFJ564qahV7DjZsSxc+zeL4cT8ohoimjenSTgBIVSob/u/yrwIzeE89a/4VFvMik3+qXNoKAJqm+TFKemHx0ZuLiL94JqNmjTLh0ZI3TABAW/PWauz9CA6cQRFrzLK+pWZ9NqUa2dxtZp6Qih476fzNpmjdA3MdAGK+24bgxTDLSGAnY84Q+MCy9Wyh4kNtGqyWdyS9vpHNif4qALQ04bstDk115K6WoPtGtbysc51soaKIc2Ax82DvXhcABMtkLCbWhPlFrvGLTP6pYVuLum0dA7gJxjwg1gMqKRT/Njecn43q1RUYAOrpvAPgJnhUGFP7++ut+ALMQmhKewL+JBpVdaDjjA5TYI1Fu+2zL1c1vfo8X3geBf5sQsGNn6YclmrbasC+xPaEL0NrvmKqSUADjSpMWXOGbY0wswRR8N9giZipTeCXz01z0aiVAku58garP/Rq+Zyz37wIoodRgF9Kt0tnWNH9oP3AWxi2NaIYvxCYg2KCxCACuNzIFG50e/a7eq6PKKlS0lHnvYkAAAAASUVORK5CYII=">
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                                <!--end::Item-->								
						</div>
						<!--end::Nav Wrapper-->
					</div>
					<!--end::Primary-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline mr-5">
										<!--begin::Page Title-->
										<h2 class="subheader-title font-weight-bold my-2 mr-3"  style="color: #1BC5BD;">Neptune</h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item">
												<a href="Neptune/dashboard.php" class="text-muted">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<a href="Neptune/report.php" class="text-muted">Report</a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
                        <div class="container">  
							<h3>Expenses and Incomes</h3>  
							<br />  
							<div class="table-responsive">  
								<table id="ex_en_data" class="table table-striped table-bordered">  
									<thead>  
										<tr>   
												<td>Amount</td>  
												<td>Type</td>  
												<td>Category </td>
												<td>Recipient</td>  
												<td>Date</td> 
										</tr>  
									</thead>  
									<?php  
									
									while($row = mysqli_fetch_array($result) ) 
									{  
										if ($result->num_rows > 0) {
											$amount = $row["amount"];
											$type = $row["type"];
											$category = $row["category"];
											$recipient = $row["recipient"];
											$date = $row["date"];
											if($type == 1){
												$typeName = "Expense";
											}else{
												$typeName = "Income";
											}
										}
										echo '  
										<tr>  
										
												<td>'.$amount.'</td>
												<td>'.$typeName.'</td>
												<td>'.$category.'</td> 
												<td>'.$recipient.'</td>
												<td>'.$date.'</td>
										</tr>  
										';  
									}
									?>  
								</table>  
							</div>  
						</div>  
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--doc: add "bg-white" class to have footer with solod background color-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Team Neptune</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="https://github.com/JawadAlSaeed/Neptune-Project" target="_blank" class="nav-link pr-3 pl-0">About</a>
								<a href="mailto:jawadalsaeed266@gmail.com" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>
<script>  
 $(document).ready(function(){  
      $('#ex_en_data').DataTable();  
 });  
 </script>