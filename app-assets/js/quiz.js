app.controller("quiz", function ($scope, $timeout, $http, $window, $location) {

    $scope.select1 = function () {
        if ($scope.selectView1 == undefined) {
            console.log("error");
            $scope.alert1 = true;
            $timeout(function () {
                $scope.alert1 = false;
            }, 3000);
        } else {
            console.log("ok");
            $scope.View1 = false;
            $scope.View2 = true;
        }
    };

    $scope.select2 = function () {
        if ($scope.selectView2 == undefined) {
            //console.log("error");
            $scope.alert1 = true;
            $timeout(function () {
                $scope.alert1 = false;
            }, 3000);
        } else {
            //console.log("ok");
            $scope.View2 = false;
            $scope.View3 = true;
        }
    };

    $scope.select3 = function () {
        if (
            $scope.selectView301 != "YES" &&
            $scope.selectView302 != "YES" &&
            $scope.selectView303 != "YES" &&
            $scope.selectView304 != "YES" &&
            $scope.selectView305 != "YES" &&
            $scope.selectView306 != "YES" &&
            $scope.selectView307 != "YES" &&
            $scope.selectView308 != "YES" &&
            $scope.selectView309 != "YES" &&
            $scope.selectView310 != "YES"
        ) {
            //console.log("error");
            $scope.alert1 = true;
            $timeout(function () {
                $scope.alert1 = false;
            }, 3000);
        } else {
            //console.log("ok");
            $scope.View3 = false;
            $scope.View4 = true;
        }
    };

    $scope.select4 = function () {
        if (
            $scope.selectView401 != "YES" &&
            $scope.selectView402 != "YES" &&
            $scope.selectView403 != "YES" &&
            $scope.selectView404 != "YES" &&
            $scope.selectView405 != "YES" &&
            $scope.selectView406 != "YES" &&
            $scope.selectView407 != "YES" &&
            $scope.selectView408 != "YES" &&
            $scope.selectView409 != "YES" &&
            $scope.selectView410 != "YES"
        ) {
            //console.log("error");
            $scope.alert1 = true;
            $timeout(function () {
                $scope.alert1 = false;
            }, 3000);
        } else {
            //console.log("ok");
            $scope.View4 = false;
            $scope.View5 = true;
        }
    };

    $scope.firstName = "";
    $scope.lastName = "";
    $scope.age = "";
    $scope.tel = "";
    $scope.houseno = "";
    $scope.vaillageorbuilding = "";
    $scope.alleyway = "";
    $scope.subdistric = "";
    $scope.distric = "";
    $scope.provinceTh = "";
    $scope.postcode = "";

    $scope.select5 = function () {
        if (
            $scope.firstName == "" ||
            $scope.lastName == "" ||
            $scope.age == "" ||
            $scope.sex == undefined ||
            $scope.tel == "" ||
            $scope.houseno == "" ||
            $scope.vaillageorbuilding == "" ||
            $scope.alleyway == "" ||
            $scope.subdistric == "" ||
            $scope.distric == "" ||
            $scope.provinceTh == "" ||
            $scope.postcode == "" ||
            $scope.budget == undefined ||
            ($scope.policy == undefined || $scope.policy == "NO")
        ) {
            //console.log("error");
            $scope.alert1 = true;
            $timeout(function () {
                $scope.alert1 = false;
            }, 3000);
        } else {
            //console.log("ok");
            $scope.addquiz()
        }
    };


    $scope.quiz03 = [];

    $scope.addquiz03 = function (n) {
        if (n == 1 && $scope.selectView301 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 1 && $scope.selectView301 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 2 && $scope.selectView302 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 2 && $scope.selectView302 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 3 && $scope.selectView303 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 3 && $scope.selectView303 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 4 && $scope.selectView304 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 4 && $scope.selectView304 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 5 && $scope.selectView305 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 5 && $scope.selectView305 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 6 && $scope.selectView306 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 6 && $scope.selectView306 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 7 && $scope.selectView307 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 7 && $scope.selectView307 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 8 && $scope.selectView308 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 8 && $scope.selectView308 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 9 && $scope.selectView309 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 9 && $scope.selectView309 == "NO") {
            $scope.removequiz03(n);
        }

        if (n == 10 && $scope.selectView310 == "YES") {
            $scope.quiz03.push({
                id: n
            });
        } else if (n == 10 && $scope.selectView310 == "NO") {
            $scope.removequiz03(n);
        }
        //console.log("quiz3", $scope.quiz03)
    };

    $scope.removequiz03 = function (n) {
        Olddata = $scope.quiz03;
        $scope.quiz03 = [];
        angular.forEach(Olddata, function (list) {
            if (list.id !== n) {
                $scope.quiz03.push(list);
            }
        });
    };

    $scope.quiz04 = [];

    $scope.addquiz04 = function (n) {
        if (n == 1 && $scope.selectView401 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 1 && $scope.selectView401 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 2 && $scope.selectView402 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 2 && $scope.selectView402 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 3 && $scope.selectView403 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 3 && $scope.selectView403 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 4 && $scope.selectView404 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 4 && $scope.selectView404 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 5 && $scope.selectView405 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 5 && $scope.selectView405 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 6 && $scope.selectView406 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 6 && $scope.selectView406 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 7 && $scope.selectView407 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 7 && $scope.selectView407 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 8 && $scope.selectView408 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 8 && $scope.selectView408 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 9 && $scope.selectView409 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 9 && $scope.selectView409 == "NO") {
            $scope.removequiz04(n);
        }

        if (n == 10 && $scope.selectView410 == "YES") {
            $scope.quiz04.push({
                id: n
            });
        } else if (n == 10 && $scope.selectView410 == "NO") {
            $scope.removequiz04(n);
        }
        //console.log("quiz4", $scope.quiz04)
    };

    $scope.removequiz04 = function (n) {
        Olddata = $scope.quiz04;
        $scope.quiz04 = [];
        angular.forEach(Olddata, function (list) {
            if (list.id !== n) {
                $scope.quiz04.push(list);
            }
        });
    };

    $scope.addquiz = function () {
        $scope.dataquiz = []
        $scope.dataquiz.push({
            cs_id: sessionStorage.id,
            quiz01: $scope.selectView1,
            quiz02: $scope.selectView2,
            quiz03: $scope.quiz03,
            quiz04: $scope.quiz04,
            firstName: $scope.firstName,
            lastName: $scope.lastName,
            age: $scope.age,
            sex: $scope.sex,
            tel: $scope.tel,
            houseno: $scope.houseno,
            vaillageorbuilding: $scope.vaillageorbuilding,
            alleyway: $scope.alleyway,
            road: $scope.road,
            subdistric: $scope.subdistric,
            distric: $scope.distric,
            provinceTh: $scope.provinceTh,
            postcode: $scope.postcode,
            budget: $scope.budget,
            policy: $scope.policy,
        });
        sessionStorage.setItem('fname', $scope.firstName);
        $http({
            method: "post",
            url: base_url + 'home/add_quiz',
            data: $scope.dataquiz,
        }).then(function (response) {
            if (response.data == "true") {
                sessionStorage.setItem('status', 'wait');
                console.log("55555", sessionStorage.status)
                $scope.fnamenav = sessionStorage.fname;
                swal({
                    title: 'บันทึกข้อมูลสำเร็จ',
                    confirmButtonText: 'ตกลง'
                }).then((result) => {
                    if (result.value) {
                        $window.location.href = base_url;
                    }
                })
            } else {
                swal({
                    title: 'บันทึกข้อมูลไม่สำเร็จ',
                    type: 'warning',
                    confirmButtonText: 'ตกลง'
                })
            }
        }, function (response) {
            console.error(response);
        });
        //console.log($scope.dataquiz);
    }
});