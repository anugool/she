var app = angular.module("myApp", ['ngRoute']);

app.run(function ($location, $rootScope, $route) {

	$rootScope.$on('$locationChangeStart', function () {
		var nextPath = $location.path(),
			nextRoute = $route.routes[nextPath];
		//$log.info(nextRoute);
		if (nextRoute && nextRoute.auth && !sessionStorage.id) {
			$location.path("/");
		} /*else if (sessionStorage.id !== undefined && $location.path() == "/") {
			$location.path("/quiz");
		}*/ else if (sessionStorage.id !== undefined && $location.path() == "/quiz" && sessionStorage.status !== "no_package") {
			$location.path("/account");
		} else if (sessionStorage.id !== undefined && $location.path() == "/login") {
			$location.path("/quiz");
		} else if (sessionStorage.id !== undefined && $location.path() !== "/quiz" && sessionStorage.status == "no_package") {
			$location.path("/quiz");
		}

	});
});


app.controller("myCtrl", function ($scope, $timeout, $http, $window, $location) {

	$scope.province = ["กระบี่", "กรุงเทพมหานคร", "กาญจนบุรี", "กาฬสินธุ์", "กำแพงเพชร", "ขอนแก่น", "จันทบุรี", "ฉะเชิงเทรา", "ชลบุรี", "ชัยนาท", "ชัยภูมิ", "ชุมพร", "เชียงราย", "เชียงใหม่", "ตรัง", "ตราด", "ตาก", "นครนายก", "นครปฐม", "นครพนม", "นครราชสีมา", "นครศรีธรรมราช", "นครสวรรค์", "นนทบุรี", "นราธิวาส", "น่าน", "บุรีรัมย์", "ปทุมธานี", "ประจวบคีรีขันธ์", "ปราจีนบุรี", "ปัตตานี", "พะเยา", "พังงา", "พัทลุง", "พิจิตร", "พิษณุโลก", "เพชรบุรี", "เพชรบูรณ์", "แพร่", "ภูเก็ต", "มหาสารคาม", "มุกดาหาร", "แม่ฮ่องสอน", "ยโสธร", "ยะลา", "ร้อยเอ็ด", "ระนอง", "ระยอง", "ราชบุรี", "ลพบุรี", "ลำปาง", "ลำพูน", "เลย", "ศรีสะเกษ", "สกลนคร", "สงขลา", "สตูล", "สมุทรปราการ", "สมุทรสงคราม", "สมุทรสาคร", "สระแก้ว", "สระบุรี", "สิงห์บุรี", "สุโขทัย", "สุพรรณบุรี", "สุราษฎร์ธานี", "สุรินทร์", "หนองคาย", "หนองบัวลำภู", "อยุธยา", "อ่างทอง", "อำนาจเจริญ", "อุดรธานี", "อุตรดิตถ์", "อุทัยธานี", "อุบลราชธานี"];
	$scope.message = ""

	$scope.updateProfile = function () {
		$scope.dataquiz2 = []
		$scope.dataquiz2.push({
			cs_id: sessionStorage.id,
			firstName: $scope.get_detail_cus.cs_fname,
			lastName: $scope.get_detail_cus.cs_lname,
			age: $scope.get_detail_cus.cs_age,
			sex: $scope.sex.name,
			tel: $scope.get_detail_cus.cs_tel,
			houseno: $scope.get_detail_cus.cs_house_no,
			vaillageorbuilding: $scope.get_detail_cus.cs_buliding,
			alleyway: $scope.get_detail_cus.cs_soi,
			road: $scope.get_detail_cus.cs_road,
			subdistric: $scope.get_detail_cus.cs_sub_district,
			distric: $scope.get_detail_cus.cs_district,
			provinceTh: $scope.get_detail_cus.cs_province,
			postcode: $scope.get_detail_cus.cs_zipcode,
			budget: $scope.budget.name,
		});
		sessionStorage.setItem('fname', $scope.get_detail_cus.cs_fname);
		console.log($scope.dataquiz2)
		$http({
			method: "post",
			url: base_url + 'home/update_cs',
			data: $scope.dataquiz2,
		}).then(function (response) {
			if (response.data == "true") {
				$scope.fnamenav = sessionStorage.fname;
				swal({
					title: 'แก้ไขข้อมูลสำเร็จ',
					confirmButtonText: 'ตกลง'
				}).then((result) => {
					if (result.value) {
						$window.location.href = base_url;
					}
				})
			} else {
				swal({
					title: 'แก้ไขข้อมูลไม่สำเร็จ',
					type: 'warning',
					confirmButtonText: 'ตกลง'
				})
			}
		}, function (response) {
			console.error(response);
		});
	}

	$scope.checknavbar = function () {
		console.log(sessionStorage.id)
		console.log(sessionStorage.status)
		$scope.headerQuiz = true;
		$scope.headerAccount = true;

	}

	$scope.getProfile = function () {
		console.log(sessionStorage.id)
		$http({
			method: "post",
			data: sessionStorage.id,
			url: base_url + 'Managecustomer/fontdetailcustomer',
		}).then(function (response) {
			console.log("sssss", response.data.get_detail_cus.cs_gender)
			$scope.get_detail_cus = response.data.get_detail_cus
			$scope.get_skin_cus = response.data.get_skin_cus
			$scope.get_makeup_cus = response.data.get_makeup_cus
			$scope.sex = {
				name: response.data.get_detail_cus.cs_gender
			};

			$scope.budget = {
				name: response.data.get_detail_cus.cs_budget
			};
			console.log($scope.get_detail_cus)
			console.log($scope.get_skin_cus)
			console.log($scope.get_makeup_cus)
		}, function (response) {
			console.error(response);
		});

	}

	$scope.getPackage = function () {
		$scope.allPackage = []
		$http({
			method: "GET",
			url: base_url + 'Package/getall',
		}).then(function (response) {
			console.log(response.data)
			$scope.allPackage = response.data
		});
	}

	$scope.packageid = 0;
	$scope.packagename = "";
	$scope.packageprice = 0;
	$scope.packagevat = 0;
	$scope.totalprice = 0;
	$scope.codefree = "";
	$scope.discount = "ไม่ได้รับส่วนลด";

	$scope.CheckPackageFree = function (CodeFreeCheck) {
		$scope.code = []
		$scope.code.push({
			code: CodeFreeCheck,
		});
		console.log("66666", $scope.code)
		$http({
			method: "post",
			url: base_url + 'Promotioncode/submit_code',
			data: $scope.code,
		}).then(function (response) {
			console.log("asassa", response)
			if (response.data == "true") {
				$scope.totalprice = 0;
				$scope.discount = "ได้รับส่วนลด";
				$scope.codefree = CodeFreeCheck;
				swal({
					type: 'success',
					title: 'คุณได้รับส่วนลดแล้ว',
				})
			} else {
				swal({
					title: 'รหัสคูปองส่วนลดไม่ถูกต้อง',
					type: 'error',
					confirmButtonText: 'ตกลง'
				})
			}
		}, function (response) {
			console.error("error", response);
		});
	}

	$scope.totalprice = 0
	$scope.CheckPackage = function (event, package_name, package_price, package_des) {
		$scope.packageid = event.target.value;
		$scope.packagename = package_name;
		$scope.packageprice = package_price;
		$scope.packagevat = Math.ceil(package_price * 0.07);
		$scope.totalprice = parseInt(package_price, 10) + parseInt($scope.packagevat, 10)
	}

	$scope.Payment = "โอนเงินผ่านธนาคาร"
	$scope.today = new Date();
	$scope.addpackageCS = function (Payment) {
		$scope.datapackage = []
		$scope.datapackage.push({
			cs_id: sessionStorage.id,
			package_id: $scope.packageid,
			firstName: $scope.get_detail_cus.cs_fname,
			lastName: $scope.get_detail_cus.cs_lname,
			email: $scope.get_detail_cus.cs_email,
			houseno: $scope.get_detail_cus.cs_house_no,
			vaillageorbuilding: $scope.get_detail_cus.cs_buliding,
			alleyway: $scope.get_detail_cus.cs_soi,
			road: $scope.get_detail_cus.cs_road,
			subdistric: $scope.get_detail_cus.cs_sub_district,
			distric: $scope.get_detail_cus.cs_district,
			provinceTh: $scope.get_detail_cus.cs_province,
			postcode: $scope.get_detail_cus.cs_zipcode,
			payment: Payment,
			totalprice: $scope.totalprice,
			codefree: $scope.codefree
		})
		console.log($scope.datapackage)
		if ($scope.discount == "ได้รับส่วนลด") {
			$http({
				method: "post",
				url: base_url + 'order/insert_free',
				data: $scope.datapackage,
			}).then(function (response) {
				console.log(response.data)
			});
		} else if ($scope.discount == "ไม่ได้รับส่วนลด") {
			console.log("ไม่ได้รับส่วนลด")
			$http({
				method: "post",
				url: base_url + 'order/insert_nofree',
				data: $scope.datapackage,
			}).then(function (response) {
				console.log(response.data)
			});
		}

	}

	$scope.View1 = true;

	$scope.loginview = function () {
		console.log("loginview")
		console.log("viewregister")
		$location.path("/login");
		$scope.View1 = true
		$scope.View3 = false
	}

	$scope.viewregister = function () {
		console.log("viewregister")
		$location.path("/login");
		$scope.View3 = true
		$scope.View1 = false
	}

	$scope.checkmunu = function () {
		if ($location.path() == "/" && sessionStorage.id == undefined && $location.url() !== "/#slider") {
			swal({
				imageUrl: 'app-assets/images/Asset.png',
				imageAlt: 'Custom image',
				customClass: 'swal-wide',
				confirmButtonColor: '#fdc50c',
				confirmButtonText: 'สมัครสมาชิก',
				animation: true,
				showCloseButton: true,
			}).then((result) => {
				if (result.value) {
					$window.location.href = base_url + '#!/login';
				}
			})
		}
		//console.log(sessionStorage.id)
		if (sessionStorage.id == undefined) {
			$scope.loginmenu = false
			$scope.logoutmenu = true
		} else {
			$scope.loginmenu = true
			$scope.logoutmenu = false
		}
	}

	$scope.orderaccount = function () {
		console.log(sessionStorage.id)
		$http({
			method: "post",
			url: base_url + 'Myaccount/getaccountorder',
			data: sessionStorage.id,
		}).then(function (response) {
			console.log("Get order account", response.data)
			$scope.order_fullname = response.data[0].cs_fname + " " + response.data[0].cs_lname
			$scope.order_tel = response.data[0].cs_tel
			$scope.order_no = response.data[0].order_no
			$scope.order_id = response.data[0].order_id
		});
	}

	$scope.confirm_payment = function (order_fullname, order_tel, order_no, order_pay, order_date, order_time, imagename) {
		$scope.data_confirm = []
		$scope.data_confirm.push({
			cs_id: sessionStorage.id,
			order_id: $scope.order_id,
			order_fullname: order_fullname,
			order_tel: order_tel,
			order_no: order_no,
			order_pay: order_pay,
			order_date: order_date,
			order_time: order_time,
			order_image: imagename,
			bank_id: "1",
		})
		console.log($scope.data_confirm)
		$http({
			method: "post",
			url: base_url + 'payment/insert_payment',
			data: $scope.data_confirm
		}).then(function (response) {
			console.log(response.data)
			swal({
				title: 'ขอบคุณสำหรับการชำระเงิน รอตรวจสอบข้อมูลใน Email ของท่าน',
				confirmButtonText: 'ตกลง'
			})
		});
	}

	$scope.uploadFile = function (order_fullname, order_tel, order_no, order_pay, order_date, order_time, files) {
		var form_data = new FormData();
		angular.forEach(files, function (file) {
			form_data.append('file', file);
		});
		console.log("6666", form_data)
		$http.post(base_url + 'payment/uploads_slips',
			form_data,
			{
				transformRequest: angular.identity,
				headers: { 'Content-Type': undefined, 'Process-Data': false }
			}).then(function (response) {
				console.log(response.data.slips);
				if (response.data == false) {
					console.log("error")
				} else {
					imagename = response.data.slips
					$scope.confirm_payment(order_fullname, order_tel, order_no, order_pay, order_date, order_time, imagename)
				}

			});
	}

});

app.directive("fileInput", function ($parse) {
	return {
		link: function ($scope, element, attrs) {
			element.on("change", function (event) {
				var files = event.target.files;
				//console.log(files[0].name);
				$parse(attrs.fileInput).assign($scope, element[0].files);
				$scope.$apply();
			});
		}
	}
});
