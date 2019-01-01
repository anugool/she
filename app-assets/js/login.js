app.controller("login", function ($scope, $timeout, $http, $window, $location) {

    window.fbAsyncInit = function () {
        FB.init({
            appId: '207690346832934',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v3.2'
        });
    };


    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) { return; }
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $scope.loginFB = function () {
        FB.login(function (response) {
            if (response.authResponse) {
                FB.api('/me', { fields: 'first_name,last_name,email' }, function (response) {
                    console.log('Good to see you, ' + response.email);
                    console.log("FBemail", response.email)
                    $scope.saveFacebook(response.email)
                    var accessToken = FB.getAuthResponse();
                    console.log(accessToken)
                });
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        }, {
                scope: 'email',
                return_scopes: true
            });
    }

    $scope.saveFacebook = function (email) {
        console.log("check data form loginFB", email)

        $scope.userFacebook = []
        $scope.userFacebook.push({
            cs_email: email
        });

        $http({
            method: "post",
            data: $scope.userFacebook,
            url: base_url + 'home/registerFacebook',
        }).then(function (response) {
            console.log(response.data)
            if (response.data[0].cs_id !== undefined) {
                sessionStorage.setItem('id', response.data[0].cs_id);
                sessionStorage.setItem('status', response.data[0].cs_status);
                sessionStorage.setItem('fname', response.data[0].cs_fname);
                console.log(sessionStorage.id)
                console.log(sessionStorage.status)
                console.log(sessionStorage.fname)
                $scope.logoutView = true;
                if (sessionStorage.status == "no_package") {
                    $scope.fnamenav = "sessionStorage.fname";
                    $location.path('/quiz')
                } else {
                    $scope.fnamenav = sessionStorage.fname;
                    $location.path('/account')
                }
            }
        }, function (response) {
            console.error(response);
        });

    }
    $scope.fnamenav = sessionStorage.fname;

    $scope.loginuser = function (email, password) {
        console.log(email, password)
        $scope.dataloginuser = []
        $scope.dataloginuser.push({
            email: email,
            password: password
        });
        $http({
            method: "post",
            url: base_url + 'Checklogin/check_login',
            data: $scope.dataloginuser,
        }).then(function (response) {
            console.log(response.data)
            if (response.data[0].cs_id !== undefined) {
                sessionStorage.setItem('id', response.data[0].cs_id);
                sessionStorage.setItem('status', response.data[0].cs_status);
                sessionStorage.setItem('fname', response.data[0].cs_fname);
                $scope.logoutView = true;
                if (sessionStorage.status == "no_package") {
                    $scope.fnamenav = sessionStorage.fname;
                    $location.path('/quiz')
                    $scope.checknavbar()
                } else {
                    $scope.fnamenav = sessionStorage.fname;
                    $location.path('/account')
                    $scope.checknavbar()
                }
            } else {
                console.log(response.data);
                swal({
                    title: 'อีเมลหรือรหัสผ่านไม่ถูกต้อง',
                    type: 'error',
                    confirmButtonText: 'ตกลง'
                })
            }
        }, function (response) {
            console.error(response);
        });
    }

    $scope.logout = function () {
        //console.log(sessionStorage.id)
        sessionStorage.clear();
        $window.location.href = base_url;
    }

    $scope.checkregister = function (email, password, repassword) {
        if (email == undefined || password == undefined || repassword == undefined) {
            swal({
                title: 'กรุณากรอกข้อมูลให้ถูกต้อง',
                type: 'warning',
                confirmButtonText: 'ตกลง'
            })
        } else {
            if (password !== repassword) {
                swal({
                    title: 'กรุณากรอกรหัสผ่านให้ตรงกัน',
                    type: 'warning',
                    confirmButtonText: 'ตกลง'
                })
            } else {
                if (password.length <= 5) {
                    swal({
                        title: 'รหัสผ่านต้องมากกว่าหรือเท่ากับ 6 ตัว',
                        type: 'warning',
                        confirmButtonText: 'ตกลง'
                    })
                } else {
                    $scope.register(email, password)
                }
            }
        }
    }

    $scope.register = function (email, password) {
        //console.log(email, password);
        swal({
            title: 'กรุณารอซักครู่',
            onOpen: () => {
                swal.showLoading()
            },
        })
        $scope.user = []
        $scope.user.push({
            email: email,
            password: password,
        });
        $http({
            method: "post",
            url: base_url + 'home/register',
            data: $scope.user,
        }).then(function (response) {
            console.log("email..............", response)
            if (response.data == "true") {

                swal({
                    title: 'สมัครสมาชิกเรียบร้อยแล้ว กรุณาไปเช็คที่ Email',
                    confirmButtonText: 'ตกลง'
                }).then((result) => {
                    if (result.value) {
                        $window.location.href = base_url;
                    }
                })
            } else {
                swal({
                    title: 'มี Email นี้อยู่ในระบบแล้ว',
                    type: 'warning',
                    confirmButtonText: 'ตกลง'
                })
            }
        }, function (response) {
            console.error(response);
        });
    }

    $scope.resetpassword = function (email) {
        if (email == undefined) {
            swal({
                title: 'กรุณากรอก Email',
                type: 'warning',
                confirmButtonText: 'ตกลง'
            })
        } else {
            console.log(email)
            $http({
                method: "post",
                url: base_url + 'Checklogin/reset_password',
                data: email,
            }).then(function (response) {
                console.log("data resetpassword", response)
                console.log("data resetpassword", response.data)
                if (response.data == "true") {
                    swal({
                        title: 'เราส่งรหัสใหม่ไปที่ Email ของคุณแล้ว',
                        confirmButtonText: 'ตกลง'
                    }).then((result) => {
                        if (result.value) {
                            $window.location.href = base_url;
                        }
                    })
                } else {
                    swal({
                        title: 'ไม่มีข้อมูลในระบบ',
                        type: 'warning',
                        confirmButtonText: 'ตกลง'
                    })
                }

            })
        }
    }

    $scope.changepassword = function (oldpassword, password, repassword) {
        //console.log(cs_email, password, repassword)
        if (password !== repassword || password == undefined || repassword == undefined) {
            swal({
                title: 'รหัสผ่านไม่ถูกต้อง',
                type: 'warning',
                confirmButtonText: 'ตกลง'
            })
        } else {
            $scope.datapassword = []
            $scope.datapassword.push({
                id: sessionStorage.id,
                password: password,
                oldpassword: oldpassword,
            });
            $http({
                method: "post",
                url: base_url + 'Checklogin/change_password',
                data: $scope.datapassword,
            }).then(function (response) {
                console.log("data changepassword", response.data)
                if (response.data == "true") {
                    swal({
                        title: 'เปลี่ยนรหัสผ่านเรียบร้อยแล้ว',
                        confirmButtonText: 'ตกลง'
                    }).then((result) => {
                        if (result.value) {
                            $window.location.href = base_url + '#!/account';
                        }
                    })
                } else {
                    swal({
                        title: 'ไม่สามารถเปลี่ยนรหัสผ่านได้',
                        type: 'warning',
                        confirmButtonText: 'ตกลง'
                    })
                }

            })
        }
    }
});
